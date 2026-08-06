/**
 * Insights teaser — the latest articles from one category, rendered into any
 * container that carries data-insights-category.
 *
 *   <div class="aw-artgrid"
 *        data-insights-category="10"
 *        data-insights-limit="5"></div>
 *
 * Category ids match the Insights filter buttons in articles.php:
 *   3 = Sports, 4 = Media, 9 = AI, 10 = Grant Projects, 12 = Pchela
 *
 * Extracted from an inline copy on projects.html once a second page needed it.
 * Three hand-maintained copies of the same fetch would have drifted.
 *
 * Depends on css/product.css for .aw-artgrid, .aw-artcard and .aw-thumb.
 */
(function () {
    'use strict';

    var API = 'https://appworks.mpanel.app/api/webV2/getArticles';
    var AUTH = 'kmNTuI8dRmRX';
    var FALLBACK_IMG = 'https://app-works.app/images/placeholder.jpg';

    /*
     * Articles in these categories live on other domains and must not surface on
     * this site. The rule is enforced at every fetch site rather than centrally;
     * see the list in CLAUDE.md. This file is one of those sites.
     */
    var HIDDEN_SLUGS = ['litteraworks-com'];

    function escapeHtml(value) {
        return String(value == null ? '' : value).replace(/[&<>"']/g, function (c) {
            return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c];
        });
    }

    function createSlug(title) {
        return String(title == null ? '' : title).toLowerCase()
            .replace(/[^a-z0-9\s-]/g, '').replace(/\s+/g, '-')
            .replace(/-+/g, '-').replace(/^-|-$/g, '');
    }

    /* Short month, so "21 Feb 2026" fits on one line beside the category badge in
       a ~280px card. The long form wrapped to a second line and pushed that one
       card's title out of alignment with its neighbours. */
    function formatDate(value) {
        var d = new Date(value);
        if (isNaN(d.getTime())) return '';
        return d.toLocaleDateString('en-GB', { day: 'numeric', month: 'short', year: 'numeric' });
    }

    function isHidden(article) {
        return (article.categories || []).some(function (c) {
            return HIDDEN_SLUGS.indexOf(c.slug) !== -1;
        });
    }

    /*
     * Badge the category the list is actually filtered on, not just the first one
     * the API happens to return. Articles carry several: one Media article is also
     * in "LitteraWorks", another is in "Insights", "Media" and "Sport". Taking
     * cats[0] badged those as LITTERAWORKS and INSIGHTS inside a Media list, which
     * reads like a mistake.
     */
    function categoryName(article, requestedId, fallback) {
        var cats = (article.categories || []).filter(function (c) {
            return HIDDEN_SLUGS.indexOf(c.slug) === -1;
        });
        var match = cats.filter(function (c) { return String(c.id) === String(requestedId); })[0];
        if (match) return match.name;
        return cats.length ? cats[0].name : fallback;
    }

    function imageFor(article) {
        var images = article.images || {};
        // large-full is 640px; medium-full is 480px and visibly soft in these cards
        return (images['large-full'] && images['large-full'].url)
            || (images['medium-full'] && images['medium-full'].url)
            || FALLBACK_IMG;
    }

    function cardHtml(article, requestedId, fallbackCategory) {
        var slug = article.slug || createSlug(article.title);
        var img = imageFor(article);
        var title = escapeHtml(article.title);
        return '<a href="/article/' + encodeURIComponent(slug) + '" class="aw-artcard">'
            + '<div class="aw-thumb aw-thumb--wide" style="--aw-thumb-img: url(\'' + img + '\')">'
            + '<img loading="lazy" src="' + img + '" alt="' + title + '"'
            + ' onerror="this.src=\'' + FALLBACK_IMG + '\'">'
            + '</div>'
            + '<div class="aw-artcard__body">'
            + '<div class="aw-artcard__meta">'
            + '<span class="aw-artcard__cat">' + escapeHtml(categoryName(article, requestedId, fallbackCategory)) + '</span>'
            + '<span>' + formatDate(article.created_at) + '</span>'
            + '</div>'
            + '<h3 class="aw-artcard__title">' + title + '</h3>'
            + '<span class="aw-artcard__more">Read more <i class="bi bi-arrow-right" aria-hidden="true"></i></span>'
            + '</div>'
            + '</a>';
    }

    /* An empty grid looks broken, so the whole section goes rather than sit there
       with a heading over nothing. */
    function hideSection(grid) {
        var section = grid.closest ? grid.closest('section') : null;
        if (section) section.style.display = 'none';
        else grid.style.display = 'none';
    }

    function load(grid) {
        var category = grid.getAttribute('data-insights-category');
        var limit = parseInt(grid.getAttribute('data-insights-limit'), 10) || 5;
        var fallbackCategory = grid.getAttribute('data-insights-label') || 'Insights';
        if (!category) return;

        fetch(API + '?category[]=' + encodeURIComponent(category) + '&articleLimit=' + limit, {
            headers: { 'Authorization': AUTH }
        })
            .then(function (r) { return r.json(); })
            .then(function (data) {
                var articles = (data && data.result && data.result.articles) || [];
                var visible = articles.filter(function (a) { return !isHidden(a); }).slice(0, limit);
                if (!visible.length) { hideSection(grid); return; }
                grid.innerHTML = visible.map(function (a) {
                    return cardHtml(a, category, fallbackCategory);
                }).join('');
            })
            .catch(function (err) {
                console.error('Insights teaser failed to load (category ' + category + '):', err);
                hideSection(grid);
            });
    }

    function init() {
        var grids = document.querySelectorAll('[data-insights-category]');
        for (var i = 0; i < grids.length; i++) load(grids[i]);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
