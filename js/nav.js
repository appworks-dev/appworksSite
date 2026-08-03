/**
 * Appworks site navigation behaviour.
 *
 * Desktop: dropdowns open on hover and on click/tap, and are fully keyboard
 * operable — ArrowDown opens and enters the panel, ArrowUp/ArrowDown move within
 * it, ArrowLeft/ArrowRight move between top-level items, Escape closes and
 * returns focus to the trigger, and tabbing out closes.
 *
 * Mobile: a full-screen panel with accordions, because ten of the eleven pages
 * previously had no reachable navigation at all below 1024px.
 *
 * MEDIA and SPORT are links to their hub pages as well as dropdown triggers. On
 * a coarse pointer the first tap opens the panel rather than navigating, since
 * otherwise the dropdown would be unreachable on a touch device wide enough to
 * still show the desktop bar.
 */
(function () {
    'use strict';

    var CLOSE_DELAY = 180;

    function ready(fn) {
        if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', fn);
        else fn();
    }

    ready(function () {
        var nav = document.querySelector('.aw-nav');
        if (!nav) return;

        /* ------------------------------------------------ desktop dropdowns */

        var items = Array.prototype.slice.call(nav.querySelectorAll('.aw-nav__item'));
        var withMenu = items.filter(function (li) { return li.querySelector('.aw-dd'); });
        var closeTimer = null;

        function trigger(li) { return li.querySelector('.aw-nav__trigger, .aw-nav__link'); }
        function links(li) { return Array.prototype.slice.call(li.querySelectorAll('.aw-dd__link')); }

        function open(li) {
            withMenu.forEach(function (o) { if (o !== li) close(o); });
            li.setAttribute('data-open', 'true');
            var t = trigger(li);
            if (t && t.hasAttribute('aria-expanded')) t.setAttribute('aria-expanded', 'true');
        }

        function close(li) {
            li.removeAttribute('data-open');
            var t = trigger(li);
            if (t && t.hasAttribute('aria-expanded')) t.setAttribute('aria-expanded', 'false');
        }

        function closeAll() { withMenu.forEach(close); }

        withMenu.forEach(function (li) {
            var t = trigger(li);
            var menuLinks = links(li);

            li.addEventListener('mouseenter', function () {
                clearTimeout(closeTimer);
                open(li);
            });
            li.addEventListener('mouseleave', function () {
                clearTimeout(closeTimer);
                closeTimer = setTimeout(function () { close(li); }, CLOSE_DELAY);
            });

            if (t) {
                t.addEventListener('click', function (e) {
                    var isOpen = li.getAttribute('data-open') === 'true';
                    var isLink = t.tagName === 'A' && t.getAttribute('href');
                    // A hub link navigates normally with a mouse; on touch the
                    // first tap reveals the menu instead.
                    var coarse = window.matchMedia && window.matchMedia('(pointer: coarse)').matches;
                    if (isLink && !coarse) return;
                    e.preventDefault();
                    if (isOpen) close(li); else open(li);
                });

                t.addEventListener('keydown', function (e) {
                    if (e.key === 'ArrowDown' || e.key === 'Enter' || e.key === ' ') {
                        if (e.key !== 'Enter' || t.tagName !== 'A') {
                            e.preventDefault();
                            open(li);
                            // next frame, so the panel is painted and focusable
                            if (menuLinks[0]) {
                                if (window.requestAnimationFrame) requestAnimationFrame(function () { menuLinks[0].focus(); });
                                else menuLinks[0].focus();
                            }
                        }
                    } else if (e.key === 'Escape') {
                        close(li);
                    }
                });
            }

            menuLinks.forEach(function (link, i) {
                link.addEventListener('keydown', function (e) {
                    if (e.key === 'ArrowDown') {
                        e.preventDefault();
                        (menuLinks[i + 1] || menuLinks[0]).focus();
                    } else if (e.key === 'ArrowUp') {
                        e.preventDefault();
                        (menuLinks[i - 1] || menuLinks[menuLinks.length - 1]).focus();
                    } else if (e.key === 'Home') {
                        e.preventDefault();
                        menuLinks[0].focus();
                    } else if (e.key === 'End') {
                        e.preventDefault();
                        menuLinks[menuLinks.length - 1].focus();
                    } else if (e.key === 'Escape') {
                        e.preventDefault();
                        close(li);
                        if (t) t.focus();
                    }
                });
            });

            // close when focus leaves the item entirely
            li.addEventListener('focusout', function (e) {
                if (!li.contains(e.relatedTarget)) close(li);
            });
        });

        // move between top-level items with left/right
        items.forEach(function (li, i) {
            var t = trigger(li);
            if (!t) return;
            t.addEventListener('keydown', function (e) {
                if (e.key !== 'ArrowRight' && e.key !== 'ArrowLeft') return;
                e.preventDefault();
                var dir = e.key === 'ArrowRight' ? 1 : -1;
                for (var step = 1; step <= items.length; step++) {
                    var next = items[(i + dir * step + items.length * step) % items.length];
                    var nt = next && trigger(next);
                    if (nt) { closeAll(); nt.focus(); return; }
                }
            });
        });

        document.addEventListener('click', function (e) {
            if (!nav.contains(e.target)) closeAll();
        });

        /* --------------------------------------------------- mobile panel */

        var panel = document.querySelector('.aw-panel');
        var scrim = document.querySelector('.aw-scrim');
        var burger = nav.querySelector('.aw-nav__burger');
        var closeBtn = panel && panel.querySelector('.aw-panel__close');
        var lastFocus = null;

        function openPanel() {
            if (!panel) return;
            lastFocus = document.activeElement;
            panel.setAttribute('data-open', 'true');
            if (scrim) scrim.setAttribute('data-open', 'true');
            document.body.classList.add('aw-locked');
            if (burger) burger.setAttribute('aria-expanded', 'true');
            if (closeBtn) closeBtn.focus();
        }

        function closePanel() {
            if (!panel) return;
            panel.removeAttribute('data-open');
            if (scrim) scrim.removeAttribute('data-open');
            document.body.classList.remove('aw-locked');
            if (burger) burger.setAttribute('aria-expanded', 'false');
            if (lastFocus && lastFocus.focus) lastFocus.focus();
        }

        if (burger) burger.addEventListener('click', openPanel);
        if (closeBtn) closeBtn.addEventListener('click', closePanel);
        if (scrim) scrim.addEventListener('click', closePanel);

        // accordions
        Array.prototype.forEach.call(document.querySelectorAll('.aw-acc__top[data-acc]'), function (btn) {
            btn.addEventListener('click', function () {
                var acc = btn.closest('.aw-acc');
                var isOpen = acc.getAttribute('data-open') === 'true';
                if (isOpen) { acc.removeAttribute('data-open'); btn.setAttribute('aria-expanded', 'false'); }
                else { acc.setAttribute('data-open', 'true'); btn.setAttribute('aria-expanded', 'true'); }
            });
        });

        document.addEventListener('keydown', function (e) {
            if (e.key !== 'Escape') return;
            if (panel && panel.getAttribute('data-open') === 'true') closePanel();
            else closeAll();
        });

        // keep focus inside the panel while it is open
        if (panel) {
            panel.addEventListener('keydown', function (e) {
                if (e.key !== 'Tab' || panel.getAttribute('data-open') !== 'true') return;
                var f = Array.prototype.filter.call(
                    panel.querySelectorAll('a[href], button:not([disabled])'),
                    function (el) { return el.offsetParent !== null; }
                );
                if (!f.length) return;
                var first = f[0], last = f[f.length - 1];
                if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
                else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
            });
        }

        // if the viewport grows past the desktop breakpoint, drop the panel
        window.addEventListener('resize', function () {
            if (window.innerWidth >= 1080 && panel && panel.getAttribute('data-open') === 'true') closePanel();
        });
    });
})();
