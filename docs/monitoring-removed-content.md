# Content removed from monitoring.html

Preserved verbatim before deletion. Removed at the client's request on
2026-08-07, all four "for now" - so the CSS they used is still in
`css/product.css` rather than deleted with them:

- `.aw-plans`, `.aw-plans-scroll`, `.aw-plans__*` for the Plans grid. That block
  also carries a documented fix for mobile Chrome expanding the layout viewport,
  which would be expensive to rediscover.
- `.aw-pending` for the "pending" chips in Platform capabilities.
- `.aw-yes` / `.aw-no` for the plan grid ticks.

Two of the four were placeholders rather than finished copy, and both were
waiting on the same person:

- Platform capabilities: six category cards, every one marked pending, with a
  note that the contents needed confirming with Nikola.
- Plans: three tiers with four settled gates and the rest marked pending, plus
  the note that the figures needed confirming with Nikola.

The other two were finished:

- What we don't do: the AVE argument. Worth keeping somewhere, since it is the
  clearest statement of how this product differs from press clipping.
- Explore our platforms: cross-links to Litteraworks, Pchela and Fronisa.

## 6. Platform capabilities

```html
    <!-- ==================================== 6. PLATFORM CAPABILITIES === -->
    <section class="aw-sec">
        <div class="aw-wrap">
            <div class="text-center" style="margin-bottom: clamp(1.5rem, 4vh, 2.5rem);">
                <h2 class="aw-h2" style="margin-bottom: 1.5rem;">Platform capabilities</h2>
                <div class="flex justify-center"><div class="aw-rule"></div></div>
            </div>

            <div class="aw-todo" data-mp-placeholder="capabilities" style="margin-bottom: clamp(1.5rem, 3vh, 2rem);">Grid built, contents pending confirmation with Nikola — alerts, exports, reporting, seats, API, language coverage</div>

            <!-- Deliberately empty. The headings below are the categories named in
                 the brief; the specifics under each need confirming before they go
                 on a public page. -->
            <div id="monitoring-capabilities" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3" style="gap: clamp(1rem, 2.5vw, 1.5rem);">
                <div class="aw-card"><i class="bi bi-bell aw-icon" aria-hidden="true"></i><h3 class="aw-h4" style="margin-top: 0.75rem;">Alerts<span class="aw-pending">pending</span></h3></div>
                <div class="aw-card"><i class="bi bi-box-arrow-up aw-icon" aria-hidden="true"></i><h3 class="aw-h4" style="margin-top: 0.75rem;">Exports<span class="aw-pending">pending</span></h3></div>
                <div class="aw-card"><i class="bi bi-file-earmark-text aw-icon" aria-hidden="true"></i><h3 class="aw-h4" style="margin-top: 0.75rem;">Reporting<span class="aw-pending">pending</span></h3></div>
                <div class="aw-card"><i class="bi bi-people aw-icon" aria-hidden="true"></i><h3 class="aw-h4" style="margin-top: 0.75rem;">User seats<span class="aw-pending">pending</span></h3></div>
                <div class="aw-card"><i class="bi bi-plug aw-icon" aria-hidden="true"></i><h3 class="aw-h4" style="margin-top: 0.75rem;">API access<span class="aw-pending">pending</span></h3></div>
                <div class="aw-card"><i class="bi bi-translate aw-icon" aria-hidden="true"></i><h3 class="aw-h4" style="margin-top: 0.75rem;">Language coverage<span class="aw-pending">pending</span></h3></div>
            </div>
        </div>
    </section>
```

## 7. Plans

