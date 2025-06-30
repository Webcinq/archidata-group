@extends('layout')
@section('content')

<!-- Hero Section exact comme l'image - FULL SCREEN -->
  <!-- Hero Section avec slider de contenu - REMPLACE l'ancienne section hero -->
<section class="hero-section" id="accueil">
    <!-- Particles -->
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <div class="hero-content">
        <div class="hero-text">
            <!-- Container du slider de contenu -->
            <div class="hero-content-slider">
                
                <!-- Contenu 1 - BIM & Construction -->
                <div class="hero-content-item active">
                    <h1 class="hero-title">CONSTRUISEZ L'AVENIR AVEC PRÉCISION</h1>
                    <p class="hero-subtitle">Solutions intelligentes pour la construction moderne</p>
                    <p class="hero-description">
                        ArchiData Africa révolutionne l'industrie de la construction grâce à des solutions BIM innovantes et une expertise reconnue en data management.
                    </p>
                </div>

                <!-- Contenu 2 - Jumeaux Numériques -->
                <div class="hero-content-item">
                    <h1 class="hero-title">CRÉEZ DES JUMEAUX NUMÉRIQUES INTELLIGENTS</h1>
                    <p class="hero-subtitle">Technologie avancée pour l'optimisation des bâtiments</p>
                    <p class="hero-description">
                        Transformez vos infrastructures en écosystèmes connectés. Optimisez la gestion, anticipez la maintenance et maximisez les performances énergétiques.
                    </p>
                </div>

                <!-- Contenu 3 - Formation & Expertise -->
                <div class="hero-content-item">
                    <h1 class="hero-title">MAÎTRISEZ LE BIM DE DEMAIN</h1>
                    <p class="hero-subtitle">Formation et accompagnement personnalisés</p>
                    <p class="hero-description">
                        Développez les compétences de vos équipes avec nos programmes de formation. De la sensibilisation aux techniques avancées, nous vous accompagnons vers l'excellence.
                    </p>
                </div>

            </div>
            
            <!-- Boutons fixes (ne changent jamais) -->
            <div class="hero-buttons fade-in-up fade-in-up-delay-3">
                <a href="{{route('a-propos')}}" class="btn-primary-hero">
                    EN SAVOIR PLUS
                </a>
                <a href="#contact" class="btn-secondary-hero">
                    OBTENIR UN DEVIS
                    <i class="fas fa-play"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Indicateurs de contenu -->
    <div class="content-indicators">
        <div class="content-dot active" data-content="0"></div>
        <div class="content-dot" data-content="1"></div>
        <div class="content-dot" data-content="2"></div>
    </div>

    <!-- Stats Bar -->
    <div class="stats-bar">
        <div class="stats-scroll">
            <div class="stat-item">
                <span class="stat-number">500+</span>
                <span class="stat-text">Projets réalisés</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">15</span>
                <span class="stat-text">Années d'expérience</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">200+</span>
                <span class="stat-text">Clients satisfaits</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">50+</span>
                <span class="stat-text">Formations dispensées</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">95%</span>
                <span class="stat-text">Taux de satisfaction</span>
            </div>
        </div>
    </div>
</section>

   

