# Partner logo weight, contrast, and the WebP sibling trap

Measured 20 Aug 2026 against production. Everything here concerns the 21 partner
logos served from `/images/` on our own servers; the other 51 come from mPanel
and none of this applies to them.

## The WebP sibling trap — read this before replacing any logo

`.htaccess` auto-serves a `.webp` file when one exists beside the requested
image and the browser sends `Accept: image/webp`:

```apache
RewriteCond %{HTTP_ACCEPT} image/webp
RewriteCond %{REQUEST_URI} (.+)\.(png|jpg|jpeg)$
RewriteCond %{DOCUMENT_ROOT}%1.webp -f
RewriteRule (.+)\.(png|jpg|jpeg)$ $1.webp [T=image/webp,L]
```

The consequence is easy to miss: **once a logo has a `.webp` sibling, replacing
only the `.png` changes nothing for almost every visitor.** The old WebP keeps
being served and the new PNG is never requested. It will look like the upload
failed, or like a caching problem, and it is neither.

So: when you swap a logo, replace *both* files, or delete the `.webp`.

Files that currently have a `.webp` sibling on the server:

| file | PNG | WebP served |
|---|---|---|
| `appworksPartners/Media/newsmax.png` | 680 KB | 116 KB |
| `appworksPartners/Featured/QPR.png` | 213 KB | 82 KB |

## Contrast: two logos are invisible on the tile

The partner tiles are `#200a24`. A logo whose ink is also dark cannot be seen
there, however good the artwork is. Every one of the 72 entries was decoded and
its ink measured against that background as a WCAG contrast ratio.

| key | contrast | share of ink under 1.5:1 | appears on |
|---|---|---|---|
| `politika` | **1.13:1** | 100% | home, media, partners, verbavista |
| `riportal` | **2.11:1** | 62% | media, partners |

- **politika** is "ПОЛИТИКА" in near-black. It is on the homepage.
- **riportal** loses its navy "Ri" completely, so the brand reads as "portal".

Both need a white or reversed version from the partner. Recolouring their
artwork ourselves is a brand-usage decision, not a technical one.

Three more logos were flagged by a first pass and then cleared on inspection:
`fk-partizan` (44% dark ink), `futsal-partizan` (55%) and `tanjug` (42%) all
have dark crest interiors but light outlines, and the mark reads correctly. The
percentage metric was measuring fill, not legibility.

`star-gr` also measures 1.13:1 with 100% dark ink, but it is not injected on any
page — a dormant entry, harmless until someone uses it.

`newsmax` could not be decoded here: it is a 16-bit-per-channel PNG, which is
also why it is 680 KB. Re-exporting at 8 bits would shrink it a lot, but it
already has a WebP sibling so browsers are getting 116 KB and the PNG is only
served to clients that cannot take WebP.

## WebP: 5 files ready to upload, 13 not worth it

Only 2 of the 21 local logos had a `.webp` sibling. Five more are staged in the
working copy at their destination paths, under `images/` — which is gitignored,
so they will not deploy with `git pull` and need uploading the same way the PNGs
were:

| file | PNG | WebP | saving |
|---|---|---|---|
| `appworksPartners/Media/Ora De Sibiu.webp` | 178 KB | 26 KB | −84% |
| `appworksPartners/Media/Oslobodjenje.webp` | 120 KB | 29 KB | −75% |
| `appworksPartners/Featured/HKS.webp` | 108 KB | 71 KB | −32% |
| `appworksPartners/Sports/futsal-partizan-logo.webp` | 99 KB | 51 KB | −48% |
| `appworksPartners/Media/ALO.webp` | 78 KB | 10 KB | −86% |
| **total** | **574 KB** | **188 KB** | **−386 KB** |

Each was checked by encoding, decoding the result, and comparing it to the
source pixel by pixel: mean channel error at or below 1.6, no alpha error above
8, and fewer than 0.4% of pixels off by more than 40. All five are visually
indistinguishable from the PNG at render size.

A sixth, `Politika.webp`, was generated and then deliberately **discarded**. That
logo is due to be replaced, and shipping a WebP sibling for it would trigger
exactly the trap described at the top of this file.

The remaining 13 were rejected rather than shipped. They are small or
hard-edged, and the encoder available here could not do them without either
visible alpha damage or a file no smaller than the PNG.

### If you want the other 13

They need a real encoder, not a browser canvas. `cwebp` exposes lossless mode
and alpha quality, neither of which `canvas.toDataURL('image/webp', q)` does:

```bash
cwebp -z 9 -alpha_q 100 "PC Press.png" -o "PC Press.webp"   # lossless
cwebp -q 82 -alpha_q 100 Leeds.png -o Leeds.webp            # lossy, check it
```

A first attempt here gated on *worst-pixel* error instead of mean error. Every
logo with an antialiased curve has a few pixels off by ~30 at any quality, so
that gate always fell through to `q=1.0` — and at `q=1.0`, flat artwork with an
alpha channel encodes *larger* than the source PNG. The 19 files came out to
1.29 MB against 1.22 MB of PNG. If you re-run this, gate on the mean.

## Why `/images` is not in git

`.gitignore` has `/images`, so all 21 logos live on WEB2 and WEB4 only, uploaded
by hand. Both backends were checked and are byte-for-byte identical, so nothing
is out of sync today. Two consequences worth knowing:

- A fresh clone 404s every partner logo.
- An image cannot be fixed by `deploy appworks`; it needs a separate upload to
  both machines.
