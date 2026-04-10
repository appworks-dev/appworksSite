<!-- Shared Footer -->
<footer class="relative py-16" style="background: rgba(0, 0, 0, 0.3); border-top: 1px solid rgba(255, 255, 255, 0.1);">
    <div class="mx-auto px-6 lg:px-8 mb-12" style="max-width: 1600px;">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <!-- Column 1: Logo & Social -->
            <div>
                <img loading="lazy" src="https://appworks.mpanel.app/image/cache/original/files/images/appworks-logo.png" alt="Appworks Logo" class="h-16 w-auto mb-4">
                <p class="text-gray-400 text-base leading-relaxed mb-6">Creative solutions for innovative partners.</p>
                <div class="flex gap-3">
                    <a href="https://www.linkedin.com/company/appworks-d-o-o/" target="_blank" class="flex items-center justify-center w-10 h-10 rounded-lg smooth-transition glass-light hover:bg-vibrant-orange-600/20 text-gray-400 hover:text-vibrant-orange-600">
                        <i class="bi bi-linkedin text-xl"></i>
                    </a>
                    <a href="https://www.instagram.com/weareappworks/" target="_blank" class="flex items-center justify-center w-10 h-10 rounded-lg smooth-transition glass-light hover:bg-vibrant-orange-600/20 text-gray-400 hover:text-vibrant-orange-600">
                        <i class="bi bi-instagram text-xl"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCydhgWA6Kg40T9EFmRVDb9A" target="_blank" class="flex items-center justify-center w-10 h-10 rounded-lg smooth-transition glass-light hover:bg-vibrant-orange-600/20 text-gray-400 hover:text-vibrant-orange-600">
                        <i class="bi bi-youtube text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Column 2: Company -->
            <div>
                <h4 class="text-white font-bold text-base mb-6" style="letter-spacing: -0.01em;">Company</h4>
                <ul class="space-y-3">
                    <li><a href="/about.html" class="text-gray-400 hover:text-vibrant-orange-600 smooth-transition text-sm">About us</a></li>
                    <li><a href="/insights" class="text-gray-400 hover:text-vibrant-orange-600 smooth-transition text-sm">Insights</a></li>
                    <li><a href="/partners.html" class="text-gray-400 hover:text-vibrant-orange-600 smooth-transition text-sm">Partners</a></li>
                    <li><a href="/about.html" class="text-gray-400 hover:text-vibrant-orange-600 smooth-transition text-sm">Contact us</a></li>
                </ul>
            </div>

            <!-- Column 3: Solutions -->
            <div>
                <h4 class="text-white font-bold text-base mb-6" style="letter-spacing: -0.01em;">Solutions</h4>
                <ul class="space-y-3">
                    <li><a href="/cms.html" class="text-gray-400 hover:text-vibrant-orange-600 smooth-transition text-sm">CMS</a></li>
                    <li><a href="/media.html" class="text-gray-400 hover:text-vibrant-orange-600 smooth-transition text-sm">Media</a></li>
                    <li><a href="/sport.html" class="text-gray-400 hover:text-vibrant-orange-600 smooth-transition text-sm">Sports</a></li>
                    <li><a href="https://litteraworks.com" class="text-gray-400 hover:text-vibrant-orange-600 smooth-transition text-sm">Litteraworks</a></li>
                    <li><a href="https://pchela.app/" class="text-gray-400 hover:text-vibrant-orange-600 smooth-transition text-sm">Pchela</a></li>
                    <li><a href="/consultation.html" class="text-gray-400 hover:text-vibrant-orange-600 smooth-transition text-sm">Consultation</a></li>
                    <li><a href="/projects.html" class="text-gray-400 hover:text-vibrant-orange-600 smooth-transition text-sm">Grant Projects</a></li>
                </ul>
            </div>

            <!-- Column 4: Contact -->
            <div>
                <h4 class="text-white font-bold text-base mb-6 flex items-center gap-2" style="letter-spacing: -0.01em;">
                    Contact us
                    <i class="bi bi-arrow-right text-vibrant-orange-600 text-sm"></i>
                </h4>
                <a href="mailto:info@app-works.app" class="text-white font-semibold text-sm hover:text-vibrant-orange-600 smooth-transition">info@app-works.app</a>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="pt-8 border-t border-white/10 text-center">
        <p class="text-gray-500 text-sm">&copy; <?php echo date('Y'); ?> Appworks. All rights reserved.</p>
    </div>
</footer>

<!-- Scroll to Top Button -->
<button id="scroll-to-top" class="fixed bottom-8 right-8 w-12 h-12 rounded-full items-center justify-center smooth-transition opacity-0 pointer-events-none" style="background: linear-gradient(135deg, #FF4B36 0%, #FF6B50 100%); box-shadow: 0 4px 12px rgba(255, 75, 54, 0.4); z-index: 999;">
    <i class="bi bi-arrow-up text-white text-xl"></i>
</button>

<!-- Shared JS: Header scroll, scroll-to-top, mobile menu -->
<script>
// Header scroll effect
window.addEventListener('scroll', function() {
    const header = document.querySelector('.header-nav');
    if (header) {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
});

// Scroll to top button
const scrollBtn = document.getElementById('scroll-to-top');
if (scrollBtn) {
    window.addEventListener('scroll', function() {
        if (window.scrollY > 500) {
            scrollBtn.style.opacity = '1';
            scrollBtn.style.pointerEvents = 'auto';
            scrollBtn.classList.add('flex');
        } else {
            scrollBtn.style.opacity = '0';
            scrollBtn.style.pointerEvents = 'none';
        }
    });

    scrollBtn.addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

// Mobile menu toggle
const mobileMenuBtn = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');
const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
const mobileMenuClose = document.getElementById('mobile-menu-close');

function openMobileMenu() {
    mobileMenu.classList.add('active');
    mobileMenuOverlay.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeMobileMenu() {
    mobileMenu.classList.remove('active');
    mobileMenuOverlay.classList.remove('active');
    document.body.style.overflow = '';
}

if (mobileMenuBtn) mobileMenuBtn.addEventListener('click', openMobileMenu);
if (mobileMenuClose) mobileMenuClose.addEventListener('click', closeMobileMenu);
if (mobileMenuOverlay) mobileMenuOverlay.addEventListener('click', closeMobileMenu);

// Close menu when clicking a link
const mobileMenuLinks = mobileMenu?.querySelectorAll('a');
mobileMenuLinks?.forEach(link => link.addEventListener('click', closeMobileMenu));
</script>
