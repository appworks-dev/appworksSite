/**
 * Single source of truth for the site navigation, and the generator that writes
 * it into every page.
 *
 * Why a generator: the load balancer caches HTML and serves stale static copies,
 * which killed two attempts at PHP includes (commit f6eabde). A JS-injected nav
 * would not be in the HTML source, so Google could not reliably follow it. This
 * writes real, crawlable markup into each file between markers, with no runtime
 * dependency and nothing for production to know about.
 *
 *   node tools/build-nav.mjs           write the nav into every page
 *   node tools/build-nav.mjs --check   report drift without writing
 *
 * Edit NAV below, re-run, done. CSS lives in css/nav.css, behaviour in js/nav.js.
 */
import { readFileSync, writeFileSync, existsSync } from 'node:fs';

const ROOT = new URL('..', import.meta.url).pathname.replace(/^\/([A-Za-z]:)/, '$1');
const CHECK = process.argv.includes('--check');

const LOGO_W = 749, LOGO_H = 673;   // intrinsic size of the file below
const LOGO = 'https://appworks.mpanel.app/image/cache/original/files/images/appworks-beli-logo.png?crop=true';
const EXT = { external: true };

// ---------------------------------------------------------------- structure ---
export const NAV = [
    { id: 'home', label: 'Home', href: '/' },

    {
        id: 'media', label: 'Media', href: '/media.html', cols: 2,
        items: [
            // "Mobile apps" is deliberately generic; the brand is introduced on the page.
            { label: 'Mobile apps', href: '/verbavista.html', note: 'VerbaVista for publishers' },
            { label: 'mPanel CMS', href: '/cms.html', note: 'Publishing platform' },
            { label: 'Litteraworks', href: 'https://litteraworks.com/', note: 'Transcription & subtitles', ...EXT },
            { label: 'Pchela', href: 'https://pchela.app/', note: 'AI asset management', ...EXT },
            { label: 'Media Puls', href: '/monitoring.html#media-puls', note: 'Media monitoring' },
            // No destination yet: the site is being built and will be external.
            // Swap `soon` for `href` + EXT when the URL arrives.
            { label: 'Fronisa', note: 'AI chatbot & SEO', soon: true },
        ],
    },

    {
        id: 'sport', label: 'Sport', href: '/sport.html', cols: 2,
        items: [
            { label: 'Mobile apps', href: '/fanfuel.html', note: 'FanFuel for clubs & leagues' },
            { label: 'mPanel CMS', href: '/cms.html', note: 'Publishing platform' },
            { label: 'Litteraworks', href: 'https://litteraworks.com/', note: 'Transcription & subtitles', ...EXT },
            { label: 'Pchela', href: 'https://pchela.app/', note: 'AI asset management', ...EXT },
            { label: 'Sport Puls', href: '/monitoring.html#sport-puls', note: 'Sport monitoring' },
            { label: 'Fronisa', note: 'AI chatbot & SEO', soon: true },
        ],
    },

    {
        id: 'products', label: 'Products', cols: 2,
        items: [
            { label: 'mPanel CMS', href: '/cms.html', note: 'Publishing platform' },
            { label: 'VerbaVista', href: '/verbavista.html', note: 'Publisher apps' },
            { label: 'FanFuel', href: '/fanfuel.html', note: 'Fan engagement apps' },
            { label: 'Litteraworks', href: 'https://litteraworks.com/', note: 'Transcription & subtitles', ...EXT },
            { label: 'Pchela', href: 'https://pchela.app/', note: 'AI asset management', ...EXT },
            { label: 'Media monitoring', href: '/monitoring.html', note: 'Media Puls / Sport Puls' },
            { label: 'Fronisa', note: 'AI chatbot & SEO', soon: true },
        ],
    },

    { id: 'grants', label: 'Grant Projects', href: '/projects.html' },
    { id: 'insights', label: 'Insights', href: '/insights' },

    {
        id: 'company', label: 'Company', cols: 1, end: true,
        items: [
            { label: 'About us', href: '/about.html' },
            { label: 'Partners', href: '/partners.html' },
            { label: 'Contact', href: '/contact.html' },
        ],
    },
];

/** file -> which top-level item is the current section */
const CURRENT = {
    'home.html': 'home',
    'media.html': 'media',
    'sport.html': 'sport',
    'cms.html': 'products',
    'verbavista.html': 'products',
    'fanfuel.html': 'products',
    'monitoring.html': 'products',
    'fronisa.html': 'products',
    'projects.html': 'grants',
    'articles.php': 'insights',
    'articles.html': 'insights',
    'article.php': 'insights',
    'about.html': 'company',
    'partners.html': 'company',
    'contact.html': 'company',
    'consultation.html': null,
    // Served by ErrorDocument from any depth, so it depends on the generator's
    // absolute asset paths (/css/nav.css, /js/nav.js) - do not make them relative.
    '404.html': null,
};

