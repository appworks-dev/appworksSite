/**
 * Partner use-case sliders — "How our partners work".
 *
 * One instance manages every slider on the page. Three independent scripts on one
 * screen was the thing to avoid.
 *
 * Markup contract:
 *   <div class="aw-uc" data-usecases>
 *     <div class="aw-uc__head">…</div>
 *     <div class="aw-uc__viewport"><div class="aw-uc__track">
 *       <article class="aw-uc__slide">…</article> × n
 *     </div></div>
 *     <div class="aw-uc__controls">…</div>     <- optional, built here if absent
 *   </div>
 *
 * Every slide is already in the HTML. Nothing is injected on advance, so all of
 * them are indexable — which is the whole point of writing them.
 *
 * No autoplay. Three carousels animating on one screen costs more in readability
 * than it earns in engagement, so movement is manual only.
 */
(function () {
    'use strict';

    function build(root) {
        var viewport = root.querySelector('.aw-uc__viewport');
        var track = root.querySelector('.aw-uc__track');
        if (!viewport || !track) return;

        var slides = Array.prototype.slice.call(track.querySelectorAll('.aw-uc__slide'));
        if (slides.length < 2) return;   // nothing to page through

        var controls = root.querySelector('.aw-uc__controls');
        if (!controls) {
            controls = document.createElement('div');
            controls.className = 'aw-uc__controls';
            root.appendChild(controls);
        }

        var prev = document.createElement('button');
        prev.type = 'button';
        prev.className = 'aw-uc__arrow';
        prev.setAttribute('aria-label', 'Previous partner');
        prev.innerHTML = '<i class="bi bi-chevron-left" aria-hidden="true"></i>';

        var next = document.createElement('button');
        next.type = 'button';
        next.className = 'aw-uc__arrow';
        next.setAttribute('aria-label', 'Next partner');
        next.innerHTML = '<i class="bi bi-chevron-right" aria-hidden="true"></i>';

        var dots = document.createElement('div');
        dots.className = 'aw-uc__dots';
        dots.setAttribute('role', 'tablist');

        var dotButtons = slides.map(function (slide, i) {
            var d = document.createElement('button');
            d.type = 'button';
            d.className = 'aw-uc__dot';
            d.setAttribute('aria-label', 'Go to partner ' + (i + 1) + ' of ' + slides.length);
            d.addEventListener('click', function () { scrollToSlide(i); });
            dots.appendChild(d);
            return d;
        });

        controls.appendChild(prev);
        controls.appendChild(next);
        controls.appendChild(dots);

        function scrollToSlide(i) {
            var target = slides[Math.max(0, Math.min(slides.length - 1, i))];
            // scrollLeft rather than scrollIntoView: the latter also scrolls the
            // page vertically to bring the slider into view, which yanks the
            // viewport around when someone clicks a dot mid-page
            viewport.scrollLeft = target.offsetLeft - track.offsetLeft;
        }

        /* Index of the slide nearest the left edge. Derived from scroll position so
           it stays correct when the user swipes or trackpad-scrolls instead of
           using the controls. */
        function currentIndex() {
            var x = viewport.scrollLeft;
            var best = 0, bestDist = Infinity;
            for (var i = 0; i < slides.length; i++) {
                var d = Math.abs((slides[i].offsetLeft - track.offsetLeft) - x);
                if (d < bestDist) { bestDist = d; best = i; }
            }
            return best;
        }

        function sync() {
            // 2px of slack: sub-pixel layout means scrollWidth can exceed
            // clientWidth by a fraction even when everything visibly fits
            var overflows = viewport.scrollWidth > viewport.clientWidth + 2;
            controls.hidden = !overflows;
            if (!overflows) return;

            var i = currentIndex();
            var atStart = viewport.scrollLeft <= 2;
            var atEnd = viewport.scrollLeft + viewport.clientWidth >= viewport.scrollWidth - 2;
            prev.disabled = atStart;
            next.disabled = atEnd;
            dotButtons.forEach(function (d, j) {
                d.setAttribute('aria-current', j === i ? 'true' : 'false');
            });
        }

        prev.addEventListener('click', function () { scrollToSlide(currentIndex() - 1); });
        next.addEventListener('click', function () { scrollToSlide(currentIndex() + 1); });

        // Arrow keys, but only while the slider itself has focus, so they do not
        // hijack normal page scrolling.
        viewport.setAttribute('tabindex', '0');
        viewport.setAttribute('role', 'group');
        viewport.addEventListener('keydown', function (e) {
            if (e.key === 'ArrowRight') { e.preventDefault(); scrollToSlide(currentIndex() + 1); }
            else if (e.key === 'ArrowLeft') { e.preventDefault(); scrollToSlide(currentIndex() - 1); }
            else if (e.key === 'Home') { e.preventDefault(); scrollToSlide(0); }
            else if (e.key === 'End') { e.preventDefault(); scrollToSlide(slides.length - 1); }
        });

        var raf = null;
        viewport.addEventListener('scroll', function () {
            if (raf) return;
            raf = requestAnimationFrame(function () { raf = null; sync(); });
        });

        return sync;
    }

    function init() {
        var roots = Array.prototype.slice.call(document.querySelectorAll('[data-usecases]'));
        var syncs = roots.map(build).filter(Boolean);
        if (!syncs.length) return;

        var runAll = function () { syncs.forEach(function (fn) { fn(); }); };
        runAll();

        // logos are lazy-loaded, so the track's width is not final at init
        window.addEventListener('load', runAll);
        var t = null;
        window.addEventListener('resize', function () {
            clearTimeout(t);
            t = setTimeout(runAll, 120);
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
