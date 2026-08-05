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
