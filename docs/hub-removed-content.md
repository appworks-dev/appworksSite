# Content removed from the Media and Sport hubs

Preserved verbatim before deletion, per the rebuild brief. Nothing here is live.

Both hubs were rebuilt as problem-led hubs: the mobile app depth moved to the
product pages (`fanfuel.html`, `verbavista.html`) and the hubs now route a
visitor's problem to the right product instead of describing one product.

## sport.html

### Why the statistics went

The "Fan Engagement Crisis" section carried four unsourced figures - 31%, 70%,
55%, 85%. They trace back to the FanFuel deck and appear to date from 2023-24.
Removed on instruction and deliberately not replaced: if market data is wanted
later it gets sourced and dated properly.

### Why the feature blocks went

"Fan Engagement App Features" (Fan Loyalty & Rewards, Digital Tickets &
Check-In, Interactive Fan Engagement) and "More Capabilities" were mobile-app
depth. That content is now on `fanfuel.html`, which is the canonical page for
it. The hub links out rather than restating it.

### Removed markup, verbatim

```html
        <!-- Stats Section -->
        <section class="relative" style="padding-top: clamp(3rem, 8vh, 7rem); padding-bottom: clamp(3rem, 8vh, 7rem); background: transparent;">
            <div class="mx-auto" style="max-width: 1500px; padding-left: clamp(1.5rem, 5vw, 6rem); padding-right: clamp(1.5rem, 5vw, 6rem);">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-white font-black mb-6" style="font-size: clamp(2rem, 4vw, 3.5rem); letter-spacing: -0.02em;">The Fan Engagement Crisis</h2>
                    <div class="flex justify-center mb-6">
                        <div style="width: 80px; height: 4px; background: linear-gradient(90deg, #FF4B36 0%, #FF6B50 100%); border-radius: 2px; box-shadow: 0 0 20px rgba(255, 75, 54, 0.5);"></div>
                    </div>
                    <p class="text-gray-300 text-xl max-w-3xl mx-auto" style="opacity: 0.85;">Sports organizations face declining attendance, eroding loyalty, and lost revenue. Without a sports fan engagement app, clubs lose touch with their audience.</p>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Stat 1 -->
                    <div class="stats-card text-center">
                        <div class="mb-4">
                            <i class="bi bi-tv text-3xl md:text-5xl" style="color: #FF4B36; filter: drop-shadow(0 0 20px rgba(255, 75, 54, 0.4));"></i>
                        </div>
                        <div class="mb-3">
                            <span class="text-white font-black" style="font-size: clamp(2rem, 4vw, 3.25rem); line-height: 1; letter-spacing: -0.03em;">31%</span>
                        </div>
                        <h4 class="text-white font-bold text-base md:text-lg mb-2">Declining Live Viewership</h4>
                        <p class="text-gray-400 text-xs md:text-sm">Only 31% of fans aged 18-24 watch live matches</p>
                    </div>

                    <!-- Stat 2 -->
                    <div class="stats-card text-center">
                        <div class="mb-4">
                            <i class="bi bi-chat-dots text-3xl md:text-5xl" style="color: #FF4B36; filter: drop-shadow(0 0 20px rgba(255, 75, 54, 0.4));"></i>
                        </div>
                        <div class="mb-3">
                            <span class="text-white font-black" style="font-size: clamp(2rem, 4vw, 3.25rem); line-height: 1; letter-spacing: -0.03em;">70%</span>
                        </div>
                        <h4 class="text-white font-bold text-base md:text-lg mb-2">Social Media Distraction</h4>
                        <p class="text-gray-400 text-xs md:text-sm">70% of younger fans use social media during games</p>
                    </div>

                    <!-- Stat 3 -->
                    <div class="stats-card text-center">
                        <div class="mb-4">
                            <i class="bi bi-cpu text-3xl md:text-5xl" style="color: #FF4B36; filter: drop-shadow(0 0 20px rgba(255, 75, 54, 0.4));"></i>
                        </div>
                        <div class="mb-3">
                            <span class="text-white font-black" style="font-size: clamp(2rem, 4vw, 3.25rem); line-height: 1; letter-spacing: -0.03em;">55%</span>
                        </div>
                        <h4 class="text-white font-bold text-base md:text-lg mb-2">Tech Integration Demand</h4>
                        <p class="text-gray-400 text-xs md:text-sm">55% of fans demand tech integration at live events</p>
                    </div>

                    <!-- Stat 4 -->
                    <div class="stats-card text-center">
                        <div class="mb-4">
                            <i class="bi bi-phone text-3xl md:text-5xl" style="color: #FF4B36; filter: drop-shadow(0 0 20px rgba(255, 75, 54, 0.4));"></i>
                        </div>
                        <div class="mb-3">
                            <span class="text-white font-black" style="font-size: clamp(2rem, 4vw, 3.25rem); line-height: 1; letter-spacing: -0.03em;">85%</span>
                        </div>
                        <h4 class="text-white font-bold text-base md:text-lg mb-2">Mobile App Expectation</h4>
                        <p class="text-gray-400 text-xs md:text-sm">85% expect mobile app engagement from their teams</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="relative overflow-visible" style="padding-top: clamp(3rem, 8vh, 7rem); padding-bottom: clamp(3rem, 8vh, 7rem); background: transparent;">
            <div class="mx-auto" style="max-width: 1500px; padding-left: clamp(1.5rem, 5vw, 6rem); padding-right: clamp(1.5rem, 5vw, 6rem);">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-white font-black mb-6" style="font-size: clamp(2rem, 4vw, 3.5rem); letter-spacing: -0.02em;">Fan Engagement App Features</h2>
                    <div class="flex justify-center mb-6">
                        <div style="width: 80px; height: 4px; background: linear-gradient(90deg, #FF4B36 0%, #FF6B50 100%); border-radius: 2px; box-shadow: 0 0 20px rgba(255, 75, 54, 0.5);"></div>
                    </div>
                    <p class="text-gray-300 text-xl max-w-3xl mx-auto" style="opacity: 0.85;">Our fan experience app is designed for fans, built for engagement, and optimized for revenue.</p>
                </div>

                <!-- Feature 1: Loyalty Program -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center mb-32">
                    <div class="space-y-6">
                        <div class="inline-block rounded-lg" style="padding: 0.375rem 0.75rem; background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.18);">
                            <span class="font-black uppercase" style="font-size: 0.8125rem; letter-spacing: 0.08em; color: rgba(255, 255, 255, 0.85);">LOYALTY</span>
                        </div>
                        <h3 class="text-white font-black" style="font-size: clamp(1.625rem, 2.8vw, 2.5rem); letter-spacing: -0.03em;">Fan Loyalty & Rewards</h3>
                        <p class="text-gray-300 text-xl leading-relaxed" style="opacity: 0.9;">A complete sports fan loyalty platform with gamified rewards, fan membership programs, and tiered benefits. Fans earn points for attendance, purchases, and interactions.</p>
                        <ul class="space-y-4 mt-6">
                            <li class="flex items-start gap-4">
                                <i class="bi bi-check-circle-fill text-2xl" style="color: #FF4B36;"></i>
                                <div>
                                    <span class="text-white font-bold">Point Collection</span>
                                    <p class="text-gray-400 text-sm mt-1">Fans earn points for attendance, purchases, and engagement</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="bi bi-check-circle-fill text-2xl" style="color: #FF4B36;"></i>
                                <div>
                                    <span class="text-white font-bold">Reward Redemption</span>
                                    <p class="text-gray-400 text-sm mt-1">Redeem points for merchandise, tickets, and exclusive experiences</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="bi bi-check-circle-fill text-2xl" style="color: #FF4B36;"></i>
                                <div>
                                    <span class="text-white font-bold">Tier System</span>
                                    <p class="text-gray-400 text-sm mt-1">VIP tiers unlock exclusive benefits and recognition</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="relative product-mockup flex justify-center">
                        <!-- Scroll-Following Glow (Orange) -->
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 -z-10 pointer-events-none"
                             style="width: min(500px, 86vw); height: min(500px, 86vw);
                                    background: radial-gradient(circle, rgba(255, 75, 54, 0.3) 0%, rgba(255, 107, 80, 0.15) 40%, transparent 70%);
                                    filter: blur(60px);"></div>

                        <!-- iPhone Mockup - Straight On -->
                        <div class="relative" style="max-width: 500px;">
                            <img loading="lazy" src="https://appworks.mpanel.app/image/cache/original/files/images/device-mockup-15x-postspark-2026-01-12-09-51-35.png?crop=true"
                                 alt="Loyalty Program"
                                 class="w-full"
                                 style="filter: drop-shadow(0 25px 60px rgba(0, 0, 0, 0.5)) drop-shadow(0 0 40px rgba(255, 75, 54, 0.3));">
                        </div>
                    </div>
                </div>

                <!-- Feature 2: Digital Tickets -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center mb-32">
                    <div class="relative product-mockup order-2 lg:order-1 flex justify-center">
                        <!-- Scroll-Following Glow (Orange) -->
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 -z-10 pointer-events-none"
                             style="width: min(500px, 86vw); height: min(500px, 86vw);
                                    background: radial-gradient(circle, rgba(255, 75, 54, 0.3) 0%, rgba(255, 107, 80, 0.15) 40%, transparent 70%);
                                    filter: blur(60px);"></div>

                        <!-- iPhone Mockup - Straight On -->
                        <div class="relative" style="max-width: 500px;">
                            <img loading="lazy" src="https://appworks.mpanel.app/image/cache/original/files/images/device-mockup-15x-postspark-2026-01-12-09-53-34.png?crop=true"
                                 alt="Digital Tickets"
                                 class="w-full"
                                 style="filter: drop-shadow(0 25px 60px rgba(0, 0, 0, 0.5)) drop-shadow(0 0 40px rgba(255, 75, 54, 0.3));">
                        </div>
                    </div>
                    <div class="space-y-6 order-1 lg:order-2">
                        <div class="inline-block rounded-lg" style="padding: 0.375rem 0.75rem; background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.18);">
                            <span class="font-black uppercase" style="font-size: 0.8125rem; letter-spacing: 0.08em; color: rgba(255, 255, 255, 0.85);">TICKETING</span>
                        </div>
                        <h3 class="text-white font-black" style="font-size: clamp(1.625rem, 2.8vw, 2.5rem); letter-spacing: -0.03em;">Digital Tickets & Check-In</h3>
                        <p class="text-gray-300 text-xl leading-relaxed" style="opacity: 0.9;">Seamless ticketing experience from purchase to entry with secure digital tickets and fast check-in.</p>
                        <ul class="space-y-4 mt-6">
                            <li class="flex items-start gap-4">
                                <i class="bi bi-check-circle-fill text-2xl" style="color: #FF4B36;"></i>
                                <div>
                                    <span class="text-white font-bold">Mobile Tickets</span>
                                    <p class="text-gray-400 text-sm mt-1">QR code-based digital tickets stored in the app</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="bi bi-check-circle-fill text-2xl" style="color: #FF4B36;"></i>
                                <div>
                                    <span class="text-white font-bold">Fast Check-In</span>
                                    <p class="text-gray-400 text-sm mt-1">Quick stadium entry with contactless scanning</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="bi bi-check-circle-fill text-2xl" style="color: #FF4B36;"></i>
                                <div>
                                    <span class="text-white font-bold">Season Pass Management</span>
                                    <p class="text-gray-400 text-sm mt-1">Digital season tickets with easy transfer options</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Feature 3: Fan Engagement -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                    <div class="space-y-6">
                        <div class="inline-block rounded-lg" style="padding: 0.375rem 0.75rem; background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.18);">
                            <span class="font-black uppercase" style="font-size: 0.8125rem; letter-spacing: 0.08em; color: rgba(255, 255, 255, 0.85);">ENGAGEMENT</span>
                        </div>
                        <h3 class="text-white font-black" style="font-size: clamp(1.625rem, 2.8vw, 2.5rem); letter-spacing: -0.03em;">Interactive Fan Engagement</h3>
                        <p class="text-gray-300 text-xl leading-relaxed" style="opacity: 0.9;">Keep fans engaged before, during, and after the game. Our fan engagement solution includes live scores, polls, predictions, and exclusive content.</p>
                        <ul class="space-y-4 mt-6">
                            <li class="flex items-start gap-4">
                                <i class="bi bi-check-circle-fill text-2xl" style="color: #FF4B36;"></i>
                                <div>
                                    <span class="text-white font-bold">Live Match Updates</span>
                                    <p class="text-gray-400 text-sm mt-1">Real-time scores, stats, and commentary</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="bi bi-check-circle-fill text-2xl" style="color: #FF4B36;"></i>
                                <div>
                                    <span class="text-white font-bold">Polls & Predictions</span>
                                    <p class="text-gray-400 text-sm mt-1">Interactive polls, match predictions, and player voting</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="bi bi-check-circle-fill text-2xl" style="color: #FF4B36;"></i>
                                <div>
                                    <span class="text-white font-bold">Exclusive Content</span>
                                    <p class="text-gray-400 text-sm mt-1">Behind-the-scenes videos, player interviews, and more</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="relative product-mockup flex justify-center">
                        <!-- Scroll-Following Glow (Orange) -->
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 -z-10 pointer-events-none"
                             style="width: min(500px, 86vw); height: min(500px, 86vw);
                                    background: radial-gradient(circle, rgba(255, 75, 54, 0.3) 0%, rgba(255, 107, 80, 0.15) 40%, transparent 70%);
                                    filter: blur(60px);"></div>

                        <!-- iPhone Mockup - Straight On -->
                        <div class="relative" style="max-width: 500px;">
                            <img loading="lazy" src="https://appworks.mpanel.app/image/cache/original/files/images/device-mockup-15x-postspark-2026-01-12-09-52-05.png?crop=true"
                                 alt="Fan Engagement"
                                 class="w-full"
                                 style="filter: drop-shadow(0 25px 60px rgba(0, 0, 0, 0.5)) drop-shadow(0 0 40px rgba(255, 75, 54, 0.3));">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- More Capabilities Section -->
        <section class="relative" style="padding-top: clamp(3rem, 8vh, 7rem); padding-bottom: clamp(3rem, 8vh, 7rem); background: transparent;">
            <div class="mx-auto" style="max-width: 1500px; padding-left: clamp(1.5rem, 5vw, 6rem); padding-right: clamp(1.5rem, 5vw, 6rem);">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-white font-black mb-6" style="font-size: clamp(2rem, 4vw, 3.5rem); letter-spacing: -0.02em;">More Capabilities</h2>
                    <div class="flex justify-center mb-6">
                        <div style="width: 80px; height: 4px; background: linear-gradient(90deg, #FF4B36 0%, #FF6B50 100%); border-radius: 2px;"></div>
                    </div>
                </div>

                <!-- Features Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Feature 1 -->
                    <div class="feature-card smooth-transition hover:-translate-y-2 glow-orange-hover">
                        <i class="bi bi-shop text-5xl mb-4 block" style="color: #FF4B36; filter: drop-shadow(0 0 20px rgba(255, 75, 54, 0.4));"></i>
                        <h4 class="text-white font-bold text-xl mb-3">Merchandise Store</h4>
                        <p class="text-gray-300 leading-relaxed" style="opacity: 0.85;">In-app shop for team merchandise with exclusive deals for app users.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="feature-card smooth-transition hover:-translate-y-2 glow-orange-hover">
                        <i class="bi bi-bell text-5xl mb-4 block" style="color: #FF4B36; filter: drop-shadow(0 0 20px rgba(255, 75, 54, 0.4));"></i>
                        <h4 class="text-white font-bold text-xl mb-3">Push Notifications</h4>
                        <p class="text-gray-300 leading-relaxed" style="opacity: 0.85;">Real-time updates for matches, news, and exclusive offers.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="feature-card smooth-transition hover:-translate-y-2 glow-orange-hover">
                        <i class="bi bi-calendar-event text-5xl mb-4 block" style="color: #FF4B36; filter: drop-shadow(0 0 20px rgba(255, 75, 54, 0.4));"></i>
                        <h4 class="text-white font-bold text-xl mb-3">Match Calendar</h4>
                        <p class="text-gray-300 leading-relaxed" style="opacity: 0.85;">Full fixture list with reminders and calendar integration.</p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="feature-card smooth-transition hover:-translate-y-2 glow-orange-hover">
                        <i class="bi bi-people text-5xl mb-4 block" style="color: #FF4B36; filter: drop-shadow(0 0 20px rgba(255, 75, 54, 0.4));"></i>
                        <h4 class="text-white font-bold text-xl mb-3">Player Profiles</h4>
                        <p class="text-gray-300 leading-relaxed" style="opacity: 0.85;">Detailed player stats, bios, and performance tracking.</p>
                    </div>

                    <!-- Feature 5 -->
                    <div class="feature-card smooth-transition hover:-translate-y-2 glow-orange-hover">
                        <i class="bi bi-chat-square-text text-5xl mb-4 block" style="color: #FF4B36; filter: drop-shadow(0 0 20px rgba(255, 75, 54, 0.4));"></i>
                        <h4 class="text-white font-bold text-xl mb-3">Fan Community</h4>
                        <p class="text-gray-300 leading-relaxed" style="opacity: 0.85;">Forums and chat features for fans to connect and discuss.</p>
                    </div>

                    <!-- Feature 6 -->
                    <div class="feature-card smooth-transition hover:-translate-y-2 glow-orange-hover">
                        <i class="bi bi-bar-chart text-5xl mb-4 block" style="color: #FF4B36; filter: drop-shadow(0 0 20px rgba(255, 75, 54, 0.4));"></i>
                        <h4 class="text-white font-bold text-xl mb-3">Analytics Dashboard</h4>
                        <p class="text-gray-300 leading-relaxed" style="opacity: 0.85;">Track engagement, loyalty metrics, and fan behavior insights.</p>
                    </div>
                </div>
            </div>
        </section>
```

