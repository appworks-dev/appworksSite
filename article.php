<?php
// Debug mode - set to false in production
$debug = false;

// Get article ID or slug from URL
$articleId = isset($_GET['id']) ? $_GET['id'] : null;
$articleSlug = isset($_GET['slug']) ? $_GET['slug'] : null;

if ($debug) {
    echo "<!-- DEBUG: Article ID: " . ($articleId ?: 'none') . " -->\n";
    echo "<!-- DEBUG: Article Slug: " . ($articleSlug ?: 'none') . " -->\n";
}

// Default meta values
$pageTitle = "Article - Appworks";
$pageDescription = "Appworks article view";
$pageImage = "https://appworks.mpanel.app/image/cache/original/files/images/appworks-logo.png";
$pageUrl = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$articleData = null;

// Function to create slug from title
function createSlug($title) {
    $slug = strtolower($title);
    $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
    $slug = preg_replace('/\s+/', '-', $slug);
    $slug = preg_replace('/-+/', '-', $slug);
    $slug = trim($slug, '-');
    return $slug;
}

// Function to get category name
function getCategoryName($categoryId) {
    $categories = [
        '3' => 'Sports',
        '4' => 'Media',
        '9' => 'AI',
        '10' => 'Grant Projects'
    ];
    return isset($categories[$categoryId]) ? $categories[$categoryId] : 'General';
}

// 301 redirect old ?id= and ?slug= query string URLs to clean /article/slug URLs
if (($articleId || $articleSlug) && !isset($_GET['_internal'])) {
    $redirectSlug = null;

    if ($articleId) {
        // Fetch article by ID to get its slug
        $lookupUrl = 'https://appworks.mpanel.app/api/webV2/getOneArticle/' . urlencode($articleId);
        $lookupCtx = stream_context_create([
            'http' => ['header' => "Authorization: kmNTuI8dRmRX\r\n", 'method' => 'GET', 'timeout' => 10],
            'ssl' => ['verify_peer' => false, 'verify_peer_name' => false]
        ]);
        $lookupResp = @file_get_contents($lookupUrl, false, $lookupCtx);
        if ($lookupResp) {
            $lookupData = json_decode($lookupResp, true);
            if ($lookupData && $lookupData['success']) {
                $art = $lookupData['result']['article'] ?? $lookupData['article'] ?? null;
                if ($art && isset($art['slug'])) {
                    $redirectSlug = $art['slug'];
                } elseif ($art && isset($art['title'])) {
                    $redirectSlug = createSlug($art['title']);
                }
            }
        }
    } elseif ($articleSlug && !preg_match('#^/article/[a-z0-9-]+#', $_SERVER['REQUEST_URI'])) {
        // Query string or direct article.php access — redirect to clean URL
        $redirectSlug = $articleSlug;
    }

    if ($redirectSlug) {
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: https://app-works.app/article/' . $redirectSlug);
        exit;
    }
}

// Fetch article data from API
if ($articleId || $articleSlug) {
    if ($articleId) {
        $apiUrl = 'https://appworks.mpanel.app/api/webV2/getOneArticle/' . urlencode($articleId);
    } else {
        $apiUrl = 'https://appworks.mpanel.app/api/webV2/getArticlesBySlug/' . urlencode($articleSlug);
    }

    if ($debug) {
        echo "<!-- DEBUG: API URL: " . $apiUrl . " -->\n";
    }

    $context = stream_context_create([
        'http' => [
            'header' => "Authorization: kmNTuI8dRmRX\r\n",
            'method' => 'GET',
            'timeout' => 30
        ],
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false
        ]
    ]);

    $response = @file_get_contents($apiUrl, false, $context);

    if ($debug) {
        echo "<!-- DEBUG: Response received: " . ($response ? 'YES' : 'NO') . " -->\n";
    }

    if ($response) {
        $data = json_decode($response, true);

        if ($data && $data['success']) {
            // getArticlesBySlug returns article directly, getOneArticle returns in result.article
            if (isset($data['article']) && !empty($data['article'])) {
                $articleData = $data['article'];
            } elseif (isset($data['result']['article']) && !empty($data['result']['article'])) {
                $articleData = $data['result']['article'];
            } elseif (isset($data['result']['articles'][0]) && !empty($data['result']['articles'][0])) {
                $articleData = $data['result']['articles'][0];
            } elseif (isset($data['result'][0]) && !empty($data['result'][0])) {
                $articleData = $data['result'][0];
            }
        }
    }
}

