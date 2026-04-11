# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Company marketing website for Appworks (https://app-works.app). HTML/PHP pages served by Apache on WEB2 server. Articles are fetched dynamically from the mPanel CMS API — there is no local database.

## Deployment

```bash
# Push to GitHub, then deploy to WEB2:
ssh web2 "cd /var/www/public/appworksapp/public_html && GIT_SSH_COMMAND='ssh -i /var/www/public/appworksapp/.ssh/id_rsa -o StrictHostKeyChecking=no' git pull origin main"
```

No build step. Files are served directly by Apache + PHP-FPM (PHP 8.2). `.html` files are processed by PHP-FPM (configured in the Apache vhost `FilesMatch` directive), enabling `<?php include ?>` in all pages. After deploying PHP changes, restart PHP-FPM to clear opcache: `ssh web2 "systemctl restart php8.2-fpm"`.

## Architecture

### Shared Includes (Single Source of Truth)

Navigation, footer, and common head resources are shared via PHP includes. **To change the menu, footer, or shared CSS, edit only the include files — never individual pages.**

| File | Purpose |
|------|---------|
| `includes/header.php` | Full header: desktop nav with Solutions mega-dropdown, mobile menu with hamburger button, all page links |
| `includes/footer.php` | Footer (4-column grid), scroll-to-top button, shared JS (header scroll effect, mobile menu toggle) |
| `includes/head-common.php` | Google Fonts, Tailwind CDN + custom config (colors: royal-purple, vibrant-orange, accent-purple), Bootstrap Icons, nav.css link |
| `css/nav.css` | All nav-related CSS: `.header-nav`, `.mega-dropdown`, `.nav-link`, `.mobile-menu`, `.glass-light`, `.smooth-transition` |

Each page includes these in order:
1. `head-common.php` in `<head>` (after page-specific meta/OG/structured data)
2. `header.php` at start of `<body>`
3. `footer.php` before `</body>` (page-specific scripts go between footer include and `</body>`)

### Article System

All article content comes from the mPanel CMS API at `https://appworks.mpanel.app/api/webV2/`. Auth header: `Authorization: kmNTuI8dRmRX`.

| Endpoint | Used In | Purpose |
|----------|---------|---------|
| `getArticles?articleLimit=N&page=N` | articles.php, sitemap.php, home.html | Article listings |
| `getArticles?category[]=ID&articleLimit=N` | articles.php | Filtered listings |
| `getArticlesBySlug/{slug}` | article.php | Single article by slug |
| `getOneArticle/{id}` | article.php | Single article by ID (fallback) |

**Category IDs:** 3=Sports, 4=Media, 9=AI, 10=Grant Projects, 12=Pchela, 13=litteraworks-com

### Key Files

- **article.php** — Single article page. URL `/article/{slug}` rewrites here via .htaccess.
- **articles.php** — The "Insights" page. Served at `/insights` via .htaccess rewrite. JS-based category filtering with descriptions, reading time estimates, "Load More" pagination. Contains a `<noscript>` PHP section for SEO crawlers. Uses JSON-LD `Blog` schema.
- **articles.html** — Legacy copy. `/articles.html` redirects 301 to `/insights`.
- **home.html** — Homepage with blog section "Latest Insights" linking to `/insights`.
- **consultation.html** — Standalone page. Not in main nav but linked from About Us CTA, homepage CTA, and footer.
- **sitemap.php** — Dynamic XML sitemap at `/sitemap.xml`. 1-hour cache.
- **.htaccess** — URL rewrites, HTTPS/www normalization, `/insights` routing, WebP auto-serving, 301 redirects for broken GSC URLs.

### Hidden Category Filtering

Articles with category slug `litteraworks-com` are hidden from this site (they live on litteraworks.com). Filtering is in:

1. **articles.php** JS + PHP noscript section
2. **articles.html** JS
3. **home.html** JS
4. **sitemap.php** (server-side skip)
5. **article.php** (returns HTTP 410 Gone + `noindex` meta)

### CSS/JS Stack

No bundler or build tool. Tailwind CSS CDN with custom config provided by `includes/head-common.php` on all pages. Shared nav/footer CSS in `css/nav.css`. Page-specific styles remain in each page's own `<style>` block. Design uses glassmorphism, animated gradient backgrounds, and noise texture overlays.

## SEO

- Google Analytics: `G-LNLW0CSSLT`
- Google Search Console verified via Cloudflare DNS TXT record
- All pages have Open Graph, Twitter Cards, and canonical URL meta tags
- article.php includes JSON-LD Article structured data
- home.html includes JSON-LD Organization structured data
- The SEO/ directory contains Google Search Console export data (gitignored CSVs)
- Broken URL patterns found in GSC are fixed by adding 301 redirects in .htaccess
