/* ===============================
   HERO CONTENT SLIDER - VERSION CORRIGÉE
   =============================== */

(function() {
    'use strict';
    
    // Éviter les conflits avec d'autres scripts
    let heroSliderInitialized = false;
    
    // Configuration du slider
    const HERO_CONFIG = {
        autoChangeInterval: 5000, // 5 secondes entre les changements
        transitionDuration: 800,   // Durée de la transition
        restartDelay: 3000,        // Délai avant redémarrage après interaction
        animationDelays: {
            title: 100,
            subtitle: 400,
            description: 700
        }
    };

    // Fonction principale d'initialisation
    function initHeroContentSlider() {
        // Éviter la double initialisation
        if (heroSliderInitialized) {
            console.log('Hero slider already initialized');
            return;
        }

        // Vérifier que les éléments existent
        const contentItems = document.querySelectorAll('.hero-content-item');
        const contentDots = document.querySelectorAll('.content-dot');
        
        if (!contentItems.length || !contentDots.length) {
            console.log('Hero content slider elements not found');
            return;
        }

        heroSliderInitialized = true;
        console.log('Initializing Hero Content Slider with', contentItems.length, 'items');

        // Variables du slider
        let currentContent = 0;
        let contentInterval = null;
        let isTransitioning = false;

        // Fonction pour changer le contenu
        function changeContent(newIndex) {
            if (isTransitioning || newIndex === currentContent) {
                return;
            }

            isTransitioning = true;
            console.log('Changing content from', currentContent, 'to', newIndex);

            // Désactiver le contenu actuel
            const currentItem = contentItems[currentContent];
            const currentDot = contentDots[currentContent];
            
            currentItem.classList.remove('active');
            currentItem.classList.add('exit-left');
            currentDot.classList.remove('active');

            // Activer le nouveau contenu après délai
            setTimeout(() => {
                // Nettoyer l'ancien contenu
                currentItem.classList.remove('exit-left');
                
                // Mettre à jour l'index
                currentContent = newIndex;
                
                // Activer le nouveau contenu
                const newItem = contentItems[currentContent];
                const newDot = contentDots[currentContent];
                
                newItem.classList.add('active');
                newDot.classList.add('active');

                // Réanimer les éléments
                animateContentElements();
                
                // Libérer le verrou de transition
                setTimeout(() => {
                    isTransitioning = false;
                }, 200);
                
            }, HERO_CONFIG.transitionDuration / 2);
        }

        // Animation des éléments du contenu
        function animateContentElements() {
            const currentItem = contentItems[currentContent];
            const title = currentItem.querySelector('.hero-title');
            const subtitle = currentItem.querySelector('.hero-subtitle');
            const description = currentItem.querySelector('.hero-description');

            // Réinitialiser toutes les animations
            [title, subtitle, description].forEach(el => {
                if (el) {
                    el.style.animation = 'none';
                    el.style.opacity = '0';
                    el.style.transform = 'translateY(20px)';
                }
            });

            // Forcer le reflow
            if (title) title.offsetHeight;

            // Redémarrer les animations avec des délais échelonnés
            setTimeout(() => {
                if (title) {
                    title.style.animation = 'slideInTitle 1s ease forwards';
                }
            }, HERO_CONFIG.animationDelays.title);

            setTimeout(() => {
                if (subtitle) {
                    subtitle.style.animation = 'slideInSubtitle 1s ease forwards';
                }
            }, HERO_CONFIG.animationDelays.subtitle);

            setTimeout(() => {
                if (description) {
                    description.style.animation = 'slideInDescription 1s ease forwards';
                }
            }, HERO_CONFIG.animationDelays.description);
        }

        // Gestion de l'auto-rotation
        function startAutoRotation() {
            if (contentInterval) {
                clearInterval(contentInterval);
            }
            
            contentInterval = setInterval(() => {
                if (!isTransitioning) {
                    const nextIndex = (currentContent + 1) % contentItems.length;
                    changeContent(nextIndex);
                }
            }, HERO_CONFIG.autoChangeInterval);
            
            console.log('Auto rotation started');
        }

        function stopAutoRotation() {
            if (contentInterval) {
                clearInterval(contentInterval);
                contentInterval = null;
                console.log('Auto rotation stopped');
            }
        }

        function restartAutoRotation() {
            stopAutoRotation();
            setTimeout(() => {
                if (heroSliderInitialized) {
                    startAutoRotation();
                }
            }, HERO_CONFIG.restartDelay);
        }

        // Navigation par les points indicateurs
        contentDots.forEach((dot, index) => {
            dot.addEventListener('click', (e) => {
                e.preventDefault();
                console.log('Content dot clicked:', index);
                changeContent(index);
                restartAutoRotation();
            });
        });

        // Gestion du survol de la section hero
        const heroSection = document.querySelector('.hero-section');
        if (heroSection) {
            let hoverTimeout;
            
            heroSection.addEventListener('mouseenter', () => {
                clearTimeout(hoverTimeout);
                stopAutoRotation();
            });
            
            heroSection.addEventListener('mouseleave', () => {
                hoverTimeout = setTimeout(() => {
                    if (heroSliderInitialized) {
                        startAutoRotation();
                    }
                }, 1000);
            });
        }

        // Gestion de la visibilité de la page
        function handleVisibilityChange() {
            if (document.hidden) {
                stopAutoRotation();
            } else {
                setTimeout(() => {
                    if (heroSliderInitialized) {
                        startAutoRotation();
                    }
                }, 1000);
            }
        }

        document.addEventListener('visibilitychange', handleVisibilityChange);

        // Support clavier
        function handleKeydown(e) {
            if (!heroSection || !heroSection.matches(':hover')) return;
            
            if (e.key === 'ArrowLeft') {
                e.preventDefault();
                const prevIndex = (currentContent - 1 + contentItems.length) % contentItems.length;
                changeContent(prevIndex);
                restartAutoRotation();
            } else if (e.key === 'ArrowRight') {
                e.preventDefault();
                const nextIndex = (currentContent + 1) % contentItems.length;
                changeContent(nextIndex);
                restartAutoRotation();
            }
        }

        document.addEventListener('keydown', handleKeydown);

        // Nettoyage lors du déchargement
        function cleanup() {
            heroSliderInitialized = false;
            stopAutoRotation();
            document.removeEventListener('visibilitychange', handleVisibilityChange);
            document.removeEventListener('keydown', handleKeydown);
        }

        window.addEventListener('beforeunload', cleanup);

        // Animation initiale
        setTimeout(() => {
            animateContentElements();
        }, 500);

        // Démarrer l'auto-rotation après un délai
        setTimeout(() => {
            if (heroSliderInitialized) {
                startAutoRotation();
            }
        }, HERO_CONFIG.restartDelay);

        console.log('Hero Content Slider initialized successfully');
    }

    // Fonction utilitaire pour s'assurer que le DOM est prêt
    function domReady(callback) {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', callback);
        } else {
            callback();
        }
    }

    // Fonction utilitaire pour attendre que tous les scripts soient chargés
    function waitForScriptsAndInit() {
        // Attendre un petit délai pour s'assurer que tous les autres scripts sont chargés
        setTimeout(() => {
            initHeroContentSlider();
        }, 100);
    }

    // Initialisation avec gestion des conflits
    domReady(waitForScriptsAndInit);

    // Réinitialisation si appelée depuis l'extérieur
    window.initHeroSlider = function() {
        if (!heroSliderInitialized) {
            initHeroContentSlider();
        }
    };

    // Export pour les modules (si nécessaire)
    if (typeof module !== 'undefined' && module.exports) {
        module.exports = { initHeroContentSlider };
    }

})();