<?php
header('Content-Type: application/xml; charset=utf-8');
header('Cache-Control: public, max-age=3600');

$baseUrl = 'https://app-works.app';

// Static pages with priorities
$staticPages = [
    ['loc' => '/',                   'changefreq' => 'weekly',  'priority' => '1.0'],
    ['loc' => '/cms.html',           'changefreq' => 'monthly', 'priority' => '0.9'],
    ['loc' => '/media.html',         'changefreq' => 'monthly', 'priority' => '0.9'],
    ['loc' => '/sport.html',         'changefreq' => 'monthly', 'priority' => '0.9'],
    ['loc' => '/consultation.html',  'changefreq' => 'monthly', 'priority' => '0.8'],
    ['loc' => '/articles.html',      'changefreq' => 'weekly',  'priority' => '0.8'],
    ['loc' => '/partners.html',      'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => '/projects.html',      'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => '/about.html',         'changefreq' => 'monthly', 'priority' => '0.7'],
];

// Fetch articles from CMS API
$articles = [];
$apiUrl = 'https://appworks.mpanel.app/api/webV2/getArticles?articleLimit=200';
$context = stream_context_create([
    'http' => [
        'header' => "Authorization: kmNTuI8dRmRX\r\n",
        'method' => 'GET',
        'timeout' => 10
    ],
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false
    ]
]);

$response = @file_get_contents($apiUrl, false, $context);
if ($response) {
    $data = json_decode($response, true);
    if ($data && $data['success']) {
        $articles = $data['result']['articles'] ?? [];
    }
}

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($staticPages as $page): ?>
  <url>
    <loc><?php echo $baseUrl . $page['loc']; ?></loc>
    <changefreq><?php echo $page['changefreq']; ?></changefreq>
    <priority><?php echo $page['priority']; ?></priority>
  </url>
<?php endforeach; ?>
<?php foreach ($articles as $article):
    $slug = $article['slug'] ?? '';
    if (!$slug) continue;
    $lastmod = '';
    if (!empty($article['updated_at'])) {
        $lastmod = date('Y-m-d', strtotime($article['updated_at']));
    } elseif (!empty($article['created_at'])) {
        $lastmod = date('Y-m-d', strtotime($article['created_at']));
    }
?>
  <url>
    <loc><?php echo $baseUrl . '/article/' . htmlspecialchars($slug); ?></loc>
<?php if ($lastmod): ?>
    <lastmod><?php echo $lastmod; ?></lastmod>
<?php endif; ?>
    <changefreq>monthly</changefreq>
    <priority>0.6</priority>
  </url>
<?php endforeach; ?>
</urlset>
