# FanFuel: content removed from the live page

Everything here was on fanfuel.html and was removed at the client's request on
10 Aug 2026. Nothing was rewritten before removal, so these are the exact blocks.

---

## 1. Fan content on the stadium screen (Jumbotron integration)

Removed "for now". It sat between the fan-content block and the in-stadium
section, as its own full-width section with a drawn stadium screen.

One question was still open on it and is still open: **is Jumbotron live at a
venue, or built and not yet deployed?** The page carried that as a visible
`aw-todo` note.

The FAQ answer about moderation lost a sentence with it, because it promised
something the page no longer explains: *"Nothing goes on the stadium screen
without being approved first."* The rest of that answer is unchanged.

```html
    <section class="aw-sec">
        <div class="aw-wrap aw-wrap--mid">
            <div class="text-center" style="margin-bottom: clamp(1.75rem, 4vh, 2.75rem);">
                <span class="aw-eyebrow">Jumbotron integration</span>
                <h2 class="aw-h2" style="margin-top: clamp(1rem, 2.5vh, 1.5rem);">Fan content on the stadium screen</h2>
                <p class="aw-lede mx-auto" style="max-width: 42rem; margin-top: clamp(0.75rem, 2vh, 1.25rem);">The best fan uploads are displayed live on the big screen. The app stops being a second screen and becomes part of the matchday itself, and it creates a placement your commercial team can sell.</p>
            </div>
            <div class="ff-jumbo">
                <div class="ff-jumbo__screen" role="img" aria-label="Stadium screen displaying selected fan uploads">
                    <div class="ff-jumbo__cell"><i class="bi bi-image" aria-hidden="true"></i></div>
                    <div class="ff-jumbo__cell"><i class="bi bi-play-btn" aria-hidden="true"></i></div>
                    <div class="ff-jumbo__cell"><i class="bi bi-image" aria-hidden="true"></i></div>
                </div>
                <div class="ff-jumbo__legs"><span></span><span></span></div>
                <p class="text-center aw-sub" style="margin-top: clamp(0.75rem, 2vh, 1.25rem);">Fan uploads &rarr; moderation in mPanel &rarr; live on the screen</p>
            </div>
            <div class="aw-todo" style="margin-top: clamp(1.25rem, 3vh, 2rem);">Deployment status unconfirmed: is Jumbotron live at a venue, or built and not yet deployed?</div>
        </div>
    </section>
```

The CSS went with it, since it styled nothing else:

```css
        .ff-jumbo {
            position: relative;
            border-radius: clamp(1rem, 2vw, 1.5rem);
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.14);
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.08), rgba(255, 255, 255, 0.02));
            padding: clamp(1.25rem, 3vw, 2.5rem);
        }
        .ff-jumbo__screen {
            aspect-ratio: 16 / 7;
            border-radius: 0.75rem;
            border: 1px solid rgba(255, 255, 255, 0.16);
            background:
                radial-gradient(circle at 50% 40%, rgba(255, 75, 54, 0.22) 0%, transparent 60%),
                #0E0412;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0.5rem;
            padding: 0.75rem;
        }
        .ff-jumbo__cell {
            border-radius: 0.5rem;
            background: rgba(255, 255, 255, 0.07);
            border: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, 0.3);
            font-size: clamp(0.9375rem, 2vw, 1.5rem);
        }
        .ff-jumbo__legs {
            display: flex;
            justify-content: center;
            gap: clamp(3rem, 12vw, 7rem);
            margin-top: -1px;
        }
        .ff-jumbo__legs span {
            width: 0.5rem;
            height: clamp(1.25rem, 3vw, 2rem);
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.16), rgba(255, 255, 255, 0.02));
        }
```

---

## 2. Managed from mPanel CMS

Removed. It carried the only in-body link to /cms.html on this page; mPanel is
still reachable from the nav, the footer and the related-products section.

```html
    <section class="aw-sec">
        <div class="aw-wrap aw-wrap--mid text-center">
            <span class="aw-eyebrow">How it runs</span>
            <h2 class="aw-h2" style="margin-top: clamp(1rem, 2.5vh, 1.5rem);">Managed from mPanel CMS</h2>
            <p class="aw-lede mx-auto" style="max-width: 44rem; margin-top: clamp(1rem, 2.5vh, 1.5rem);">Your team runs the app from mPanel: publish content, send notifications, import match data and watch how fans respond. Day to day it needs no technical expertise, and nothing about the app requires a developer to change.</p>
            <div style="margin-top: clamp(1.5rem, 4vh, 2.25rem);">
                <a href="/cms.html" class="aw-btn-2"><span>See what mPanel does</span><i class="bi bi-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
```

