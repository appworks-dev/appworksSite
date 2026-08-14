/**
 * Tailwind build for app-works.app.
 *
 * The site used to load https://cdn.tailwindcss.com on all 17 pages. That script
 * is the Play CDN: it ships the whole compiler to the browser, scans the DOM and
 * generates CSS at runtime, and its own docs say not to use it in production. It
 * is render-blocking, and every page paid for it.
 *
 * This produces the same classes ahead of time into css/tailwind.min.css, which
 * is committed. There is no build step on the server.
 *
 *   npm run css        build once
 *   npm run css:watch  rebuild on change
 *
 * The theme below is the inline `tailwind.config` block that nine of the pages
 * carried, verbatim and byte-identical across all nine. The other eight loaded
 * the CDN with no config at all, so they only ever used stock Tailwind; giving
 * them the same theme costs nothing, because an unused colour emits no CSS.
 */
module.exports = {
    content: [
        './*.html',
        './*.php',
        // Only our own scripts. Vendor bundles (jquery, revolution) are excluded:
        // they contain enough incidental text to match the class scanner and
        // would pad the output with rules nothing uses.
        './js/nav.js',
        './js/contact.js',
        './js/insights-teaser.js',
        './js/partner-logos.js',
        './js/partner-marquee.js',
    ],
    /*
     * Classes that exist only in CMS article bodies, which no build-time scan can
     * see. The Play CDN generated them because it read the live DOM; a compiled
     * stylesheet cannot, so they are named here instead.
     *
     * These three arrived with content pasted into mPanel from a Claude
     * conversation, which carries its own markup. Harmless, and cheap to keep
     * working: about 80 bytes.
     *
     * If a future article turns up styled with a Tailwind class that is not on
     * this list, that class will silently do nothing. Diagnose it by running the
     * compiler over the rendered page and diffing against this build:
     *   curl -s https://app-works.app/article/{slug} > /tmp/a.html
     *   npx tailwindcss -i src/tailwind.css -o /tmp/a.css --minify --content "/tmp/a.html"
     */
    safelist: ['break-words', 'whitespace-normal', 'whitespace-pre-wrap'],
    theme: {
        extend: {
            colors: {
                'royal-purple': {
                    900: '#200A24',
                    800: '#1A0624',
                    700: '#0F0520',
                },
                'vibrant-orange': {
                    500: '#FF4B36',
                    600: '#FF6B50',
                },
                'accent-purple': {
                    400: '#A78BFA',
                    500: '#8B5CF6',
                    600: '#7C3AED',
                },
            },
            fontFamily: {
                inter: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
            },
        },
    },
};
