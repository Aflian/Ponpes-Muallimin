<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pondok Pesantren Muallimin Muhammadiyah Bangkinang Kota - Lembaga pendidikan Islam berkualitas yang mencetak generasi Muslim berakhlak mulia">
    <meta name="keywords" content="pesantren, muhammadiyah, bangkinang, pendidikan islam, santri">
    <meta name="author" content="PP Muallimin Muhammadiyah Bangkinang">

    <title>Pondok Pesantren Muallimin Muhammadiyah Bangkinang Kota</title>

    <!-- Preconnect to external domains for better performance -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- CSS Libraries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    {{-- main style --}}
    @include('component.style')
</head>

<body>
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="sr-only">Skip to main content</a>

    <!-- Navigation -->
    @include('component.nav')
    <!-- Main Content -->
    <main id="main-content">
        <!-- Hero Section -->
        @include('component.hero')
        <!-- About Section -->
        @include('component.about')
        <!-- Gallery Section -->
        @include('component.galeri')
        <!-- History Section -->
        @include('component.sejarah')
        <!-- Organization Structure -->
        @include('component.sejarah')
        <!-- News Section -->
        @include('component.organiasi')
        <!-- Academic Section -->
        @include('component.akademik')
        <!-- Vision Mission Section -->
        @include('component.visimisi')
        <!-- Contact Section -->
        @include('component.contact')
    </main>

    <!-- Footer -->
    <footer class="footer section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="text-warning mb-4">Pondok Pesantren Muallimin</h5>
                    <p class="mb-4 opacity-75">Lembaga pendidikan Islam yang berkomitmen mencetak generasi Muslim yang berakhlak mulia dan cerdas.</p>
                    <div class="social-links d-flex">
                        <a href="#" class="text-decoration-none me-2" aria-label="Facebook">
                            <i class="fab fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="text-decoration-none me-2" aria-label="Instagram">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="text-decoration-none me-2" aria-label="YouTube">
                            <i class="fab fa-youtube" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="text-decoration-none" aria-label="WhatsApp">
                            <i class="fab fa-whatsapp" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <h6 class="text-warning mb-3">Menu Utama</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home">Beranda</a></li>
                        <li class="mb-2"><a href="#about">Tentang</a></li>
                        <li class="mb-2"><a href="#gallery">Galeri</a></li>
                        <li class="mb-2"><a href="#history">Sejarah</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 mb-4">
                    <h6 class="text-warning mb-3">Informasi</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#organization">Organisasi</a></li>
                        <li class="mb-2"><a href="#news">Berita</a></li>
                        <li class="mb-2"><a href="#academic">Akademik</a></li>
                        <li class="mb-2"><a href="#vision">Visi Misi</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h6 class="text-warning mb-3">Kontak Informasi</h6>
                    <div class="d-flex align-items-start mb-3">
                        <i class="fas fa-map-marker-alt me-3 mt-1" aria-hidden="true"></i>
                        <span>Jl. Pendidikan No. 123, Bangkinang Kota, Riau</span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-phone me-3" aria-hidden="true"></i>
                        <a href="tel:+6276123456" class="text-decoration-none">(0762) 123-456</a>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-envelope me-3" aria-hidden="true"></i>
                        <a href="mailto:info@ppmuallimin.sch.id" class="text-decoration-none">info@ppmuallimin.sch.id</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-clock me-3" aria-hidden="true"></i>
                        <span>Senin - Jumat: 07:00 - 16:00 WIB</span>
                    </div>
                </div>
            </div>
            <hr class="my-4 opacity-25">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-2 mb-lg-0">
                    <p class="mb-0 opacity-75">&copy; 2024 Pondok Pesantren Muallimin Muhammadiyah Bangkinang Kota. All rights reserved.</p>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p class="mb-0 opacity-75">Developed with <i class="fas fa-heart text-danger" aria-hidden="true"></i> for Islamic Education</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="back-to-top" aria-label="Back to top">
        <i class="fas fa-arrow-up" aria-hidden="true"></i>
    </button>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>

        const raf = requestAnimationFrame;

        const debounce = (func, wait) => {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        };

        const throttle = (func, limit) => {
            let inThrottle;
            return function() {
                const args = arguments;
                const context = this;
                if (!inThrottle) {
                    func.apply(context, args);
                    inThrottle = true;
                    setTimeout(() => inThrottle = false, limit);
                }
            }
        };

        const smoothScrollToElement = (target, offset = 80) => {
            const element = document.querySelector(target);
            if (!element) return;

            const elementPosition = element.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - offset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        };

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                smoothScrollToElement(targetId);

                history.pushState(null, null, targetId);

                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                    bsCollapse.hide();
                }
            });
        });

        const backToTopBtn = document.getElementById('backToTop');

        const toggleBackToTopBtn = throttle(() => {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > 300) {
                backToTopBtn.style.display = 'block';
                raf(() => {
                    backToTopBtn.style.opacity = '1';
                    backToTopBtn.style.transform = 'translateY(0)';
                });
            } else {
                raf(() => {
                    backToTopBtn.style.opacity = '0';
                    backToTopBtn.style.transform = 'translateY(20px)';
                });
                setTimeout(() => {
                    if (backToTopBtn.style.opacity === '0') {
                        backToTopBtn.style.display = 'none';
                    }
                }, 300);
            }
        }, 16);

        window.addEventListener('scroll', toggleBackToTopBtn);

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        const navbar = document.querySelector('.navbar');

        const handleNavbarScroll = throttle(() => {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        }, 16);

        window.addEventListener('scroll', handleNavbarScroll);

        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const fadeInObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    raf(() => {
                        entry.target.classList.add('visible');
                    });
                    fadeInObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.addEventListener('DOMContentLoaded', () => {
            const fadeElements = document.querySelectorAll('.fade-in-up');
            fadeElements.forEach(element => {
                fadeInObserver.observe(element);
            });
        });

        const initializeCarousel = () => {
            const carousel = document.querySelector('#galleryCarousel');
            if (carousel) {
                new bootstrap.Carousel(carousel, {
                    interval: 6000,
                    wrap: true,
                    keyboard: true,
                    pause: 'hover'
                });
            }
        };

        const initializeCardEffects = () => {
            const cards = document.querySelectorAll('.news-card, .stat-card, .card-modern');

                            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    raf(() => {
                        this.style.transform = 'translateY(-8px)';
                        this.style.boxShadow = 'var(--shadow-heavy)';
                    });
                }, { passive: true });

                card.addEventListener('mouseleave', function() {
                    raf(() => {
                        this.style.transform = 'translateY(0)';
                        this.style.boxShadow = 'var(--shadow-light)';
                    });
                }, { passive: true });
            });
        };

        const initializeLazyLoading = () => {
            if ('IntersectionObserver' in window) {
                const imageObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            if (img.dataset.src) {
                                img.src = img.dataset.src;
                                img.classList.remove('lazy');
                                imageObserver.unobserve(img);
                            }
                        }
                    });
                });

                document.querySelectorAll('img[data-src]').forEach(img => {
                    imageObserver.observe(img);
                });
            }
        };

        const initializeKeyboardNavigation = () => {
            document.addEventListener('keydown', (e) => {
                // ESC key to close mobile menu
                if (e.key === 'Escape') {
                    const navbarCollapse = document.querySelector('.navbar-collapse.show');
                    if (navbarCollapse) {
                        const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                        bsCollapse.hide();
                    }
                }

                if (e.key === 'ArrowLeft' || e.key === 'ArrowRight') {
                    const activeCarousel = document.querySelector('.carousel:hover');
                    if (activeCarousel) {
                        e.preventDefault();
                        const carousel = bootstrap.Carousel.getInstance(activeCarousel);
                        if (carousel) {
                            if (e.key === 'ArrowLeft') {
                                carousel.prev();
                            } else {
                                carousel.next();
                            }
                        }
                    }
                }
            });
        };

        const handleImageError = (img) => {
            img.style.display = 'none';
            const placeholder = document.createElement('div');
            placeholder.className = 'bg-light d-flex align-items-center justify-content-center';
            placeholder.style.height = img.style.height || '400px';
            placeholder.innerHTML = '<i class="fas fa-image fa-3x text-muted"></i>';
            img.parentNode.insertBefore(placeholder, img);
        };

        // Initialize all functionality when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            initializeCarousel();
            initializeCardEffects();
            initializeLazyLoading();
            initializeKeyboardNavigation();

            // Handle image loading errors
            document.querySelectorAll('img').forEach(img => {
                img.addEventListener('error', () => handleImageError(img));
            });

            // Add loading states
            document.querySelectorAll('.btn-custom').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    if (this.href && this.href.startsWith('#')) return;

                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Loading...';
                    this.disabled = true;

                    setTimeout(() => {
                        this.innerHTML = originalText;
                        this.disabled = false;
                    }, 2000);
                });
            });
        });
        window.addEventListener('load', () => {

            if ('performance' in window) {
                const loadTime = performance.timing.loadEventEnd - performance.timing.navigationStart;
                console.log(`Page loaded in ${loadTime}ms`);
            }
        });

        // Service Worker registration for offline capability (optional)
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                // navigator.serviceWorker.register('/sw.js')
                //     .then(registration => console.log('SW registered: ', registration))
                //     .catch(registrationError => console.log('SW registration failed: ', registrationError));
            });
        }

        // Handle reduced motion preferences
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
        if (prefersReducedMotion.matches) {
            document.documentElement.style.setProperty('--transition', 'none');
            document.querySelectorAll('.carousel').forEach(carousel => {
                carousel.setAttribute('data-bs-interval', 'false');
            });
        }

        // Add touch gesture support for mobile devices
        let touchStartX = 0;
        let touchEndX = 0;

        const handleGesture = () => {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;

            if (Math.abs(diff) > swipeThreshold) {
                const carousel = document.querySelector('#galleryCarousel');
                const bsCarousel = bootstrap.Carousel.getInstance(carousel);

                if (bsCarousel) {
                    if (diff > 0) {
                        bsCarousel.next();
                    } else {
                        bsCarousel.prev();
                    }
                }
            }
        };

        document.addEventListener('touchstart', e => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        document.addEventListener('touchend', e => {
            touchEndX = e.changedTouches[0].screenX;
            handleGesture();
        }, { passive: true });

        // Print styles optimization
        window.addEventListener('beforeprint', () => {
            document.querySelectorAll('.carousel-item:not(.active)').forEach(item => {
                item.style.display = 'block';
                item.classList.add('active');
            });
        });

        window.addEventListener('afterprint', () => {
            location.reload(); // Simple solution to restore carousel state
        });

        // Analytics tracking (placeholder for Google Analytics or other services)
        const trackEvent = (action, category = 'User Interaction', label = '') => {
            // Example: gtag('event', action, { 'event_category': category, 'event_label': label });
            console.log(`Event tracked: ${category} - ${action} - ${label}`);
        };

        // Track navigation clicks
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', (e) => {
                trackEvent('Navigation Click', 'Menu', e.target.textContent);
            });
        });

        // Track button clicks
        document.querySelectorAll('.btn-custom').forEach(btn => {
            btn.addEventListener('click', (e) => {
                trackEvent('Button Click', 'CTA', e.target.textContent);
            });
        });
    </script>
</body>
</html>