(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 90) {
            $('.nav-bar').addClass('sticky-top shadow');
        } else {
            $('.nav-bar').removeClass('sticky-top shadow');
        }
    });
    
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Date and time picker
    $('.date').datetimepicker({
        format: 'L'
    });
    $('.time').datetimepicker({
        format: 'LT'
    });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });


    // Service carousel
    $(".service-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 25,
        dots: true,
        loop: true,
        nav : false,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:2
            },
            1200:{
                items:3
            }
        }
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    
})(jQuery);

/* ===============================
   JAVASCRIPT COMPLET POUR SECTION SOLUTIONS
   À ajouter dans votre fichier main.js ou dans une balise <script>
   =============================== */

// Fonction d'initialisation des solutions avec scroll
function initSolutionsScroll() {
    // Attendre que le DOM soit chargé
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initSolutionsScroll);
        return;
    }

    const scrollWrapper = document.getElementById('solutionsScroll');
    const scrollLeftBtn = document.getElementById('scrollLeft');
    const scrollRightBtn = document.getElementById('scrollRight');
    const progressBar = document.getElementById('progressBar');
    const solutionCards = document.querySelectorAll('.solution-card');
    
    // Vérifier si les éléments existent
    if (!scrollWrapper) {
        console.log('Solutions scroll wrapper not found');
        return;
    }
    
    console.log('Initializing solutions scroll...', {
        scrollWrapper: !!scrollWrapper,
        scrollLeftBtn: !!scrollLeftBtn,
        scrollRightBtn: !!scrollRightBtn,
        progressBar: !!progressBar,
        cardsCount: solutionCards.length
    });
    
    // Animation d'entrée des cartes avec délai
    function animateCards() {
        solutionCards.forEach((card, index) => {
            setTimeout(() => {
                card.style.animation = `slideInFromLeft 0.8s ease forwards`;
                card.classList.add('animate-in');
            }, index * 150);
        });
    }
    
    // Observer pour déclencher l'animation
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                console.log('Solutions section visible, animating cards...');
                animateCards();
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    
    const solutionsSection = document.querySelector('.solutions-section');
    if (solutionsSection) {
        observer.observe(solutionsSection);
    }
    
    // Fonction de scroll fluide
    function smoothScroll(distance) {
        scrollWrapper.scrollBy({
            left: distance,
            behavior: 'smooth'
        });
        console.log('Scrolling by:', distance);
    }
    
    // Gestion des boutons de scroll
    if (scrollLeftBtn) {
        scrollLeftBtn.addEventListener('click', () => {
            console.log('Scroll left clicked');
            smoothScroll(-350);
            stopAutoScroll();
        });
    }
    
    if (scrollRightBtn) {
        scrollRightBtn.addEventListener('click', () => {
            console.log('Scroll right clicked');
            smoothScroll(350);
            stopAutoScroll();
        });
    }
    
    // Mise à jour de la barre de progression
    function updateProgressBar() {
        if (!progressBar) return;
        
        const scrollLeft = scrollWrapper.scrollLeft;
        const scrollWidth = scrollWrapper.scrollWidth - scrollWrapper.clientWidth;
        const progress = scrollWidth > 0 ? (scrollLeft / scrollWidth) * 100 : 0;
        progressBar.style.width = `${Math.max(0, Math.min(100, progress))}%`;
    }
    
    // Écouteur de scroll
    scrollWrapper.addEventListener('scroll', () => {
        updateProgressBar();
        
        // Effet parallax sur les cartes
        solutionCards.forEach((card) => {
            const rect = card.getBoundingClientRect();
            const containerRect = scrollWrapper.getBoundingClientRect();
            const cardCenter = rect.left + rect.width / 2;
            const containerCenter = containerRect.left + containerRect.width / 2;
            const distance = Math.abs(cardCenter - containerCenter);
            const maxDistance = containerRect.width / 2;
            const scale = 1 - (distance / maxDistance) * 0.05; // Effet plus subtil
            
            if (scale > 0.95) {
                card.style.transform = `scale(${Math.max(0.95, Math.min(1, scale))})`;
            }
        });
    });
    
    // Gestion du scroll tactile et souris (drag & drop)
    let isScrolling = false;
    let startX = 0;
    let scrollLeft = 0;
    
    scrollWrapper.addEventListener('mousedown', (e) => {
        isScrolling = true;
        startX = e.pageX - scrollWrapper.offsetLeft;
        scrollLeft = scrollWrapper.scrollLeft;
        scrollWrapper.style.cursor = 'grabbing';
        e.preventDefault();
        stopAutoScroll();
    });
    
    scrollWrapper.addEventListener('mouseleave', () => {
        isScrolling = false;
        scrollWrapper.style.cursor = 'grab';
    });
    
    scrollWrapper.addEventListener('mouseup', () => {
        isScrolling = false;
        scrollWrapper.style.cursor = 'grab';
    });
    
    scrollWrapper.addEventListener('mousemove', (e) => {
        if (!isScrolling) return;
        e.preventDefault();
        const x = e.pageX - scrollWrapper.offsetLeft;
        const walk = (x - startX) * 1.5;
        scrollWrapper.scrollLeft = scrollLeft - walk;
    });
    
    // Support clavier
    document.addEventListener('keydown', (e) => {
        if (scrollWrapper.matches(':hover') || document.activeElement === scrollWrapper) {
            if (e.key === 'ArrowLeft') {
                e.preventDefault();
                smoothScroll(-350);
                stopAutoScroll();
            } else if (e.key === 'ArrowRight') {
                e.preventDefault();
                smoothScroll(350);
                stopAutoScroll();
            }
        }
    });
    
    // Auto-scroll
    let autoScrollInterval;
    let autoScrollActive = false;
    
    function startAutoScroll() {
        if (autoScrollActive) return;
        autoScrollActive = true;
        
        autoScrollInterval = setInterval(() => {
            const maxScroll = scrollWrapper.scrollWidth - scrollWrapper.clientWidth;
            if (scrollWrapper.scrollLeft >= maxScroll - 10) {
                scrollWrapper.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                smoothScroll(350);
            }
        }, 4000);
        
        console.log('Auto-scroll started');
    }
    
    function stopAutoScroll() {
        if (autoScrollInterval) {
            clearInterval(autoScrollInterval);
            autoScrollInterval = null;
            autoScrollActive = false;
            console.log('Auto-scroll stopped');
        }
    }
    
    // Démarrer l'auto-scroll après un délai
    setTimeout(startAutoScroll, 3000);
    
    // Arrêter l'auto-scroll lors de l'interaction utilisateur
    scrollWrapper.addEventListener('mouseenter', stopAutoScroll);
    scrollWrapper.addEventListener('touchstart', stopAutoScroll);
    
    // Redémarrer l'auto-scroll après inactivité
    let inactivityTimer;
    
    function resetInactivityTimer() {
        clearTimeout(inactivityTimer);
        inactivityTimer = setTimeout(startAutoScroll, 8000);
    }
    
    scrollWrapper.addEventListener('mouseleave', resetInactivityTimer);
    
    // Support du touch sur mobile
    let touchStartX = 0;
    let touchStartScrollLeft = 0;
    
    scrollWrapper.addEventListener('touchstart', (e) => {
        touchStartX = e.touches[0].clientX;
        touchStartScrollLeft = scrollWrapper.scrollLeft;
        stopAutoScroll();
    }, { passive: true });
    
    scrollWrapper.addEventListener('touchmove', (e) => {
        if (!touchStartX) return;
        
        const touchCurrentX = e.touches[0].clientX;
        const touchDiffX = touchStartX - touchCurrentX;
        
        scrollWrapper.scrollLeft = touchStartScrollLeft + touchDiffX;
    }, { passive: true });
    
    scrollWrapper.addEventListener('touchend', () => {
        touchStartX = 0;
        resetInactivityTimer();
    }, { passive: true });
    
    // Initialiser la barre de progression
    updateProgressBar();
    
    console.log('Solutions scroll initialized successfully');
}

// Démarrer l'initialisation
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initSolutionsScroll);
} else {
    initSolutionsScroll();
}

// Pour jQuery si vous l'utilisez déjà
if (typeof $ !== 'undefined') {
    $(document).ready(function() {
        initSolutionsScroll();
    });
}

// Export pour usage en module (optionnel)
if (typeof module !== 'undefined' && module.exports) {
    module.exports = { initSolutionsScroll };
}