const PAGES = Object.keys(CURRENT);

// ------------------------------------------------------------------ markup ---
const esc = (s) => String(s).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
const extAttr = (i) => (i.external ? ' target="_blank" rel="noopener"' : '');
const extMark = (i) => (i.external ? ' <i class="bi bi-box-arrow-up-right aw-dd__ext" aria-hidden="true"></i>' : '');

function desktop(current) {
    const top = NAV.map((n) => {
        const isCurrent = current === n.id;
        if (!n.items) {
            return `                <li class="aw-nav__item">
                    <a class="aw-nav__link" href="${n.href}"${isCurrent ? ' aria-current="page"' : ''}>${esc(n.label)}</a>
                </li>`;
        }
        const id = `aw-dd-${n.id}`;
        // hub-backed menus keep their top level a real link; the rest are buttons
        const trigger = n.href
            ? `<a class="aw-nav__link" href="${n.href}" aria-expanded="false" aria-controls="${id}"${isCurrent ? ' aria-current="page"' : ''}>${esc(n.label)} <i class="bi bi-chevron-down aw-nav__caret" aria-hidden="true"></i></a>`
            : `<button type="button" class="aw-nav__trigger" aria-expanded="false" aria-controls="${id}">${esc(n.label)} <i class="bi bi-chevron-down aw-nav__caret" aria-hidden="true"></i></button>`;
        const links = n.items.map((i) => {
            const inner = `<span class="aw-dd__label">${esc(i.label)}${extMark(i)}</span>${i.note ? `
                            <span class="aw-dd__note">${esc(i.note)}</span>` : ''}`;
            // no href yet: a dimmed non-link, not a dead link
            if (i.soon) {
                return `                        <span class="aw-dd__soon" aria-disabled="true">
                            ${inner}
                        </span>`;
            }
            return `                        <a class="aw-dd__link" href="${i.href}"${extAttr(i)}>
                            ${inner}
                        </a>`;
        }).join('\n');
        return `                <li class="aw-nav__item${n.end ? ' aw-nav__item--end' : ''}">
                    ${trigger}
                    <div class="aw-dd${n.cols === 2 ? ' aw-dd--two-col' : ''}" id="${id}" role="group" aria-label="${esc(n.label)}">
${links}
                    </div>
                </li>`;
    }).join('\n');

    return `        <nav class="aw-nav" aria-label="Main">
            <div class="aw-nav__inner">
                <a class="aw-nav__logo" href="/" aria-label="Appworks home">
                    <img src="${LOGO}" alt="Appworks" width="${LOGO_W}" height="${LOGO_H}">
                </a>
                <ul class="aw-nav__list">
${top}
                </ul>
                <button type="button" class="aw-nav__burger" aria-expanded="false" aria-controls="aw-panel" aria-label="Open menu">
                    <i class="bi bi-list" aria-hidden="true"></i>
                </button>
            </div>
        </nav>`;
}

function mobile() {
    const blocks = NAV.map((n) => {
        if (!n.items) {
            return `                <div class="aw-acc">
                    <a class="aw-acc__top" href="${n.href}">${esc(n.label)}</a>
                </div>`;
        }
        const list = n.items.map((i) => (i.soon
            ? `                            <li><span class="aw-acc__soon" aria-disabled="true">${esc(i.label)}</span></li>`
            : `                            <li><a href="${i.href}"${extAttr(i)}>${esc(i.label)}${extMark(i)}</a></li>`)).join('\n');
        // hub-backed sections get their own overview link first
        const hub = n.href ? `                            <li><a href="${n.href}">${esc(n.label)} overview</a></li>\n` : '';
        return `                <div class="aw-acc">
                    <button type="button" class="aw-acc__top" data-acc aria-expanded="false">
                        ${esc(n.label)} <i class="bi bi-chevron-down aw-nav__caret" aria-hidden="true"></i>
                    </button>
                    <div class="aw-acc__inner">
                        <ul class="aw-acc__list">
${hub}${list}
                        </ul>
                    </div>
                </div>`;
    }).join('\n');

    return `        <div class="aw-scrim" hidden-until-open></div>
        <div class="aw-panel" id="aw-panel" role="dialog" aria-modal="true" aria-label="Site menu">
            <div class="aw-panel__head">
                <a href="/" aria-label="Appworks home"><img src="${LOGO}" alt="Appworks" width="${LOGO_W}" height="${LOGO_H}"></a>
                <button type="button" class="aw-panel__close" aria-label="Close menu">
                    <i class="bi bi-x-lg" aria-hidden="true"></i>
                </button>
            </div>
            <div class="aw-panel__body">
${blocks}
                <div class="aw-panel__cta">
                    <a href="/contact.html">Let's Talk <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>`;
}

