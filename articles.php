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
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Google Fonts: Inter Variable -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'royal-purple': {
                            900: '#200A24',
                            800: '#1A0624',
                            700: '#0F0520'
                        },
                        'vibrant-orange': {
                            500: '#FF4B36',
                            600: '#FF6B50'
                        },
                        'accent-purple': {
                            400: '#A78BFA',
                            500: '#8B5CF6',
                            600: '#7C3AED'
                        }
                    },
                    fontFamily: {
                        'inter': ['Inter', 'system-ui', '-apple-system', 'sans-serif']
                    }
                }
            }
        }
    </script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- SEO Meta Tags -->
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
        .glass-light {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .glass-medium {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(32px);
            -webkit-backdrop-filter: blur(32px);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        /* Smooth Animations */
        .smooth-transition {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Hover Lift */
        .hover-lift:hover {
            transform: translateY(-8px);
        }

        /* The .header-nav rules were here. Nothing on this page has that class —
           the nav is .aw-nav from css/nav.css — so they styled nothing, and the
           scroll handler that added .scrolled to them threw on every scroll event.
           Both removed. */

        /* Mega Dropdown */
        .mega-dropdown {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%) translateY(-10px);
            width: 900px;
            max-width: 90vw;
            background: rgba(32, 10, 36, 0.98);
            backdrop-filter: blur(32px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 1rem;
            padding: 2rem;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 20px 48px rgba(0, 0, 0, 0.4);
        }

        .nav-item:hover .mega-dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }

        .mega-dropdown-item {
            padding: 1.25rem;
            border-radius: 0.75rem;
            transition: background 0.3s ease;
        }

        .mega-dropdown-item:hover {
            background: rgba(255, 255, 255, 0.05);
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
    <link rel="stylesheet" href="/css/nav.css">
</head>
<body>

<!-- NAV:START — generated by tools/build-nav.mjs. Do not edit here; edit that file and re-run. -->
        <nav class="aw-nav" aria-label="Main">
            <div class="aw-nav__inner">
                <a class="aw-nav__logo" href="/" aria-label="Appworks home">
                    <img src="https://appworks.mpanel.app/image/cache/original/files/images/appworks-beli-logo.png?crop=true" alt="Appworks" width="749" height="673">
                </a>
                <ul class="aw-nav__list">
                <li class="aw-nav__item">
                    <a class="aw-nav__link" href="/">Home</a>
                </li>
                <li class="aw-nav__item">
                    <a class="aw-nav__link" href="/media.html" aria-expanded="false" aria-controls="aw-dd-media">Media <i class="bi bi-chevron-down aw-nav__caret" aria-hidden="true"></i></a>
                    <div class="aw-dd aw-dd--two-col" id="aw-dd-media" role="group" aria-label="Media">
                        <a class="aw-dd__link" href="/verbavista.html">
                            <span class="aw-dd__label">Mobile apps</span>
                            <span class="aw-dd__note">VerbaVista for publishers</span>
                        </a>
                        <a class="aw-dd__link" href="/cms.html">
                            <span class="aw-dd__label">mPanel CMS</span>
                            <span class="aw-dd__note">Publishing platform</span>
                        </a>
                        <a class="aw-dd__link" href="https://litteraworks.com/" target="_blank" rel="noopener">
                            <span class="aw-dd__label">Litteraworks <i class="bi bi-box-arrow-up-right aw-dd__ext" aria-hidden="true"></i></span>
                            <span class="aw-dd__note">Transcription &amp; subtitles</span>
                        </a>
                        <a class="aw-dd__link" href="https://pchela.app/" target="_blank" rel="noopener">
                            <span class="aw-dd__label">Pchela <i class="bi bi-box-arrow-up-right aw-dd__ext" aria-hidden="true"></i></span>
                            <span class="aw-dd__note">AI asset management</span>
                        </a>
                        <a class="aw-dd__link" href="/monitoring.html#media-puls">
                            <span class="aw-dd__label">Media Puls</span>
                            <span class="aw-dd__note">Media monitoring</span>
                        </a>
                        <span class="aw-dd__soon" aria-disabled="true">
                            <span class="aw-dd__label">Fronisa</span>
                            <span class="aw-dd__note">AI chatbot &amp; SEO</span>
                        </span>
                    </div>
                </li>
                <li class="aw-nav__item">
                    <a class="aw-nav__link" href="/sport.html" aria-expanded="false" aria-controls="aw-dd-sport">Sport <i class="bi bi-chevron-down aw-nav__caret" aria-hidden="true"></i></a>
                    <div class="aw-dd aw-dd--two-col" id="aw-dd-sport" role="group" aria-label="Sport">
                        <a class="aw-dd__link" href="/fanfuel.html">
                            <span class="aw-dd__label">Mobile apps</span>
                            <span class="aw-dd__note">FanFuel for clubs &amp; leagues</span>
                        </a>
                        <a class="aw-dd__link" href="/cms.html">
                            <span class="aw-dd__label">mPanel CMS</span>
                            <span class="aw-dd__note">Publishing platform</span>
                        </a>
                        <a class="aw-dd__link" href="https://litteraworks.com/" target="_blank" rel="noopener">
                            <span class="aw-dd__label">Litteraworks <i class="bi bi-box-arrow-up-right aw-dd__ext" aria-hidden="true"></i></span>
                            <span class="aw-dd__note">Transcription &amp; subtitles</span>
                        </a>
                        <a class="aw-dd__link" href="https://pchela.app/" target="_blank" rel="noopener">
                            <span class="aw-dd__label">Pchela <i class="bi bi-box-arrow-up-right aw-dd__ext" aria-hidden="true"></i></span>
                            <span class="aw-dd__note">AI asset management</span>
                        </a>
                        <a class="aw-dd__link" href="/monitoring.html#sport-puls">
                            <span class="aw-dd__label">Sport Puls</span>
                            <span class="aw-dd__note">Sport monitoring</span>
                        </a>
                        <span class="aw-dd__soon" aria-disabled="true">
                            <span class="aw-dd__label">Fronisa</span>
                            <span class="aw-dd__note">AI chatbot &amp; SEO</span>
                        </span>
                    </div>
                </li>
                <li class="aw-nav__item">
                    <button type="button" class="aw-nav__trigger" aria-expanded="false" aria-controls="aw-dd-products">Products <i class="bi bi-chevron-down aw-nav__caret" aria-hidden="true"></i></button>
                    <div class="aw-dd aw-dd--two-col" id="aw-dd-products" role="group" aria-label="Products">
                        <a class="aw-dd__link" href="/cms.html">
                            <span class="aw-dd__label">mPanel CMS</span>
                            <span class="aw-dd__note">Publishing platform</span>
                        </a>
                        <a class="aw-dd__link" href="/verbavista.html">
                            <span class="aw-dd__label">VerbaVista</span>
                            <span class="aw-dd__note">Publisher apps</span>
                        </a>
                        <a class="aw-dd__link" href="/fanfuel.html">
                            <span class="aw-dd__label">FanFuel</span>
                            <span class="aw-dd__note">Fan engagement apps</span>
                        </a>
                        <a class="aw-dd__link" href="https://litteraworks.com/" target="_blank" rel="noopener">
                            <span class="aw-dd__label">Litteraworks <i class="bi bi-box-arrow-up-right aw-dd__ext" aria-hidden="true"></i></span>
                            <span class="aw-dd__note">Transcription &amp; subtitles</span>
                        </a>
                        <a class="aw-dd__link" href="https://pchela.app/" target="_blank" rel="noopener">
                            <span class="aw-dd__label">Pchela <i class="bi bi-box-arrow-up-right aw-dd__ext" aria-hidden="true"></i></span>
                            <span class="aw-dd__note">AI asset management</span>
                        </a>
                        <a class="aw-dd__link" href="/monitoring.html">
                            <span class="aw-dd__label">Media monitoring</span>
                            <span class="aw-dd__note">Media Puls / Sport Puls</span>
                        </a>
                        <span class="aw-dd__soon" aria-disabled="true">
                            <span class="aw-dd__label">Fronisa</span>
                            <span class="aw-dd__note">AI chatbot &amp; SEO</span>
                        </span>
                    </div>
                </li>
                <li class="aw-nav__item">
                    <a class="aw-nav__link" href="/projects.html">Grant Projects</a>
                </li>
                <li class="aw-nav__item">
                    <a class="aw-nav__link" href="/insights" aria-current="page">Insights</a>
                </li>
                <li class="aw-nav__item aw-nav__item--end">
                    <button type="button" class="aw-nav__trigger" aria-expanded="false" aria-controls="aw-dd-company">Company <i class="bi bi-chevron-down aw-nav__caret" aria-hidden="true"></i></button>
                    <div class="aw-dd" id="aw-dd-company" role="group" aria-label="Company">
                        <a class="aw-dd__link" href="/about.html">
                            <span class="aw-dd__label">About us</span>
                        </a>
                        <a class="aw-dd__link" href="/partners.html">
                            <span class="aw-dd__label">Partners</span>
                        </a>
                        <a class="aw-dd__link" href="/contact.html">
                            <span class="aw-dd__label">Contact</span>
                        </a>
                    </div>
                </li>
                </ul>
                <button type="button" class="aw-nav__burger" aria-expanded="false" aria-controls="aw-panel" aria-label="Open menu">
                    <i class="bi bi-list" aria-hidden="true"></i>
                </button>
            </div>
        </nav>
        <div class="aw-scrim" hidden-until-open></div>
        <div class="aw-panel" id="aw-panel" role="dialog" aria-modal="true" aria-label="Site menu">
            <div class="aw-panel__head">
                <a href="/" aria-label="Appworks home"><img src="https://appworks.mpanel.app/image/cache/original/files/images/appworks-beli-logo.png?crop=true" alt="Appworks" width="749" height="673"></a>
                <button type="button" class="aw-panel__close" aria-label="Close menu">
                    <i class="bi bi-x-lg" aria-hidden="true"></i>
                </button>
            </div>
            <div class="aw-panel__body">
                <div class="aw-acc">
                    <a class="aw-acc__top" href="/">Home</a>
                </div>
                <div class="aw-acc">
                    <button type="button" class="aw-acc__top" data-acc aria-expanded="false">
                        Media <i class="bi bi-chevron-down aw-nav__caret" aria-hidden="true"></i>
                    </button>
                    <div class="aw-acc__inner">
                        <ul class="aw-acc__list">
                            <li><a href="/media.html">Media overview</a></li>
                            <li><a href="/verbavista.html">Mobile apps</a></li>
                            <li><a href="/cms.html">mPanel CMS</a></li>
                            <li><a href="https://litteraworks.com/" target="_blank" rel="noopener">Litteraworks <i class="bi bi-box-arrow-up-right aw-dd__ext" aria-hidden="true"></i></a></li>
                            <li><a href="https://pchela.app/" target="_blank" rel="noopener">Pchela <i class="bi bi-box-arrow-up-right aw-dd__ext" aria-hidden="true"></i></a></li>
                            <li><a href="/monitoring.html#media-puls">Media Puls</a></li>
                            <li><span class="aw-acc__soon" aria-disabled="true">Fronisa</span></li>
                        </ul>
                    </div>
                </div>
                <div class="aw-acc">
                    <button type="button" class="aw-acc__top" data-acc aria-expanded="false">
                        Sport <i class="bi bi-chevron-down aw-nav__caret" aria-hidden="true"></i>
                    </button>
                    <div class="aw-acc__inner">
                        <ul class="aw-acc__list">
                            <li><a href="/sport.html">Sport overview</a></li>
                            <li><a href="/fanfuel.html">Mobile apps</a></li>
                            <li><a href="/cms.html">mPanel CMS</a></li>
                            <li><a href="https://litteraworks.com/" target="_blank" rel="noopener">Litteraworks <i class="bi bi-box-arrow-up-right aw-dd__ext" aria-hidden="true"></i></a></li>
                            <li><a href="https://pchela.app/" target="_blank" rel="noopener">Pchela <i class="bi bi-box-arrow-up-right aw-dd__ext" aria-hidden="true"></i></a></li>
                            <li><a href="/monitoring.html#sport-puls">Sport Puls</a></li>
                            <li><span class="aw-acc__soon" aria-disabled="true">Fronisa</span></li>
                        </ul>
                    </div>
                </div>
                <div class="aw-acc">
                    <button type="button" class="aw-acc__top" data-acc aria-expanded="false">
                        Products <i class="bi bi-chevron-down aw-nav__caret" aria-hidden="true"></i>
                    </button>
                    <div class="aw-acc__inner">
                        <ul class="aw-acc__list">
                            <li><a href="/cms.html">mPanel CMS</a></li>
                            <li><a href="/verbavista.html">VerbaVista</a></li>
                            <li><a href="/fanfuel.html">FanFuel</a></li>
                            <li><a href="https://litteraworks.com/" target="_blank" rel="noopener">Litteraworks <i class="bi bi-box-arrow-up-right aw-dd__ext" aria-hidden="true"></i></a></li>
                            <li><a href="https://pchela.app/" target="_blank" rel="noopener">Pchela <i class="bi bi-box-arrow-up-right aw-dd__ext" aria-hidden="true"></i></a></li>
                            <li><a href="/monitoring.html">Media monitoring</a></li>
                            <li><span class="aw-acc__soon" aria-disabled="true">Fronisa</span></li>
                        </ul>
                    </div>
                </div>
                <div class="aw-acc">
                    <a class="aw-acc__top" href="/projects.html">Grant Projects</a>
                </div>
                <div class="aw-acc">
                    <a class="aw-acc__top" href="/insights">Insights</a>
                </div>
                <div class="aw-acc">
                    <button type="button" class="aw-acc__top" data-acc aria-expanded="false">
                        Company <i class="bi bi-chevron-down aw-nav__caret" aria-hidden="true"></i>
                    </button>
                    <div class="aw-acc__inner">
                        <ul class="aw-acc__list">
                            <li><a href="/about.html">About us</a></li>
                            <li><a href="/partners.html">Partners</a></li>
                            <li><a href="/contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="aw-panel__cta">
                    <a href="/contact.html">Let's Talk <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
<!-- NAV:END -->

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

<!-- Footer -->
<footer class="relative py-20" style="background: rgba(0, 0, 0, 0.3); border-top: 1px solid rgba(255, 255, 255, 0.1);">
    <div class="mx-auto px-6 lg:px-8 mb-12" style="max-width: 1600px;">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <!-- Column 1: Logo & Social -->
            <div>
                <img src="https://appworks.mpanel.app/image/cache/original/files/images/appworks-logo.png" alt="Appworks Logo" class="h-16 w-auto mb-4">
                <p class="text-gray-400 text-base leading-relaxed mb-6">Creative solutions for innovative partners.</p>
                <div class="flex gap-3">
                    <a href="https://www.linkedin.com/company/appworks-d-o-o/" target="_blank" class="flex items-center justify-center w-10 h-10 rounded-lg smooth-transition glass-light hover:bg-vibrant-orange-600/20 text-gray-400 hover:text-vibrant-orange-600">
                        <i class="bi bi-linkedin text-xl"></i>
                    </a>
                    <a href="https://www.instagram.com/weareappworks/" target="_blank" class="flex items-center justify-center w-10 h-10 rounded-lg smooth-transition glass-light hover:bg-vibrant-orange-600/20 text-gray-400 hover:text-vibrant-orange-600">
                        <i class="bi bi-instagram text-xl"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCydhgWA6Kg40T9EFmRVDb9A" target="_blank" class="flex items-center justify-center w-10 h-10 rounded-lg smooth-transition glass-light hover:bg-vibrant-orange-600/20 text-gray-400 hover:text-vibrant-orange-600">
                        <i class="bi bi-youtube text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Column 2: Company -->
            <div>
                <h4 class="text-white font-bold text-base mb-6" style="letter-spacing: -0.01em;">Company</h4>
                <ul class="space-y-3">
                    <li><a href="/about.html" class="text-gray-400 hover:text-vibrant-orange-600 smooth-transition text-sm">About us</a></li>
                    <li><a href="/insights" class="text-gray-400 hover:text-vibrant-orange-600 smooth-transition text-sm">Insights</a></li>
                    <li><a href="/partners.html" class="text-gray-400 hover:text-vibrant-orange-600 smooth-transition text-sm">Partners</a></li>
                    <li><a href="/contact.html" class="text-gray-400 hover:text-vibrant-orange-600 smooth-transition text-sm">Contact us</a></li>
                </ul>
            </div>

            <!-- Column 3: Solutions -->
            <div>
                <h4 class="text-white font-bold text-base mb-6" style="letter-spacing: -0.01em;">Solutions</h4>
                <ul class="space-y-3">
                    <li><a href="/cms.html" class="text-gray-400 hover:text-vibrant-orange-600 smooth-transition text-sm">CMS</a></li>
                    <li><a href="/media.html" class="text-gray-400 hover:text-vibrant-orange-600 smooth-transition text-sm">Media</a></li>
                    <li><a href="/sport.html" class="text-gray-400 hover:text-vibrant-orange-600 smooth-transition text-sm">Sports</a></li>
                    <li><a href="https://litteraworks.com" class="text-gray-400 hover:text-vibrant-orange-600 smooth-transition text-sm">Litteraworks</a></li>
                    <li><a href="/consultation.html" class="text-gray-400 hover:text-vibrant-orange-600 smooth-transition text-sm">Consultation</a></li>
                    <li><a href="/projects.html" class="text-gray-400 hover:text-vibrant-orange-600 smooth-transition text-sm">Grant Projects</a></li>
                </ul>
            </div>

            <!-- Column 4: Contact -->
            <div>
                <h4 class="text-white font-bold text-base mb-6 flex items-center gap-2" style="letter-spacing: -0.01em;">
                    Contact us
                    <i class="bi bi-arrow-right text-vibrant-orange-600 text-sm"></i>
                </h4>
                <a href="mailto:info@app-works.app" class="text-white font-semibold text-sm hover:text-vibrant-orange-600 smooth-transition">info@app-works.app</a>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="pt-8 border-t border-white/10 text-center">
        <p class="text-gray-500 text-sm">&copy; 2026 Appworks. All rights reserved.</p>
    </div>
</footer>

<!-- Scroll to Top Button -->
<button id="scroll-to-top" class="fixed bottom-8 right-8 w-12 h-12 rounded-full items-center justify-center smooth-transition opacity-0 pointer-events-none" style="background: linear-gradient(135deg, #FF4B36 0%, #FF6B50 100%); box-shadow: 0 4px 12px rgba(255, 75, 54, 0.4); z-index: 999;">
    <i class="bi bi-arrow-up text-white text-xl"></i>
</button>

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
    '9': 'Practical applications of AI in media workflows: transcription, tagging, content generation, and more.',
    '10': 'EU-funded innovation projects in media technology, Creative Europe, and Horizon Europe programs.',
    '12': 'AI-powered digital asset management: face recognition, auto-tagging, and media archive search.'
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

    // Goes through /api/articles.php, which attaches the CMS token server side.
    // Calling the CMS directly meant shipping that token in the page source.
    let apiUrl = '/api/articles.php';

    if (filter === '*') {
        apiUrl += `?articleLimit=12&page=${page}`;
    } else {
        apiUrl += `?category=${encodeURIComponent(filter)}&articleLimit=12&page=${page}`;
    }

    try {
        const response = await fetch(apiUrl);

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

/*
 * Accept a category from the URL, so other pages can deep-link into a filtered
 * view: /insights?category=10. The id is validated against the filter buttons
 * that actually exist rather than trusted, so a bad or stale value just falls
 * back to "All" instead of fetching a category that isn't offered here.
 */
function applyCategoryFromUrl() {
    const wanted = new URLSearchParams(window.location.search).get('category');
    if (!wanted) return;
    const button = [...filterButtons].find(b => b.getAttribute('data-filter') === wanted);
    if (!button) return;

    filterButtons.forEach(btn => btn.classList.remove('active'));
    button.classList.add('active');
    currentFilter = wanted;
    if (categoryDescription) {
        categoryDescription.textContent = categoryDescriptions[currentFilter] || '';
    }
}

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    // must run before the first fetch so we don't load "All" and then replace it
    applyCategoryFromUrl();

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
require_once __DIR__ . '/lib/cms.php';
$r = @file_get_contents('https://appworks.mpanel.app/api/webV2/getArticles?articleLimit=100', false, appworks_cms_context(10));
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

<script src="/js/nav.js" defer></script>
</body>
</html>
