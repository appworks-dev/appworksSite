<?php
/**
 * Server-side proxy for the mPanel CMS article listing.
 *
 * Why this exists: the Authorization token used to sit in client-side JavaScript
 * on /insights (articles.php, articles.html) and in js/insights-teaser.js, which
 * runs on the homepage and both hubs. It was therefore readable by anyone who
 * opened the page source. The token now lives in a file outside the web root and
 * is attached here, server side, so it never reaches a browser.
 *
 * This is a deliberately thin pass-through: it forwards a validated subset of
 * parameters and returns the upstream JSON unchanged, so the callers keep the
 * response shape they already parse - including their own hidden-category
 * filtering, which still runs client side exactly as before.
 *
 *   GET /api/articles.php?articleLimit=12&page=2
 *   GET /api/articles.php?category=9&articleLimit=8
 */

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'GET') {
    http_response_code(405);
    header('Allow: GET');
    echo json_encode(['success' => false, 'error' => 'Method not allowed']);
    exit;
}

// ---------------------------------------------------------------- the token ---
// Kept outside DocumentRoot. The env var exists so the file can be exercised
// from a scratch directory without a copy of the real token.
$tokenFile = getenv('APPWORKS_CMS_TOKEN_FILE') ?: '/var/www/private/appworksapp/cms-token';
$token = is_readable($tokenFile) ? trim((string) file_get_contents($tokenFile)) : '';

if ($token === '') {
    // Do not leak the path or the reason to the browser; the log is enough.
    error_log('api/articles.php: CMS token missing or unreadable at ' . $tokenFile);
    http_response_code(503);
    echo json_encode(['success' => false, 'error' => 'Upstream not configured']);
    exit;
}

// ------------------------------------------------------------- the arguments ---
// Everything is clamped rather than rejected, so a malformed query still returns
// a usable page instead of an error the callers have no branch for.
$limit = isset($_GET['articleLimit']) ? (int) $_GET['articleLimit'] : 12;
$limit = max(1, min(50, $limit));

$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$page = max(1, min(200, $page));

$query = 'articleLimit=' . $limit . '&page=' . $page;

// A single numeric category id, forwarded as the array form the API expects.
if (isset($_GET['category']) && $_GET['category'] !== '' && ctype_digit((string) $_GET['category'])) {
    $query = 'category[]=' . (int) $_GET['category'] . '&' . $query;
}

$upstream = 'https://appworks.mpanel.app/api/webV2/getArticles?' . $query;

// ------------------------------------------------------------------- caching ---
// The proxy is unauthenticated, as the listing itself is public. A short shared
// cache keeps a hot page or a crawler from turning into upstream traffic, and
// makes the "Load more" button feel instant on repeat views.
$ttl = 60;
$cacheFile = sys_get_temp_dir() . '/appworks-cms-' . sha1($query) . '.json';

if (is_readable($cacheFile) && (time() - (int) @filemtime($cacheFile)) < $ttl) {
    $cached = @file_get_contents($cacheFile);
    if ($cached !== false && $cached !== '') {
        header('X-Proxy-Cache: HIT');
        header('Cache-Control: public, max-age=' . $ttl);
        echo $cached;
        exit;
    }
}

// ------------------------------------------------------------------ the call ---
$context = stream_context_create([
    'http' => [
        'method'        => 'GET',
        'header'        => "Authorization: $token\r\nAccept: application/json\r\n",
        'timeout'       => 10,
        'ignore_errors' => true, // read the body on 4xx/5xx instead of returning false
    ],
]);

$response = @file_get_contents($upstream, false, $context);

$status = 200;
foreach ($http_response_header ?? [] as $h) {
    if (preg_match('#^HTTP/\S+\s+(\d{3})#', $h, $m)) {
        $status = (int) $m[1];
    }
}

if ($response === false || $status >= 400) {
    error_log("api/articles.php: upstream returned $status for $query");
    // Stale beats broken: if anything is cached, serve it rather than an error.
    if (is_readable($cacheFile)) {
        $stale = @file_get_contents($cacheFile);
        if ($stale !== false && $stale !== '') {
            header('X-Proxy-Cache: STALE');
            echo $stale;
            exit;
        }
    }
    http_response_code(502);
    echo json_encode(['success' => false, 'error' => 'Upstream unavailable']);
    exit;
}

// Only cache something that actually parsed as the shape callers expect.
$decoded = json_decode($response, true);
if (is_array($decoded) && !empty($decoded['success'])) {
    // Write via a temp file so a concurrent reader never sees a half-written cache.
    $tmp = $cacheFile . '.' . getmypid() . '.tmp';
    if (@file_put_contents($tmp, $response) !== false) {
        @rename($tmp, $cacheFile);
    } else {
        @unlink($tmp);
    }
}

header('X-Proxy-Cache: MISS');
header('Cache-Control: public, max-age=' . $ttl);
echo $response;