## media.html

### Why the statistics went

"The Digital Media Landscape" carried unsourced figures including a
"200% digital growth by 2026" claim and a 70% mobile-first figure. It is now
August 2026, so "by 2026" was a claim about the present rather than a forecast.
Removed on instruction and not replaced.

The meta description also carried "Trusted by 50+ publishers worldwide", an
unsourced client count. Removed for the same reason.

### Why the feature blocks went

"Feature Solutions" (Mobile App Platform, User Generated Content, Smart Push
Notifications, Monetization Solutions) and "More Capabilities" were mobile-app
depth, which `verbavista.html` now owns.

### Removed beyond the named list

Two more sections came out than Task 3.1 named, both to keep the hub a sibling
of the Sport hub rather than a hybrid:

- **"What We Offer for Media"** (Monetization / Engagement / Distribution) was
  paywalls, push notifications and offline reading - the same app-platform
  territory as the Feature Solutions blocks, so leaving it would have
  contradicted the removal.
- **"Explore Our Platforms"** routed to mPanel CMS and Litteraworks. The new
  "What we do for media" section routes to every product, so keeping both would
  mean two competing routing sections on one page.

### Removed markup, verbatim

```html
        <!-- Industry Challenges Section -->
        <section class="relative" style="padding-top: clamp(3rem, 8vh, 7rem); padding-bottom: clamp(3rem, 8vh, 7rem); background: transparent;">
            <div class="mx-auto" style="max-width: 1500px; padding-left: clamp(1.5rem, 5vw, 6rem); padding-right: clamp(1.5rem, 5vw, 6rem);">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-white font-black mb-6" style="font-size: clamp(2rem, 4vw, 3.5rem); letter-spacing: -0.02em;">The Digital Media Landscape</h2>
                    <div class="flex justify-center mb-6">
                        <div style="width: 80px; height: 4px; background: linear-gradient(90deg, #FF4B36 0%, #FF6B50 100%); border-radius: 2px; box-shadow: 0 0 20px rgba(255, 75, 54, 0.5);"></div>
                    </div>
                    <p class="text-gray-300 text-xl max-w-3xl mx-auto" style="opacity: 0.85;">Media habits are changing fast. Teams that adapt early stay relevant and in control.</p>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Stat 1 -->
                    <div class="stats-card text-center">
                        <div class="mb-4">
                            <i class="bi bi-phone text-5xl" style="color: #FF4B36; filter: drop-shadow(0 0 20px rgba(255, 75, 54, 0.4));"></i>
                        </div>
                        <div class="mb-3">
                            <span class="text-white font-black" style="font-size: clamp(2rem, 4vw, 3.25rem); line-height: 1; letter-spacing: -0.03em;">70%</span>
                        </div>
                        <h4 class="text-white font-bold text-lg mb-2">Mobile-First</h4>
                        <p class="text-gray-400 text-sm">Of news is now consumed on mobile devices</p>
                    </div>

                    <!-- Stat 2 -->
                    <div class="stats-card text-center">
                        <div class="mb-4">
                            <i class="bi bi-graph-up-arrow text-5xl" style="color: #FF4B36; filter: drop-shadow(0 0 20px rgba(255, 75, 54, 0.4));"></i>
                        </div>
                        <div class="mb-3">
                            <span class="text-white font-black" style="font-size: clamp(2rem, 4vw, 3.25rem); line-height: 1; letter-spacing: -0.03em;">200%</span>
                        </div>
                        <h4 class="text-white font-bold text-lg mb-2">Digital Growth</h4>
                        <p class="text-gray-400 text-sm">Time with digital media vs traditional by 2026</p>
                    </div>

                    <!-- Stat 3 -->
                    <div class="stats-card text-center">
                        <div class="mb-4">
                            <i class="bi bi-robot text-5xl" style="color: #FF4B36; filter: drop-shadow(0 0 20px rgba(255, 75, 54, 0.4));"></i>
                        </div>
                        <div class="mb-3">
                            <span class="text-white font-black" style="font-size: clamp(2rem, 4vw, 3.25rem); line-height: 1; letter-spacing: -0.03em;">67%</span>
                        </div>
                        <h4 class="text-white font-bold text-lg mb-2">AI Adoption</h4>
                        <p class="text-gray-400 text-sm">Media companies using generative AI</p>
                    </div>

                    <!-- Stat 4 -->
                    <div class="stats-card text-center">
                        <div class="mb-4">
                            <i class="bi bi-currency-dollar text-5xl" style="color: #FF4B36; filter: drop-shadow(0 0 20px rgba(255, 75, 54, 0.4));"></i>
                        </div>
                        <div class="mb-3">
                            <span class="text-white font-black" style="font-size: clamp(2rem, 4vw, 3.25rem); line-height: 1; letter-spacing: -0.03em;">80%</span>
                        </div>
                        <h4 class="text-white font-bold text-lg mb-2">Subscriptions</h4>
                        <p class="text-gray-400 text-sm">Leaders see digital subs as crucial revenue</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- What We Offer for Media - 55/45 Asymmetrical Layout -->
        <section class="relative overflow-visible" style="padding-top: clamp(3rem, 8vh, 7rem); padding-bottom: clamp(3rem, 8vh, 7rem); background: transparent;">
            <div class="mx-auto" style="max-width: 1500px; padding-left: clamp(1.5rem, 5vw, 6rem); padding-right: clamp(1.5rem, 5vw, 6rem);">
                <div class="flex flex-col lg:flex-row gap-12 items-center">
                    <!-- Left: Content (55%) - Minimal left padding, bold typography -->
                    <div class="lg:w-[55%] space-y-8">
                        <div class="inline-block px-4 py-2 rounded-lg glass-light">
                            <span class="font-black uppercase" style="font-size: 0.8125rem; letter-spacing: 0.08em; color: rgba(255, 255, 255, 0.85);">WHAT WE OFFER</span>
                        </div>
                        <h2 class="text-white font-black mb-6" style="font-size: clamp(2rem, 4vw, 3.5rem); letter-spacing: -0.02em;">What We Offer for Media</h2>
                        <div style="width: 80px; height: 4px; background: linear-gradient(90deg, #FF4B36 0%, #FF6B50 100%); border-radius: 2px;"></div>

                        <!-- Three key points - Large bold headers, no icons -->
                        <div class="space-y-8 mt-8">
                            <!-- Monetization -->
                            <div class="relative pl-6 border-l-2" style="border-color: rgba(255, 75, 54, 0.3);">
                                <h3 class="text-white font-black mb-3" style="font-size: clamp(1.25rem, 2vw, 1.875rem); letter-spacing: -0.02em;">Monetization</h3>
                                <p class="text-gray-300 text-base lg:text-lg leading-relaxed" style="opacity: 0.9;">Subscriptions, paywalls, advertising, e-paper, and premium content models that drive sustainable revenue.</p>
                            </div>

                            <!-- Engagement -->
                            <div class="relative pl-6 border-l-2" style="border-color: rgba(255, 75, 54, 0.3);">
                                <h3 class="text-white font-black mb-3" style="font-size: clamp(1.25rem, 2vw, 1.875rem); letter-spacing: -0.02em;">Engagement</h3>
                                <p class="text-gray-300 text-base lg:text-lg leading-relaxed" style="opacity: 0.9;">Polls, quizzes, comments, user-generated content, and community forums that keep audiences connected.</p>
                            </div>

                            <!-- Distribution -->
                            <div class="relative pl-6 border-l-2" style="border-color: rgba(255, 75, 54, 0.3);">
                                <h3 class="text-white font-black mb-3" style="font-size: clamp(1.25rem, 2vw, 1.875rem); letter-spacing: -0.02em;">Distribution</h3>
                                <p class="text-gray-300 text-base lg:text-lg leading-relaxed" style="opacity: 0.9;">Native iOS & Android apps with push notifications, personalization, and offline reading capabilities.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Asset (45%) - Large presence -->
                    <div class="lg:w-[45%] relative flex justify-center items-center overflow-visible">
                        <img loading="lazy" src="https://appworks.mpanel.app/image/cache/original/files/images/generated-image-january-15-2026-9-23am-removebg-preview.png?crop=true"
                             alt="Mobile Interaction Engine"
                             class="relative z-10 animate-float"
                             style="width: 45vw; max-width: 550px; min-width: 300px; mix-blend-mode: screen; filter: drop-shadow(0 0 60px rgba(255, 75, 54, 0.5));">
                    </div>
                </div>
            </div>
        </section>

        <!-- Feature Solutions Section -->
        <section class="relative overflow-visible" style="padding-top: clamp(3rem, 8vh, 7rem); padding-bottom: clamp(3rem, 8vh, 7rem); background: transparent;">
            <div class="mx-auto" style="max-width: 1500px; padding-left: clamp(1.5rem, 5vw, 6rem); padding-right: clamp(1.5rem, 5vw, 6rem);">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-white font-black mb-6" style="font-size: clamp(2rem, 4vw, 3.5rem); letter-spacing: -0.02em;">Feature Solutions</h2>
                    <div class="flex justify-center mb-6">
                        <div style="width: 80px; height: 4px; background: linear-gradient(90deg, #FF4B36 0%, #FF6B50 100%); border-radius: 2px; box-shadow: 0 0 20px rgba(255, 75, 54, 0.5);"></div>
                    </div>
                    <p class="text-gray-300 text-xl max-w-3xl mx-auto" style="opacity: 0.85;">Features designed around actual media teams' needs.</p>
                </div>

                <!-- Solution 1: Mobile App Platform -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-32">
                    <div class="space-y-6">
                        <div class="inline-block rounded-lg" style="padding: 0.375rem 0.75rem; background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.18);">
                            <span class="font-black uppercase" style="font-size: 0.8125rem; letter-spacing: 0.08em; color: rgba(255, 255, 255, 0.85);">MOBILE APPS</span>
                        </div>
                        <h3 class="text-white font-black" style="font-size: clamp(1.625rem, 2.8vw, 2.5rem); letter-spacing: -0.03em;">Mobile App Platform</h3>
                        <p class="text-gray-300 text-xl leading-relaxed" style="opacity: 0.9;">Native iOS and Android apps that deliver personalized content, push notifications, and seamless offline reading experiences.</p>
                        <ul class="space-y-4 mt-6">
                            <li class="flex items-start gap-4">
                                <i class="bi bi-check-circle-fill text-2xl" style="color: #FF4B36;"></i>
                                <div>
                                    <span class="text-white font-bold">Personalized Experience</span>
                                    <p class="text-gray-400 text-sm mt-1">Content aligned with user interests and preferences</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="bi bi-check-circle-fill text-2xl" style="color: #FF4B36;"></i>
                                <div>
                                    <span class="text-white font-bold">Push Notifications</span>
                                    <p class="text-gray-400 text-sm mt-1">Personalized, live & geo-targeted notifications</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="bi bi-check-circle-fill text-2xl" style="color: #FF4B36;"></i>
                                <div>
                                    <span class="text-white font-bold">Centralized Content</span>
                                    <p class="text-gray-400 text-sm mt-1">Automated imports from existing sources</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="relative product-mockup flex justify-center">
                        <!-- Scroll-Following Glow (Orange) -->
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 -z-10 pointer-events-none"
                             style="width: min(500px, 86vw); height: min(500px, 86vw);
                                    background: radial-gradient(circle, rgba(255, 75, 54, 0.3) 0%, rgba(255, 107, 80, 0.15) 40%, transparent 70%);
                                    filter: blur(60px);"></div>

                        <!-- iPhone Mockup - Straight On -->
                        <div class="relative" style="max-width: 500px;">
                            <img loading="lazy" src="https://appworks.mpanel.app/image/cache/original/files/images/device-mockup-15x-postspark-2025-12-31-11-08-59.png?crop=true"
                                 alt="Mobile App Platform"
                                 class="w-full"
                                 style="filter: drop-shadow(0 25px 60px rgba(0, 0, 0, 0.5)) drop-shadow(0 0 40px rgba(255, 75, 54, 0.3));">
                        </div>
                    </div>
                </div>

                <!-- Solution 2: User Generated Content -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-32">
                    <div class="relative product-mockup order-2 lg:order-1 flex justify-center">
                        <!-- Scroll-Following Glow (Purple) -->
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 -z-10 pointer-events-none"
                             style="width: min(500px, 86vw); height: min(500px, 86vw);
                                    background: radial-gradient(circle, rgba(139, 92, 246, 0.3) 0%, rgba(167, 139, 250, 0.15) 40%, transparent 70%);
                                    filter: blur(60px);"></div>

                        <!-- iPhone Mockup - Straight On -->
                        <div class="relative" style="max-width: 500px;">
                            <img loading="lazy" src="https://appworks.mpanel.app/image/cache/original/files/images/device-mockup-15x-postspark-2025-12-31-11-09-23.png?crop=true"
                                 alt="User Generated Content"
                                 class="w-full"
                                 style="filter: drop-shadow(0 25px 60px rgba(0, 0, 0, 0.5)) drop-shadow(0 0 40px rgba(139, 92, 246, 0.3));">
                        </div>
                    </div>
                    <div class="space-y-6 order-1 lg:order-2">
                        <div class="inline-block px-4 py-2 rounded-lg" style="background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 100%);">
                            <span class="font-black uppercase" style="font-size: 0.8125rem; letter-spacing: 0.08em; color: rgba(255, 255, 255, 0.85);">COMMUNITY</span>
                        </div>
                        <h3 class="text-white font-black" style="font-size: clamp(1.625rem, 2.8vw, 2.5rem); letter-spacing: -0.03em;">User Generated Content</h3>
                        <p class="text-gray-300 text-xl leading-relaxed" style="opacity: 0.9;">Enable your audience to contribute stories, photos, and videos through an intuitive interface with complete editorial control.</p>
                        <ul class="space-y-4 mt-6">
                            <li class="flex items-start gap-4">
                                <i class="bi bi-check-circle-fill text-2xl" style="color: #8B5CF6;"></i>
                                <div>
                                    <span class="text-white font-bold">Local Journalism Platform</span>
                                    <p class="text-gray-400 text-sm mt-1">Users upload photos and videos, encouraging community engagement</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="bi bi-check-circle-fill text-2xl" style="color: #8B5CF6;"></i>
                                <div>
                                    <span class="text-white font-bold">CMS Integration</span>
                                    <p class="text-gray-400 text-sm mt-1">Complete control and moderation through the central CMS</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="bi bi-check-circle-fill text-2xl" style="color: #8B5CF6;"></i>
                                <div>
                                    <span class="text-white font-bold">Modern Upload Experience</span>
                                    <p class="text-gray-400 text-sm mt-1">Instagram/TikTok-style interface for easy sharing</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Solution 3: Push Notifications -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-32">
                    <div class="space-y-6">
                        <div class="inline-block rounded-lg" style="padding: 0.375rem 0.75rem; background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.18);">
                            <span class="font-black uppercase" style="font-size: 0.8125rem; letter-spacing: 0.08em; color: rgba(255, 255, 255, 0.85);">NOTIFICATIONS</span>
                        </div>
                        <h3 class="text-white font-black" style="font-size: clamp(1.625rem, 2.8vw, 2.5rem); letter-spacing: -0.03em;">Smart Push Notifications</h3>
                        <p class="text-gray-300 text-xl leading-relaxed" style="opacity: 0.9;">Reach your audience at the right time with personalized, geo-targeted, and live notifications that drive engagement.</p>
                        <ul class="space-y-4 mt-6">
                            <li class="flex items-start gap-4">
                                <i class="bi bi-check-circle-fill text-2xl" style="color: #FF4B36;"></i>
                                <div>
                                    <span class="text-white font-bold">Article Notifications</span>
                                    <p class="text-gray-400 text-sm mt-1">Personalized based on preferences, auto-sent from CMS</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="bi bi-check-circle-fill text-2xl" style="color: #FF4B36;"></i>
                                <div>
                                    <span class="text-white font-bold">Live Notifications</span>
                                    <p class="text-gray-400 text-sm mt-1">Real-time updates for ongoing events, consolidated delivery</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="bi bi-check-circle-fill text-2xl" style="color: #FF4B36;"></i>
                                <div>
                                    <span class="text-white font-bold">Geo-Targeted</span>
                                    <p class="text-gray-400 text-sm mt-1">Location-based notifications for cities, stadiums, events</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="relative product-mockup flex justify-center">
                        <!-- Scroll-Following Glow (Orange) -->
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 -z-10 pointer-events-none"
                             style="width: min(500px, 86vw); height: min(500px, 86vw);
                                    background: radial-gradient(circle, rgba(255, 75, 54, 0.3) 0%, rgba(255, 107, 80, 0.15) 40%, transparent 70%);
                                    filter: blur(60px);"></div>

                        <!-- iPhone Mockup - Straight On -->
                        <div class="relative" style="max-width: 500px;">
                            <img loading="lazy" src="https://appworks.mpanel.app/image/cache/original/files/images/device-mockup-15x-postspark-2025-12-31-11-10-47.png?crop=true"
                                 alt="Push Notifications"
                                 class="w-full"
                                 style="filter: drop-shadow(0 25px 60px rgba(0, 0, 0, 0.5)) drop-shadow(0 0 40px rgba(255, 75, 54, 0.3));">
                        </div>
                    </div>
                </div>

                <!-- Solution 4: Monetization -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="relative product-mockup order-2 lg:order-1 flex justify-center">
                        <!-- Scroll-Following Glow (Orange) -->
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 -z-10 pointer-events-none"
                             style="width: min(500px, 86vw); height: min(500px, 86vw);
                                    background: radial-gradient(circle, rgba(255, 75, 54, 0.3) 0%, rgba(255, 107, 80, 0.15) 40%, transparent 70%);
                                    filter: blur(60px);"></div>

                        <!-- iPhone Mockup - Straight On -->
                        <div class="relative" style="max-width: 500px;">
                            <img loading="lazy" src="https://appworks.mpanel.app/image/cache/original/files/images/device-mockup-15x-postspark-2025-12-31-11-11-16.png?crop=true"
                                 alt="Monetization Solutions"
                                 class="w-full"
                                 style="filter: drop-shadow(0 25px 60px rgba(0, 0, 0, 0.5)) drop-shadow(0 0 40px rgba(255, 75, 54, 0.3));">
                        </div>
                    </div>
                    <div class="space-y-6 order-1 lg:order-2">
                        <div class="inline-block rounded-lg" style="padding: 0.375rem 0.75rem; background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.18);">
                            <span class="font-black uppercase" style="font-size: 0.8125rem; letter-spacing: 0.08em; color: rgba(255, 255, 255, 0.85);">REVENUE</span>
                        </div>
                        <h3 class="text-white font-black" style="font-size: clamp(1.625rem, 2.8vw, 2.5rem); letter-spacing: -0.03em;">Monetization Solutions</h3>
                        <p class="text-gray-300 text-xl leading-relaxed" style="opacity: 0.9;">Multiple revenue streams to support sustainable digital journalism and content creation.</p>
                        <ul class="space-y-4 mt-6">
                            <li class="flex items-start gap-4">
                                <i class="bi bi-check-circle-fill text-2xl" style="color: #FF4B36;"></i>
                                <div>
                                    <span class="text-white font-bold">Advertising</span>
                                    <p class="text-gray-400 text-sm mt-1">Banners and exclusive app sponsorships</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="bi bi-check-circle-fill text-2xl" style="color: #FF4B36;"></i>
                                <div>
                                    <span class="text-white font-bold">Premium Content</span>
                                    <p class="text-gray-400 text-sm mt-1">Flexible paywalls and subscription plans</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <i class="bi bi-check-circle-fill text-2xl" style="color: #FF4B36;"></i>
                                <div>
                                    <span class="text-white font-bold">E-Paper & Digital Editions</span>
                                    <p class="text-gray-400 text-sm mt-1">Digital versions of print publications with archive access</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- More Capabilities Section - All Orange Icons -->
        <section class="relative" style="padding-top: clamp(3rem, 8vh, 7rem); padding-bottom: clamp(3rem, 8vh, 7rem); background: transparent;">
            <div class="mx-auto" style="max-width: 1500px; padding-left: clamp(1.5rem, 5vw, 6rem); padding-right: clamp(1.5rem, 5vw, 6rem);">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-white font-black mb-6" style="font-size: clamp(2rem, 4vw, 3.5rem); letter-spacing: -0.02em;">More Capabilities</h2>
                    <div class="flex justify-center mb-6">
                        <div style="width: 80px; height: 4px; background: linear-gradient(90deg, #FF4B36 0%, #FF6B50 100%); border-radius: 2px;"></div>
                    </div>
                </div>

                <!-- Features Grid - All Orange Icons -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Feature 1 -->
                    <div class="feature-card smooth-transition hover:-translate-y-2 glow-orange-hover">
                        <i class="bi bi-person-lines-fill text-5xl mb-4 block" style="color: #FF4B36; filter: drop-shadow(0 0 20px rgba(255, 75, 54, 0.4));"></i>
                        <h4 class="text-white font-bold text-xl mb-3">User Personalization</h4>
                        <p class="text-gray-300 leading-relaxed" style="opacity: 0.85;">Location-based, preference-based, and AI-driven content personalization.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="feature-card smooth-transition hover:-translate-y-2 glow-orange-hover">
                        <i class="bi bi-chat-square-dots text-5xl mb-4 block" style="color: #FF4B36; filter: drop-shadow(0 0 20px rgba(255, 75, 54, 0.4));"></i>
                        <h4 class="text-white font-bold text-xl mb-3">Community Forum</h4>
                        <p class="text-gray-300 leading-relaxed" style="opacity: 0.85;">Discord-style chat with premium and admin access control.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="feature-card smooth-transition hover:-translate-y-2 glow-orange-hover">
                        <i class="bi bi-question-circle text-5xl mb-4 block" style="color: #FF4B36; filter: drop-shadow(0 0 20px rgba(255, 75, 54, 0.4));"></i>
                        <h4 class="text-white font-bold text-xl mb-3">Quizzes & Polls</h4>
                        <p class="text-gray-300 leading-relaxed" style="opacity: 0.85;">Easy to create through CMS, can be AI-generated or database-connected.</p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="feature-card smooth-transition hover:-translate-y-2 glow-orange-hover">
                        <i class="bi bi-gift text-5xl mb-4 block" style="color: #FF4B36; filter: drop-shadow(0 0 20px rgba(255, 75, 54, 0.4));"></i>
                        <h4 class="text-white font-bold text-xl mb-3">Loyalty Points</h4>
                        <p class="text-gray-300 leading-relaxed" style="opacity: 0.85;">Reward active users with points redeemable for discounts and rewards.</p>
                    </div>

                    <!-- Feature 5 -->
                    <div class="feature-card smooth-transition hover:-translate-y-2 glow-orange-hover">
                        <i class="bi bi-newspaper text-5xl mb-4 block" style="color: #FF4B36; filter: drop-shadow(0 0 20px rgba(255, 75, 54, 0.4));"></i>
                        <h4 class="text-white font-bold text-xl mb-3">E-Paper Solutions</h4>
                        <p class="text-gray-300 leading-relaxed" style="opacity: 0.85;">Advanced e-Kiosk and e-Paper reader with multimedia integration.</p>
                    </div>

                    <!-- Feature 6 -->
                    <div class="feature-card smooth-transition hover:-translate-y-2 glow-orange-hover">
                        <i class="bi bi-ticket-perforated text-5xl mb-4 block" style="color: #FF4B36; filter: drop-shadow(0 0 20px rgba(255, 75, 54, 0.4));"></i>
                        <h4 class="text-white font-bold text-xl mb-3">Coupons & Discounts</h4>
                        <p class="text-gray-300 leading-relaxed" style="opacity: 0.85;">Offer special deals and coupons from your partners.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Platform Previews Section -->
        <section class="relative" style="padding-top: clamp(3rem, 8vh, 7rem); padding-bottom: clamp(3rem, 8vh, 7rem); background: transparent;">
            <div class="mx-auto" style="max-width: 1500px; padding-left: clamp(1.5rem, 5vw, 6rem); padding-right: clamp(1.5rem, 5vw, 6rem);">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-white font-black mb-6" style="font-size: clamp(2rem, 4vw, 3.5rem); letter-spacing: -0.02em;">Explore Our Platforms</h2>
                    <div class="flex justify-center mb-6">
                        <div style="width: 80px; height: 4px; background: linear-gradient(90deg, #FF4B36 0%, #FF6B50 100%); border-radius: 2px;"></div>
                    </div>
                </div>

                <!-- Two Columns -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- CMS Platform - Desktop Frame -->
                    <a href="/cms.html" class="group">
                        <div class="relative rounded-3xl p-12 smooth-transition hover:-translate-y-2 glow-orange-hover" style="background: radial-gradient(circle at top left, rgba(255, 255, 255, 0.08), transparent); backdrop-filter: blur(32px); -webkit-backdrop-filter: blur(32px); border: 1px solid rgba(255, 255, 255, 0.15); box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2); min-height: 400px;">
                            <!-- Spotlight -->
                            <div class="absolute inset-0 rounded-3xl" style="background: radial-gradient(circle at center, rgba(255, 75, 54, 0.1) 0%, transparent 70%); pointer-events: none;"></div>

                            <div class="mb-8 relative z-10">
                                <div class="browser-frame" style="max-width: 100%;">
                                    <div class="traffic-lights">
                                        <div class="traffic-light red"></div>
                                        <div class="traffic-light yellow"></div>
                                        <div class="traffic-light green"></div>
                                    </div>
                                </div>
                                <img loading="lazy" src="https://appworks.mpanel.app/image/cache/original/files/images/image-36-1767002395.png?crop=true" alt="mPanel CMS" class="w-full rounded-b-xl" style="border: 1px solid rgba(0, 0, 0, 0.3); border-top: none;">
                            </div>
                            <h3 class="text-white font-black text-3xl mb-4 relative z-10" style="letter-spacing: -0.02em;">mPanel CMS</h3>
                            <p class="text-gray-300 text-lg leading-relaxed mb-6 relative z-10" style="opacity: 0.85;">AI-powered content management system built for media publishers and sports organizations.</p>
                            <div class="flex items-center gap-2 text-orange-500 font-bold group-hover:gap-4 transition-all relative z-10">
                                <span>Explore CMS</span>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </div>
                    </a>

                    <!-- Litteraworks - Desktop Frame -->
                    <a href="https://litteraworks.com/" target="_blank" class="group">
                        <div class="relative rounded-3xl p-12 smooth-transition hover:-translate-y-2 glow-purple-hover" style="background: radial-gradient(circle at top left, rgba(139, 92, 246, 0.1), transparent); backdrop-filter: blur(32px); -webkit-backdrop-filter: blur(32px); border: 1px solid rgba(139, 92, 246, 0.2); box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2); min-height: 400px;">
                            <!-- Spotlight -->
                            <div class="absolute inset-0 rounded-3xl" style="background: radial-gradient(circle at center, rgba(139, 92, 246, 0.1) 0%, transparent 70%); pointer-events: none;"></div>

                            <div class="mb-8 relative z-10">
                                <div class="browser-frame" style="max-width: 100%;">
                                    <div class="traffic-lights">
                                        <div class="traffic-light red"></div>
                                        <div class="traffic-light yellow"></div>
                                        <div class="traffic-light green"></div>
                                    </div>
                                </div>
                                <img loading="lazy" src="https://app-works.app/images/appworksPartners/mockups/Media - Litteraworks preview.png" alt="Litteraworks" class="w-full rounded-b-xl" style="border: 1px solid rgba(0, 0, 0, 0.3); border-top: none;">
                            </div>
                            <h3 class="text-white font-black text-3xl mb-4 relative z-10" style="letter-spacing: -0.02em;">Litteraworks</h3>
                            <p class="text-gray-300 text-lg leading-relaxed mb-6 relative z-10" style="opacity: 0.85;">AI-powered transcription, subtitle generation, and content processing for media professionals.</p>
                            <div class="flex items-center gap-2 font-bold group-hover:gap-4 transition-all relative z-10" style="color: #A78BFA;">
                                <span>Try Litteraworks</span>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
```

