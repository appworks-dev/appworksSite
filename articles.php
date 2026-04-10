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
    <title>Insights on Media Tech, AI & Sports Digital | Appworks</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Appworks">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="Research, analysis, and practical guides on media asset management, AI transcription, fan engagement, digital publishing, and EU-funded innovation projects.">

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://appworks.mpanel.app/image/cache/original/files/images/appworks-logo.png">
    <link rel="apple-touch-icon" href="https://appworks.mpanel.app/image/cache/original/files/images/appworks-logo.png"><!-- SEO Meta Tags -->
    <meta name="keywords" content="Appworks, Insights, Media Technology, Sports Technology, AI, Digital Publishing, Fan Engagement, Media Asset Management, Transcription">

    <!-- Open Graph -->
    <meta property="og:title" content="Insights on Media Tech, AI & Sports Digital | Appworks">
    <meta property="og:description" content="Research, analysis, and practical guides on media technology, AI, and digital sports.">
    <meta property="og:image" content="https://appworks.mpanel.app/image/cache/original/files/images/appworks-logo.png">
    <meta property="og:url" content="https://app-works.app/insights">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Insights on Media Tech, AI & Sports Digital | Appworks">
    <meta name="twitter:description" content="Research, analysis, and practical guides on media technology, AI, and digital sports.">
    <meta name="twitter:image" content="https://appworks.mpanel.app/image/cache/original/files/images/appworks-logo.png">

    <link rel="canonical" href="https://app-works.app/insights">

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Blog",
        "name": "Appworks Insights",
        "description": "Research, analysis, and practical guides on media asset management, AI transcription, fan engagement, digital publishing, and EU-funded innovation projects.",
        "url": "https://app-works.app/insights",
        "publisher": {"@type": "Organization", "name": "Appworks", "url": "https://app-works.app"}
    }
    </script>
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
            0%, 100% {
                transform: translate(0, 0) scale(1);
            }
            33% {
                transform: translate(10%, -10%) scale(1.1);
            }
            66% {
                transform: translate(-10%, 10%) scale(0.9);
            }
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
        }        /* Hover Lift */
        .hover-lift:hover {
            transform: translateY(-8px);
        }
