# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Company marketing website for Appworks (https://app-works.app). Static HTML/CSS/JS + PHP pages served by Apache on WEB2 server. Articles are fetched dynamically from the mPanel CMS API — there is no local database.

## Deployment

```bash
# Push to GitHub, then deploy to WEB2:
ssh web2 "cd /var/www/public/appworksapp/public_html && GIT_SSH_COMMAND='ssh -i /var/www/public/appworksapp/.ssh/id_rsa -o StrictHostKeyChecking=no' git pull origin main"
```

No build step on the server — Apache + PHP-FPM (PHP 8.2) serve the files as they are, and `git pull` is the whole deploy. There *is* a build step locally: see **CSS/JS Stack** below. Compiled output (`css/tailwind.min.css`) is committed, which is what keeps the server side buildless.

After deploying PHP changes, you may need to restart PHP-FPM to clear opcache: `ssh web2 "systemctl restart php8.2-fpm"`.

## Architecture

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

- **article.php** — Single article page. URL `/article/{slug}` rewrites here via .htaccess. Handles old `?id=` and `?slug=` query params with 301 redirects to clean URLs.
- **articles.php** — The "Insights" page. Served at `/insights` via .htaccess rewrite. JS-based category filtering with descriptions, reading time estimates, "Load More" pagination. Contains a `<noscript>` PHP section rendering all article links for search engine crawlers. Uses JSON-LD `Blog` schema.
- **articles.html** — Legacy copy (no noscript fallback). `/articles.html` redirects 301 to `/insights` via .htaccess. Kept for reference but not actively served.
- **home.html** — Homepage. Has its own `fetchAndDisplayArticles()` function fetching 4 latest articles. Blog section labeled "Latest Insights" linking to `/insights`.
- **consultation.html** — Standalone consultation/digital transformation page. Not in main nav but linked from About Us page CTA, homepage CTA, and footer.
- **sitemap.php** — Dynamic XML sitemap. Served at `/sitemap.xml` via .htaccess rewrite. 1-hour cache.
- **.htaccess** — URL rewrites, HTTPS/www normalization, clean article URLs, `/insights` routing, WebP auto-serving, and numerous 301 redirects fixing old/broken URLs from Google Search Console.

### Hidden Category Filtering

Articles with category slug `litteraworks-com` (or any slug in the `hiddenSlugs` array) are hidden from this site because they live on litteraworks.com. Filtering is implemented in 6 places — all must stay in sync:

1. **articles.php** JS (client-side filter before rendering)
2. **articles.html** JS (same filter)
3. **home.html** JS (same filter)
4. **articles.php** PHP noscript section (server-side skip)
5. **sitemap.php** (server-side skip)
6. **article.php** (returns HTTP 410 Gone + `noindex` meta for direct URL access)

### CSS/JS Stack

**Tailwind is compiled ahead of time, not loaded from a CDN.** All 17 pages link `/css/tailwind.min.css`, which is committed to the repo. The Play CDN (`cdn.tailwindcss.com`) is gone, and no page links the old SASS bundles (`style.min.css`, `responsive.min.css`) any more.

```bash
npm run css        # build once  -> css/tailwind.min.css
npm run css:watch  # rebuild on change
```

**This changes how you add markup.** The CDN compiled classes in the browser at runtime, so any Tailwind class worked the moment you typed it. A compiled stylesheet only contains the classes that existed when it was built, so:

> A Tailwind class that is not already in `css/tailwind.min.css` **silently does nothing** — no error, no warning, the style just fails to apply.

After adding markup with a class the site has not used before, run `npm run css` and commit the result. To check whether a class is already there, grep the compiled file for it — remember to escape the Tailwind delimiters, since they are escaped in CSS output:

```bash
grep -F 'hover\:-translate-y-1' css/tailwind.min.css
grep -F 'lg\:text-7xl' css/tailwind.min.css
```

`tailwind.config.js` holds the theme (`royal-purple`, `vibrant-orange`, `accent-purple`), the `content` globs that get scanned, and a `safelist` for classes that appear only in CMS article bodies — which no build-time scan can see. Its header comment explains both. `src/tailwind.css` is just the three `@tailwind` directives.

`css/product.css` is the hand-written design system for the redesigned pages (the `aw-*` components). Note the load-order trap: each page's inline `<style>` block sits **above** the `<link>` to product.css, so a single-class override of an `aw-*` rule loses on source order — match the original selector's specificity or use two classes.

Design uses glassmorphism, animated gradient backgrounds, and noise texture overlays.

## SEO

- Google Analytics: `G-LNLW0CSSLT`
- Google Search Console verified via Cloudflare DNS TXT record
- All pages have Open Graph, Twitter Cards, and canonical URL meta tags
- article.php includes JSON-LD Article structured data
- home.html includes JSON-LD Organization structured data
- The SEO/ directory contains Google Search Console export data (gitignored CSVs)
- Broken URL patterns found in GSC are fixed by adding 301 redirects in .htaccess