```html
    <!-- ====================================================== 7. PLANS === -->
    <section class="aw-sec">
        <div class="aw-wrap">
            <div class="text-center" style="margin-bottom: clamp(1.5rem, 4vh, 2.5rem);">
                <h2 class="aw-h2" style="margin-bottom: 1.5rem;">Plans</h2>
                <div class="flex justify-center" style="margin-bottom: clamp(1rem, 2.5vh, 1.5rem);"><div class="aw-rule"></div></div>
                <p class="aw-body mx-auto" style="max-width: 46rem;">The same three tiers and the same price points for Media Puls and Sport Puls, because they run on the same platform. Sources are not split into domestic and international — you pick whatever outlets you want within your plan's count.</p>
            </div>

            <div class="aw-todo" data-mp-placeholder="tier-features" style="margin-bottom: clamp(1.5rem, 3vh, 2rem);">Rows marked "pending" need confirming with Nikola. Only the four tier gates below are settled.</div>

            <!--
                One grid, emitted row by row: label, Starter, Professional,
                Enterprise. Rows therefore align by construction — a tier cannot
                drift out of line with the others. Scrolls inside its own container
                on narrow screens so the page never scrolls sideways.
            -->
            <div class="aw-plans-scroll">
                <div class="aw-plans">
                    <!-- header -->
                    <div class="aw-plans__head"></div>
                    <div class="aw-plans__head aw-plans__cell"><span class="aw-plans__tier">Starter</span></div>
                    <div class="aw-plans__head aw-plans__head--mid aw-plans__cell"><span class="aw-plans__tier">Professional</span></div>
                    <div class="aw-plans__head aw-plans__cell"><span class="aw-plans__tier">Enterprise</span></div>

                    <!-- monthly -->
                    <div class="aw-plans__cell aw-plans__label" style="text-align: left;">Monthly</div>
                    <div class="aw-plans__cell"><span class="aw-plans__price">&euro;285</span><br><span class="aw-plans__per">per month</span></div>
                    <div class="aw-plans__cell aw-plans__cell--mid"><span class="aw-plans__price">&euro;435</span><br><span class="aw-plans__per">per month</span></div>
                    <div class="aw-plans__cell"><span class="aw-plans__price">&euro;950</span><br><span class="aw-plans__per">per month</span></div>

                    <!-- setup: figures deliberately not published -->
                    <div class="aw-plans__cell aw-plans__label" style="text-align: left;">Setup</div>
                    <div class="aw-plans__cell" data-mp-placeholder="setup-starter">Quoted after scoping</div>
                    <div class="aw-plans__cell aw-plans__cell--mid" data-mp-placeholder="setup-pro">Quoted after scoping</div>
                    <div class="aw-plans__cell" data-mp-placeholder="setup-enterprise">Quoted after scoping</div>

                    <!-- sources -->
                    <div class="aw-plans__cell aw-plans__label" style="text-align: left;">Sources included<span class="aw-pending">pending</span></div>
                    <div class="aw-plans__cell">&mdash;</div>
                    <div class="aw-plans__cell aw-plans__cell--mid">&mdash;</div>
                    <div class="aw-plans__cell">&mdash;</div>

                    <div class="aw-plans__cell aw-plans__label" style="text-align: left;">Domestic and international sources, no split</div>
                    <div class="aw-plans__cell"><i class="bi bi-check-lg aw-yes" aria-hidden="true"></i><span class="aw-sr">Included</span></div>
                    <div class="aw-plans__cell aw-plans__cell--mid"><i class="bi bi-check-lg aw-yes" aria-hidden="true"></i><span class="aw-sr">Included</span></div>
                    <div class="aw-plans__cell"><i class="bi bi-check-lg aw-yes" aria-hidden="true"></i><span class="aw-sr">Included</span></div>

                    <div class="aw-plans__cell aw-plans__label" style="text-align: left;">Broadcast transcription<span class="aw-pending">pending</span></div>
                    <div class="aw-plans__cell">&mdash;</div>
                    <div class="aw-plans__cell aw-plans__cell--mid">&mdash;</div>
                    <div class="aw-plans__cell">&mdash;</div>

                    <!-- confirmed gates -->
                    <div class="aw-plans__cell aw-plans__label" style="text-align: left;">Semantic search <span class="aw-sub">(Media Puls)</span></div>
                    <div class="aw-plans__cell"><i class="bi bi-dash-lg aw-no" aria-hidden="true"></i><span class="aw-sr">Not included</span></div>
                    <div class="aw-plans__cell aw-plans__cell--mid"><i class="bi bi-check-lg aw-yes" aria-hidden="true"></i><span class="aw-sr">Included</span></div>
                    <div class="aw-plans__cell"><i class="bi bi-check-lg aw-yes" aria-hidden="true"></i><span class="aw-sr">Included</span></div>

                    <div class="aw-plans__cell aw-plans__label" style="text-align: left;">Gaps <span class="aw-sub">(Media Puls)</span></div>
                    <div class="aw-plans__cell"><i class="bi bi-dash-lg aw-no" aria-hidden="true"></i><span class="aw-sr">Not included</span></div>
                    <div class="aw-plans__cell aw-plans__cell--mid"><i class="bi bi-check-lg aw-yes" aria-hidden="true"></i><span class="aw-sr">Included</span></div>
                    <div class="aw-plans__cell"><i class="bi bi-check-lg aw-yes" aria-hidden="true"></i><span class="aw-sr">Included</span></div>

                    <div class="aw-plans__cell aw-plans__label" style="text-align: left;">Article comments <span class="aw-sub">(Sport Puls)</span></div>
                    <div class="aw-plans__cell"><i class="bi bi-dash-lg aw-no" aria-hidden="true"></i><span class="aw-sr">Not included</span></div>
                    <div class="aw-plans__cell aw-plans__cell--mid"><i class="bi bi-check-lg aw-yes" aria-hidden="true"></i><span class="aw-sr">Included</span></div>
                    <div class="aw-plans__cell"><i class="bi bi-check-lg aw-yes" aria-hidden="true"></i><span class="aw-sr">Included</span></div>

                    <div class="aw-plans__cell aw-plans__label" style="text-align: left;">Fan forums <span class="aw-sub">(Sport Puls)</span></div>
                    <div class="aw-plans__cell"><i class="bi bi-dash-lg aw-no" aria-hidden="true"></i><span class="aw-sr">Not included</span></div>
                    <div class="aw-plans__cell aw-plans__cell--mid"><i class="bi bi-check-lg aw-yes" aria-hidden="true"></i><span class="aw-sr">Included</span></div>
                    <div class="aw-plans__cell"><i class="bi bi-check-lg aw-yes" aria-hidden="true"></i><span class="aw-sr">Included</span></div>

                    <div class="aw-plans__cell aw-plans__label" style="text-align: left;">Alerts and reporting<span class="aw-pending">pending</span></div>
                    <div class="aw-plans__cell">&mdash;</div>
                    <div class="aw-plans__cell aw-plans__cell--mid">&mdash;</div>
                    <div class="aw-plans__cell">&mdash;</div>

                    <div class="aw-plans__cell aw-plans__label" style="text-align: left;">User seats<span class="aw-pending">pending</span></div>
                    <div class="aw-plans__cell">&mdash;</div>
                    <div class="aw-plans__cell aw-plans__cell--mid">&mdash;</div>
                    <div class="aw-plans__cell">&mdash;</div>

                    <div class="aw-plans__cell aw-plans__label" style="text-align: left;">API access<span class="aw-pending">pending</span></div>
                    <div class="aw-plans__cell">&mdash;</div>
                    <div class="aw-plans__cell aw-plans__cell--mid">&mdash;</div>
                    <div class="aw-plans__cell">&mdash;</div>

                    <!-- actions -->
                    <div class="aw-plans__cell aw-plans__label" style="text-align: left;"></div>
                    <div class="aw-plans__cell"><a href="/contact.html" class="aw-btn-2">Book a demo</a></div>
                    <div class="aw-plans__cell aw-plans__cell--mid"><a href="/contact.html" class="aw-btn">Book a demo</a></div>
                    <div class="aw-plans__cell"><a href="/contact.html" class="aw-btn-2">Talk to us</a></div>
                </div>
            </div>
        </div>
    </section>
```

