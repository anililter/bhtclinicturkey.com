/**
 * ====================================================
 * HEC TURKEY - MAIN JAVASCRIPT
 * Landing Page Ana JavaScript Dosyası
 * ====================================================
 *
 * İçerik:
 * - Mobile Menu Toggle
 * - Smooth Scrolling
 * - Navigation Active State
 * - FAQ Accordion
 * - Modal Functions
 * - Language Switcher
 * - Form Handling
 * - Intersection Observer
 * - Number Counter Animation
 * - Utility Functions
 */

// ====================================================
// DOM CONTENT LOADED - Tüm kodlar yüklendiğinde çalışır
// ====================================================

document.addEventListener('DOMContentLoaded', function() {
    'use strict';

    // ====================================================
    // 1. MOBILE MENU TOGGLE
    // ====================================================

    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const navMenu = document.getElementById('navMenu');
    const body = document.body;

    if (mobileMenuBtn && navMenu) {
        // Hamburger menu açma/kapama
        mobileMenuBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            const isActive = navMenu.classList.toggle('active');
            mobileMenuBtn.classList.toggle('active');

            // Body scroll lock
            if (isActive) {
                body.style.overflow = 'hidden';
            } else {
                body.style.overflow = '';
            }
        });

        // Outside click ile kapatma
        document.addEventListener('click', function(e) {
            if (!navMenu.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
                navMenu.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
                body.style.overflow = '';
            }
        });

        // Mobile dropdown toggle
        const mobileDropdowns = navMenu.querySelectorAll('.dropdown');
        mobileDropdowns.forEach(dropdown => {
            const dropdownLink = dropdown.querySelector('a');

            dropdownLink.addEventListener('click', function(e) {
                // Mobil görünümde dropdown toggle
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    dropdown.classList.toggle('active');

                    // Diğer açık dropdownları kapat
                    mobileDropdowns.forEach(otherDropdown => {
                        if (otherDropdown !== dropdown) {
                            otherDropdown.classList.remove('active');
                        }
                    });
                }
            });
        });

        // Menu linklere tıklayınca kapat (dropdown içindekiler hariç)
        const navLinks = navMenu.querySelectorAll('a:not(.dropdown > a)');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navMenu.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
                body.style.overflow = '';
            });
        });
    }

    // ====================================================
    // 2. SMOOTH SCROLLING
    // ====================================================

    // Anchor links için smooth scroll
    const anchorLinks = document.querySelectorAll('a[href^="#"]');

    anchorLinks.forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');

            // # olmayan veya sadece # olan linkleri atla
            if (href === '#' || href === '') {
                e.preventDefault();
                return;
            }

            const targetElement = document.querySelector(href);

            if (targetElement) {
                e.preventDefault();

                // Sticky header yüksekliğini hesapla
                const header = document.querySelector('header');
                const headerHeight = header ? header.offsetHeight : 80;
                const offset = 20; // Ekstra boşluk

                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight - offset;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ====================================================
    // 3. NAVIGATION ACTIVE STATE
    // ====================================================

    // Scroll pozisyonuna göre nav link highlight
    window.addEventListener('scroll', throttle(function() {
        const sections = document.querySelectorAll('section[id]');
        const scrollY = window.pageYOffset;

        sections.forEach(section => {
            const sectionHeight = section.offsetHeight;
            const sectionTop = section.offsetTop - 150;
            const sectionId = section.getAttribute('id');
            const navLink = document.querySelector(`.nav-link[href="#${sectionId}"]`);

            if (navLink) {
                if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                    document.querySelectorAll('.nav-link').forEach(link => {
                        link.classList.remove('active');
                    });
                    navLink.classList.add('active');
                }
            }
        });
    }, 100));

    // ====================================================
    // 4. FAQ ACCORDION
    // ====================================================

    const faqQuestions = document.querySelectorAll('.faq-question, .faq-header');

    faqQuestions.forEach(question => {
        question.addEventListener('click', function() {
            const faqItem = this.classList.contains('faq-question')
                ? this.parentElement
                : this.parentElement;
            const answer = this.nextElementSibling || faqItem.querySelector('.faq-answer, .faq-content');
            const isActive = faqItem.classList.contains('active');

            // Tek accordion - Diğer açık olanları kapat
            document.querySelectorAll('.faq-item, .faq-question, .faq-header').forEach(item => {
                const itemParent = item.classList.contains('faq-item') ? item : item.parentElement;
                const itemAnswer = itemParent.querySelector('.faq-answer, .faq-content');

                if (itemParent !== faqItem) {
                    itemParent.classList.remove('active');
                    if (itemAnswer) {
                        itemAnswer.style.maxHeight = '0';
                        itemAnswer.style.display = 'none';
                    }
                }
            });

            // Tıklanan item'i aç/kapat
            if (!isActive) {
                faqItem.classList.add('active');
                if (answer) {
                    answer.style.display = 'block';
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                }
            } else {
                faqItem.classList.remove('active');
                if (answer) {
                    answer.style.maxHeight = '0';
                    setTimeout(() => {
                        answer.style.display = 'none';
                    }, 300);
                }
            }
        });
    });

    // ====================================================
    // 5. MODAL FUNCTIONS - CONSULTATION FORM
    // ====================================================

    const consultationModal = document.getElementById('consultationModal');
    const closeModalBtns = document.querySelectorAll('[data-close-modal]');

    // Modal açma
    window.openConsultationForm = function() {
        if (consultationModal) {
            consultationModal.style.display = 'flex';
            consultationModal.classList.add('active');
            body.style.overflow = 'hidden';

            // Animation için timeout
            setTimeout(() => {
                const modalContent = consultationModal.querySelector('.modal-content');
                if (modalContent) {
                    modalContent.style.transform = 'scale(1)';
                    modalContent.style.opacity = '1';
                }
            }, 10);
        }
    };

    // Modal kapatma
    window.closeConsultationForm = function() {
        if (consultationModal) {
            const modalContent = consultationModal.querySelector('.modal-content');
            if (modalContent) {
                modalContent.style.transform = 'scale(0.9)';
                modalContent.style.opacity = '0';
            }

            setTimeout(() => {
                consultationModal.style.display = 'none';
                consultationModal.classList.remove('active');
                body.style.overflow = '';
            }, 300);
        }
    };

    // Close button ile kapatma
    closeModalBtns.forEach(btn => {
        btn.addEventListener('click', closeConsultationForm);
    });

    // ESC tuşu ile kapatma
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && consultationModal && consultationModal.classList.contains('active')) {
            closeConsultationForm();
        }
    });

    // Outside click ile kapatma
    if (consultationModal) {
        consultationModal.addEventListener('click', function(e) {
            if (e.target === consultationModal) {
                closeConsultationForm();
            }
        });
    }

    // CTA butonları ile modal aç
    const ctaButtons = document.querySelectorAll('[data-open-modal], .cta-primary, .btn-consultation');
    ctaButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#consultation' || href === '#contact' || this.hasAttribute('data-open-modal')) {
                e.preventDefault();
                openConsultationForm();
            }
        });
    });

    // ====================================================
    // 6. LANGUAGE SWITCHER
    // ====================================================

    const langBtn = document.getElementById('langBtn');
    const langDropdown = document.getElementById('langDropdown');

    if (langBtn && langDropdown) {
        // Dropdown açma/kapama
        langBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            langDropdown.classList.toggle('active');
        });

        // Outside click ile kapatma
        document.addEventListener('click', function(e) {
            if (!langDropdown.contains(e.target) && !langBtn.contains(e.target)) {
                langDropdown.classList.remove('active');
            }
        });

        // Dil seçimi
        const langOptions = langDropdown.querySelectorAll('a');
        langOptions.forEach(option => {
            option.addEventListener('click', function() {
                langDropdown.classList.remove('active');
            });
        });
    }


    // ====================================================
    // 8. INTERSECTION OBSERVER - ANIMATIONS
    // ====================================================

    // Section animasyonları için observer
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const animationObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                // Bir kez göründükten sonra observer'ı kaldır
                animationObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Animasyon yapılacak elementler
    const animatedElements = document.querySelectorAll('.service-card, .treatment-card, .feature-item, .process-step, .testimonial-card, .stat-card');

    animatedElements.forEach(el => {
        // Başlangıç stilleri
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s ease-out';

        // Observer'a ekle
        animationObserver.observe(el);
    });

    // Animation CSS
    const animationStyle = document.createElement('style');
    animationStyle.textContent = `
        .animate-in {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }
    `;
    document.head.appendChild(animationStyle);

    // ====================================================
    // 9. NUMBER COUNTER ANIMATION
    // ====================================================

    function animateCounter(element, target, duration = 2000) {
        const start = 0;
        const increment = target / (duration / 16);
        let current = start;

        const updateCounter = () => {
            current += increment;
            if (current < target) {
                element.textContent = Math.floor(current);
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = target;
            }
        };

        updateCounter();
    }

    // İstatistik sayıları için observer
    const statNumbers = document.querySelectorAll('.stat-number, .stats-number, [data-count]');

    if (statNumbers.length > 0) {
        const statsObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const text = element.textContent;
                    const number = parseInt(text.replace(/[^0-9]/g, ''));

                    if (!isNaN(number) && number > 0) {
                        const prefix = text.match(/^[^0-9]*/)[0];
                        const suffix = text.match(/[^0-9]*$/)[0];

                        element.textContent = prefix + '0' + suffix;

                        // Animation başlat
                        let current = 0;
                        const increment = number / 60; // ~1 saniye için 60fps

                        const counter = setInterval(() => {
                            current += increment;
                            if (current >= number) {
                                element.textContent = prefix + number + suffix;
                                clearInterval(counter);
                            } else {
                                element.textContent = prefix + Math.floor(current) + suffix;
                            }
                        }, 16);
                    }

                    statsObserver.unobserve(element);
                }
            });
        }, observerOptions);

        statNumbers.forEach(stat => statsObserver.observe(stat));
    }

    // ====================================================
    // 10. TESTIMONIAL SLIDER - Infinite Loop
    // ====================================================

    const testimonialSlider = document.querySelector('.testimonials-slider');

    if (testimonialSlider) {
        const testimonialCards = Array.from(testimonialSlider.children);

        if (testimonialCards.length > 0) {
            // Clone all cards twice for seamless infinite loop
            const firstClone = testimonialCards.map(card => card.cloneNode(true));
            const secondClone = testimonialCards.map(card => card.cloneNode(true));

            firstClone.forEach(clone => testimonialSlider.appendChild(clone));
            secondClone.forEach(clone => testimonialSlider.appendChild(clone));

            let currentPosition = 0;
            const originalCount = testimonialCards.length;

            // Calculate card width including gap
            function getCardWidth() {
                const card = testimonialCards[0];
                const style = window.getComputedStyle(card);
                const width = card.offsetWidth;
                const marginRight = parseFloat(style.marginRight) || 0;
                return width + 30; // 30px is gap from CSS
            }

            // Auto slide with infinite loop
            const slideInterval = setInterval(() => {
                currentPosition++;

                const cardWidth = getCardWidth();
                const offset = -currentPosition * cardWidth;

                testimonialSlider.style.transition = 'transform 0.5s ease-in-out';
                testimonialSlider.style.transform = `translateX(${offset}px)`;

                // Reset to start position seamlessly when reaching the end of first clone set
                if (currentPosition >= originalCount) {
                    setTimeout(() => {
                        testimonialSlider.style.transition = 'none';
                        testimonialSlider.style.transform = 'translateX(0)';
                        currentPosition = 0;

                        // Re-enable transition
                        setTimeout(() => {
                            testimonialSlider.style.transition = 'transform 0.5s ease-in-out';
                        }, 50);
                    }, 500);
                }
            }, 3000); // Her 3 saniyede bir değişir
        }
    }

    // ====================================================
    // 11. PARALLAX EFFECT (Opsiyonel)
    // ====================================================

    const parallaxElements = document.querySelectorAll('.parallax, .hero-shape, .shape');

    if (parallaxElements.length > 0) {
        window.addEventListener('scroll', throttle(function() {
            const scrolled = window.pageYOffset;

            parallaxElements.forEach((element, index) => {
                const speed = element.dataset.speed || (0.5 + (index * 0.1));
                const yPos = -(scrolled * speed);
                element.style.transform = `translateY(${yPos}px)`;
            });
        }, 10));
    }

    // ====================================================
    // 12. STICKY HEADER
    // ====================================================

    const header = document.querySelector('header, .header');

    if (header) {
        let lastScroll = 0;

        window.addEventListener('scroll', throttle(function() {
            const currentScroll = window.pageYOffset;

            // Scroll down
            if (currentScroll > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            // Hide on scroll down, show on scroll up
            if (currentScroll > lastScroll && currentScroll > 200) {
                header.classList.add('header-hidden');
            } else {
                header.classList.remove('header-hidden');
            }

            lastScroll = currentScroll;
        }, 100));
    }

    // ====================================================
    // 13. LOADING ANIMATION
    // ====================================================

    window.addEventListener('load', function() {
        body.classList.add('loaded');

        // Loading screen varsa kaldır
        const loader = document.querySelector('.loader, .loading-screen');
        if (loader) {
            setTimeout(() => {
                loader.style.opacity = '0';
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 300);
            }, 500);
        }
    });

    // ====================================================
    // 14. PREVENT FORM RESUBMISSION
    // ====================================================

    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }

}); // END DOMContentLoaded

