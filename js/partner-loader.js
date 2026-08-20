/**
 * Partner Logo Auto-Loader
 * Automatically loads partner logos from centralized PARTNERS database
 *
 * Usage in HTML:
 * <div data-partner="insajder"></div>
 * <div data-partner="qpr" data-css="custom-class another-class"></div>
 */

(function() {
    'use strict';

    /**
     * Build the <img> for one partner.
     *
     * Order matters at the top. Setting loading="lazy" only defers a fetch that has
     * not started yet, so it has to be assigned before src; the old code set src
     * first, which meant every logo on the page was requested eagerly no matter
     * what came after. partners.html injects 76 of these and home.html 64, nearly
     * all of them below the fold.
     *
     * `eager` opts a tile out of that. A logo inside a use-case slide sits off to
     * the side of the viewport rather than below it - measured at x=2099 to 3305 on
     * a 1400px home.html - and only arrives when the track is translated. Lazy
     * there means the logo identifying the slide is still unloaded at the moment
     * the slide becomes visible, so it pops in afterwards. Verified: with these
     * eager, all 242 injected logos across the seven pages load.
     *
     * width/height carry the file's intrinsic pixel size, recorded per partner in
     * partner-logos.js. Supplying both lets the browser derive the aspect ratio
     * before the bytes arrive and reserve the right width; without them the img is
     * 0 wide until it decodes, so every logo in a flex row shoves its neighbours
     * sideways on arrival.
     *
     * The two style lines are not optional. An HTML width/height attribute is not
     * only a hint - it also becomes the USED width and height unless CSS overrides
     * it. css/product.css sets width/height:auto on .aw-uc__logos img, so those
     * rows were unaffected, but home.html's .fork-logos images carry only
     * max-width/max-height. There the attributes forced every logo box out to the
     * full max-width cap, which widened all five tiles until the fifth wrapped
     * onto a second line and overlapped the "For Media" heading. Setting both back
     * to auto keeps the box aspect-correct while the attributes still supply the
     * ratio, which is the whole point of setting them.
     *
     * They are applied after the caller's data-style, because that arrives via
     * setAttribute('style', ...) and replaces the entire style attribute.
     */
    function buildLogoImg(partner, cssClass, inlineStyle, eager) {
        const img = document.createElement('img');
        if (!eager) {
            img.loading = 'lazy';
        }
        img.decoding = 'async';
        img.src = partner.logo;
        img.alt = partner.name;
        img.className = cssClass;
        if (inlineStyle) {
            img.setAttribute('style', inlineStyle);
        }
        if (partner.w && partner.h) {
            img.width = partner.w;
            img.height = partner.h;
            img.style.width = 'auto';
            img.style.height = 'auto';
        }
        return img;
    }

    /**
     * Initialize partner logo loading
     */
    function initPartnerLogos() {
        // Find all elements with data-partner attribute
        const partnerElements = document.querySelectorAll('[data-partner]');

        partnerElements.forEach(element => {
            const partnerKey = element.getAttribute('data-partner');
            const partner = getPartner(partnerKey);

            if (!partner) {
                console.warn(`Partner not found: ${partnerKey}`);
                return;
            }

            // Get custom CSS classes if specified
            const customCss = element.getAttribute('data-css') || 'max-h-16 w-auto object-contain';

            // Any inline styles from the parent are handed to the builder rather
            // than applied here, because it has to layer width/height:auto on top.
            // data-eager lets any tile opt out of lazy loading; slider slides do so
            // automatically, for the reason given on buildLogoImg.
            const eager = element.hasAttribute('data-eager') || !!element.closest('.aw-uc__slide');
            const img = buildLogoImg(partner, customCss, element.getAttribute('data-style'), eager);

            // Clear element and append img
            element.innerHTML = '';
            element.appendChild(img);
        });
    }

    /**
     * Render multiple partners dynamically
     * @param {string} containerId - ID of container element
     * @param {string[]} partnerKeys - Array of partner keys to render
     * @param {string} cssClass - CSS classes for images
     * @param {string} wrapperClass - CSS classes for wrapper divs
     */
    function renderPartners(containerId, partnerKeys, cssClass = 'max-h-16 w-auto object-contain', wrapperClass = '') {
        const container = document.getElementById(containerId);
        if (!container) {
            console.warn(`Container not found: ${containerId}`);
            return;
        }

        container.innerHTML = '';

        partnerKeys.forEach(key => {
            const partner = getPartner(key);
            if (!partner) {
                console.warn(`Partner not found: ${key}`);
                return;
            }

            const wrapper = document.createElement('div');
            if (wrapperClass) {
                wrapper.className = wrapperClass;
            }

            const img = buildLogoImg(partner, cssClass);

            wrapper.appendChild(img);
            container.appendChild(wrapper);
        });
    }

    /**
     * Render partners by category
     * @param {string} containerId - ID of container element
     * @param {string} category - Category to filter ('media', 'sports', 'featured', 'all')
     * @param {string} cssClass - CSS classes for images
     * @param {string} wrapperClass - CSS classes for wrapper divs
     */
    function renderPartnersByCategory(containerId, category, cssClass = 'max-h-16 w-auto object-contain', wrapperClass = '') {
        const partners = getPartnersByCategory(category);
        const partnerKeys = Object.keys(partners);
        renderPartners(containerId, partnerKeys, cssClass, wrapperClass);
    }

    // Expose functions globally
    window.initPartnerLogos = initPartnerLogos;
    window.renderPartners = renderPartners;
    window.renderPartnersByCategory = renderPartnersByCategory;

    // Auto-initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initPartnerLogos);
    } else {
        initPartnerLogos();
    }
})();