/* Article Card */
        .article-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 1.5rem;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .article-card:hover {
            transform: translateY(-8px);
            border-color: rgba(255, 75, 54, 0.3);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3), 0 0 40px rgba(255, 75, 54, 0.1);
        }

        .article-card:hover .article-image img {
            transform: scale(1.1);
        }

        .article-card:hover .arrow-icon {
            transform: translateX(5px);
            color: #FF4B36;
        }

        .article-image {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .article-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .article-image::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(32, 10, 36, 0.8) 0%, transparent 50%);
        }

        /* Filter Buttons */
        .filter-btn {
            padding: 0.75rem 1.5rem;
            border-radius: 9999px;
            font-weight: 600;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(255, 255, 255, 0.05);
            color: rgba(255, 255, 255, 0.7);
        }

        .filter-btn:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .filter-btn.active {
            background: linear-gradient(135deg, #FF4B36 0%, #FF6B50 100%);
            border-color: transparent;
            color: white;
            box-shadow: 0 4px 12px rgba(255, 75, 54, 0.4);
        }

        /* Load More Button */
        .load-more-btn {
            padding: 1rem 2rem;
            border-radius: 9999px;
            font-weight: 700;
            font-size: 1rem;
            background: linear-gradient(135deg, #FF4B36 0%, #FF6B50 100%);
            color: white;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(255, 75, 54, 0.4);
        }

        .load-more-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(255, 75, 54, 0.5);
        }

        .load-more-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            transform: none;
        }

        /* Category Badge */
        .category-badge {
            display: inline-block;
            padding: 0.375rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            background: rgba(255, 75, 54, 0.2);
            color: #FF6B50;
        }

        /* Mobile Responsive Styles */
        @media (max-width: 768px) {
            .article-image {
                height: 180px;
            }

            .filter-btn {
                padding: 0.5rem 1rem;
                font-size: 0.75rem;
            }

            .category-badge {
                padding: 0.25rem 0.5rem;
                font-size: 0.65rem;
            }
        }

        @media (max-width: 480px) {
            .article-image {
                height: 150px;
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

<!-- Hero Section -->
<section class="relative pt-32 pb-12" style="background: #200A24;">
    <div class="mx-auto px-6 lg:px-8" style="max-width: 1600px;">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-white font-black text-5xl lg:text-6xl mb-6" style="letter-spacing: -0.02em;">
                <span class="text-transparent bg-clip-text" style="background: linear-gradient(135deg, #FF4B36 0%, #FF6B50 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Insights</span>
            </h1>
            <p class="text-gray-300 text-xl max-w-2xl mx-auto" style="opacity: 0.85;">
                Research, analysis, and practical guides on media technology, AI, and digital sports.
            </p>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section class="relative py-8" style="background: #200A24;">
    <div class="mx-auto px-6 lg:px-8" style="max-width: 1600px;">
        <div class="flex flex-wrap justify-center gap-3 mb-6" id="filterButtons">
            <button class="filter-btn active" data-filter="*">All</button>
            <button class="filter-btn" data-filter="4">Media</button>
            <button class="filter-btn" data-filter="3">Sports</button>
            <button class="filter-btn" data-filter="9">AI</button>
            <button class="filter-btn" data-filter="10">Grant Projects</button>
            <button class="filter-btn" data-filter="12">Pchela</button>
        </div>
        <!-- Category description (updates dynamically) -->
        <p id="categoryDescription" class="text-center text-gray-400 text-sm max-w-2xl mx-auto" style="min-height: 1.25rem;"></p>
    </div>
</section>

<!-- Articles Grid -->
<section class="relative py-16" style="background: #200A24;">
    <div class="mx-auto px-6 lg:px-8" style="max-width: 1600px;">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="articlesContainer">
            <!-- Articles will be loaded here dynamically -->
        </div>

        <!-- Loading Spinner -->
        <div id="loadingSpinner" class="flex justify-center py-12 hidden">
            <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-vibrant-orange-500"></div>
        </div>

        <!-- Load More Button -->
        <div class="flex justify-center mt-12">
            <button id="loadMoreBtn" class="load-more-btn flex items-center gap-2">
                <span>Load More</span>
                <i class="bi bi-arrow-right"></i>
            </button>
        </div>

        <!-- No Articles Message -->
        <div id="noArticles" class="hidden text-center py-20">
            <i class="bi bi-journal-x text-6xl text-gray-500 mb-4"></i>
            <p class="text-gray-400 text-xl">No articles found in this category.</p>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
<script>
// Category mapping
const categoryMap = {
    '3': 'Sports',
    '4': 'Media',
    '9': 'AI',
    '10': 'Grant Projects',
    '12': 'Pchela'
};

// Category descriptions for SEO
const categoryDescriptions = {
    '*': '',
    '4': 'How digital publishing, mobile apps, and content automation are reshaping modern newsrooms.',
    '3': 'Fan engagement platforms, loyalty programs, and mobile strategies for sports clubs and leagues.',
    '9': 'Practical applications of AI in media workflows — transcription, tagging, content generation, and more.',
    '10': 'EU-funded innovation projects in media technology, Creative Europe, and Horizon Europe programs.',
    '12': 'AI-powered digital asset management — face recognition, auto-tagging, and media archive search.'
};

// Hidden category slugs (articles live on other domains)
const hiddenCategorySlugs = ['litteraworks-com'];

// State management
let currentPage = 1;
let currentFilter = '*';
let isLoading = false;
let hasMore = true;

// DOM elements
const articlesContainer = document.getElementById('articlesContainer');
const loadMoreBtn = document.getElementById('loadMoreBtn');
const loadingSpinner = document.getElementById('loadingSpinner');
const noArticles = document.getElementById('noArticles');
const filterButtons = document.querySelectorAll('.filter-btn');
const categoryDescription = document.getElementById('categoryDescription');

// Create slug from title
function createSlug(title) {
    return title.toLowerCase()
        .replace(/[^a-z0-9\s-]/g, '')
        .replace(/\s+/g, '-')
        .replace(/-+/g, '-')
        .replace(/^-|-$/g, '');
}

// Get category name
function getCategoryName(article) {
    if (article.categories && article.categories[0]) {
        return article.categories[0].name || categoryMap[article.categories[0].id] || 'General';
    }
    return categoryMap[article.category_id] || 'General';
}

// Format date
function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
}

// Estimate reading time from article content
function getReadingTime(article) {
    const text = (article.contents || '') + ' ' + (article.intro || '');
    const words = text.replace(/<[^>]*>/g, '').split(/\s+/).filter(w => w.length > 0).length;
    const minutes = Math.max(1, Math.ceil(words / 220));
    return `${minutes} min read`;
}

// Create article card HTML
function createArticleCard(article) {
    const slug = article.slug || createSlug(article.title);
    const category = getCategoryName(article);
    const date = formatDate(article.created_at);
    const readTime = getReadingTime(article);
    const imageUrl = article.images?.['medium-full']?.url || 'https://app-works.app/images/placeholder.jpg';

    return `
        <a href="article/${slug}" class="article-card block group">
            <div class="article-image">
                <img src="${imageUrl}"
                     onerror="this.src='https://app-works.app/images/placeholder.jpg'"
                     alt="${article.title}">
            </div>
            <div class="p-6">
                <div class="flex items-center gap-3 mb-4">
                    <span class="category-badge">${category}</span>
                    <span class="text-gray-500 text-sm">${date}</span>
                    <span class="text-gray-500 text-sm flex items-center gap-1"><i class="bi bi-clock text-xs"></i> ${readTime}</span>
                </div>
                <h3 class="text-white font-bold text-xl mb-3 leading-tight" style="letter-spacing: -0.01em;">${article.title}</h3>
                <p class="text-gray-400 text-sm leading-relaxed mb-4 line-clamp-2">${article.intro || ''}</p>
                <div class="flex items-center gap-2 text-vibrant-orange-500 font-semibold text-sm">
                    <span>Read More</span>
                    <i class="bi bi-arrow-right arrow-icon smooth-transition"></i>
                </div>
            </div>
        </a>
    `;
}

// Fetch articles from API
async function fetchArticles(page = 1, filter = '*', append = false) {
    if (isLoading) return;

    isLoading = true;
    loadingSpinner.classList.remove('hidden');
    loadMoreBtn.disabled = true;

    let apiUrl = 'https://appworks.mpanel.app/api/webV2/getArticles';

    if (filter === '*') {
        apiUrl += `?articleLimit=12&page=${page}`;
    } else {
        apiUrl += `?category[]=${encodeURIComponent(filter)}&articleLimit=12&page=${page}`;
    }

    try {
        const response = await fetch(apiUrl, {
            headers: {
                'Authorization': 'kmNTuI8dRmRX'
            }
        });

        const data = await response.json();

        if (!data.success || !data.result || !data.result.articles || data.result.articles.length === 0) {
            if (!append) {
                articlesContainer.innerHTML = '';
                noArticles.classList.remove('hidden');
            }
            hasMore = false;
            loadMoreBtn.style.display = 'none';
            return;
        }

        noArticles.classList.add('hidden');

        if (!append) {
            articlesContainer.innerHTML = '';
        }

        const articles = data.result.articles.filter(article => {
            if (article.categories && article.categories.length > 0) {
                return !article.categories.some(cat => hiddenCategorySlugs.includes(cat.slug));
            }
            return true;
        });
        articles.forEach(article => {
            articlesContainer.insertAdjacentHTML('beforeend', createArticleCard(article));
        });

        // Check if there are more articles
        hasMore = data.result.articles.length >= 12;
        loadMoreBtn.style.display = hasMore ? 'flex' : 'none';

    } catch (error) {
        console.error('Error fetching articles:', error);
        if (!append) {
            articlesContainer.innerHTML = '<div class="col-span-full text-center py-12"><p class="text-gray-400">Error loading articles. Please try again.</p></div>';
        }
    } finally {
        isLoading = false;
        loadingSpinner.classList.add('hidden');
        loadMoreBtn.disabled = false;
    }
}

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    // Load initial articles
    fetchArticles(currentPage, currentFilter);

    // Filter button click handlers
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Update active state
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            // Update filter and reset pagination
            currentFilter = this.getAttribute('data-filter');
            currentPage = 1;
            hasMore = true;
            loadMoreBtn.style.display = 'flex';

            // Update category description
            if (categoryDescription) {
                categoryDescription.textContent = categoryDescriptions[currentFilter] || '';
            }

            // Fetch new articles
            fetchArticles(currentPage, currentFilter);
        });
    });

    // Load more button click handler
    loadMoreBtn.addEventListener('click', function() {
        if (!isLoading && hasMore) {
            currentPage++;
            fetchArticles(currentPage, currentFilter, true);
        }
    });
});