// Hide articles from specific categories (they live on other domains)
$hiddenSlugs = ['litteraworks-com'];
$isHiddenCategory = false;
if ($articleData) {
    $cats = $articleData['categories'] ?? [];
    foreach ($cats as $cat) {
        if (in_array($cat['slug'] ?? '', $hiddenSlugs)) {
            $articleData = null;
            $isHiddenCategory = true;
            http_response_code(410); // Gone — tells Google to deindex
            break;
        }
    }
}

// Update meta values if article found
if ($articleData) {
    $pageTitle = htmlspecialchars($articleData['title']) . " - Appworks";
    $pageDescription = htmlspecialchars($articleData['intro'] ?? $articleData['title']);

    // Handle image URL - prefer original for best quality
    if (isset($articleData['images']['original']['url'])) {
        $pageImage = $articleData['images']['original']['url'];
    } elseif (isset($articleData['images']['large-full']['url'])) {
        $pageImage = $articleData['images']['large-full']['url'];
    } elseif (isset($articleData['images']['medium-full']['url'])) {
        $pageImage = $articleData['images']['medium-full']['url'];
    } elseif (isset($articleData['media']['original'])) {
        $pageImage = $articleData['media']['original'];
    } elseif (isset($articleData['media']['large-full'])) {
        $pageImage = $articleData['media']['large-full'];
    } elseif (isset($articleData['media']['medium-full'])) {
        $pageImage = $articleData['media']['medium-full'];
    }

    // Clean up image URL
    if ($pageImage && !filter_var($pageImage, FILTER_VALIDATE_URL)) {
        $pageImage = 'https://appworks.mpanel.app' . $pageImage;
    }

    // Strip ?crop=true to prevent server-side cropping
    $pageImage = str_replace('?crop=true', '', $pageImage);

    // Create clean slug URL — prefer CMS slug over generated slug
    $cleanSlug = $articleData['slug'] ?? createSlug($articleData['title']);
    $pageUrl = "https://app-works.app/article/" . $cleanSlug;
}

