<?php
require_once __DIR__ . '/lib/cms.php';

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
    ['loc' => '/insights',            'changefreq' => 'weekly',  'priority' => '0.8'],
    ['loc' => '/partners.html',      'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => '/projects.html',      'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => '/about.html',         'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => '/contact.html',       'changefreq' => 'monthly', 'priority' => '0.6'],
    // Deliberately absent, all for the same reason: the live page carries a
    // noindex robots meta, so listing it here asks Google to crawl a URL we then
    // tell it to drop. Re-add each one the moment its noindex is lifted.
    //   fronisa.html      - copy still being written, not linked from the nav
    //   verbavista.html   - noindex
    //   fanfuel.html      - noindex
    //   monitoring.html   - noindex
];

// Fetch articles from CMS API
$articles = [];
$apiUrl = 'https://appworks.mpanel.app/api/webV2/getArticles?articleLimit=100';
$response = @file_get_contents($apiUrl, false, appworks_cms_context(10));
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
<?php
$hiddenSlugs = ['litteraworks-com'];
foreach ($articles as $article):
    $slug = $article['slug'] ?? '';
    if (!$slug) continue;
    $cats = $article['categories'] ?? [];
    $hidden = false;
    foreach ($cats as $cat) {
        if (in_array($cat['slug'] ?? '', $hiddenSlugs)) { $hidden = true; break; }
    }
    if ($hidden) continue;
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
