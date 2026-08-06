# Content removed from projects.html

Preserved verbatim before deletion. Nothing here is live.

## Task 1 — the "Our Track Record" stats block

Removed rather than fixed. The funding in these projects belongs to the
consortium, not to us, so a single aggregate figure misrepresents it whatever
value it holds. The partner-organisation count also conflicted with the "50+
organizations" figure used elsewhere on the site.

**Worth recording about the bug:** the count-up was not broken. Driven into view
in a real browser it animates correctly to "EUR 2M+" and "20+", with zero JS
errors on the page. What renders as "EUR 0" and "0+" is the pre-animation state
written into the HTML - which is also exactly what a search-engine crawler and
any no-JS visitor see. So the page was publishing "EUR 0 Secured Funding" to
Google. The component appears nowhere else on the site: `data-count`,
`.stat-number`, `.stat-block`, `.stat-label` and `.glass-dashboard` were
all confined to this one block.

### Removed markup

```html
            <!-- Stats Dashboard -->
            <div class="glass-dashboard mb-12">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="stat-block">
                        <div class="stat-number" data-count="2000000">€0</div>
                        <div class="stat-label">Secured Funding</div>
                    </div>
                    <div class="stat-block">
                        <div class="stat-number" data-count="20">0+</div>
                        <div class="stat-label">Partner Organizations</div>
                    </div>
                </div>
            </div>
```

### Removed CSS

```css
            .glass-dashboard {
                padding: 3rem;
                border-radius: 2rem;
                background: rgba(255, 255, 255, 0.03);
                border: 1px solid rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(20px);
                box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.05);
            }

            .stat-block {
                text-align: center;
                padding: 2rem;
            }

            .stat-number {
                font-size: 4rem;
                font-weight: 900;
                background: linear-gradient(135deg, #FF4B36 0%, #FF6B50 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                text-shadow: 0 0 30px rgba(255, 75, 54, 0.5);
                line-height: 1.2;
                margin-bottom: 1rem;
            }

            .stat-label {
                color: rgba(255, 255, 255, 0.7);
                font-size: 1.25rem;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: 0.1em;
            }
```

### Removed script

```html
        <script>
            // Counter animation on scroll
            const animateCounter = (element) => {
                const target = parseInt(element.getAttribute('data-count'));
                const duration = 2000;
                const step = target / (duration / 16);
                let current = 0;
                const isEuro = element.textContent.includes('€');

                const timer = setInterval(() => {
                    current += step;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }

                    if (isEuro) {
                        element.textContent = '€' + Math.floor(current / 1000000) + 'M+';
                    } else {
                        element.textContent = Math.floor(current) + '+';
                    }
                }, 16);
            };

            // Intersection Observer for scroll trigger
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
                        entry.target.classList.add('animated');
                        animateCounter(entry.target);
                    }
                });
            }, { threshold: 0.5 });

            document.querySelectorAll('.stat-number').forEach(el => observer.observe(el));
        </script>
```