// Keywords
$keywords = "";
if ($articleData) {
    $categoryId = '';
    $categoryName = '';
    if (isset($articleData['categories'][0])) {
        $categoryId = $articleData['categories'][0]['id'] ?? '';
        $categoryName = $articleData['categories'][0]['name'] ?? '';
    } elseif (isset($articleData['category_id'])) {
        $categoryId = $articleData['category_id'];
    }

    $category = $categoryName ?: getCategoryName($categoryId);
    $keywords = htmlspecialchars($articleData['title']) . ", Appworks, " . $category;
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LNLW0CSSLT"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-LNLW0CSSLT');
    </script>
    <title><?php echo $pageTitle; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Appworks">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
<?php if ($isHiddenCategory || !$articleData): ?>
    <meta name="robots" content="noindex, nofollow">
<?php endif; ?>

    <!-- Open Graph meta tags for social sharing -->
    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $pageDescription; ?>">
    <meta property="og:image" content="<?php echo $pageImage; ?>">
    <meta property="og:url" content="<?php echo $pageUrl; ?>">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Appworks">
    <meta property="og:logo" content="https://appworks.mpanel.app/image/cache/original/files/images/appworks-logo.png">

    <!-- Twitter Card meta tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $pageTitle; ?>">
    <meta name="twitter:description" content="<?php echo $pageDescription; ?>">
    <meta name="twitter:image" content="<?php echo $pageImage; ?>">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo $pageUrl; ?>">

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://appworks.mpanel.app/image/cache/original/files/images/appworks-logo.png">
    <link rel="apple-touch-icon" href="https://appworks.mpanel.app/image/cache/original/files/images/appworks-logo.png"><!-- Structured data for SEO -->
    <?php if ($articleData): ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "headline": "<?php echo addslashes($articleData['title']); ?>",
        "description": "<?php echo addslashes($articleData['intro'] ?? $articleData['title']); ?>",
        "image": "<?php echo $pageImage; ?>",
        "datePublished": "<?php echo $articleData['created_at']; ?>",
        "dateModified": "<?php echo $articleData['updated_at'] ?? $articleData['created_at']; ?>",
        "author": {
            "@type": "Organization",
            "name": "Appworks"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Appworks",
            "logo": {
                "@type": "ImageObject",
                "url": "https://appworks.mpanel.app/image/cache/original/files/images/appworks-logo.png"
            }
        },
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "<?php echo $pageUrl; ?>"
        }
    }
    </script>
    <?php endif; ?>
    <?php include __DIR__ . '/includes/head-common.php'; ?>

    <style>
        * {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', system-ui, sans-serif;
        }

        body {
            background: #200A24;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            position: relative;
        }

        /* SVG Noise Texture Overlay */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.03;
            z-index: 1;
            pointer-events: none;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
        }

        /* Animated Gradient Mesh Background */
        body::after {
            content: '';
            position: fixed;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            z-index: 0;
            pointer-events: none;
            background:
                radial-gradient(circle at 20% 50%, rgba(255, 75, 54, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(139, 92, 246, 0.12) 0%, transparent 50%),
                radial-gradient(circle at 40% 20%, rgba(255, 107, 80, 0.1) 0%, transparent 50%);
            animation: gradientMesh 20s ease-in-out infinite;
        }

        @keyframes gradientMesh {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(10%, -10%) scale(1.1); }
            66% { transform: translate(-10%, 10%) scale(0.9); }
        }

        body > * {
            position: relative;
            z-index: 2;
        }

        /* Glassmorphism Base */
        .glass-medium {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(32px);
            -webkit-backdrop-filter: blur(32px);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }
