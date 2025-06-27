@extends('layout')
@section('content')

<!-- Hero Section exact comme l'image - FULL SCREEN -->
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
                <h1 class="hero-title fade-in-up">
                    CONSTRUISEZ L'AVENIR AVEC PRÉCISION
                </h1>
                <p class="hero-subtitle fade-in-up fade-in-up-delay-1">
                    Solutions intelligentes pour la construction moderne
                </p>
                <p class="hero-description fade-in-up fade-in-up-delay-2">
                    ArchiData Africa révolutionne l'industrie de la construction grâce à des solutions BIM innovantes et une expertise reconnue en data management.
                </p>
                
                <div class="hero-buttons fade-in-up fade-in-up-delay-3">
                    <a href="#solutions" class="btn-primary-hero">
                        <i class="fas fa-rocket"></i>
                        EN SAVOIR PLUS
                    </a>
                    <a href="#contact" class="btn-secondary-hero">
                        OBTENIR UN DEVIS
                        <i class="fas fa-play"></i>
                                                <i class="fas fa-play"></i>

                    </a>
                </div>
            </div>
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

   

<!-- Nos Solutions Section -->
 <section id="solutions" class="solutions-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="">Nos Solutions</h2>
                <p class="section-subtitle">8 expertises dédiées pour vos projets BIM</p>
            </div>
            
            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-cogs fa-2x"></i>
                        </div>
                        <h5 class="service-title">BIM & DATA Management</h5>
                        <p class="service-description">Pilotage global de la maquette numérique, coordination des équipes, gestion des livrables.</p>
                        <a href="#" class="service-link">En savoir plus</a>
                    </div>
                </div>
                
                <!-- Service 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-file-alt fa-2x"></i>
                        </div>
                        <h5 class="service-title">Le DOE BIM</h5>
                        <p class="service-description">Dossier d'Ouvrage Exécuté numérique pour une documentation complète et exploitable.</p>
                        <a href="#" class="service-link">En savoir plus</a>
                    </div>
                </div>
                
                <!-- Service 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-cube fa-2x"></i>
                        </div>
                        <h5 class="service-title">SCAN & Modélisation BIM</h5>
                        <p class="service-description">Numérisation 3D précise et création de maquettes fidèles à la réalité existante.</p>
                        <a href="#" class="service-link">En savoir plus</a>
                    </div>
                </div>
                
                <!-- Service 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-city fa-2x"></i>
                        </div>
                        <h5 class="service-title">Jumeaux Numériques</h5>
                        <p class="service-description">Solutions intelligentes pour l'exploitation et la maintenance prédictive des bâtiments.</p>
                        <a href="#" class="service-link">En savoir plus</a>
                    </div>
                </div>
                
                <!-- Service 5 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-project-diagram fa-2x"></i>
                        </div>
                        <h5 class="service-title">Synthèse BIM</h5>
                        <p class="service-description">Coordination technique 3D, détection de clashs, anticipation des conflits.</p>
                        <a href="#" class="service-link">En savoir plus</a>
                    </div>
                </div>
                
                <!-- Service 6 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-map fa-2x"></i>
                        </div>
                        <h5 class="service-title">CIM Management</h5>
                        <p class="service-description">Le BIM à l'échelle du territoire pour une ville plus intelligente et durable.</p>
                        <a href="#" class="service-link">En savoir plus</a>
                    </div>
                </div>
                
                <!-- Service 7 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-database fa-2x"></i>
                        </div>
                        <h5 class="service-title">DATA Management</h5>
                        <p class="service-description">Votre patrimoine numérique valorisé, gouverné et pérenne.</p>
                        <a href="#" class="service-link">En savoir plus</a>
                    </div>
                </div>
                
                <!-- Service 8 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-graduation-cap fa-2x"></i>
                        </div>
                        <h5 class="service-title">Conseil & Accompagnement</h5>
                        <p class="service-description">Encadrer, former, auditer : un BIM durable passe par l'humain et les méthodes.</p>
                        <a href="#" class="service-link">En savoir plus</a>
                    </div>
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

@endsection