<!-- Section Solutions Corrigée - Remplacer votre section solutions existante -->
<section id="solutions" class="solutions-section">
    <div class="solutions-container">
        <!-- En-tête de section -->
        <div class="section-header">
            <h1 class="section-title">Nos Solutions</h1>
            <p class="section-subtitle">8 expertises dédiées pour vos projets BIM</p>
        </div>
        
        <!-- Container de scroll horizontal -->
        <div class="solutions-scroll-container">
            <div class="solutions-scroll-wrapper" id="solutionsScroll">
                <div class="solutions-grid">
                    <!-- Service 1 -->
                    <div class="solution-card" data-index="0">
                        <div class="solution-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div class="solution-content">
                            <h5 class="solution-title">BIM & DATA Management</h5>
                            <p class="solution-description">Pilotage global de la maquette numérique, coordination des équipes, gestion des livrables.</p>
                            <a href="{{route('solutions.bim-data-management')}}" class="solution-link">
                                En savoir plus
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Service 2 -->
                    <div class="solution-card" data-index="1">
                        <div class="solution-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="solution-content">
                            <h5 class="solution-title">Le DOE BIM</h5>
                            <p class="solution-description">Dossier d'Ouvrage Exécuté numérique pour une documentation complète et exploitable.</p>
                            <a  href="{{route('solutions.doe-bim')}}" class="solution-link">
                                En savoir plus
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Service 3 -->
                    <div class="solution-card" data-index="2">
                        <div class="solution-icon">
                            <i class="fas fa-cube"></i>
                        </div>
                        <div class="solution-content">
                            <h5 class="solution-title">SCAN & Modélisation BIM</h5>
                            <p class="solution-description">Numérisation 3D précise et création de maquettes fidèles à la réalité existante.</p>
                            <a  href="{{route('solutions.scan-modelisation')}}"class="solution-link">
                                En savoir plus
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Service 4 -->
                    <div class="solution-card" data-index="3">
                        <div class="solution-icon">
                            <i class="fas fa-city"></i>
                        </div>
                        <div class="solution-content">
                            <h5 class="solution-title">Jumeaux Numériques</h5>
                            <p class="solution-description">Solutions intelligentes pour l'exploitation et la maintenance prédictive des bâtiments.</p>
                            <a  href="{{route('solutions.jumeaux-numeriques')}}"class="solution-link">
                                En savoir plus
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Service 5 -->
                    <div class="solution-card" data-index="4">
                        <div class="solution-icon">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <div class="solution-content">
                            <h5 class="solution-title">Synthèse BIM</h5>
                            <p class="solution-description">Coordination technique 3D, détection de clashs, anticipation des conflits.</p>
                            <a  href="{{route('solutions.synthese-bim')}}" class="solution-link">
                                En savoir plus
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Service 6 -->
                    <div class="solution-card" data-index="5">
                        <div class="solution-icon">
                            <i class="fas fa-map"></i>
                        </div>
                        <div class="solution-content">
                            <h5 class="solution-title">CIM Management</h5>
                            <p class="solution-description">Le BIM à l'échelle du territoire pour une ville plus intelligente et durable.</p>
                            <a  href="{{route('solutions.cim-management')}}" class="solution-link">
                                En savoir plus
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Service 7 -->
                    <div class="solution-card" data-index="6">
                        <div class="solution-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <div class="solution-content">
                            <h5 class="solution-title">DATA Management</h5>
                            <p class="solution-description">Votre patrimoine numérique valorisé, gouverné et pérenne.</p>
                            <a  href="{{route('solutions.data-management')}}" class="solution-link">
                                En savoir plus
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Service 8 -->
                    <div class="solution-card" data-index="7">
                        <div class="solution-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="solution-content">
                            <h5 class="solution-title">Conseil & Accompagnement</h5>
                            <p class="solution-description">Encadrer, former, auditer : un BIM durable passe par l'humain et les méthodes.</p>
                            <a  href="{{route('solutions.conseil-accompagnement')}}"class="solution-link">
                                En savoir plus
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Indicateurs de scroll -->
            <div class="scroll-indicators">
                <div class="scroll-btn" id="scrollLeft">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div class="scroll-btn" id="scrollRight">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
            
            <!-- Barre de progression -->
            <div class="scroll-progress">
                <div class="scroll-progress-bar" id="progressBar"></div>
            </div>
        </div>
    </div>
</section>




<!-- Triangle Section (conservée de votre design original) -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="triangle-section-container">
            <div class="bg-accent"></div>
            <h1 class="triangle-section-title">Analyse de l'Existant et Création du Jumeau Numérique</h1>
            
            <div class="triangle-container">
                <div class="triangle-wrapper">
                    <div class="triangle">
                        <!-- Dividers -->
                        <div class="divider divider-horizontal-1"></div>
                        <div class="divider divider-horizontal-2"></div>
                        
                        <!-- Top section -->
                        <div class="triangle-section section-top" data-page="first_stage">
                            <div class="section-content">
                                <div class="icon-container">
                                    <div class="icon">◉</div>
                                </div>
                                <div class="text-container">
                                    <div class="section-title">TRANSPARENCE</div>
                                    <div class="section-subtitle">Communication claire</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Middle section -->
                        <div class="triangle-section section-middle" data-page="couts">
                            <div class="section-content">
                                <div class="icon-container">
                                    <div class="icon">⌂</div>
                                </div>
                                <div class="text-container">
                                    <div class="section-title">MAÎTRISE DES COÛTS</div>
                                    <div class="section-subtitle">Suivi quantitatif</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Bottom section -->
                        <div class="triangle-section section-bottom" data-page="delais">
                            <div class="section-content">
                                <div class="icon-container">
                                    <div class="icon">✓</div>
                                </div>
                                <div class="text-container">
                                    <div class="section-title">MAÎTRISE DES DÉLAIS</div>
                                    <div class="section-subtitle">Simulations BIM avancées</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <p class="description">
                Le Triangle d'Or du BIM représente notre approche fondamentale pour une construction optimisée. Ces trois piliers interconnectés garantissent des projets réussis tout en maintenant l'équilibre parfait entre transparence, coûts et délais.
            </p>
        </div>
    </div>
