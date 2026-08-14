# Image pipeline findings — app-works.app

Investigation for **T12** in [TASKS-TECH.md](TASKS-TECH.md), 14 Aug 2026. The
favicon set and the `width`/`height` attributes from that task are **done and
deployed**. This note covers the third part, which the task scoped as
*"investigate whether the CMS exposes resized/WebP variants and report; only swap
URLs if variants already exist"*.

Everything below was measured against the live CMS, not read from documentation.

## 1. mPanel already serves WebP, automatically

This is the headline finding, and it means the biggest win is **already in
place**.

```
$ curl -H 'Accept: image/webp,image/*' .../image/cache/original/files/images/iphone-16-pro.png?crop=true
content-type: image/webp   429,632 B

$ curl .../image/cache/original/files/images/iphone-16-pro.png?crop=true
content-type: image/png    652,477 B
```

mPanel content-negotiates on the `Accept` header and hands WebP to any browser
that asks — which is every browser in use. The `.png` in the URL is the fallback,
not what most visitors download. Confirmed in Chromium: the homepage hero arrives
as 420 KB of WebP, not 652 KB of PNG.

**Action: none.** There is no `.webp` URL to switch to (`…/iphone-16-pro.webp`
returns 404) and no `<picture>` element needed. Do not "add WebP support" — it is
already there and a `<picture>` block would only add markup that duplicates it.

## 2. Resized renditions exist, at fixed sizes

Every article image comes back from the API with a `images` map of renditions,
each carrying real `metadata.width` / `metadata.height`:

| rendition | box | notes |
|---|---|---|
| `thumb-mini` | 90×90 | |
| `thumb` | 160×90 | |
| `small-full` | 320×400 | |
| `medium-full` | 480×400 | used by the new related-articles cards |
| `large-full` | 640×400 | used by the existing insights teasers |
| `extra-large-full` | — | **larger than `original`** for the hero (707 KB vs 652 KB); avoid |
| `original` | native | |

The article-page related-articles module added in T7 already uses `medium-full`
with its declared dimensions, so that block is right by construction.

## 3. The 652 KB homepage hero — tried, backed out

`iphone-16-pro.png` is 1200×1420 native and renders into a 560 px-wide box
(549×650 actual at 1440 viewport, 342×405 at 390).

A `srcset` of `large-full 640w` + `original 1200w` was implemented and measured:

| screen | before | after | rendition chosen |
|---|---|---|---|
| desktop 1× | 420 KB | **140 KB** | large-full |
| desktop 2× | 420 KB | 420 KB | original |
| mobile 1× | 420 KB | **140 KB** | large-full |
| mobile 3× | 420 KB | 420 KB | original |

Layout was unaffected (rendered box identical to the pixel). **But the visual
check failed**: the next rendition down is 640 px against a 560 px box — a
1.14× downscale — and the fine UI text inside the phone mockups goes visibly
soft on a 1× display. Screenshot comparison of the hero crop shows it clearly.

The change was reverted. This is a brand-visual tradeoff on the site's main
image, not a free win, so it is the client's call rather than mine:

- **Take the 280 KB** if 1× displays matter more than hero crispness. The
  `srcset`/`sizes` markup is in the git history of `home.html` and takes a
  minute to restore.
- **Better fix:** ask mPanel for a rendition around 1120 px for this image
  (2× the 560 px box). Then `srcset` is a genuine free win — sharp on 2×,
  and 1× screens still skip the oversized original.

What *was* kept: `fetchpriority="high"` on the hero. It is the LCP element and
the hint gets it ahead of the partner-logo images in the request queue, with no
visual tradeoff at all.

## 4. Where the remaining bytes are

The homepage requests **75 images**, of which only 7 are in the HTML source. The
rest are injected at runtime by `js/partner-logos.js` and `js/insights-teaser.js`.
Several partner logos are absurdly oversized for their slot:

| file | native | rendered | overdraw |
|---|---|---|---|
| `images/appworksPartners/Media/newsmax.png` | 3840×915 | 146×35 | 26× |
| `financialafrik-logo…` | 2560×419 | 146×24 | 17× |
| `HKS.png` | 2560×1438 | 63×35 | 40× |
| `stoiximan-gbl-logo` | 1638×1518 | 38×35 | 43× |
| `Leeds.png` | 1200×1473 | 29×35 | 41× |

These are decorative logos rendered at 24–80 px. Serving them at native
resolution is pure waste, and unlike the hero there is **no quality argument** —
nobody can see detail in an 80 px logo.

Two paths, both outside T12 as scoped:

1. **Local files** (`/images/appworksPartners/…`, in this repo): resize to 2× the
   largest rendered size and commit. Entirely within our control, no CMS
   involvement. Biggest single lever on homepage weight.
2. **mPanel-hosted logos**: switch the URLs in `js/partner-logos.js` from
   `image/cache/original/` to `image/cache/thumb/` or `small-full`. Variants
   exist, so this is the URL swap T12 contemplated — it just applies to the
   partner marquee rather than the hero.

## 5. Per-page `og:image`

Every page still points `og:image` at the Appworks logo PNG rather than anything
page-specific. That is a content decision (someone has to make or choose the
images) and is tracked in the content doc, not here.