// ====================================================
// UTILITY FUNCTIONS
// ====================================================


/**
 * Throttle function - Performance için
 */
function throttle(func, delay) {
    let lastCall = 0;
    return function(...args) {
        const now = new Date().getTime();
        if (now - lastCall < delay) {
            return;
        }
        lastCall = now;
        return func(...args);
    };
}

/**
 * Debounce function
 */
function debounce(func, delay) {
    let timeout;
    return function(...args) {
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(this, args), delay);
    };
}

/**
 * WhatsApp Redirect
 */
window.openWhatsApp = function(phone, message) {
    const defaultPhone = '905321234567'; // Config'den gelecek
    const defaultMessage = 'Merhaba, tedavi hakkında bilgi almak istiyorum.';

    const whatsappPhone = phone || defaultPhone;
    const whatsappMessage = message || defaultMessage;

    const url = `https://wa.me/${whatsappPhone}?text=${encodeURIComponent(whatsappMessage)}`;
    window.open(url, '_blank');
};

/**
 * Scroll to top
 */
window.scrollToTop = function() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
};

// ====================================================
// CONSOLE INFO (Production'da kaldırılabilir)
// ====================================================

if (window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1') {
    console.log('%c🏥 HEC TURKEY - Health Tourism Platform ', 'background: #0066FF; color: white; padding: 10px; font-size: 16px; font-weight: bold;');
    console.log('%cMain.js loaded successfully ✅', 'color: #00C851; font-size: 12px;');
}