// Header scroll effect
window.addEventListener('scroll', function() {
    const header = document.querySelector('.header-nav');
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// Scroll to top button
const scrollBtn = document.getElementById('scroll-to-top');
window.addEventListener('scroll', function() {
    if (window.scrollY > 500) {
        scrollBtn.style.opacity = '1';
        scrollBtn.style.pointerEvents = 'auto';
        scrollBtn.classList.add('flex');
    } else {
        scrollBtn.style.opacity = '0';
        scrollBtn.style.pointerEvents = 'none';
    }
});

scrollBtn.addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});
</script>

<!-- Crawlable article links for search engines -->
<noscript>
<nav aria-label="All articles">
<ul>
<?php
$ctx = stream_context_create([
    'http' => ['header' => "Authorization: kmNTuI8dRmRX\r\n", 'timeout' => 10],
    'ssl' => ['verify_peer' => false, 'verify_peer_name' => false]
]);
$r = @file_get_contents('https://appworks.mpanel.app/api/webV2/getArticles?articleLimit=100', false, $ctx);
if ($r) {
    $d = json_decode($r, true);
    $articles = $d['result']['articles'] ?? [];
    $hiddenSlugs = ['litteraworks-com'];
    foreach ($articles as $a) {
        $cats = $a['categories'] ?? [];
        $hidden = false;
        foreach ($cats as $cat) {
            if (in_array($cat['slug'] ?? '', $hiddenSlugs)) { $hidden = true; break; }
        }
        if ($hidden) continue;
        $slug = htmlspecialchars($a['slug'] ?? '');
        $title = htmlspecialchars($a['title'] ?? '');
        if ($slug && $title) {
            echo "<li><a href=\"/article/{$slug}\">{$title}</a></li>\n";
        }
    }
}
?>
</ul>
</nav>
</noscript>

</body>
</html>
