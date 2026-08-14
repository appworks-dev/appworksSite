<?php
/**
 * Shared access to the mPanel CMS API for the server-rendered pages.
 *
 * Three files fetch from the CMS directly rather than through the
 * api/articles.php proxy, because they need endpoints the proxy does not
 * forward (getArticlesBySlug, getOneArticle) or run before any browser is
 * involved (sitemap.php, the /insights noscript block):
 *
 *   article.php   - single article by slug, and the ?id= -> slug lookup
 *   articles.php  - the noscript listing crawlers see
 *   sitemap.php   - the article URLs in the XML sitemap
 *
 * Each used to carry its own copy of the token as a string literal, and each
 * disabled TLS certificate verification. Both are fixed here in one place.
 */

/**
 * The CMS token, read from a file outside the web root.
 *
 * The path is one directory above DocumentRoot (which is
 * .../appworksapp/public_html), so it is not web-reachable but is still inside
 * the pool's open_basedir. The obvious spot, /var/www/private/appworksapp, is
 * NOT: open_basedir for this pool is "/var/www/public/appworksapp:...", so a
 * read from there fails at runtime even though the file permissions are fine.
 *
 * The env var exists so these pages can be exercised from a scratch directory
 * without a copy of the real token. api/articles.php reads the same file the
 * same way.
 *
 * Returns '' when the token cannot be read; callers degrade to their existing
 * "upstream gave us nothing" path rather than sending an unauthenticated
 * request.
 */
function appworks_cms_token(): string
{
    static $token = null;
    if ($token !== null) {
        return $token;
    }

    $tokenFile = getenv('APPWORKS_CMS_TOKEN_FILE') ?: '/var/www/public/appworksapp/cms-token';
    $token = is_readable($tokenFile) ? trim((string) file_get_contents($tokenFile)) : '';

    if ($token === '') {
        error_log('lib/cms.php: CMS token missing or unreadable at ' . $tokenFile);
    }

    return $token;
}

/**
 * A stream context for a CMS GET.
 *
 * TLS verification is left at PHP's defaults (verify_peer on) deliberately:
 * the callers used to turn it off, which made every one of these requests
 * trivially interceptable. appworks.mpanel.app presents a valid certificate —
 * api/articles.php has been calling the same host with default verification
 * since the proxy was added.
 */
function appworks_cms_context(int $timeout = 10)
{
    return stream_context_create([
        'http' => [
            'method'  => 'GET',
            'header'  => 'Authorization: ' . appworks_cms_token() . "\r\n"
                       . "Accept: application/json\r\n",
            'timeout' => $timeout,
        ],
    ]);
}
