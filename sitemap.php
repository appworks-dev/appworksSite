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
    // The three product pages. Each carried a noindex while its copy was still
    // provisional; all of those blockers are gone, so they are indexable now and
    // belong here. They are the pages meant to rank for the product-level
    // queries - a fan engagement app, a publisher app platform, media monitoring
    // - which no hub page can win on their behalf.
    ['loc' => '/verbavista.html',    'changefreq' => 'monthly', 'priority' => '0.9'],
    ['loc' => '/fanfuel.html',       'changefreq' => 'monthly', 'priority' => '0.9'],
    ['loc' => '/monitoring.html',    'changefreq' => 'monthly', 'priority' => '0.8'],
    ['loc' => '/consultation.html',  'changefreq' => 'monthly', 'priority' => '0.8'],
    ['loc' => '/insights',            'changefreq' => 'weekly',  'priority' => '0.8'],
    ['loc' => '/partners.html',      'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => '/projects.html',      'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => '/about.html',         'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => '/contact.html',       'changefreq' => 'monthly', 'priority' => '0.6'],
    // Deliberately absent: the live page carries a noindex robots meta, so
    // listing it here asks Google to crawl a URL we then tell it to drop.
    // Re-add it the moment that noindex is lifted.
    //   fronisa.html      - 87 words, a genuine stub; the nav marks it "soon"
    //                       and its links deliberately go nowhere
];

// Fetch articles from CMS API
$hiddenSlugs = ['litteraworks-com'];
$articles = array_filter(appworks_cms_articles(0, 100), function ($article) use ($hiddenSlugs) {
    if (empty($article['slug'])) {
        return false;
    }
    foreach ($article['categories'] ?? [] as $cat) {
        if (in_array($cat['slug'] ?? '', $hiddenSlugs)) {
            return false;
        }
    }
    return true;
});

$modified = appworks_cms_modified_dates(array_column($articles, 'slug'));

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
foreach ($articles as $article):
    $slug = $article['slug'];
    $lastmod = isset($modified[$slug]) ? date('Y-m-d', strtotime($modified[$slug])) : '';
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