const block = (file) => [
    '<!-- NAV:START — generated by tools/build-nav.mjs. Do not edit here; edit that file and re-run. -->',
    desktop(CURRENT[file]),
    mobile(),
    '<!-- NAV:END -->',
].join('\n');

// ------------------------------------------------------------- replacement ---

/** Find the nav region: optional leading comment + balanced <header>, plus any
 *  overlay / mobile-menu nav that follows it. */
function findRegion(lines) {
    const markerStart = lines.findIndex((l) => l.includes('<!-- NAV:START'));
    if (markerStart !== -1) {
        const markerEnd = lines.findIndex((l) => l.includes('<!-- NAV:END'));
        if (markerEnd === -1) throw new Error('NAV:START without NAV:END');
        return { start: markerStart, end: markerEnd, kind: 'markers' };
    }

    const bodyAt = lines.findIndex((l) => /<body\b/.test(l));
    if (bodyAt === -1) throw new Error('no <body>');
    let start = -1;
    for (let i = bodyAt; i < Math.min(bodyAt + 80, lines.length); i++) {
        if (/^\s*<header\b/.test(lines[i])) { start = i; break; }
    }
    if (start === -1) throw new Error('no <header> after <body>');

    let depth = 0, end = -1;
    for (let i = start; i < lines.length; i++) {
        depth += (lines[i].match(/<header\b/g) || []).length;
        depth -= (lines[i].match(/<\/header>/g) || []).length;
        if (depth === 0) { end = i; break; }
    }
    if (end === -1) throw new Error('unbalanced <header>');

    // absorb the leading comment
    for (let i = start - 1; i >= Math.max(0, start - 3); i--) {
        if (lines[i].trim() === '') continue;
        if (/^\s*<!--/.test(lines[i]) && !/NAV:/.test(lines[i])) { start = i; }
        break;
    }
    // absorb trailing mobile bits
    for (let i = end + 1; i < Math.min(end + 8, lines.length); i++) {
        if (lines[i].trim() === '') continue;
        if (lines[i].includes('mobile-menu-overlay')) { end = i; continue; }
        if (/<!--\s*Mobile Menu/i.test(lines[i])) { end = i; continue; }
        if (/<nav[^>]*class="[^"]*mobile-menu/.test(lines[i])) {
            for (let j = i; j < lines.length; j++) if (/<\/nav>/.test(lines[j])) { end = j; break; }
            continue;
        }
        break;
    }
    return { start, end, kind: 'legacy' };
}

function ensureAsset(src, tag, anchor) {
    if (src.includes(tag.match(/(?:href|src)="([^"]+)"/)[1])) return src;
    return src.replace(anchor, tag + '\n' + anchor);
}

let changed = 0, skipped = 0, failed = 0;
for (const file of PAGES) {
    const path = ROOT + file;
    if (!existsSync(path)) { console.log(`  skip   ${file} (does not exist yet)`); skipped++; continue; }
    let src = readFileSync(path, 'utf8');
    const eol = src.includes('\r\n') ? '\r\n' : '\n';
    let lines = src.split(/\r?\n/);

    let region;
    try { region = findRegion(lines); }
    catch (e) { console.log(`  FAIL   ${file}: ${e.message}`); failed++; continue; }

    const generated = block(file).split('\n');
    const existing = lines.slice(region.start, region.end + 1).join('\n');
    const wanted = generated.join('\n');

    if (existing === wanted) { console.log(`  ok     ${file} (already current)`); continue; }
    if (CHECK) { console.log(`  DRIFT  ${file} (${region.kind}, ${region.end - region.start + 1} lines)`); changed++; continue; }

    lines.splice(region.start, region.end - region.start + 1, ...generated);
    src = lines.join(eol);

    src = ensureAsset(src, '    <link rel="stylesheet" href="/css/nav.css">', '</head>');
    src = ensureAsset(src, '<script src="/js/nav.js" defer></script>', '</body>');

    writeFileSync(path, src, 'utf8');
    console.log(`  write  ${file}  (replaced ${region.kind} region, ${region.end - region.start + 1} -> ${generated.length} lines)`);
    changed++;
}

console.log(`\n${CHECK ? 'drifted' : 'written'}: ${changed}   skipped: ${skipped}   failed: ${failed}`);
if (failed) process.exit(1);