---

## 3. What's included, Priced separately, and How it's priced

Two sections, three blocks, removed together. The two price figures were never
filled in: both showed a placeholder and a visible note saying the figures were
withheld pending a decision.

Three FAQ answers still refer to what these sections explained, and were left
alone rather than quietly rewritten:

- *"What happens to our app and our fans at the end of the 24 months?"* - the
  24-month term was stated here.
- *"Every upgrade we build ... is included in the monthly fee"* - the monthly
  platform fee was defined here.
- *"If a connection needs building from scratch it is a custom API integration:
  typically 15 to 40 hours at EUR 35 per hour"* - a concrete rate, still on the
  page, now the only price anywhere on it.

The full markup follows.

```html
    <!-- ======================================== 11. WHAT'S INCLUDED === -->
    <section class="aw-sec">
        <div class="aw-wrap">
            <div class="text-center" style="margin-bottom: clamp(2rem, 5vh, 3.5rem);">
                <h2 class="aw-h2">What's included</h2>
                <div class="flex justify-center" style="margin-top: clamp(1rem, 2.5vh, 1.5rem);"><div class="aw-rule"></div></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4" style="gap: clamp(1rem, 2.5vw, 1.75rem);">
                <div class="aw-card">
                    <i class="bi bi-pencil-square aw-icon" aria-hidden="true"></i>
                    <h3 class="aw-h4" style="margin: clamp(0.75rem, 2vh, 1rem) 0 clamp(0.625rem, 1.5vh, 0.875rem);">Development and design</h3>
                    <ul class="aw-list">
                        <li><i class="bi bi-check2 aw-tick" aria-hidden="true"></i><span class="aw-body">App structure and functionality planning</span></li>
                        <li><i class="bi bi-check2 aw-tick" aria-hidden="true"></i><span class="aw-body">Proposal with mockups</span></li>
                        <li><i class="bi bi-check2 aw-tick" aria-hidden="true"></i><span class="aw-body">Mobile app design</span></li>
                        <li><i class="bi bi-check2 aw-tick" aria-hidden="true"></i><span class="aw-body">iOS, Android and Huawei builds</span></li>
                    </ul>
                </div>
                <div class="aw-card">
                    <i class="bi bi-rocket-takeoff aw-icon" aria-hidden="true"></i>
                    <h3 class="aw-h4" style="margin: clamp(0.75rem, 2vh, 1rem) 0 clamp(0.625rem, 1.5vh, 0.875rem);">Onboarding and branding</h3>
                    <ul class="aw-list">
                        <li><i class="bi bi-check2 aw-tick" aria-hidden="true"></i><span class="aw-body">Initial onboarding</span></li>
                        <li><i class="bi bi-check2 aw-tick" aria-hidden="true"></i><span class="aw-body">Apps published under your brand</span></li>
                    </ul>
                </div>
                <div class="aw-card">
                    <i class="bi bi-arrow-repeat aw-icon" aria-hidden="true"></i>
                    <h3 class="aw-h4" style="margin: clamp(0.75rem, 2vh, 1rem) 0 clamp(0.625rem, 1.5vh, 0.875rem);">Platform and updates</h3>
                    <ul class="aw-list">
                        <li><i class="bi bi-check2 aw-tick" aria-hidden="true"></i><span class="aw-body">Every platform upgrade we build</span></li>
                        <li><i class="bi bi-check2 aw-tick" aria-hidden="true"></i><span class="aw-body">Admin access to mPanel</span></li>
                        <li><i class="bi bi-check2 aw-tick" aria-hidden="true"></i><span class="aw-body">User management and insights module</span></li>
                    </ul>
                </div>
                <div class="aw-card">
                    <i class="bi bi-hdd-network aw-icon" aria-hidden="true"></i>
                    <h3 class="aw-h4" style="margin: clamp(0.75rem, 2vh, 1rem) 0 clamp(0.625rem, 1.5vh, 0.875rem);">Infrastructure and support</h3>
                    <ul class="aw-list">
                        <li><i class="bi bi-check2 aw-tick" aria-hidden="true"></i><span class="aw-body">All hosting</span></li>
                        <li><i class="bi bi-check2 aw-tick" aria-hidden="true"></i><span class="aw-body">24h urgent infrastructure support</span></li>
                        <li><i class="bi bi-check2 aw-tick" aria-hidden="true"></i><span class="aw-body">Tech support in working hours</span></li>
                    </ul>
                </div>
            </div>

            <!-- kept visually distinct from the included list so it cannot be misread as included -->
            <div style="margin-top: clamp(2rem, 5vh, 3rem);">
                <h3 class="aw-h4" style="margin: 0 0 clamp(0.75rem, 2vh, 1.125rem);">Priced separately</h3>
                <div class="grid grid-cols-1 md:grid-cols-3" style="gap: clamp(0.75rem, 2vw, 1.25rem);">
                    <div class="aw-card" style="border-style: dashed; border-color: rgba(255, 255, 255, 0.18); background: rgba(255, 255, 255, 0.02);">
                        <i class="bi bi-plug" aria-hidden="true" style="color: rgba(255, 255, 255, 0.55); font-size: 1.375rem;"></i>
                        <p class="aw-body" style="margin: 0.625rem 0 0;">Custom API integrations</p>
                    </div>
                    <div class="aw-card" style="border-style: dashed; border-color: rgba(255, 255, 255, 0.18); background: rgba(255, 255, 255, 0.02);">
                        <i class="bi bi-cpu" aria-hidden="true" style="color: rgba(255, 255, 255, 0.55); font-size: 1.375rem;"></i>
                        <p class="aw-body" style="margin: 0.625rem 0 0;">Custom AI training</p>
                    </div>
                    <div class="aw-card" style="border-style: dashed; border-color: rgba(255, 255, 255, 0.18); background: rgba(255, 255, 255, 0.02);">
                        <i class="bi bi-shield-check" aria-hidden="true" style="color: rgba(255, 255, 255, 0.55); font-size: 1.375rem;"></i>
                        <p class="aw-body" style="margin: 0.625rem 0 0;">AI administration for fan-generated content and forum</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================================== 12. COMMERCIAL MODEL === -->
    <section class="aw-sec">
        <div class="aw-wrap aw-wrap--mid">
            <div class="text-center" style="margin-bottom: clamp(2rem, 5vh, 3rem);">
                <h2 class="aw-h2">How it's priced</h2>
                <p class="aw-lede mx-auto" style="max-width: 42rem; margin-top: clamp(1rem, 2.5vh, 1.5rem);">One upfront fee, then a monthly platform fee on a fixed term. No per-feature pricing and no charge for platform upgrades.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2" style="gap: clamp(1rem, 2.5vw, 1.75rem);">
                <div class="aw-card">
                    <p class="aw-sub" style="margin: 0;">Upfront</p>
                    <p class="aw-h3" style="margin: 0.375rem 0 0;">-</p>
                    <p class="aw-body" style="margin: 0.625rem 0 0;">Covers the build. The first three months are paid upfront, and those invoices are included in this fee.</p>
                </div>
                <div class="aw-card aw-card--accent">
                    <p class="aw-sub" style="margin: 0;">Monthly platform fee</p>
                    <p class="aw-h3" style="margin: 0.375rem 0 0;">-</p>
                    <p class="aw-body" style="margin: 0.625rem 0 0;">Hosting, support, the insights module and every platform upgrade we build.</p>
                </div>
            </div>

            <ul class="aw-list" style="margin-top: clamp(1.5rem, 4vh, 2.25rem);">
                <li><i class="bi bi-check2 aw-tick" aria-hidden="true"></i><span class="aw-body">Twenty-four month term</span></li>
                <li><i class="bi bi-check2 aw-tick" aria-hidden="true"></i><span class="aw-body">First invoice falls due when the app is ready, not when the contract is signed</span></li>
                <li><i class="bi bi-check2 aw-tick" aria-hidden="true"></i><span class="aw-body">Platform upgrades are never charged as new projects</span></li>
            </ul>

            <div class="aw-todo" style="margin-top: clamp(1.25rem, 3vh, 2rem);">Figures withheld pending your decision, see the note on the VerbaVista comparison</div>
        </div>
    </section>

```
