(function ($) {
    "use strict";

    // SPINNER COMPLÈTEMENT SUPPRIMÉ
    // Suppression radicale de tous les spinners
    var removeSpinners = function () {
        $('#spinner, .spinner, .spinner-border, .spinner-grow, .show').remove();
        $('body, html').css({'opacity': '1', 'visibility': 'visible'});
    };
    
    // Exécuter immédiatement
    removeSpinners();
    
    // Exécuter quand le DOM est prêt
    $(document).ready(function() {
        removeSpinners();
    });
    
    // Exécuter quand la page est complètement chargée
    $(window).on('load', function() {
        removeSpinners();
    });
    
    // Surveillance continue pour supprimer tout spinner qui apparaît
    setInterval(removeSpinners, 100);
    
    
    // Initiate the wowjs - avec vérification
    if (typeof WOW !== 'undefined') {
        new WOW().init();
    }


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


    // Facts counter - avec vérification
    if (typeof $.fn.counterUp !== 'undefined') {
        $('[data-toggle="counter-up"]').counterUp({
            delay: 10,
            time: 2000
        });
    }


    // Date and time picker - AVEC VÉRIFICATION POUR ÉVITER L'ERREUR
    if (typeof $.fn.datetimepicker !== 'undefined') {
        $('.date').datetimepicker({
            format: 'L'
        });
        $('.time').datetimepicker({
            format: 'LT'
        });
    } else {
        // Alternative si datetimepicker n'est pas disponible
        $('.date, .time').attr('type', 'datetime-local');
    }


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });

        $('#videoModal').on('shown.bs.modal', function (e) {
            if ($videoSrc) {
                $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
            }
        });

        $('#videoModal').on('hide.bs.modal', function (e) {
            if ($videoSrc) {
                $("#video").attr('src', $videoSrc);
            }
        });
    });


    // Header carousel - avec vérification
    if (typeof $.fn.owlCarousel !== 'undefined') {
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
    }


    // Service carousel - avec vérification
    if (typeof $.fn.owlCarousel !== 'undefined') {
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
    }


    // Testimonials carousel - avec vérification
    if (typeof $.fn.owlCarousel !== 'undefined') {
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
    }
    
})(jQuery);