# About us: content removed from the live page

Removed from about.html on 10 Aug 2026 at the client's request. Nothing was
rewritten before removal, so these are the exact blocks.

The three sections that remain (What We Do, How We Work, Where We Operate) were
not touched.

---

## 1. "Need Help with Digital Transformation?" (consultation CTA)

Read as a whole block, not just the heading: the other two removals in the same
instruction were whole blocks identified by their headings, and a CTA card with no
heading would read as broken.

It was one of three in-body links to /consultation.html. The homepage CTA and the
footer link on every page remain, so the page is still reachable.

```html
    <section class="relative py-24" style="background: #200A24;">
        <div class="mx-auto px-6 lg:px-8" style="max-width: 1100px;">
            <div class="relative overflow-hidden rounded-3xl" style="background: linear-gradient(135deg, rgba(255, 75, 54, 0.12) 0%, rgba(139, 92, 246, 0.08) 100%); border: 1px solid rgba(255, 255, 255, 0.1); padding: 3rem 2.5rem;">
                <div class="flex flex-col lg:flex-row items-center gap-8">
                    <div class="flex-shrink-0">
                        <div style="width: 72px; height: 72px; background: rgba(255, 75, 54, 0.15); border-radius: 16px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-diagram-3 text-4xl" style="color: #FF4B36;"></i>
                        </div>
                    </div>
                    <div class="flex-1 text-center lg:text-left">
                        <h2 class="text-white font-black text-2xl lg:text-3xl mb-3">Need Help with Digital Transformation?</h2>
                        <p class="text-gray-300 text-base leading-relaxed" style="opacity: 0.85;">From discovery workshops and technical audits to hands-on AI integration, we help media and sports organizations modernize their workflows and build connected digital ecosystems.</p>
                    </div>
                    <div class="flex-shrink-0">
                        <a href="/consultation.html" class="inline-flex items-center gap-3 px-8 py-4 rounded-xl font-bold text-lg text-white transition-all duration-300 hover:scale-105" style="background: linear-gradient(135deg, #FF4B36 0%, #FF6B50 100%); box-shadow: 0 8px 24px rgba(255, 75, 54, 0.3);">
                            <span>Learn More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
```

---

## 2. "Contact Information" and "Send Us a Message"

One section holding the address block, the three social links and the enquiry
form. contact.html now carries all of it, including the same form ids that
js/contact.js binds to, so nothing about the form's behaviour changed.

The `<script src="js/contact.js">` tag went with it. So did `.form-input`,
`textarea.form-input`, `.btn-submit`, `.info-item` and `.info-icon` from the page's
style block, which styled nothing else here. **`.contact-card` was kept**: the three
remaining sections use it.

Two things worth noting for whoever picks this up:

- The address, `Vlajkovićeva 15, Belgrade, Serbia`, and `info@app-works.app`
  both still appear on contact.html and in the footer of every page.
- The three social links (LinkedIn, Instagram, YouTube) are also in the footer of
  every page, so removing them here lost no reachable destination.
- The page's hero still reads "Get In Touch" / "Let's Build Something Amazing
  Together" and now has no contact affordance beneath it. Flagged, not changed:
  rewording an h1 was not part of the instruction.

```html
    <!-- Contact Section -->
    <section class="relative py-24" style="background: #200A24;">
        <div class="mx-auto px-6 lg:px-8" style="max-width: 1600px;">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Information -->
                <div class="contact-card">
                    <h2 class="text-white font-black text-3xl mb-8">Contact Information</h2>

                    <div class="space-y-4">
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div>
                                <div class="text-gray-400 text-sm mb-1">Address</div>
                                <div class="text-white font-bold">Vlajkovićeva 15, Belgrade, Serbia</div>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div>
                                <div class="text-gray-400 text-sm mb-1">Email</div>
                                <a href="mailto:info@app-works.app" class="text-white font-bold hover:text-orange-500 transition-colors">info@app-works.app</a>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">
                                <i class="bi bi-globe"></i>
                            </div>
                            <div>
                                <div class="text-gray-400 text-sm mb-1">Location</div>
                                <div class="text-white font-bold">Belgrade, Serbia</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10">
                        <h3 class="text-white font-bold text-xl mb-6">Follow Us</h3>
                        <div class="flex gap-4">
                            <a href="https://www.linkedin.com/company/appworks-d-o-o/" target="_blank" class="w-12 h-12 rounded-lg flex items-center justify-center smooth-transition glass-light hover:bg-orange-500/20">
                                <i class="bi bi-linkedin text-xl text-white"></i>
                            </a>
                            <a href="https://www.instagram.com/weareappworks/" target="_blank" class="w-12 h-12 rounded-lg flex items-center justify-center smooth-transition glass-light hover:bg-orange-500/20">
                                <i class="bi bi-instagram text-xl text-white"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCydhgWA6Kg40T9EFmRVDb9A" target="_blank" class="w-12 h-12 rounded-lg flex items-center justify-center smooth-transition glass-light hover:bg-orange-500/20">
                                <i class="bi bi-youtube text-xl text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-card">
                    <h2 class="text-white font-black text-3xl mb-8">Send Us a Message</h2>

                    <form id="contact-form" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="text-white text-sm font-bold mb-2 block">Your Name</label>
                                <input type="text" name="name" class="form-input" placeholder="John Doe" required>
                            </div>
                            <div>
                                <label class="text-white text-sm font-bold mb-2 block">Your Email</label>
                                <input type="email" name="email" class="form-input" placeholder="john@example.com" required>
                            </div>
                        </div>

                        <div>
                            <label class="text-white text-sm font-bold mb-2 block">Subject</label>
                            <input type="text" name="subject" class="form-input" placeholder="How can we help you?">
                        </div>

                        <div>
                            <label class="text-white text-sm font-bold mb-2 block">Message</label>
                            <textarea name="message" class="form-input" placeholder="Tell us more about your project..." required></textarea>
                        </div>

                        <button type="submit" class="btn-submit w-full flex items-center justify-center gap-3">
                            <span>SEND MESSAGE</span>
                            <i class="bi bi-send-fill"></i>
                        </button>
                        <p id="contact-msg" class="text-center text-sm font-semibold hidden"></p>
                    </form>

                    <script src="js/contact.js"></script>
                </div>
            </div>
        </div>
    </section>

```