---

## Removed from media.html on 2026-08-06, at the client's request

Both were built to the original brief and are removed because the client asked
for them gone, not because anything was wrong with them. Restoring either is a
copy-paste from here.

### 1. The "AI in the editorial workflow" capability group

It sat under the six product cards in "What we do for media", as a dashed card
with no product badge — deliberately not a seventh product, because these
capabilities are part of mPanel and Fronisa rather than separately purchasable.

> **Capability group — part of the platforms above, not a separate purchase**
>
> **AI in the editorial workflow**
>
> SEO suggestions and live trend checks while an article is being written,
> auto-tagging from your own taxonomy, comment moderation, and social posts and
> newsletters generated from published articles. These sit inside mPanel CMS and
> Fronisa — there is nothing extra to buy or bolt on.

Links: `/cms.html`, `/fronisa.html`. Icon: `bi-stars`.

The Sport hub has no equivalent of this block — it carries six product cards and
no capability group — so removing this one did not break a mirror. (An earlier
note here said it did; that was wrong.)

### 2. The "How we work" section

Eyebrow "How we work", one paragraph, and a secondary button to `/about.html`.

> **Thirteen years, four continents, one team in Belgrade**
>
> We build the roadmap with our clients rather than handing them a finished menu,
> and every platform upgrade we build reaches everyone on the platform — not just
> whoever paid for it. That is the difference between a partner and a vendor, and
> it is why publishers stay with us across contract renewals.
>
> [More about Appworks →]

