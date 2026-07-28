# Homepage content removed during the 2026-07 refactor

Nothing here is live. This file exists so removed copy stays retrievable and can
be moved to another page or restored. Each entry records what was removed, when,
why, and the verbatim markup.

---

## Three value-prop cards, below the hero

- **Removed:** Task 3, 2026-07-27
- **Was at:** `home.html`, immediately after the hero section
- **Why:** Replaced by the two-card For Media / For Sport audience fork. The three
  cards also duplicated the "Our Expertise" section — Grant Projects appeared
  twice on the same page — and the 3D illustrations were dropped per Task 3/9.
- **Copy worth reusing:** the AI paragraph ("enhances your workflow, not replaces
  it") has no equivalent elsewhere on the homepage. The Grant Projects paragraph
  overlaps the Task 8 EU band. The Mobile Apps paragraph overlaps media.html and
  sport.html.
- **Illustrations dropped** (still hosted on the CMS, not deleted):
  - `generated-image-january-14-2026-11-12am-removebg-preview.png` — Mobile Apps
  - `generated-image-january-14-2026-11-13am-removebg-preview.png` — AI Tools
  - `generated-image-january-14-2026-11-20am-removebg-preview.png` — Grant Projects

### Copy only

| Heading | Body |
|---|---|
| Mobile Apps That Drive Engagement | We develop mobile apps for media, sports, and community-driven platforms, built for fan engagement, loyalty programs, and content delivery. |
| AI That Works for You | We build AI that enhances your workflow, not replaces it. By automating repetitive tasks, our tools give you more time to focus on creativity, strategy, and growing your business. |
| Digital Innovation Grant Projects | We've partnered on Erasmus+, Creative Europe, and other EU-funded projects — building AI platforms, with a team that understands both the tech and the paperwork. |

### Verbatim markup

```html
<!-- Three Core Value Props: High-End Polish with Advanced Glassmorphism -->
<section class="relative value-props-section" style="padding-top: clamp(3rem, 8vh, 7rem); padding-bottom: clamp(3rem, 8vh, 7rem); background: linear-gradient(180deg, rgba(45, 13, 52, 1) 0%, rgba(32, 10, 36, 1) 50%, rgba(32, 10, 36, 1) 100%); position: relative;">
    <!-- Noise Texture Overlay -->
    <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg viewBox=\'0 0 400 400\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cfilter id=\'noiseFilter\'%3E%3CfeTurbulence type=\'fractalNoise\' baseFrequency=\'0.9\' numOctaves=\'4\' stitchTiles=\'stitch\'/%3E%3C/filter%3E%3Crect width=\'100%25\' height=\'100%25\' filter=\'url(%23noiseFilter)\'/%3E%3C/svg%3E'); pointer-events: none; z-index: 1;"></div>

    <div class="mx-auto relative" style="max-width: 1360px; padding-left: clamp(1.5rem, 5vw, 6rem); padding-right: clamp(1.5rem, 5vw, 6rem); z-index: 2;">
        <!-- Asymmetrical 3-Column Bento Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Pillar 1: Mobile Apps (col-span-1) -->
            <div class="value-prop-card relative rounded-3xl p-6 smooth-transition group flex flex-col"
                 style="background: radial-gradient(circle at top left, rgba(255, 255, 255, 0.15), transparent);
                        backdrop-filter: blur(40px);
                        -webkit-backdrop-filter: blur(40px);
                        border: 1px solid rgba(255, 255, 255, 0.1);
                        box-shadow: inset 0 1px 2px rgba(255, 255, 255, 0.3), 0 10px 30px rgba(0, 0, 0, 0.5);
                        overflow: visible;
                        min-height: 380px;
                        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);">
                <!-- 3D Asset - Above Content -->
                <div class="floating-icon value-prop-icon mb-4 mx-auto" style="width: 240px; height: 240px; margin-top: -30px; transition: all 0.5s ease;">
                    <img loading="lazy" src="https://appworks.mpanel.app/image/cache/original/files/images/generated-image-january-14-2026-11-12am-removebg-preview.png?crop=true"
                         alt="Mobile Apps 3D Icon"
                         class="w-full h-full object-contain icon-glow"
                         style="filter: drop-shadow(0 0 25px rgba(255, 75, 54, 0.4)); transition: all 0.5s ease;">
                </div>

                <!-- Content -->
                <div class="relative text-center" style="z-index: 2;">
                    <h3 class="text-white font-bold text-2xl mb-4" style="letter-spacing: -0.02em; text-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);">Mobile Apps That Drive Engagement</h3>
                    <p class="text-gray-300 leading-relaxed" style="opacity: 0.85; text-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);">We develop mobile apps for media, sports, and community-driven platforms, built for fan engagement, loyalty programs, and content delivery.</p>
                </div>
            </div>

            <!-- Pillar 2: AI Tools (col-span-1) -->
            <div class="value-prop-card relative rounded-3xl p-6 smooth-transition group flex flex-col"
                 style="background: radial-gradient(circle at top left, rgba(255, 255, 255, 0.15), transparent);
                        backdrop-filter: blur(40px);
                        -webkit-backdrop-filter: blur(40px);
                        border: 1px solid rgba(255, 255, 255, 0.1);
                        box-shadow: inset 0 1px 2px rgba(255, 255, 255, 0.3), 0 10px 30px rgba(0, 0, 0, 0.5);
                        overflow: visible;
                        min-height: 380px;
                        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);">
                <!-- 3D Asset - Above Content -->
                <div class="floating-icon value-prop-icon mb-4 mx-auto" style="width: 240px; height: 240px; margin-top: -30px; animation-delay: 0.5s; transition: all 0.5s ease;">
                    <img loading="lazy" src="https://appworks.mpanel.app/image/cache/original/files/images/generated-image-january-14-2026-11-13am-removebg-preview.png?crop=true"
                         alt="AI Tools 3D Icon"
                         class="w-full h-full object-contain icon-glow"
                         style="filter: drop-shadow(0 0 25px rgba(139, 92, 246, 0.4)); transition: all 0.5s ease;">
                </div>

                <!-- Content -->
                <div class="relative text-center" style="z-index: 2;">
                    <h3 class="text-white font-bold text-2xl mb-4" style="letter-spacing: -0.02em; text-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);">AI That Works for You</h3>
                    <p class="text-gray-300 leading-relaxed" style="opacity: 0.85; text-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);">We build AI that enhances your workflow, not replaces it. By automating repetitive tasks, our tools give you more time to focus on creativity, strategy, and growing your business.</p>
                </div>
            </div>

            <!-- Pillar 3: Grant Projects (col-span-1) -->
            <div class="value-prop-card relative rounded-3xl p-6 smooth-transition group flex flex-col"
                 style="background: radial-gradient(circle at top left, rgba(255, 255, 255, 0.15), transparent);
                        backdrop-filter: blur(40px);
                        -webkit-backdrop-filter: blur(40px);
                        border: 1px solid rgba(255, 255, 255, 0.1);
                        box-shadow: inset 0 1px 2px rgba(255, 255, 255, 0.3), 0 10px 30px rgba(0, 0, 0, 0.5);
                        overflow: visible;
                        min-height: 380px;
                        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);">
                <!-- 3D Asset - Above Content -->
                <div class="floating-icon value-prop-icon mb-4 mx-auto" style="width: 240px; height: 240px; margin-top: -30px; animation-delay: 1s; transition: all 0.5s ease;">
                    <img loading="lazy" src="https://appworks.mpanel.app/image/cache/original/files/images/generated-image-january-14-2026-11-20am-removebg-preview.png?crop=true"
                         alt="Grant Projects 3D Icon"
                         class="w-full h-full object-contain icon-glow"
                         style="filter: drop-shadow(0 0 25px rgba(255, 75, 54, 0.4)); transition: all 0.5s ease;">
                </div>

                <!-- Content -->
                <div class="relative text-center" style="z-index: 2;">
                    <h3 class="text-white font-bold text-2xl mb-4" style="letter-spacing: -0.02em; text-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);">Digital Innovation Grant Projects</h3>
                    <p class="text-gray-300 leading-relaxed" style="opacity: 0.85; text-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);">We've partnered on Erasmus+, Creative Europe, and other EU-funded projects — building AI platforms, with a team that understands both the tech and the paperwork.</p>
                </div>
            </div>

        </div>
    </div>
</section>
```

### Associated JavaScript removed with it

Block 5 of the micro-interactions script, "VALUE PROPS REACTIVE LIGHTING
(Hover States)" — bound hover handlers to `.value-prop-card` to scale
`.value-prop-icon`, brighten `.icon-glow`, and swap border/shadow colours. It
branched on the illustration filename (`11-12am` / `11-13am`) to pick the reset
glow colour, so it is specific to those three cards and not reusable. Retrievable
from git history at commit `5796c9e` or earlier, `home.html`, search for
`VALUE PROPS REACTIVE LIGHTING`.

The `.floating-icon` CSS rule and its `@keyframes floating` (`home.html`, in the
main inline `<style>` block) are **now unused** — those three icons were their
only consumers. Left in place rather than deleted, in case the Task 9 design pass
wants the bob animation for something else. Delete them if it doesn't.

Separately, `@keyframes energyPulse` in the second `<style>` block near the end of
the file was already dead before this change — defined but never referenced.

---

## FanFuel — full product showcase

- **Demoted:** Task 4, 2026-07-27
- **Was at:** `home.html`, Our Solutions section, as a full-width alternating block
- **Now:** a card in the compact portfolio grid, linking to the same destination
- **Dropped in the move:** the second (lighter) paragraph and the product screenshot

### Verbatim markup

```html
        <!-- PRODUCT SHOWCASE 4: FanFuel (Text Right / Image Left) -->
        <div class="product-showcase mb-32 reveal-on-scroll" style="opacity: 0;">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Left: iPhone 15 Pro 3D Mockup -->
                <div class="relative product-mockup order-2 lg:order-1 flex justify-center">
                    <!-- Scroll-Following Glow (Orange) -->
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 -z-10 pointer-events-none"
                         style="width: 500px; height: 500px;
                                background: radial-gradient(circle, rgba(255, 75, 54, 0.3) 0%, rgba(255, 107, 80, 0.15) 40%, transparent 70%);
                                filter: blur(60px);"></div>

                    <!-- iPhone Mockup - Straight On -->
                    <div class="relative" style="max-width: 500px;">
                        <img loading="lazy" src="https://appworks.mpanel.app/image/cache/original/files/images/sport-pao-pfc.png?crop=true"
                             alt="FanFuel Mobile App"
                             class="w-full rounded-3xl shadow-2xl"
                             style="box-shadow: 0 25px 60px rgba(0, 0, 0, 0.5), 0 0 40px rgba(255, 75, 54, 0.3);">
                    </div>
                </div>

                <!-- Right: Text Content -->
                <div class="space-y-6 order-1 lg:order-2">
                    <div class="inline-block px-4 py-2 rounded-lg" style="background: linear-gradient(135deg, #FF4B36 0%, #FF6B50 100%);">
                        <span class="text-white text-xs font-black tracking-wider uppercase">Sports Tech</span>
                    </div>
                    <h3 class="text-white font-black" style="font-size: clamp(1.875rem, 3.4vw, 3.25rem); letter-spacing: -0.03em;">FanFuel</h3>
                    <p class="text-gray-300 text-xl leading-relaxed" style="opacity: 0.9;">Mobile apps and loyalty platforms that help sports clubs connect with fans - before, during, and after the game.</p>
                    <p class="text-gray-400 text-lg leading-relaxed">Turn casual fans into loyal supporters with mobile apps, gamification, and rewards that keep them engaged year-round.</p>
                    <a href="/sport.html" class="inline-flex items-center gap-3 px-8 py-4 rounded-xl font-bold text-lg smooth-transition"
                       style="background: linear-gradient(135deg, #FF4B36 0%, #FF6B50 100%); color: white; box-shadow: 0 4px 15px rgba(255, 75, 54, 0.3);">
                        <span>Explore FanFuel</span>
                        <i class="bi bi-arrow-right text-xl"></i>
                    </a>
                </div>
            </div>
        </div>
```

---

## VerbaVista — full product showcase

- **Demoted:** Task 4, 2026-07-27
- **Was at:** `home.html`, Our Solutions section, as a full-width alternating block
- **Now:** a card in the compact portfolio grid, linking to the same destination
- **Dropped in the move:** the second (lighter) paragraph and the product screenshot

### Verbatim markup

```html
        <!-- PRODUCT SHOWCASE 5: VerbaVista (Text Left / Image Right) -->
        <div class="product-showcase mb-32 reveal-on-scroll" style="opacity: 0;">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Left: Text Content -->
                <div class="space-y-6">
                    <div class="inline-block px-4 py-2 rounded-lg" style="background: linear-gradient(135deg, #FF4B36 0%, #FF6B50 100%);">
                        <span class="text-white text-xs font-black tracking-wider uppercase">Media Tech</span>
                    </div>
                    <h3 class="text-white font-black" style="font-size: clamp(1.875rem, 3.4vw, 3.25rem); letter-spacing: -0.03em;">VerbaVista</h3>
                    <p class="text-gray-300 text-xl leading-relaxed" style="opacity: 0.9;">Digital platforms for newspapers, broadcasters, and publishers - from mobile apps to e-Paper to subscription management.</p>
                    <p class="text-gray-400 text-lg leading-relaxed">Everything publishers need - mobile apps, web platforms, e-Paper, paywalls, and analytics - in one integrated system.</p>
                    <a href="/media.html" class="inline-flex items-center gap-3 px-8 py-4 rounded-xl font-bold text-lg smooth-transition"
                       style="background: linear-gradient(135deg, #FF4B36 0%, #FF6B50 100%); color: white; box-shadow: 0 4px 15px rgba(255, 75, 54, 0.3);">
                        <span>Explore VerbaVista</span>
                        <i class="bi bi-arrow-right text-xl"></i>
                    </a>
                </div>

                <!-- Right: iPhone 15 Pro 3D Mockup -->
                <div class="relative product-mockup flex justify-center">
                    <!-- Scroll-Following Glow (Orange) -->
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 -z-10 pointer-events-none"
                         style="width: 500px; height: 500px;
                                background: radial-gradient(circle, rgba(255, 75, 54, 0.3) 0%, rgba(255, 107, 80, 0.15) 40%, transparent 70%);
                                filter: blur(60px);"></div>

                    <!-- iPhone Mockup - Straight On -->
                    <div class="relative" style="max-width: 500px;">
                        <img loading="lazy" src="https://appworks.mpanel.app/image/cache/original/files/images/media-phones-dan-i-insajder.png?crop=true"
                             alt="VerbaVista Media Platform"
                             class="w-full rounded-3xl shadow-2xl"
                             style="box-shadow: 0 25px 60px rgba(0, 0, 0, 0.5), 0 0 40px rgba(255, 75, 54, 0.3);">
                    </div>
                </div>
            </div>
        </div>
```

---

## Six testimonials cut from the homepage

- **Removed:** Task 6, 2026-07-27
- **Was at:** `home.html`, "What Our Partners Say" section
- **Why:** Eleven — actually ten — full testimonials made this the longest block on
  the page. Cut to four (Insajder, QPR, Greek Basketball League, Cedevita Olimpija).
- **Intended destination:** the Partners page. `partners.html` has **no testimonials
  section today**, so building one was out of Task 6's homepage-only scope. These
  six are parked here until that section exists.
- **Logos:** each card pulled its logo from `js/partner-logos.js` via
  `data-partner`, so the logos are untouched and still available by key.

### Copy and attribution

| Organisation | Person | `data-partner` key |
|---|---|---|
| Politika | Zvezdan Tošić | `politika` |
| KRIK | Jelena Vasić | `krik` |
| FK Partizan | Mirko Panajotović | `fk-partizan` |
| DAN | Ratko Ćetković | `dan` |
| Croatian Basketball Federation | Andro Anzulović | `hks` |
| Večer | Miha Klančar | `vecer` |

#### Politika — Zvezdan Tošić

> Working with the Appworks team has been straightforward and highly efficient from the very beginning. Our goal is to boost the number of our premium subscribers and the solutions they proposed were practical, reliable, and easy to adapt to our needs. When we ask for something, it is done without any problems, we especially value their availability and their willingness to always find the best possible solution.

#### KRIK — Jelena Vasić

> By creating and developing a mobile app for KRIK, we wanted to establish more direct communication with our readers, as well as to use a platform with an innovative design and practical features. We are glad that, with the help of the AppWorks team, we will continue to develop even more interaction with our audience in the coming period.

#### FK Partizan — Mirko Panajotović

> A great team of professionals, the collaboration is at a very high level. We specifically use the website, CMS, mobile app and LitteraWorks, and we are extremely satisfied with all the platforms. We look forward to continuing our cooperation.

#### DAN — Ratko Ćetković

> We have spoken with different app providers, but Appworks' offer was the most attractive one. They are solving problems fast, even in the evenings or after regular working hours.

#### Croatian Basketball Federation — Andro Anzulović

> At a time when the market is changing and most younger basketball followers are using phones, our collaboration with AppWorks has proven to be extremely important, as the app allows everyone to more easily follow all the news about Croatian basketball. The growth in followers is also evident through the prize games, where more and more people participate week after week. The team at AppWorks is available to us daily in case any issues arise or if we have ideas for changes.

#### Večer — Miha Klančar

> We had a mobile app earlier, but we were not satisfied. Appworks has offered us to pay for the app on a monthly level instead of paying in advance. Our main goal is to keep current premium users and attract new ones. We are satisfied with how both the app and e-kiosk work and look. Cooperation with Appworks is successful and we believe we can make further improvements to the users' experience.


### Verbatim markup

```html
            <!-- Testimonial 3: Politika -->
            <div class="glass-medium rounded-2xl p-10 smooth-transition hover-lift" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);">
                <p class="text-base leading-relaxed mb-8 font-medium" style="color: #FFFFFF; opacity: 1;"><strong>"Working with the Appworks team has been straightforward and highly efficient from the very beginning. Our goal is to boost the number of our premium subscribers and the solutions they proposed were practical, reliable, and easy to adapt to our needs. When we ask for something, it is done without any problems, we especially value their availability and their willingness to always find the best possible solution."</strong></p>
                <div class="flex items-center gap-6 pt-6 border-t border-white/10">
                    <div data-partner="politika" data-css="h-20 w-auto object-contain"></div>
                    <div>
                        <h5 class="font-bold text-base mb-1" style="color: #FFFFFF;">Zvezdan Tošić</h5>
                        <p class="text-gray-400 text-sm">Politika</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 5: KRIK -->
            <div class="glass-medium rounded-2xl p-10 smooth-transition hover-lift" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);">
                <p class="text-base leading-relaxed mb-8 font-medium" style="color: #FFFFFF; opacity: 1;"><strong>"By creating and developing a mobile app for KRIK, we wanted to establish more direct communication with our readers, as well as to use a platform with an innovative design and practical features. We are glad that, with the help of the AppWorks team, we will continue to develop even more interaction with our audience in the coming period."</strong></p>
                <div class="flex items-center gap-6 pt-6 border-t border-white/10">
                    <div data-partner="krik" data-css="h-20 w-auto object-contain"></div>
                    <div>
                        <h5 class="font-bold text-base mb-1" style="color: #FFFFFF;">Jelena Vasić</h5>
                        <p class="text-gray-400 text-sm">KRIK</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 6: FK Partizan -->
            <div class="glass-medium rounded-2xl p-10 smooth-transition hover-lift" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);">
                <p class="text-base leading-relaxed mb-8 font-medium" style="color: #FFFFFF; opacity: 1;"><strong>"A great team of professionals, the collaboration is at a very high level. We specifically use the website, CMS, mobile app and LitteraWorks, and we are extremely satisfied with all the platforms. We look forward to continuing our cooperation."</strong></p>
                <div class="flex items-center gap-6 pt-6 border-t border-white/10">
                    <div data-partner="fk-partizan" data-css="h-20 w-auto object-contain"></div>
                    <div>
                        <h5 class="font-bold text-base mb-1" style="color: #FFFFFF;">Mirko Panajotović</h5>
                        <p class="text-gray-400 text-sm">FK Partizan</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 7: DAN -->
            <div class="glass-medium rounded-2xl p-10 smooth-transition hover-lift" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);">
                <p class="text-base leading-relaxed mb-8" style="color: #FFFFFF; opacity: 1;"><strong>"We have spoken with different app providers, but Appworks' offer was the most attractive one. They are solving problems fast, even in the evenings or after regular working hours."</strong></p>
                <div class="flex items-center gap-6 pt-6 border-t border-white/10">
                    <div data-partner="dan" data-css="h-20 w-auto object-contain"></div>
                    <div>
                        <h5 class="font-bold text-base mb-1" style="color: #FFFFFF;">Ratko Ćetković</h5>
                        <p class="text-gray-400 text-sm">DAN</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 8: Croatian Basketball Federation -->
            <div class="glass-medium rounded-2xl p-10 smooth-transition hover-lift" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);">
                <p class="text-base leading-relaxed mb-8" style="color: #FFFFFF; opacity: 1;"><strong>"At a time when the market is changing and most younger basketball followers are using phones, our collaboration with AppWorks has proven to be extremely important, as the app allows everyone to more easily follow all the news about Croatian basketball. The growth in followers is also evident through the prize games, where more and more people participate week after week. The team at AppWorks is available to us daily in case any issues arise or if we have ideas for changes."</strong></p>
                <div class="flex items-center gap-6 pt-6 border-t border-white/10">
                    <div data-partner="hks" data-css="h-20 w-auto object-contain"></div>
                    <div>
                        <h5 class="font-bold text-base mb-1" style="color: #FFFFFF;">Andro Anzulović</h5>
                        <p class="text-gray-400 text-sm">Croatian Basketball Federation</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 10: Večer -->
            <div class="glass-medium rounded-2xl p-10 smooth-transition hover-lift" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);">
                <p class="text-base leading-relaxed mb-8" style="color: #FFFFFF; opacity: 1;"><strong>"We had a mobile app earlier, but we were not satisfied. Appworks has offered us to pay for the app on a monthly level instead of paying in advance. Our main goal is to keep current premium users and attract new ones. We are satisfied with how both the app and e-kiosk work and look. Cooperation with Appworks is successful and we believe we can make further improvements to the users' experience."</strong></p>
                <div class="flex items-center gap-6 pt-6 border-t border-white/10">
                    <div data-partner="vecer" data-css="h-20 w-auto object-contain"></div>
                    <div>
                        <h5 class="font-bold text-base mb-1" style="color: #FFFFFF;">Miha Klančar</h5>
                        <p class="text-gray-400 text-sm">Večer</p>
                    </div>
                </div>
            </div>
```

---

## Case Studies and Our Expertise — removed at client request

- **Removed:** feedback round 1, 2026-07-28
- **Why:** the client had no case study data good enough to publish, and asked for the
  whole Our Expertise section to go, including the folded-in process block and
  consultation CTA.
- **Note:** Case Studies was entirely placeholder. Our Expertise contained real copy.

### Verbatim markup

`html
<!-- CASE STUDIES (removed, feedback round 1) -->
<!-- CASE STUDIES -->
<!--
    PLACEHOLDER SECTION — Task 5. Nothing in here is real.

    Every metric, sector label, context line and link below is a placeholder.
    Client names are deliberately GENERIC SECTOR LABELS ("News publisher") rather
    than real client names: attaching an invented number to a named client would
    be a fabricated claim about that client if this ever reached production.
    Swap in the real client name at the same time as the real metric, never
    before.

    The visible dashed notice is DEV-ONLY. Delete that div once real content
    lands.

    PLACEHOLDER LINKS: no case study pages exist yet, so all three cards point at
    href="#", tagged data-placeholder-link.

    Metrics are white, not coral, on purpose. Task 9 calls out the coral
    01/02/03 numbers as accent overuse, so the stat leads on size and weight and
    coral stays on the CTA only.
-->
<section class="relative" style="padding-top: clamp(3rem, 8vh, 7rem); padding-bottom: clamp(3rem, 8vh, 7rem); background: #2A0E30;">
    <div class="mx-auto" style="max-width: 1360px; padding-left: clamp(1.5rem, 5vw, 6rem); padding-right: clamp(1.5rem, 5vw, 6rem);">

        <!-- Section Header -->
        <div class="text-center" style="margin-bottom: clamp(1.5rem, 3vh, 2.5rem);">
            <h2 class="text-white font-black mb-6" style="font-size: clamp(2rem, 4vw, 3.5rem); letter-spacing: -0.02em;">Case Studies</h2>
            <div class="flex justify-center" style="margin-top: clamp(1rem, 2vh, 1.5rem);">
                <div style="width: 80px; height: 4px; background: linear-gradient(90deg, #FF4B36 0%, #FF6B50 100%); border-radius: 2px;"></div>
            </div>
        </div>

        <!-- DEV-ONLY NOTICE — delete this div once real content is supplied -->
        <div data-dev-placeholder-notice class="text-center rounded-xl" style="margin-bottom: clamp(1.5rem, 3vh, 2.5rem); padding: 0.75rem 1rem; border: 2px dashed rgba(255, 75, 54, 0.45); background: rgba(255, 75, 54, 0.06);">
            <span class="font-bold uppercase" style="font-size: 0.75rem; letter-spacing: 0.08em; color: #FF6B50;">Placeholder — real metrics, client names and links still needed</span>
        </div>

        <!-- Three across only from lg. At the md breakpoint three columns squeeze
             to ~217px and the cards end up taller than they are on desktop. -->
        <div class="grid grid-cols-1 lg:grid-cols-3" style="gap: clamp(1.25rem, 2.5vw, 2rem);">

            <!-- Case study 1 -->
            <a href="#" data-placeholder-link="case-study-1" data-placeholder="case-study-1"
               class="group relative rounded-2xl smooth-transition hover-lift flex flex-col"
               style="padding: clamp(1.5rem, 2.5vw, 2.25rem);
                      background: rgba(255, 255, 255, 0.04);
                      backdrop-filter: blur(24px);
                      -webkit-backdrop-filter: blur(24px);
                      border: 1px solid rgba(255, 255, 255, 0.1);">
                <span class="font-semibold" style="font-size: 0.9375rem; color: rgba(255, 255, 255, 0.75);">News publisher</span>
                <span class="text-white font-black" style="font-size: clamp(2.75rem, 5vw, 4rem); line-height: 1; letter-spacing: -0.03em; margin-top: clamp(0.75rem, 1.5vh, 1.25rem);">+42%</span>
                <span class="font-bold uppercase" style="font-size: 0.8125rem; letter-spacing: 0.08em; color: rgba(255, 255, 255, 0.6); margin-top: 0.625rem;">digital subscriptions</span>
                <p class="text-gray-400 leading-relaxed" style="font-size: clamp(0.9375rem, 1.1vw, 1rem); margin-top: clamp(0.875rem, 1.5vh, 1.25rem);">Rebuilt the mobile app and paywall flow, then tuned the subscription journey over the following year.</p>
                <span class="inline-flex items-center gap-2 font-semibold mt-auto" style="padding-top: clamp(0.875rem, 1.5vh, 1.25rem); font-size: 0.875rem; color: #FF6B50;">
                    <span>Read the case study</span>
                    <i class="bi bi-arrow-right transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true"></i>
                </span>
            </a>

            <!-- Case study 2 -->
            <a href="#" data-placeholder-link="case-study-2" data-placeholder="case-study-2"
               class="group relative rounded-2xl smooth-transition hover-lift flex flex-col"
               style="padding: clamp(1.5rem, 2.5vw, 2.25rem);
                      background: rgba(255, 255, 255, 0.04);
                      backdrop-filter: blur(24px);
                      -webkit-backdrop-filter: blur(24px);
                      border: 1px solid rgba(255, 255, 255, 0.1);">
                <span class="font-semibold" style="font-size: 0.9375rem; color: rgba(255, 255, 255, 0.75);">Football club</span>
                <span class="text-white font-black" style="font-size: clamp(2.75rem, 5vw, 4rem); line-height: 1; letter-spacing: -0.03em; margin-top: clamp(0.75rem, 1.5vh, 1.25rem);">3.1&times;</span>
                <span class="font-bold uppercase" style="font-size: 0.8125rem; letter-spacing: 0.08em; color: rgba(255, 255, 255, 0.6); margin-top: 0.625rem;">app engagement</span>
                <p class="text-gray-400 leading-relaxed" style="font-size: clamp(0.9375rem, 1.1vw, 1rem); margin-top: clamp(0.875rem, 1.5vh, 1.25rem);">Launched a fan loyalty programme inside the club app, with rewards tied to attendance and matchday content.</p>
                <span class="inline-flex items-center gap-2 font-semibold mt-auto" style="padding-top: clamp(0.875rem, 1.5vh, 1.25rem); font-size: 0.875rem; color: #FF6B50;">
                    <span>Read the case study</span>
                    <i class="bi bi-arrow-right transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true"></i>
                </span>
            </a>

            <!-- Case study 3 -->
            <a href="#" data-placeholder-link="case-study-3" data-placeholder="case-study-3"
               class="group relative rounded-2xl smooth-transition hover-lift flex flex-col"
               style="padding: clamp(1.5rem, 2.5vw, 2.25rem);
                      background: rgba(255, 255, 255, 0.04);
                      backdrop-filter: blur(24px);
                      -webkit-backdrop-filter: blur(24px);
                      border: 1px solid rgba(255, 255, 255, 0.1);">
                <span class="font-semibold" style="font-size: 0.9375rem; color: rgba(255, 255, 255, 0.75);">National broadcaster</span>
                <span class="text-white font-black" style="font-size: clamp(2.75rem, 5vw, 4rem); line-height: 1; letter-spacing: -0.03em; margin-top: clamp(0.75rem, 1.5vh, 1.25rem);">180h</span>
                <span class="font-bold uppercase" style="font-size: 0.8125rem; letter-spacing: 0.08em; color: rgba(255, 255, 255, 0.6); margin-top: 0.625rem;">saved per month</span>
                <p class="text-gray-400 leading-relaxed" style="font-size: clamp(0.9375rem, 1.1vw, 1rem); margin-top: clamp(0.875rem, 1.5vh, 1.25rem);">Replaced manual subtitling and translation with automated transcription across the newsroom.</p>
                <span class="inline-flex items-center gap-2 font-semibold mt-auto" style="padding-top: clamp(0.875rem, 1.5vh, 1.25rem); font-size: 0.875rem; color: #FF6B50;">
                    <span>Read the case study</span>
                    <i class="bi bi-arrow-right transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true"></i>
                </span>
            </a>

        </div>
    </div>
</section>

<!-- OUR EXPERTISE (removed, feedback round 1) -->
<!-- OUR EXPERTISE -->
<!--
    Task 7 merged three former sections into this one, and moved it below the
    testimonials:
      1. the Our Expertise bento grid (what we are expert in)
      2. the standalone "We Don't Sell Products. We Solve Problems." 3-step
         process block (how we work)
      3. the standalone Consultation CTA band, now this section's single button

    The "Your Digital Transformation Partner" pill was dropped in the merge: it
    duplicated the "Digital Transformation Partner" card title sitting a few
    hundred pixels above it.

    Card and step visual treatment (coral 01/02/03 circles, coral vs purple card
    borders, eyebrow pills) is unchanged on purpose. Task 9 normalises accent
    colour and eyebrow legibility across the whole page in one pass.
-->
<section class="relative" style="padding-top: clamp(3rem, 8vh, 7rem); padding-bottom: clamp(3rem, 8vh, 7rem); background: #200A24;">
    <div class="mx-auto" style="max-width: 1360px; padding-left: clamp(1.5rem, 5vw, 6rem); padding-right: clamp(1.5rem, 5vw, 6rem);">

        <!-- Section Header -->
        <div class="text-center" style="margin-bottom: clamp(2rem, 5vh, 4rem);">
            <h2 class="text-white font-black mb-6" style="font-size: clamp(2rem, 4vw, 3.5rem); letter-spacing: -0.02em;">Our Expertise</h2>
            <div class="flex justify-center" style="margin-top: clamp(1rem, 2vh, 1.5rem);">
                <div style="width: 80px; height: 4px; background: linear-gradient(90deg, #FF4B36 0%, #FF6B50 100%); border-radius: 2px;"></div>
            </div>
            <p class="text-gray-400 max-w-2xl mx-auto" style="font-size: clamp(1rem, 1.3vw, 1.125rem);">Beyond our products, we bring strategic expertise and technical depth</p>
        </div>

        <!-- What we are expert in -->
        <div class="grid grid-cols-1 lg:grid-cols-3" style="gap: clamp(1.25rem, 2.5vw, 2rem);">

            <!-- Card 1: Digital Transformation Partner -->
            <div class="relative rounded-3xl smooth-transition hover-lift group flex flex-col"
                 style="padding: clamp(1.5rem, 2.5vw, 2.5rem);
                        min-height: clamp(240px, 28vh, 340px);
                        background: radial-gradient(circle at top left, rgba(255, 255, 255, 0.1), transparent);
                        backdrop-filter: blur(40px);
                        -webkit-backdrop-filter: blur(40px);
                        border: 1px solid rgba(255, 255, 255, 0.12);
                        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
                        overflow: visible;">
                <div class="space-y-4">
                    <div class="inline-block rounded-lg" style="padding: 0.375rem 0.75rem; background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.18);">
                        <span class="font-black uppercase" style="font-size: 0.8125rem; letter-spacing: 0.08em; color: rgba(255, 255, 255, 0.85);">Consulting</span>
                    </div>
                    <h3 class="text-white font-bold" style="font-size: clamp(1.25rem, 2vw, 1.875rem); letter-spacing: -0.02em;">Digital Transformation Partner</h3>
                    <p class="text-gray-300 text-base leading-relaxed" style="opacity: 0.85;">We don't just build platforms - we help you figure out what to build. Strategy, technology, and execution, together.</p>
                </div>
                <a href="/consultation.html" class="inline-flex items-center gap-2 text-vibrant-orange-600 font-bold text-sm mt-auto group-hover:gap-3 smooth-transition" style="padding-top: clamp(1rem, 2vh, 1.5rem);">
                    <span>Learn More</span>
                    <i class="bi bi-arrow-right text-lg"></i>
                </a>
            </div>

            <!-- Card 2: Grant Projects -->
            <div class="relative rounded-3xl smooth-transition hover-lift group flex flex-col"
                 style="padding: clamp(1.5rem, 2.5vw, 2.5rem);
                        min-height: clamp(240px, 28vh, 340px);
                        background: radial-gradient(circle at top left, rgba(255, 255, 255, 0.1), transparent);
                        backdrop-filter: blur(40px);
                        -webkit-backdrop-filter: blur(40px);
                        border: 1px solid rgba(255, 255, 255, 0.12);
                        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);">
                <div class="space-y-4">
                    <div class="inline-block rounded-lg" style="padding: 0.375rem 0.75rem; background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.18);">
                        <span class="font-black uppercase" style="font-size: 0.8125rem; letter-spacing: 0.08em; color: rgba(255, 255, 255, 0.85);">EU-Funded Innovation</span>
                    </div>
                    <h3 class="text-white font-bold" style="font-size: clamp(1.25rem, 2vw, 1.875rem); letter-spacing: -0.02em;">Grant Projects</h3>
                    <p class="text-gray-300 text-base leading-relaxed" style="opacity: 0.85;">Technology partner for Erasmus+, Creative Europe, and other EU-funded initiatives - we handle the tech, you focus on impact.</p>
                </div>
                <a href="/projects.html" class="inline-flex items-center gap-2 text-vibrant-orange-600 font-bold text-sm mt-auto group-hover:gap-3 smooth-transition" style="padding-top: clamp(1rem, 2vh, 1.5rem);">
                    <span>Learn More</span>
                    <i class="bi bi-arrow-right text-lg"></i>
                </a>
            </div>

            <!-- Card 3: AI Solutions -->
            <div class="relative rounded-3xl smooth-transition hover-lift group flex flex-col"
                 style="padding: clamp(1.5rem, 2.5vw, 2.5rem);
                        min-height: clamp(240px, 28vh, 340px);
                        background: radial-gradient(circle at top left, rgba(255, 255, 255, 0.1), transparent);
                        backdrop-filter: blur(40px);
                        -webkit-backdrop-filter: blur(40px);
                        border: 1px solid rgba(255, 255, 255, 0.12);
                        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);">
                <div class="space-y-4">
                    <div class="inline-block rounded-lg" style="padding: 0.375rem 0.75rem; background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.18);">
                        <span class="font-black uppercase" style="font-size: 0.8125rem; letter-spacing: 0.08em; color: rgba(255, 255, 255, 0.85);">Custom AI Platforms</span>
                    </div>
                    <h3 class="text-white font-bold" style="font-size: clamp(1.25rem, 2vw, 1.875rem); letter-spacing: -0.02em;">AI Solutions</h3>
                    <p class="text-gray-300 text-base leading-relaxed" style="opacity: 0.85;">From content automation to intelligent workflows - we build AI tools tailored to how your organization actually works.</p>
                </div>
                <a href="/about.html" class="inline-flex items-center gap-2 text-vibrant-orange-600 font-bold text-sm mt-auto group-hover:gap-3 smooth-transition" style="padding-top: clamp(1rem, 2vh, 1.5rem);">
                    <span>Learn More</span>
                    <i class="bi bi-arrow-right text-lg"></i>
                </a>
            </div>
        </div>

        <!-- How we work — folded in from the standalone 3-step process section -->
        <div class="glass-light rounded-3xl" style="margin-top: clamp(2rem, 5vh, 4rem); padding: clamp(1.75rem, 4vw, 4rem); border-top: 4px solid #FF4B36;">
            <div class="text-center" style="margin-bottom: clamp(2rem, 4vh, 3.5rem);">
                <h3 class="text-white font-black" style="font-size: clamp(1.375rem, 2.2vw, 1.875rem); letter-spacing: -0.02em; margin-bottom: clamp(0.75rem, 2vh, 1.5rem);">
                    We Don't Sell Products. We Solve Problems.
                </h3>
                <p class="text-gray-300 leading-relaxed max-w-3xl mx-auto" style="font-size: clamp(1rem, 1.3vw, 1.125rem); opacity: 0.85;">Most vendors pitch features. We start by listening. What's broken? What's missing? What would make your team's life easier? Then we build — together, over time, adapting as your needs change.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3" style="gap: clamp(1.25rem, 2.5vw, 2rem);">
                <!-- Step 1: Listen -->
                <div class="glass-medium rounded-2xl text-center smooth-transition hover-lift" style="padding: clamp(1.5rem, 2.5vw, 2rem);">
                    <div class="mb-6 flex items-center justify-center">
                        <div class="flex items-center justify-center rounded-full" style="width: clamp(56px, 8vw, 80px); height: clamp(56px, 8vw, 80px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.2);">
                            <span class="text-white font-black" style="font-size: clamp(1.25rem, 2.2vw, 1.875rem);">01</span>
                        </div>
                    </div>
                    <h4 class="text-white font-black mb-4" style="font-size: clamp(1.125rem, 1.8vw, 1.5rem); letter-spacing: -0.01em;">Listen</h4>
                    <p class="text-gray-300 leading-relaxed" style="opacity: 0.85;">What's broken? What's missing? What would save your team hours every week or where you could improve? We figure that out first.</p>
                </div>

                <!-- Step 2: Propose -->
                <div class="glass-medium rounded-2xl text-center smooth-transition hover-lift" style="padding: clamp(1.5rem, 2.5vw, 2rem);">
                    <div class="mb-6 flex items-center justify-center">
                        <div class="flex items-center justify-center rounded-full" style="width: clamp(56px, 8vw, 80px); height: clamp(56px, 8vw, 80px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.2);">
                            <span class="text-white font-black" style="font-size: clamp(1.25rem, 2.2vw, 1.875rem);">02</span>
                        </div>
                    </div>
                    <h4 class="text-white font-black mb-4" style="font-size: clamp(1.125rem, 1.8vw, 1.5rem); letter-spacing: -0.01em;">Propose</h4>
                    <p class="text-gray-300 leading-relaxed" style="opacity: 0.85;">Solutions designed around how you actually work. We come back with a plan that fits your organization, your audience, and your goals.</p>
                </div>

                <!-- Step 3: Deliver -->
                <div class="glass-medium rounded-2xl text-center smooth-transition hover-lift" style="padding: clamp(1.5rem, 2.5vw, 2rem);">
                    <div class="mb-6 flex items-center justify-center">
                        <div class="flex items-center justify-center rounded-full" style="width: clamp(56px, 8vw, 80px); height: clamp(56px, 8vw, 80px); background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.2);">
                            <span class="text-white font-black" style="font-size: clamp(1.25rem, 2.2vw, 1.875rem);">03</span>
                        </div>
                    </div>
                    <h4 class="text-white font-black mb-4" style="font-size: clamp(1.125rem, 1.8vw, 1.5rem); letter-spacing: -0.01em;">Deliver</h4>
                    <p class="text-gray-300 leading-relaxed" style="opacity: 0.85;">We don't hand over the keys and disappear. We're in it with you — your success is how we measure ours.</p>
                </div>
            </div>
        </div>

        <!-- Section CTA — folded in from the standalone Consultation band -->
        <div class="text-center" style="margin-top: clamp(2rem, 5vh, 4rem);">
            <h3 class="text-white font-bold" style="font-size: clamp(1.375rem, 2.2vw, 1.875rem); letter-spacing: -0.02em; margin-bottom: clamp(0.5rem, 1vh, 0.75rem);">Not sure where to start with digital transformation?</h3>
            <p class="text-gray-400 mx-auto" style="font-size: clamp(0.9375rem, 1.1vw, 1rem); max-width: 46rem; margin-bottom: clamp(1.25rem, 3vh, 2rem);">We run discovery workshops and technical audits to help media and sports organizations find the right path forward.</p>
            <a href="/consultation.html" class="group inline-flex items-center justify-center gap-3 rounded-xl font-bold text-white transition-all duration-300 hover:-translate-y-1"
               style="padding: clamp(0.75rem, 1.6vh, 1rem) clamp(1.5rem, 2.5vw, 2rem); font-size: clamp(0.9375rem, 1.1vw, 1rem); background: linear-gradient(135deg, #FF4B36 0%, #FF6B50 100%); box-shadow: 0 4px 12px rgba(255, 75, 54, 0.3);">
                <span>Learn about our consulting</span>
                <i class="bi bi-arrow-right transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true"></i>
            </a>
        </div>

    </div>
</section>
`