/* Category Badge */
        .category-badge {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            background: linear-gradient(135deg, #FF4B36 0%, #FF6B50 100%);
            color: white;
        }

        /* Back Button */
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem 1.25rem;
            border-radius: 9999px;
            font-weight: 600;
            font-size: 0.875rem;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .back-button:hover {
            background: rgba(255, 75, 54, 0.1);
            border-color: rgba(255, 75, 54, 0.3);
            color: #FF6B50;
            transform: translateX(-4px);
        }

        /* Article Content Styles */
        .article-content {
            font-size: 1.125rem;
            line-height: 1.9;
            color: rgba(255, 255, 255, 0.85);
        }

        .article-content h2 {
            font-size: 1.75rem;
            font-weight: 700;
            color: white;
            margin: 2.5rem 0 1rem;
            letter-spacing: -0.01em;
        }

        .article-content h3 {
            font-size: 1.375rem;
            font-weight: 700;
            color: white;
            margin: 2rem 0 0.75rem;
            letter-spacing: -0.01em;
        }

        .article-content h4 {
            font-size: 1.125rem;
            font-weight: 700;
            color: white;
            margin: 1.5rem 0 0.5rem;
        }

        .article-content p {
            margin-bottom: 1.5rem;
        }

        .article-content img {
            max-width: 100%;
            height: auto;
            border-radius: 1rem;
            margin: 2rem 0;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .article-content a {
            color: #FF6B50;
            text-decoration: underline;
            text-underline-offset: 2px;
            transition: color 0.3s ease;
        }

        .article-content a:hover {
            color: #FF4B36;
        }

        .article-content ul {
            margin: 1.5rem 0 !important;
            padding-left: 2rem !important;
            list-style-type: disc !important;
            list-style-position: outside !important;
        }

        .article-content ol {
            margin: 1.5rem 0 !important;
            padding-left: 2rem !important;
            list-style-type: decimal !important;
            list-style-position: outside !important;
        }

        .article-content li {
            margin-bottom: 0.75rem !important;
            display: list-item !important;
            list-style: inherit !important;
        }

        .article-content blockquote {
            margin: 2rem 0;
            padding: 1.5rem 2rem;
            border-left: 4px solid #FF4B36;
            background: rgba(255, 75, 54, 0.1);
            border-radius: 0 1rem 1rem 0;
            font-style: italic;
            color: rgba(255, 255, 255, 0.9);
        }

        /* Featured Image */
        .featured-image {
            position: relative;
            border-radius: 1.5rem;
            overflow: hidden;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4);
        }

        .featured-image img {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        /* Mobile Responsive Styles */
        @media (max-width: 768px) {
            .featured-image img {
                height: 300px;
            }

            .article-content {
                font-size: 1rem;
                line-height: 1.8;
            }

            .article-content h2 {
                font-size: 1.5rem;
                margin: 2rem 0 0.75rem;
            }

            .article-content h3 {
                font-size: 1.25rem;
                margin: 1.5rem 0 0.5rem;
            }

            .article-content ul, .article-content ol {
                padding-left: 1.5rem !important;
            }

            .article-content blockquote {
                padding: 1rem 1.25rem;
                margin: 1.5rem 0;
            }

            .article-content img {
                margin: 1.5rem 0;
            }
        }

        @media (max-width: 480px) {
            .featured-image img {
                height: 220px;
            }

            .article-content {
                font-size: 0.9375rem;
            }

            .article-content h2 {
                font-size: 1.375rem;
            }

            .article-content h3 {
                font-size: 1.125rem;
            }

            .category-badge {
                padding: 0.375rem 0.75rem;
                font-size: 0.65rem;
            }
        }

        /* Reduced Motion */
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>
</head>
<body>

<!-- Fixed Header Navigation -->
<?php include __DIR__ . '/includes/header.php'; ?>

<!-- Article Header -->
<section class="pt-32 pb-8" style="background: #200A24;">
    <div class="mx-auto px-6 lg:px-8" style="max-width: 900px;">
        <!-- Back Button -->
        <a href="/articles.html" class="back-button mb-8 inline-flex">
            <i class="bi bi-arrow-left"></i>
            <span>Back to Articles</span>
        </a>

        <?php if ($articleData): ?>
            <!-- Article Meta -->
            <div class="flex flex-wrap items-center gap-4 mb-6">
                <?php
                $displayCategory = '';
                if (isset($articleData['categories'][0]['name'])) {
                    $displayCategory = $articleData['categories'][0]['name'];
                } elseif (isset($articleData['categories'][0]['id'])) {
                    $displayCategory = getCategoryName($articleData['categories'][0]['id']);
                } elseif (isset($articleData['category_id'])) {
                    $displayCategory = getCategoryName($articleData['category_id']);
                }
                ?>
                <?php if ($displayCategory): ?>
                    <span class="category-badge"><?php echo htmlspecialchars($displayCategory); ?></span>
                <?php endif; ?>
                <span class="text-gray-400 text-sm">
                    <?php echo date('F j, Y', strtotime($articleData['created_at'])); ?>
                </span>
            </div>

            <!-- Article Title -->
            <h1 class="text-white font-black text-4xl lg:text-5xl mb-6" style="letter-spacing: -0.02em; line-height: 1.1;">
                <?php echo htmlspecialchars($articleData['title']); ?>
            </h1>

            <!-- Article Intro -->
            <?php if (!empty($articleData['intro'])): ?>
                <p class="text-gray-300 text-xl leading-relaxed" style="opacity: 0.85;">
                    <?php echo htmlspecialchars($articleData['intro']); ?>
                </p>
            <?php endif; ?>
        <?php else: ?>
            <h1 class="text-white font-black text-4xl lg:text-5xl mb-6" style="letter-spacing: -0.02em;">
                Article Not Found
            </h1>
            <p class="text-gray-400 text-xl">
                The requested article could not be found.
            </p>
        <?php endif; ?>
    </div>
</section>

<!-- Featured Image -->
<?php if ($articleData && $pageImage !== 'https://appworks.mpanel.app/image/cache/original/files/images/appworks-logo.png'): ?>
<section class="py-8" style="background: #200A24;">
    <div class="mx-auto px-6 lg:px-8" style="max-width: 1100px;">
        <div class="featured-image">
            <img src="<?php echo $pageImage; ?>"
                 alt="<?php echo htmlspecialchars($articleData['title']); ?>"
                 onerror="this.style.display='none'">
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Article Content -->
<section class="py-12" style="background: #200A24;">
    <div class="mx-auto px-6 lg:px-8" style="max-width: 900px;">
        <div class="article-content">
            <?php
            if ($articleData) {
                $content = $articleData['body'] ?? $articleData['text'] ?? $articleData['contents'] ?? '';

                if ($content) {
                    // Decode HTML entities (mPanel stores content as HTML-encoded text)
                    $content = html_entity_decode($content, ENT_QUOTES | ENT_HTML5, 'UTF-8');

                    // Fix image paths - use original to prevent cropping
                    $content = str_replace('/storage', 'https://appworks.mpanel.app/image/cache/original', $content);

                    echo $content;
                } else {
                    echo '<p class="text-gray-400">Article content is not available.</p>';
                }
            } else {
                echo '<p class="text-gray-400">Sorry, the article you are looking for does not exist or has been removed.</p>';
                echo '<a href="/articles.html" class="inline-flex items-center gap-2 mt-6 text-vibrant-orange-500 hover:text-vibrant-orange-600 font-semibold smooth-transition">';
                echo '<i class="bi bi-arrow-left"></i>';
                echo '<span>Browse all articles</span>';
                echo '</a>';
            }
            ?>
        </div>

        <?php if ($articleData): ?>
        <!-- Share Section -->
        <div class="mt-16 pt-8 border-t border-white/10">
            <h3 class="text-white font-bold text-lg mb-4">Share this article</h3>
            <div class="flex gap-3">
                <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode($pageUrl); ?>&text=<?php echo urlencode($articleData['title']); ?>"
                   target="_blank"
                   class="flex items-center justify-center w-12 h-12 rounded-xl glass-light hover:bg-vibrant-orange-600/20 text-gray-400 hover:text-vibrant-orange-600 smooth-transition">
                    <i class="bi bi-twitter-x text-xl"></i>
                </a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode($pageUrl); ?>&title=<?php echo urlencode($articleData['title']); ?>"
                   target="_blank"
                   class="flex items-center justify-center w-12 h-12 rounded-xl glass-light hover:bg-vibrant-orange-600/20 text-gray-400 hover:text-vibrant-orange-600 smooth-transition">
                    <i class="bi bi-linkedin text-xl"></i>
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($pageUrl); ?>"
                   target="_blank"
                   class="flex items-center justify-center w-12 h-12 rounded-xl glass-light hover:bg-vibrant-orange-600/20 text-gray-400 hover:text-vibrant-orange-600 smooth-transition">
                    <i class="bi bi-facebook text-xl"></i>
                </a>
                <button onclick="navigator.clipboard.writeText('<?php echo $pageUrl; ?>'); this.innerHTML='<i class=\'bi bi-check text-xl\'></i>'; setTimeout(() => this.innerHTML='<i class=\'bi bi-link-45deg text-xl\'></i>', 2000);"
                        class="flex items-center justify-center w-12 h-12 rounded-xl glass-light hover:bg-vibrant-orange-600/20 text-gray-400 hover:text-vibrant-orange-600 smooth-transition">
                    <i class="bi bi-link-45deg text-xl"></i>
                </button>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