</div>

<!-- Formulaire de contact -->
<section id="contact" class="py-5" style="background: linear-gradient(135deg, #0a1628 0%, #1e3a8a 50%, #0f172a 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class=" text-center p-5 rounded-3">
                    <h1 class="mb-4" style="color: #FFF8F2;">Demandez un Service</h1>
                    
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('reserver') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" name="nom" class="form-control border-0 @error('nom') is-invalid @enderror" 
                                       placeholder="Votre Nom" value="{{ old('nom') }}" style="height: 55px;" required>
                                @error('nom')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-12 col-sm-6">
                                <input type="email" name="email" class="form-control border-0 @error('email') is-invalid @enderror" 
                                       placeholder="Votre Email" value="{{ old('email') }}" style="height: 55px;" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-12 col-sm-6">
    <select name="service" class="form-select border-0 @error('service') is-invalid @enderror" 
            style="height: 55px;" required>
        <option value="">Choisissez un Service</option>

        <option value="BIM & DATA Management" {{ old('service') == 'BIM & DATA Management' ? 'selected' : '' }}>
            BIM & DATA Management
        </option>
        
        <option value="Le DOE BIM" {{ old('service') == 'Le DOE BIM' ? 'selected' : '' }}>
            Le DOE BIM
        </option>
        
        <option value="SCAN & Modélisation BIM" {{ old('service') == 'SCAN & Modélisation BIM' ? 'selected' : '' }}>
            SCAN & Modélisation BIM
        </option>
        
        <option value="Jumeaux Numériques" {{ old('service') == 'Jumeaux Numériques' ? 'selected' : '' }}>
            Jumeaux Numériques
        </option>
        
        <option value="Synthèse BIM" {{ old('service') == 'Synthèse BIM' ? 'selected' : '' }}>
            Synthèse BIM
        </option>
        
        <option value="CIM Management" {{ old('service') == 'CIM Management' ? 'selected' : '' }}>
            CIM Management
        </option>
        
        <option value="DATA Management" {{ old('service') == 'DATA Management' ? 'selected' : '' }}>
            DATA Management
        </option>
        
        <option value="Conseil & Accompagnement" {{ old('service') == 'Conseil & Accompagnement' ? 'selected' : '' }}>
            Conseil & Accompagnement
        </option>
    </select>

    @error('service')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
                            </div>

                            
                            <div class="col-12 col-sm-6">
                                <input type="date" name="date_service" class="form-control border-0 @error('date_service') is-invalid @enderror"
                                       placeholder="Date de Service" value="{{ old('date_service') }}"
                                       min="{{ date('Y-m-d', strtotime('+1 day')) }}" style="height: 55px;" required>
                                @error('date_service')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-12">
                                <textarea name="demande_speciale" class="form-control border-0 @error('demande_speciale') is-invalid @enderror" 
                                          placeholder="Demande Spéciale" rows="4">{{ old('demande_speciale') }}</textarea>
                                @error('demande_speciale')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-12">
                                <button style="background-color: #4dd0a7; border: none;" class="btn w-100 py-3" type="submit">
                                    <span style="color: white; font-weight: 600;">Réserver Maintenant</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript pour les animations et correction du spinner -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // CORRECTION DU SPINNER - l'arrêter immédiatement
    const spinner = document.getElementById('spinner');
    if (spinner) {
        spinner.classList.remove('show');
        setTimeout(() => {
            spinner.style.display = 'none';
        }, 500);
    }
    
    // Animation des éléments au scroll
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
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = `all 0.6s ease ${index * 0.1}s`;
        observer.observe(card);
        
        // Effet hover
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
            this.style.boxShadow = '0 15px 35px rgba(0, 0, 0, 0.1)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.05)';
        });
    });
    
    // Animation du triangle (conservée)
    const triangleWrapper = document.querySelector('.triangle-wrapper');
    const triangleSections = document.querySelectorAll('.triangle-section');
    
    if (triangleWrapper) {
        triangleWrapper.addEventListener('mousemove', (e) => {
            const rect = triangleWrapper.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (y - centerY) / 10;
            const rotateY = (x - centerX) / 10;
            
            triangleWrapper.style.transform = `perspective(1000px) rotateX(${-rotateX}deg) rotateY(${rotateY}deg)`;
        });
        
        triangleWrapper.addEventListener('mouseleave', () => {
            triangleWrapper.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg)';
            triangleWrapper.style.transition = 'transform 0.5s ease';
        });
        
        triangleWrapper.addEventListener('mouseenter', () => {
            triangleWrapper.style.transition = 'none';
        });
    }
    
    triangleSections.forEach(section => {
        section.addEventListener('click', function() {
            this.style.transform = 'scale(0.98)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 200);
            
            const pageURL = this.getAttribute('data-page');
            if (pageURL) {
                setTimeout(() => {
                    window.location.href = pageURL;
                }, 300);
            }
        });
    });
    
    // Smooth scroll pour les liens ancres
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            
            if (target) {
                const headerOffset = 100;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
});

