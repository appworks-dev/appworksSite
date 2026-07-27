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
