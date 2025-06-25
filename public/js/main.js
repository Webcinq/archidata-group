(function ($) {
    "use strict";

    // ===============================
    // SUPPRESSION COMPLÈTE DU SPINNER
    // ===============================
    var removeAllSpinners = function () {
        // Supprimer tous les éléments spinner possibles
        $('#spinner, .spinner, .spinner-border, .spinner-grow, .show, .loading').remove();
        
        // S'assurer que le body est visible
        $('body, html').css({
            'opacity': '1', 
            'visibility': 'visible',
            'overflow-x': 'hidden'
        });
        
        // Supprimer les classes de chargement
        $('body').removeClass('loading');
    };
    
    // Exécution immédiate et continue
    removeAllSpinners();
    setInterval(removeAllSpinners, 50); // Surveillance continue
    
    // ===============================
    // NAVBAR RESPONSIVE ET SCROLL EFFECT
    // ===============================
    $(document).ready(function() {
        removeAllSpinners();
        
        const navbar = $('.top-navbar');
        const navbarToggler = $('.navbar-toggler');
        const navbarCollapse = $('.navbar-collapse');
        
        // Effet de scroll sur la navbar
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                navbar.addClass('scrolled');
            } else {
                navbar.removeClass('scrolled');
            }
        });
        
        // Gestion du menu mobile
        navbarToggler.on('click', function() {
            const isExpanded = $(this).attr('aria-expanded') === 'true';
            $(this).attr('aria-expanded', !isExpanded);
        });
        
        // Fermer le menu mobile lors du clic sur un lien
        $('.nav-link').on('click', function() {
            if ($(window).width() < 992) {
                navbarCollapse.collapse('hide');
                navbarToggler.attr('aria-expanded', 'false');
            }
        });
        
        // Fermer le menu mobile lors du clic en dehors
        $(document).on('click', function(event) {
            if (!$(event.target).closest('.navbar').length && navbarCollapse.hasClass('show')) {
                navbarCollapse.collapse('hide');
                navbarToggler.attr('aria-expanded', 'false');
            }
        });
    });

    // ===============================
    // DROPDOWN HOVER EFFECT (Desktop)
    // ===============================
    $(window).on("load resize", function() {
        if (window.matchMedia("(min-width: 992px)").matches) {
            $(".dropdown").hover(
                function() {
                    const $this = $(this);
                    const $dropdownMenu = $this.find('.dropdown-menu');
                    
                    $this.addClass('show');
                    $this.find('.dropdown-toggle').attr("aria-expanded", "true");
                    $dropdownMenu.addClass('show');
                    
                    // Animation d'entrée
                    $dropdownMenu.css({
                        'opacity': '0',
                        'transform': 'translateY(-10px)'
                    }).animate({
                        'opacity': '1'
                    }, 200).css('transform', 'translateY(0)');
                },
                function() {
                    const $this = $(this);
                    const $dropdownMenu = $this.find('.dropdown-menu');
                    
                    // Animation de sortie
                    $dropdownMenu.animate({
                        'opacity': '0'
                    }, 150, function() {
                        $this.removeClass('show');
                        $this.find('.dropdown-toggle').attr("aria-expanded", "false");
                        $dropdownMenu.removeClass('show');
                    });
                }
            );
        } else {
            $(".dropdown").off("mouseenter mouseleave");
        }
    });

    // ===============================
    // SMOOTH SCROLL POUR LES ANCRES
    // ===============================
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        
        const target = $(this.getAttribute('href'));
        
        if (target.length) {
            const headerOffset = 100;
            const elementPosition = target.offset().top;
            const offsetPosition = elementPosition - headerOffset;
            
            $('html, body').animate({
                scrollTop: offsetPosition
            }, 800, 'easeInOutCubic');
        }
    });

    // ===============================
    // BACK TO TOP BUTTON
    // ===============================
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').addClass('show');
        } else {
            $('.back-to-top').removeClass('show');
        }
    });
    
    $('.back-to-top').click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 1000, 'easeInOutCubic');
    });

    // ===============================
    // ANIMATIONS AU SCROLL
    // ===============================
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observer les cartes de service
    $(document).ready(function() {
        const serviceCards = $('.service-card');
        serviceCards.each(function(index) {
            const card = this;
            card.style.opacity = '0';
            card.style.transform = 'translateY(50px)';
            card.style.transition = `all 0.8s ease ${index * 0.1}s`;
            observer.observe(card);
        });
    });

    // ===============================
    // TRIANGLE INTERACTIF
    // ===============================
    $(document).ready(function() {
        const triangleWrapper = $('.triangle-wrapper');
        const triangleSections = $('.triangle-section');
        
        if (triangleWrapper.length) {
            // Effet de parallax 3D au survol
            triangleWrapper.on('mousemove', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateX = (y - centerY) / 15;
                const rotateY = (x - centerX) / 15;
                
                $(this).css({
                    'transform': `perspective(1000px) rotateX(${-rotateX}deg) rotateY(${rotateY}deg) scale(1.05)`,
                    'transition': 'none'
                });
            });
            
            triangleWrapper.on('mouseleave', function() {
                $(this).css({
                    'transform': 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale(1)',
                    'transition': 'transform 0.5s ease'
                });
            });
        }
        
        // Animation des sections du triangle
        triangleSections.on('click', function() {
            const $this = $(this);
            
            $this.css('transform', 'scale(0.95)');
            
            setTimeout(() => {
                $this.css('transform', 'scale(1)');
            }, 150);
            
            // Redirection si nécessaire
            const pageURL = $this.data('page');
            if (pageURL) {
                setTimeout(() => {
                    window.location.href = pageURL;
                }, 300);
            }
        });
    });

    // ===============================
    // FORMULAIRE DE CONTACT AMÉLIORÉ
    // ===============================
    $(document).ready(function() {
        const contactForm = $('.contact-form');
        const formInputs = $('.form-control');
        
        // Animation des inputs au focus
        formInputs.on('focus', function() {
            $(this).parent().addClass('focused');
            $(this).siblings('.form-icon').css({
                'color': 'var(--accent-green)',
                'transform': 'translateY(-50%) scale(1.1)'
            });
        });
        
        formInputs.on('blur', function() {
            if (!$(this).val()) {
                $(this).parent().removeClass('focused');
            }
            $(this).siblings('.form-icon').css({
                'color': 'var(--accent-green)',
                'transform': 'translateY(-50%) scale(1)'
            });
        });
        
        // Validation en temps réel
        formInputs.on('input', function() {
            const $this = $(this);
            const value = $this.val();
            
            if (value.length > 0) {
                $this.addClass('has-value');
            } else {
                $this.removeClass('has-value');
            }
            
            // Validation email
            if ($this.attr('type') === 'email' && value.length > 0) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (emailRegex.test(value)) {
                    $this.removeClass('invalid').addClass('valid');
                } else {
                    $this.removeClass('valid').addClass('invalid');
                }
            }
        });
        
        // Soumission du formulaire avec animation
        contactForm.on('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = $('.btn-submit');
            const originalText = submitBtn.find('span').text();
            
            // Animation de chargement
            submitBtn.prop('disabled', true);
            submitBtn.find('span').text('Envoi en cours...');
            submitBtn.find('i').removeClass('fa-paper-plane').addClass('fa-spinner fa-spin');
            
            // Simulation d'envoi (remplacer par vraie logique)
            setTimeout(() => {
                submitBtn.find('span').text('Message envoyé !');
                submitBtn.find('i').removeClass('fa-spinner fa-spin').addClass('fa-check');
                submitBtn.css('background', 'var(--accent-green)');
                
                setTimeout(() => {
                    submitBtn.prop('disabled', false);
                    submitBtn.find('span').text(originalText);
                    submitBtn.find('i').removeClass('fa-check').addClass('fa-paper-plane');
                    submitBtn.css('background', '');
                    contactForm[0].reset();
                    formInputs.removeClass('has-value valid invalid');
                }, 2000);
            }, 1500);
        });
    });

    // ===============================
    // HERO SECTION ANIMATIONS
    // ===============================
    $(document).ready(function() {
        // Animation séquentielle des éléments hero
        const heroElements = $('.fade-in-up');
        
        heroElements.each(function(index) {
            const element = this;
            setTimeout(() => {
                $(element).css({
                    'opacity': '1',
                    'transform': 'translateY(0)'
                });
            }, index * 200);
        });
        
        // Animation des boutons hero au hover
        $('.btn-primary-hero, .btn-secondary-hero, .btn-cta-primary, .btn-cta-secondary').hover(
            function() {
                $(this).find('i').css('transform', 'translateX(5px)');
            },
            function() {
                $(this).find('i').css('transform', 'translateX(0)');
            }
        );
    });

    // ===============================
    // PARTICLES ANIMATION AMÉLIORÉE
    // ===============================
    $(document).ready(function() {
        const particles = $('.particle');
        
        particles.each(function(index) {
            const particle = $(this);
            const randomDelay = Math.random() * 2;
            const randomDuration = 6 + Math.random() * 4;
            
            particle.css({
                'animation-delay': randomDelay + 's',
                'animation-duration': randomDuration + 's'
            });
        });
        
        // Ajouter des particules dynamiques
        function createDynamicParticle() {
            const particle = $('<div class="particle dynamic-particle"></div>');
            const size = Math.random() * 6 + 2;
            const x = Math.random() * 100;
            const y = Math.random() * 100;
            const duration = Math.random() * 10 + 5;
            
            particle.css({
                'width': size + 'px',
                'height': size + 'px',
                'left': x + '%',
                'top': y + '%',
                'animation-duration': duration + 's'
            });
            
            $('.particles').append(particle);
            
            setTimeout(() => {
                particle.remove();
            }, duration * 1000);
        }
        
        // Créer une nouvelle particule toutes les 3 secondes
        setInterval(createDynamicParticle, 3000);
    });

    // ===============================
    // OPTIMISATIONS PERFORMANCE
    // ===============================
    
    // Throttle function pour optimiser les événements scroll
    function throttle(func, limit) {
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
    }
    
    // Appliquer throttle aux événements scroll
    $(window).on('scroll', throttle(function() {
        // Logique de scroll optimisée
        const scrollTop = $(this).scrollTop();
        
        // Navbar effect
        if (scrollTop > 100) {
            $('.top-navbar').addClass('scrolled');
        } else {
            $('.top-navbar').removeClass('scrolled');
        }
        
        // Back to top button
        if (scrollTop > 300) {
            $('.back-to-top').addClass('show');
        } else {
            $('.back-to-top').removeClass('show');
        }
    }, 16)); // ~60fps

    // ===============================
    // LAZY LOADING POUR LES IMAGES
    // ===============================
    $(document).ready(function() {
        const images = $('img[data-src]');
        
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        images.each(function() {
            imageObserver.observe(this);
        });
    });

    // ===============================
    // NETTOYAGE FINAL ET OPTIMISATIONS
    // ===============================
    $(window).on('load', function() {
        removeAllSpinners();
        
        // Supprimer les éléments de chargement restants
        $('.loading, .preloader, .loader').fadeOut(300, function() {
            $(this).remove();
        });
        
        // Optimiser les animations CSS
        $('body').addClass('loaded');
        
        // Initialiser les tooltips si Bootstrap est disponible
        if (typeof bootstrap !== 'undefined' && bootstrap.Tooltip) {
            const tooltips = document.querySelectorAll('[data-bs-toggle="tooltip"]');
            tooltips.forEach(tooltip => {
                new bootstrap.Tooltip(tooltip);
            });
        }
    });

    // ===============================
    // GESTION DES ERREURS
    // ===============================
    $(document).ready(function() {
        // Gestion globale des erreurs
        window.addEventListener('error', function(e) {
            console.log('Erreur capturée:', e.message);
            removeAllSpinners();
        });
        
        // Fallback pour les animations qui échouent
        setTimeout(removeAllSpinners, 100);
    });

    // ===============================
    // ACCESSIBILITÉ
    // ===============================
    $(document).ready(function() {
        // Gestion du focus pour l'accessibilité
        $('.nav-link, .btn-primary-hero, .btn-secondary-hero, .form-control').on('focus', function() {
            $(this).addClass('keyboard-focused');
        }).on('blur', function() {
            $(this).removeClass('keyboard-focused');
        });
        
        // Support des touches clavier pour les éléments interactifs
        $('.triangle-section, .service-card').on('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                $(this).click();
            }
        });
    });

    // ===============================
    // RESPONSIVE BEHAVIOR
    // ===============================
    $(window).on('resize', function() {
        const windowWidth = $(this).width();
        
        // Ajustements responsive
        if (windowWidth < 768) {
            $('.hero-bottom-cta').css('bottom', '20px');
            $('.stats-bar').css('bottom', '80px');
        } else if (windowWidth < 992) {
            $('.hero-bottom-cta').css('bottom', '40px');
            $('.stats-bar').css('bottom', '120px');
        } else {
            $('.hero-bottom-cta').css('bottom', '60px');
            $('.stats-bar').css('bottom', '180px');
        }
    });

})(jQuery);

// ===============================
// INITIALISATION VANILLA JS
// ===============================
document.addEventListener('DOMContentLoaded', function() {
    // Suppression immédiate de tous les spinners
    const spinners = document.querySelectorAll('#spinner, .spinner, .spinner-border, .spinner-grow, .show');
    spinners.forEach(spinner => {
        spinner.remove();
    });
    
    // S'assurer que le body est visible
    document.body.style.opacity = '1';
    document.body.style.visibility = 'visible';
    
    // Animation des éléments au chargement
    const animatedElements = document.querySelectorAll('.fade-in-up');
    animatedElements.forEach((element, index) => {
        setTimeout(() => {
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
        }, index * 150);
    });
});

// Suppression continue des spinners
setInterval(() => {
    const spinners = document.querySelectorAll('#spinner, .spinner, .spinner-border, .spinner-grow');
    spinners.forEach(spinner => spinner.remove());
}, 100);