The same argument is made at length on `about.html`, which is where the button
pointed. The Sport hub's copy was removed the same way — see below.

### 3. The empty client-story slot

"What it looks like in practice" used to hold a placeholder:

> Client story slot — awaiting your decision on which one we can tell, and in
> what form

The partner use cases moved into that section instead, which is what the slot was
waiting for. Sport still has the placeholder.

---

## Removed from sport.html on 2026-08-06, at the client's request

The same restructuring as media.html, so the two hubs stay siblings.

### 1. The "How we work" section

Eyebrow "How we work", one paragraph, and a secondary button to `/about.html`.
Identical to the Media version except for its last clause, which said "clubs"
rather than "publishers":

> **Thirteen years, four continents, one team in Belgrade**
>
> We build the roadmap with our clients rather than handing them a finished menu,
> and every platform upgrade we build reaches everyone on the platform — not just
> whoever paid for it. That is the difference between a partner and a vendor, and
> it is why clubs stay with us across contract renewals.
>
> [More about Appworks →]

### 2. The empty client-story slot

"What it looks like in practice" held a placeholder:

> Client story slot — awaiting your decision on which one we can tell, and in
> what form

The partner use cases moved into that section instead. The slot was holding for
two candidates: **Superliga Srbije**, which is now one of the use cases in its own
right, and **Peristeri BC** (signed FanFuel client), which is still a candidate
for a story of its own and still needs sign-off.

### Not removed

sport.html has no equivalent of the Media hub's "AI in the editorial workflow"
capability group — six product cards, no capability card — so there was nothing to
take out.

---

## The insights standfirst on media.html

Removed 10 Aug 2026. "Writing about media and technology" was sharing a flex row
with this line, which squeezed the heading onto two lines; the client wanted it
on one. Nothing constrains the heading now.

> What we have learned building for newsrooms, publishers and broadcasters.

sport.html still has the same two-part header ("Writing about sport and
technology" plus a standfirst). It was not touched, because the instruction named
the media page only.