## 8. What we don't do

```html
    <!-- ============================================ 8. WHAT WE DON'T DO === -->
    <!-- positioned against the category's behaviour, never against a named
         company: naming a dominant local incumbent on our own site hands them
         free brand mentions -->
    <section class="aw-sec">
        <div class="aw-wrap aw-wrap--mid">
            <h2 class="aw-h2" style="margin-bottom: 1.5rem;">What we don't do</h2>
            <div style="margin-bottom: clamp(1.25rem, 3vh, 2rem);"><div class="aw-rule"></div></div>
            <p class="aw-lede">The legacy press-clipping model bills for volume and reports success as AVE — advertising value equivalent — a number that inflates easily and tells you nothing about whether the coverage helped.</p>
            <p class="aw-body" style="margin-top: 1rem;">We don't produce AVE figures. We report what was published, where, when, by whom, how it is being read, and what you missed.</p>
        </div>
    </section>
```

## 9. Explore our platforms

```html
    <!-- ========================================== 9. RELATED PRODUCTS === -->
    <section class="aw-sec">
        <div class="aw-wrap">
            <div class="text-center" style="margin-bottom: clamp(2rem, 5vh, 3.5rem);">
                <h2 class="aw-h2" style="margin-bottom: 1.5rem;">Explore our platforms</h2>
                <div class="flex justify-center"><div class="aw-rule"></div></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3" style="gap: clamp(1rem, 2.5vw, 1.5rem);">
                <a href="https://litteraworks.com/" target="_blank" rel="noopener" class="aw-card flex flex-col">
                    <i class="bi bi-soundwave aw-icon" aria-hidden="true"></i>
                    <h3 class="aw-h4" style="margin-top: 0.75rem;">Litteraworks</h3>
                    <p class="aw-sub" style="margin-top: 0.5rem;">The transcription engine behind broadcast monitoring, and a product in its own right.</p>
                    <span class="aw-link mt-auto" style="padding-top: 1rem;">Visit litteraworks.com <i class="bi bi-box-arrow-up-right" aria-hidden="true"></i></span>
                </a>
                <a href="https://pchela.app/" target="_blank" rel="noopener" class="aw-card flex flex-col">
                    <i class="bi bi-search aw-icon" aria-hidden="true"></i>
                    <h3 class="aw-h4" style="margin-top: 0.75rem;">Pchela</h3>
                    <p class="aw-sub" style="margin-top: 0.5rem;">AI media asset management that makes an archive searchable.</p>
                    <span class="aw-link mt-auto" style="padding-top: 1rem;">Visit pchela.app <i class="bi bi-box-arrow-up-right" aria-hidden="true"></i></span>
                </a>
                <a href="/fronisa.html" class="aw-card flex flex-col">
                    <i class="bi bi-chat-dots aw-icon" aria-hidden="true"></i>
                    <h3 class="aw-h4" style="margin-top: 0.75rem;">Fronisa</h3>
                    <p class="aw-sub" style="margin-top: 0.5rem;">AI chatbot and SEO tooling for your own content.</p>
                    <span class="aw-link mt-auto" style="padding-top: 1rem;">Learn more <i class="bi bi-arrow-right" aria-hidden="true"></i></span>
                </a>
            </div>
        </div>
    </section>
```
