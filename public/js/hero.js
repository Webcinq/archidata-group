// Hero Content Slider - SOLUTION DÉFINITIVE
document.addEventListener('DOMContentLoaded', function() {
    console.log('🚀 Hero Slider Starting...');
    
    // Attendre que tout soit chargé
    setTimeout(function() {
        
        // Éléments du slider
        const slides = document.querySelectorAll('.hero-content-item');
        const dots = document.querySelectorAll('.content-dot');
        
        // Vérification de l'existence des éléments
        if (slides.length === 0 || dots.length === 0) {
            console.error('❌ Éléments du slider non trouvés');
            console.log('Slides trouvés:', slides.length);
            console.log('Dots trouvés:', dots.length);
            return;
        }
        
        console.log(`✅ Slider initialisé: ${slides.length} slides, ${dots.length} dots`);
        
        let currentSlide = 0;
        let autoSlideTimer = null;
        const slideInterval = 15000; // 15 secondes
        
        // Fonction pour réinitialiser tous les slides
        function resetAllSlides() {
            slides.forEach((slide, index) => {
                slide.classList.remove('active');
                slide.style.opacity = '0';
                slide.style.visibility = 'hidden';
                slide.style.transform = 'translateX(50px)';
                slide.style.zIndex = '1';
                console.log(`Reset slide ${index}`);
            });
            
            dots.forEach((dot, index) => {
                dot.classList.remove('active');
                console.log(`Reset dot ${index}`);
            });
        }
        
        // Fonction pour activer un slide spécifique
        function activateSlide(index) {
            if (index < 0 || index >= slides.length) return;
            
            console.log(`🎯 Activation du slide ${index}`);
            
            const targetSlide = slides[index];
            const targetDot = dots[index];
            
            // Activer le slide
            targetSlide.classList.add('active');
            targetSlide.style.opacity = '1';
            targetSlide.style.visibility = 'visible';
            targetSlide.style.transform = 'translateX(0)';
            targetSlide.style.zIndex = '5';
            
            // Activer le dot
            targetDot.classList.add('active');
            
            // Mettre à jour l'index actuel
            currentSlide = index;
            
            console.log(`✅ Slide ${index} activé`);
        }
        
        // Fonction principale pour changer de slide
        function changeSlide(targetIndex) {
            if (targetIndex === currentSlide) return;
            
            console.log(`🔄 Changement: ${currentSlide} → ${targetIndex}`);
            
            // Réinitialiser tous les slides
            resetAllSlides();
            
            // Petite pause pour s'assurer que le reset est appliqué
            setTimeout(() => {
                activateSlide(targetIndex);
            }, 50);
        }
        
        // Auto-slide
        function startAutoSlide() {
            if (autoSlideTimer) clearInterval(autoSlideTimer);
            
            autoSlideTimer = setInterval(() => {
                const nextSlide = (currentSlide + 1) % slides.length;
                console.log(`⏰ Auto-changement vers slide ${nextSlide}`);
                changeSlide(nextSlide);
            }, slideInterval);
            
            console.log('▶️ Auto-slide démarré');
        }
        
        function stopAutoSlide() {
            if (autoSlideTimer) {
                clearInterval(autoSlideTimer);
                autoSlideTimer = null;
                console.log('⏹️ Auto-slide arrêté');
            }
        }
        
        // Event listeners pour les dots
        dots.forEach((dot, index) => {
            dot.addEventListener('click', function() {
                console.log(`🖱️ Clic sur dot ${index}`);
                changeSlide(index);
                
                // Arrêter l'auto-slide et le redémarrer après 3 secondes
                stopAutoSlide();
                setTimeout(startAutoSlide, 3000);
            });
        });
        
        // Gestion des événements de survol pour pause/resume
        const heroSection = document.querySelector('.hero-section');
        
        if (heroSection) {
            heroSection.addEventListener('mouseenter', function() {
                stopAutoSlide();
                console.log('🖱️ Survol détecté - pause');
            });
            
            heroSection.addEventListener('mouseleave', function() {
                setTimeout(startAutoSlide, 1000);
                console.log('🖱️ Fin survol - reprise dans 1s');
            });
        }
        
        // Gestion des événements tactiles pour mobile
        let touchStartX = 0;
        let touchEndX = 0;
        
        heroSection.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
            stopAutoSlide();
        });
        
        heroSection.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
            setTimeout(startAutoSlide, 2000);
        });
        
        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;
            
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    // Swipe gauche - slide suivant
                    const nextSlide = (currentSlide + 1) % slides.length;
                    changeSlide(nextSlide);
                } else {
                    // Swipe droite - slide précédent
                    const prevSlide = currentSlide === 0 ? slides.length - 1 : currentSlide - 1;
                    changeSlide(prevSlide);
                }
            }
        }
        
        // INITIALISATION FORCÉE
        console.log('🎬 Initialisation du slider...');
        
        // 1. Reset complet
        resetAllSlides();
        
        // 2. Attendre un peu puis activer le premier slide
        setTimeout(() => {
            activateSlide(0);
            
            // 3. Démarrer l'auto-slide après 3 secondes
            setTimeout(startAutoSlide, 3000);
            
            console.log('🎉 Hero Slider prêt !');
        }, 200);
        
    }, 500); // Délai initial de 500ms
    
    // Fonction pour arrêter le spinner s'il existe
    function stopSpinner() {
        const spinner = document.getElementById('spinner');
        if (spinner) {
            spinner.classList.remove('show');
            setTimeout(() => {
                spinner.style.display = 'none';
            }, 300);
        }
    }
    
    // Arrêter le spinner
    stopSpinner();
    
});

// S'assurer que le spinner s'arrête au chargement complet de la page
window.addEventListener('load', function() {
    const spinner = document.getElementById('spinner');
    if (spinner) {
        spinner.classList.remove('show');
        setTimeout(() => {
            spinner.style.display = 'none';
        }, 100);
    }
});