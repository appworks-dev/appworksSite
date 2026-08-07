/**
 * Partner marquee — an auto-scrolling logo band built from partner-logos.js.
 *
 *   <div class="aw-marquee" data-marquee="dan, insajder, krik"></div>
 *
 * Keys are the same ones every other partner slot uses, so a logo swapped in that
 * file changes here too. Compare with sport.html, which hard-codes its image URLs
 * inline and therefore keeps showing logos that were removed from the database.
 *
 * The band is the logo list twice over: the CSS translates the track by exactly
 * -50%, so when the animation restarts the second copy sits where the first began
 * and the loop is seamless. The copy is aria-hidden — a screen reader should not
 * read fifty logos when there are twenty-five.
 *
 * Depends on js/partner-logos.js (for PARTNERS) and css/product.css (.aw-marquee).
 */
(function () {
    'use strict';

    /* seconds of travel per logo, so a band of 25 scrolls at the same speed as a
       band of 8 rather than three times faster */
    var SECONDS_PER_LOGO = 2.6;

    function escapeAttr(value) {
        return String(value == null ? '' : value).replace(/[&<>"']/g, function (c) {
            return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c];
        });
    }

    function build(root) {
        var keys = (root.getAttribute('data-marquee') || '')
            .split(',').map(function (s) { return s.trim(); }).filter(Boolean);
        if (!keys.length) return;

        if (typeof PARTNERS === 'undefined') {
            console.error('partner-marquee: partner-logos.js must load first');
            return;
        }

        var missing = [];
        var html = keys.map(function (key) {
            var partner = PARTNERS[key];
            if (!partner) { missing.push(key); return ''; }
            return '<img loading="lazy" src="' + escapeAttr(partner.logo) + '"'
                + ' alt="' + escapeAttr(partner.name) + '">';
        }).join('');

        if (missing.length) console.error('partner-marquee: unknown keys: ' + missing.join(', '));
        if (!html) return;

        /* the duplicate carries no alt text and is hidden from assistive tech */
        var dupe = html.replace(/ alt="[^"]*"/g, ' alt=""');

        var track = document.createElement('div');
        track.className = 'aw-marquee__track';
        track.style.setProperty('--aw-marquee-duration', (keys.length * SECONDS_PER_LOGO).toFixed(1) + 's');
        /* display: contents on the wrapper is set in CSS, not inline: an inline style
           would outrank the reduced-motion rule that has to hide this half */
        track.innerHTML = html
            + '<span class="aw-marquee__dupe" aria-hidden="true">' + dupe + '</span>';

        root.innerHTML = '';
        root.appendChild(track);
    }

    function init() {
        var roots = document.querySelectorAll('[data-marquee]');
        for (var i = 0; i < roots.length; i++) build(roots[i]);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