// Arrêter le spinner au chargement de la page
window.addEventListener('load', function() {
    const spinner = document.getElementById('spinner');
    if (spinner) {
        spinner.classList.remove('show');
        setTimeout(() => {
            spinner.style.display = 'none';
        }, 100);
    }
});
</script>
<!-- JavaScript pour les animations - VERSION CORRIGÉE -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // CORRECTION DU SPINNER - l'arrêter immédiatement
    const spinner = document.getElementById('spinner');
    if (spinner) {
        spinner.classList.remove('show');
        setTimeout(() => {
            spinner.style.display = 'none';
        }, 500);
    }
    
    // Animation des éléments au scroll (SEULEMENT pour les sections non-hero)
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            // Ignorer la section hero pour éviter les conflits
            if (entry.target.closest('.hero-section')) {
                return;
            }
            
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observer les cartes de service (mais pas la section hero)
    const serviceCards = document.querySelectorAll('.solution-card');
    serviceCards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = `all 0.6s ease ${index * 0.1}s`;
        observer.observe(card);
        
        // Effet hover
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
            this.style.boxShadow = '0 15px 35px rgba(0, 0, 0, 0.1)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.05)';
        });
    });
    
    // Animation du triangle (conservée)
    const triangleWrapper = document.querySelector('.triangle-wrapper');
    const triangleSections = document.querySelectorAll('.triangle-section');
    
    if (triangleWrapper) {
        triangleWrapper.addEventListener('mousemove', (e) => {
            const rect = triangleWrapper.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (y - centerY) / 10;
            const rotateY = (x - centerX) / 10;
            
            triangleWrapper.style.transform = `perspective(1000px) rotateX(${-rotateX}deg) rotateY(${rotateY}deg)`;
        });
        
        triangleWrapper.addEventListener('mouseleave', () => {
            triangleWrapper.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg)';
            triangleWrapper.style.transition = 'transform 0.5s ease';
        });
        
        triangleWrapper.addEventListener('mouseenter', () => {
            triangleWrapper.style.transition = 'none';
        });
    }
    
    triangleSections.forEach(section => {
        section.addEventListener('click', function() {
            this.style.transform = 'scale(0.98)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 200);
            
            const pageURL = this.getAttribute('data-page');
            if (pageURL) {
                setTimeout(() => {
                    window.location.href = pageURL;
                }, 300);
            }
        });
    });
    
    // Smooth scroll pour les liens ancres
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            
            if (target) {
                const headerOffset = 100;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
});

// Arrêter le spinner au chargement de la page
window.addEventListener('load', function() {
    const spinner = document.getElementById('spinner');
    if (spinner) {
        spinner.classList.remove('show');
        setTimeout(() => {
            spinner.style.display = 'none';
        }, 100);
    }
});
</script>

@endsection