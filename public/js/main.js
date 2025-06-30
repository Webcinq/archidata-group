// SCRIPT SOLUTIONS CORRIGÉ - REMPLACE TOUS LES AUTRES SCRIPTS SOLUTIONS
// À placer dans votre fichier main.js ou dans une balise <script>

document.addEventListener('DOMContentLoaded', function() {
    console.log('🚀 Initialisation des solutions...');
    
    // CONFIGURATION
    const CONFIG = {
        scrollAmount: 350,
        autoScrollInterval: 4000,
        animationDelay: 150,
        inactivityDelay: 8000
    };
    
    // ÉLÉMENTS
    const elements = {
        scrollWrapper: document.getElementById('solutionsScroll'),
        scrollLeftBtn: document.getElementById('scrollLeft'),
        scrollRightBtn: document.getElementById('scrollRight'),
        progressBar: document.getElementById('progressBar'),
        solutionCards: document.querySelectorAll('.solution-card'),
        contentDots: document.querySelectorAll('.content-dot')
    };
    
    // VÉRIFICATION DES ÉLÉMENTS
    if (!elements.scrollWrapper) {
        console.error('❌ Element #solutionsScroll non trouvé');
        return;
    }
    
    if (!elements.scrollLeftBtn || !elements.scrollRightBtn) {
        console.error('❌ Boutons de scroll non trouvés');
        return;
    }
    
    console.log('✅ Éléments trouvés:', {
        wrapper: !!elements.scrollWrapper,
        leftBtn: !!elements.scrollLeftBtn,
        rightBtn: !!elements.scrollRightBtn,
        progressBar: !!elements.progressBar,
        cards: elements.solutionCards.length
    });
    
    // VARIABLES GLOBALES
    let autoScrollInterval = null;
    let isUserInteracting = false;
    let inactivityTimer = null;
    
    // ANIMATION DES CARTES
    function animateCards() {
        elements.solutionCards.forEach((card, index) => {
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
                card.classList.add('animate-in');
            }, index * CONFIG.animationDelay);
        });
    }
    
    // FONCTION DE SCROLL PRINCIPAL
    function scrollSolutions(direction) {
        if (!elements.scrollWrapper) return;
        
        const scrollAmount = direction === 'left' ? -CONFIG.scrollAmount : CONFIG.scrollAmount;
        
        console.log(`📜 Scroll ${direction}: ${scrollAmount}px`);
        
        elements.scrollWrapper.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
        
        // Arrêter l'auto-scroll lors de l'interaction
        stopAutoScroll();
        setUserInteracting(true);
    }
    
    // GESTION DE L'INTERACTION UTILISATEUR
    function setUserInteracting(interacting) {
        isUserInteracting = interacting;
        
        if (interacting) {
            clearTimeout(inactivityTimer);
            inactivityTimer = setTimeout(() => {
                setUserInteracting(false);
                startAutoScroll();
            }, CONFIG.inactivityDelay);
        }
    }
    
    // BOUTONS DE SCROLL - ÉVÉNEMENTS PRINCIPAUX
    function initScrollButtons() {
        // Supprimer tous les anciens événements
        elements.scrollLeftBtn.removeEventListener('click', handleLeftClick);
        elements.scrollRightBtn.removeEventListener('click', handleRightClick);
        
        // Ajouter les nouveaux événements
        elements.scrollLeftBtn.addEventListener('click', handleLeftClick);
        elements.scrollRightBtn.addEventListener('click', handleRightClick);
        
        console.log('🔘 Boutons de scroll initialisés');
    }
    
    function handleLeftClick(e) {
        e.preventDefault();
        e.stopPropagation();
        console.log('⬅️ Clic gauche détecté');
        scrollSolutions('left');
    }
    
    function handleRightClick(e) {
        e.preventDefault();
        e.stopPropagation();
        console.log('➡️ Clic droit détecté');
        scrollSolutions('right');
    }
    
    // BARRE DE PROGRESSION
    function updateProgressBar() {
        if (!elements.progressBar || !elements.scrollWrapper) return;
        
        const scrollLeft = elements.scrollWrapper.scrollLeft;
        const scrollWidth = elements.scrollWrapper.scrollWidth - elements.scrollWrapper.clientWidth;
        const progress = scrollWidth > 0 ? (scrollLeft / scrollWidth) * 100 : 0;
        
        elements.progressBar.style.width = `${Math.max(0, Math.min(100, progress))}%`;
    }
    
    // AUTO-SCROLL
    function startAutoScroll() {
        if (autoScrollInterval || isUserInteracting) return;
        
        autoScrollInterval = setInterval(() => {
            if (isUserInteracting) return;
            
            const maxScroll = elements.scrollWrapper.scrollWidth - elements.scrollWrapper.clientWidth;
            
            if (elements.scrollWrapper.scrollLeft >= maxScroll - 10) {
                elements.scrollWrapper.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                scrollSolutions('right');
            }
        }, CONFIG.autoScrollInterval);
        
        console.log('⏰ Auto-scroll démarré');
    }
    
    function stopAutoScroll() {
        if (autoScrollInterval) {
            clearInterval(autoScrollInterval);
            autoScrollInterval = null;
            console.log('⏹️ Auto-scroll arrêté');
        }
    }
    
    // DRAG & DROP
    function initDragScroll() {
        let isScrolling = false;
        let startX = 0;
        let scrollLeft = 0;
        
        elements.scrollWrapper.addEventListener('mousedown', (e) => {
            isScrolling = true;
            startX = e.pageX - elements.scrollWrapper.offsetLeft;
            scrollLeft = elements.scrollWrapper.scrollLeft;
            elements.scrollWrapper.style.cursor = 'grabbing';
            e.preventDefault();
            setUserInteracting(true);
        });
        
        elements.scrollWrapper.addEventListener('mouseleave', () => {
            isScrolling = false;
            elements.scrollWrapper.style.cursor = 'grab';
        });
        
        elements.scrollWrapper.addEventListener('mouseup', () => {
            isScrolling = false;
            elements.scrollWrapper.style.cursor = 'grab';
        });
        
        elements.scrollWrapper.addEventListener('mousemove', (e) => {
            if (!isScrolling) return;
            e.preventDefault();
            const x = e.pageX - elements.scrollWrapper.offsetLeft;
            const walk = (x - startX) * 1.5;
            elements.scrollWrapper.scrollLeft = scrollLeft - walk;
        });
    }
    
    // SUPPORT CLAVIER
    function initKeyboardSupport() {
        document.addEventListener('keydown', (e) => {
            if (!elements.scrollWrapper.matches(':hover')) return;
            
            if (e.key === 'ArrowLeft') {
                e.preventDefault();
                scrollSolutions('left');
            } else if (e.key === 'ArrowRight') {
                e.preventDefault();
                scrollSolutions('right');
            }
        });
    }
    
    // SUPPORT TACTILE
    function initTouchSupport() {
        let touchStartX = 0;
        let touchStartScrollLeft = 0;
        
        elements.scrollWrapper.addEventListener('touchstart', (e) => {
            touchStartX = e.touches[0].clientX;
            touchStartScrollLeft = elements.scrollWrapper.scrollLeft;
            setUserInteracting(true);
        }, { passive: true });
        
        elements.scrollWrapper.addEventListener('touchmove', (e) => {
            if (!touchStartX) return;
            
            const touchCurrentX = e.touches[0].clientX;
            const touchDiffX = touchStartX - touchCurrentX;
            
            elements.scrollWrapper.scrollLeft = touchStartScrollLeft + touchDiffX;
        }, { passive: true });
        
        elements.scrollWrapper.addEventListener('touchend', () => {
            touchStartX = 0;
            setUserInteracting(false);
        }, { passive: true });
    }
    
    // OBSERVER POUR L'ANIMATION
    function initIntersectionObserver() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    console.log('👁️ Section solutions visible, animation...');
                    animateCards();
                    observer.unobserve(entry.target);
                    
                    // Démarrer l'auto-scroll après l'animation
                    setTimeout(() => {
                        startAutoScroll();
                    }, 3000);
                }
            });
        }, { threshold: 0.1 });
        
        const solutionsSection = document.querySelector('.solutions-section');
        if (solutionsSection) {
            observer.observe(solutionsSection);
        }
    }
    
    // GESTION DES ÉVÉNEMENTS DE SCROLL
    function initScrollEvents() {
        elements.scrollWrapper.addEventListener('scroll', () => {
            updateProgressBar();
            
            // Effet parallax subtil sur les cartes
            elements.solutionCards.forEach((card) => {
                const rect = card.getBoundingClientRect();
                const containerRect = elements.scrollWrapper.getBoundingClientRect();
                const cardCenter = rect.left + rect.width / 2;
                const containerCenter = containerRect.left + containerRect.width / 2;
                const distance = Math.abs(cardCenter - containerCenter);
                const maxDistance = containerRect.width / 2;
                const scale = 1 - (distance / maxDistance) * 0.03;
                
                if (scale > 0.97) {
                    card.style.transform = `scale(${Math.max(0.97, Math.min(1, scale))})`;
                }
            });
        });
        
        // Arrêter l'auto-scroll lors du survol
        elements.scrollWrapper.addEventListener('mouseenter', () => {
            setUserInteracting(true);
        });
        
        elements.scrollWrapper.addEventListener('mouseleave', () => {
            if (!isUserInteracting) {
                setTimeout(() => {
                    startAutoScroll();
                }, 2000);
            }
        });
    }
    
    // HERO CONTENT SLIDER (si présent)
    function initHeroSlider() {
        const contentItems = document.querySelectorAll('.hero-content-item');
        const contentDots = document.querySelectorAll('.content-dot');
        
        if (contentItems.length === 0) return;
        
        let currentIndex = 0;
        
        function showContent(index) {
            contentItems.forEach((item, i) => {
                item.classList.remove('active');
                if (i === index) {
                    item.classList.add('active');
                }
            });
            
            contentDots.forEach((dot, i) => {
                dot.classList.remove('active');
                if (i === index) {
                    dot.classList.add('active');
                }
            });
        }
        
        function nextContent() {
            currentIndex = (currentIndex + 1) % contentItems.length;
            showContent(currentIndex);
        }
        
        // Event listeners pour les dots
        contentDots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentIndex = index;
                showContent(currentIndex);
            });
        });
        
        // Auto-changement de contenu
        setInterval(nextContent, 6000);
        
        console.log('🎭 Hero slider initialisé');
    }
    
    // STYLES DYNAMIQUES (pour s'assurer que les éléments sont visibles)
    function ensureElementsVisible() {
        // S'assurer que les cartes sont visibles
        elements.solutionCards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'all 0.6s ease';
        });
        
        // S'assurer que les boutons sont visibles et cliquables
        [elements.scrollLeftBtn, elements.scrollRightBtn].forEach(btn => {
            if (btn) {
                btn.style.pointerEvents = 'auto';
                btn.style.cursor = 'pointer';
                btn.style.zIndex = '100';
                btn.style.position = 'relative';
            }
        });
    }
    
    // INITIALISATION PRINCIPALE
    function init() {
        console.log('🔧 Initialisation complète...');
        
        try {
            ensureElementsVisible();
            initScrollButtons();
            initScrollEvents();
            initDragScroll();
            initKeyboardSupport();
            initTouchSupport();
            initIntersectionObserver();
            initHeroSlider();
            updateProgressBar();
            
            console.log('✅ Solutions initialisées avec succès!');
            
        } catch (error) {
            console.error('❌ Erreur lors de l\'initialisation:', error);
        }
    }
    
    // DÉMARRER L'INITIALISATION
    init();
    
    // DEBUG: Ajouter des logs sur les clics pour vérifier
    document.addEventListener('click', function(e) {
        if (e.target.closest('#scrollLeft')) {
            console.log('🔍 Clic détecté sur bouton gauche');
        }
        if (e.target.closest('#scrollRight')) {
            console.log('🔍 Clic détecté sur bouton droit');
        }
    });
    
    console.log('🎯 Script solutions chargé et prêt!');
});

// NETTOYAGE AU DÉCHARGEMENT DE LA PAGE
window.addEventListener('beforeunload', function() {
    console.log('🧹 Nettoyage des timers...');
    // Nettoyer tous les timers
    if (window.autoScrollInterval) {
        clearInterval(window.autoScrollInterval);
    }
    if (window.inactivityTimer) {
        clearTimeout(window.inactivityTimer);
    }
});