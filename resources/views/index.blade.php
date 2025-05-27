@extends('layout')
@section('content')
    <style>
        @media (max-width: 768px) {
            .txt {
                font-size: 8px;
            }
            .section-top{
               margin-top: 1px
            }

        }
    </style>
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">BIM & Gestion de Projets
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Solutions Résidentielles
                                    Efficaces</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Nous utilisons des approches BIM avancées
                                    pour assurer une transparence totale, une anticipation des coûts et des délais, et une
                                    meilleure durabilité.</p>
                                <a href="" style="color: black ; background-color: #edf1fc;"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">En savoir plus</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Devis gratuit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">BIM & Gestion de Projets
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Expertise en Construction
                                    Commerciale</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Grâce à une planification minutieuse et une
                                    gestion de données collaborative, nous répondons aux défis des grands projets en toute
                                    efficacité.</p>
                                    <a href="" style="color: black ; background-color: #edf1fc;"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">En savoir plus</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Devis gratuit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <h1 class="text-black d-flex justify-content-center mb-4">Nos services</h1>
            
                <div class="col-lg-3 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                    <a href="{{route('blog-detail')}}" class="text-decoration-none">
                        <div class="overflow-hidden">
                            <img class="img-fluid w-100 h-100" src="{{asset('img/service-1.png')}}" alt="">
                        </div>
                        <div class="d-flex align-items-center justify-content-between bg-light p-4">
                            <h5 class="text-truncate me-3 mb-0">BIM Management et <br>Synthèse</h5>
                            <i class="fa fa-arrow-right text-primary"></i>
                        </div>
                    </a>
                </div>
            
                <div class="col-lg-3 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
                    <a href="{{route('blog-detail')}}" class="text-decoration-none">
                        <div class="overflow-hidden">
                            <img class="img-fluid w-100 h-100" src="{{asset('img/service-2.png')}}" alt="">
                        </div>
                        <div class="d-flex align-items-center justify-content-between bg-light p-4">
                            <h5 class="text-truncate me-3 mb-0">Conseil et Formation</h5>
                            <i class="fa fa-arrow-right text-primary"></i>
                        </div>
                    </a>
                </div>
            
                <div class="col-lg-3 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.5s">
                    <a href="{{route('blog-detail')}}" class="text-decoration-none">
                        <div class="overflow-hidden">
                            <img class="img-fluid w-100 h-100" src="{{asset('img/service-3.png')}}" alt="">
                        </div>
                        <div class="d-flex align-items-center justify-content-between bg-light p-4">
                            <h5 class="text-truncate me-3 mb-0">BIM GEM et Modélisation</h5>
                            <i class="fa fa-arrow-right text-primary"></i>
                        </div>
                    </a>
                </div>
            
                <div class="col-lg-3 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.7s">
                    <a href="{{route('blog-detail')}}" class="text-decoration-none">
                        <div class="overflow-hidden">
                            <img class="img-fluid w-100 h-100" src="{{asset('img/service-1.png')}}" alt="">
                        </div>
                        <div class="d-flex align-items-center justify-content-between bg-light p-4">
                            <h5 class="text-truncate me-3 mb-0">Facility Management</h5>
                            <i class="fa fa-arrow-right text-primary"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- About Start -->
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
        
        <script>
            // Animation fluide au survol du triangle entier
            const triangleWrapper = document.querySelector('.triangle-wrapper');
            const triangleSections = document.querySelectorAll('.triangle-section');
            
            // Effet de perspective au survol
            triangleWrapper.addEventListener('mousemove', (e) => {
                const xAxis = (window.innerWidth / 2 - e.pageX) / 25;
                const yAxis = (window.innerHeight / 2 - e.pageY) / 25;
                triangleWrapper.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
            });
            
            triangleWrapper.addEventListener('mouseleave', () => {
                triangleWrapper.style.transform = 'rotateY(0deg) rotateX(0deg)';
                triangleWrapper.style.transition = 'all 0.5s ease';
            });
            
            triangleWrapper.addEventListener('mouseenter', () => {
                triangleWrapper.style.transition = 'none';
            });
            
            triangleSections.forEach(section => {
                section.addEventListener('click', function() {
                    // Animation de clic
                    this.style.transform = 'scale(0.98)';
                    setTimeout(() => {
                        this.style.transform = 'scale(1)';
                    }, 200);
                    
                    const pageURL = this.getAttribute('data-page');
                    
                    // Rediriger vers la page spécifiée avec un léger délai pour l'animation
                    if (pageURL) {
                        setTimeout(() => {
                            window.location.href = pageURL;
                        }, 300);
                    }
                });
            });
        </script>
        <div class="row g-5 justify-content-center mt-5">
            <div class="col-lg-8 text-center wow fadeInUp" data-wow-delay="0.1s">
                <!-- Text block centered -->
                <h6 class="text-secondary text-uppercase">À propos</h6>
                <h1 class="mb-4">Nous Sommes une Entreprise Fiable Depuis 2010</h1>
                <p class="mb-4">
                    ArchiData révolutionne le secteur du bâtiment grâce à des solutions BIM et des processus collaboratifs.
                    Notre mission est d'assurer la transparence, l'efficacité et la durabilité dans chaque projet.
                </p>
                <div class="d-flex" style="    flex-wrap: wrap;
">
                <p class="fw-medium text-primary">
                    <i class="fa fa-check text-success me-3"></i>Projets résidentiels et commerciaux
                </p>
                <p class="fw-medium text-primary">
                    <i class="fa fa-check text-success me-3"></i>Services de qualité à des prix accessibles
                </p>
                <p class="fw-medium text-primary">
                    <i class="fa fa-check text-success me-3"></i>Assistance urgente 24/7
                </p>
            </div>
                <div class="bg-primary d-flex align-items-center justify-content-center p-4 mt-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt fa-2x text-primary"></i>
                    </div>
                    <div class="ms-3 text-start">
                        <p class="fs-5 fw-medium mb-2 text-white">Intervention 24/7</p>
                        <h3 class="m-0 text-white">+212 661-243730</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- About End -->

    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Années d'Expérience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Experts BIM</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Clients Satisfaits</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-wrench fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Projets Terminés</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->

    <!-- Service Start -->
    <div class="container-fluid py-5 px-4 px-lg-0">
        <div class="row g-0">
            <div class="col-lg-3 d-none d-lg-flex">
                <div class="d-flex align-items-center justify-content-center bg-primary w-100 h-100">
                    <h1 class="display-3  m-0" style="transform: rotate(-90deg);color: #FFFFFF">15 Ans d'Expérience</h1>
                </div>
            </div>
            <div class="col-md-12 col-lg-9">
                <div class="ms-lg-5 ps-lg-5">
                    <div class="text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="text-secondary text-uppercase">Nos Services</h6>
                        <h1 class="mb-5">Découvrez Nos Prestations</h1>
                    </div>
                  <div class="owl-carousel service-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
    <div class="bg-light p-4">
        <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
            <i class="fa fa-database fa-2x text-primary"></i> <!-- Maintenance des Données -->
        </div>
        <h4 class="mb-3">Maintenance des Données</h4>
        <p>Garantir la collaboration entre toutes les parties prenantes grâce à un environnement de données commun et accessible.</p>
        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Service de Qualité</p>
        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Satisfaction Client</p>
        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Assistance 24/7</p>
        <a href="{{route('blog-detail')}}" class="btn bg-white text-primary w-100 mt-2">En savoir plus<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
    </div>

    <div class="bg-light p-4">
        <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
            <i class="fa fa-chart-line fa-2x text-primary"></i> <!-- Gestion Budgétaire -->
        </div>
        <h4 class="mb-3">Gestion Budgétaire</h4>
        <p>Un suivi précis des coûts et une anticipation efficace des dépassements budgétaires garantissent des projets plus rentables.</p>
        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Service de Qualité</p>
        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Satisfaction Client</p>
        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Assistance 24/7</p>
        <a href="{{route('blog-detail')}}" class="btn bg-white text-primary w-100 mt-2">En savoir plus<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
    </div>

    <div class="bg-light p-4">
        <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
            <i class="fa fa-clock fa-2x text-primary"></i> <!-- Simulations & Délais -->
        </div>
        <h4 class="mb-3">Simulations & Délais</h4>
        <p>Une planification avancée et une détection proactive des conflits assurent le respect des échéances et l’anticipation des problèmes.</p>
        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Service de Qualité</p>
        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Satisfaction Client</p>
        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Assistance 24/7</p>
        <a href="{{route('blog-detail')}}" class="btn bg-white text-primary w-100 mt-2">En savoir plus<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
    </div>

    <div class="bg-light p-4">
        <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
            <i class="fa fa-leaf fa-2x text-primary"></i> <!-- Solutions Durables -->
        </div>
        <h4 class="mb-3">Solutions Durables</h4>
        <p>Intégration de matériaux à faible empreinte carbone et approche écoresponsable pour réduire l'impact environnemental.</p>
        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Service de Qualité</p>
        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Satisfaction Client</p>
        <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Assistance 24/7</p>
        <a href="{{route('blog-detail')}}" class="btn bg-white text-primary w-100 mt-2">En savoir plus<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Booking Start -->
    <div class="container-fluid my-5 px-0">
        <div class="video wow fadeInUp" data-wow-delay="0.1s">
            <button type="button" class="btn-play" data-bs-toggle="modal"
                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                <span></span>
            </button>
            <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content rounded-0">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Vidéo YouTube</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Format 16:9 -->
                            <div class="ratio ratio-16x9">
                                <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                                    allowscriptaccess="always" allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="text-white mb-4">Assistance en Urgence</h1>
            <h3 class="text-white mb-0">24 Heures / 7 Jours</h3>
        </div>
   <div class="container position-relative wow fadeInUp" data-wow-delay="0.1s" style="margin-top: -6rem;">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="bg-light text-center p-5">
                <h1 class="mb-4">Demandez un Service</h1>
                
                <!-- Messages de succès et d'erreur -->
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
                    @csrf <!-- Token CSRF obligatoire -->
                    @method('POST') <!-- Méthode POST pour la soumission du formulaire -->
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <input type="text" 
                                   name="nom" 
                                   class="form-control border-0 @error('nom') is-invalid @enderror" 
                                   placeholder="Votre Nom"
                                   value="{{ old('nom') }}"
                                   style="height: 55px;" 
                                   required>
                            @error('nom')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-12 col-sm-6">
                            <input type="email" 
                                   name="email" 
                                   class="form-control border-0 @error('email') is-invalid @enderror" 
                                   placeholder="Votre Email"
                                   value="{{ old('email') }}"
                                   style="height: 55px;" 
                                   required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-12 col-sm-6">
                            <select name="service" 
                                    class="form-select border-0 @error('service') is-invalid @enderror" 
                                    style="height: 55px;" 
                                    required>
                                <option value="">Choisissez un Service</option>
                                <option value="BIM GEM et Modélisation" {{ old('service') == 'BIM GEM et Modélisation' ? 'selected' : '' }}>
                                    BIM GEM et Modélisation
                                </option>
                                <option value="Conseil et Formation" {{ old('service') == 'Conseil et Formation' ? 'selected' : '' }}>
                                    Conseil et Formation
                                </option>
                                <option value="BIM Management et Synthèse" {{ old('service') == 'BIM Management et Synthèse' ? 'selected' : '' }}>
                                    BIM Management et Synthèse
                                </option>
                                <option value="Facility Management" {{ old('service') == 'Facility Management' ? 'selected' : '' }}>
                                    Facility Management
                                </option>
                            </select>
                            @error('service')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-12 col-sm-6">
                            <input type="date" 
                                   name="date_service" 
                                   class="form-control border-0 @error('date_service') is-invalid @enderror"
                                   placeholder="Date de Service"
                                   value="{{ old('date_service') }}"
                                   min="{{ date('Y-m-d', strtotime('+1 day')) }}"
                                   style="height: 55px;" 
                                   required>
                            @error('date_service')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-12">
                            <textarea name="demande_speciale" 
                                      class="form-control border-0 @error('demande_speciale') is-invalid @enderror" 
                                      placeholder="Demande Spéciale"
                                      rows="4">{{ old('demande_speciale') }}</textarea>
                            @error('demande_speciale')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-12">
                            <button style="background-color: #124698" 
                                    class="btn w-100 py-3" 
                                    type="submit">
                                <span style="color: white">Réserver Maintenant</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    </div>
    <!-- Booking End -->



    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-secondary text-uppercase">Témoignages</h6>
                <h1 class="mb-5">Ce Que Disent Nos Clients !</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">"Grâce à ArchiData, nous avons économisé du temps et évité les retards. Leur
                            approche BIM est un atout majeur pour tout chantier."</p>
                    </div>
                   <img class="bg-light rounded-circle p-2 mx-auto mb-2"
     src="https://ui-avatars.com/api/?name=Lina+Khattabi&length=2&background=eeeeee&color=555555"
     style="width: 80px; height: 80px;">
                    <div class="mb-2">
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                    </div>
                    <h5 class="mb-1">Lina Khattabi</h5>
                    <p class="m-0">Profession</p>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">"Le suivi budgétaire précis et la transparence de leurs données nous ont permis de
                            respecter nos objectifs financiers."</p>
                    </div>
         <img src="https://ui-avatars.com/api/?name=Yassir+ElFadili&length=2&background=FFB6C1&color=FFFFFF"
     style="width: 80px; height: 80px;" class="rounded-circle mx-auto mb-2">
                    <div class="mb-2">
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                    </div>
                    <h5 class="mb-1">Yassir El Fadili</h5>
                    <p class="m-0">Profession</p>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">"Excellente assistance 24/7. ArchiData a toujours été disponible pour résoudre nos
                            questions urgentes."</p>
                    </div>
   
<img src="https://ui-avatars.com/api/?name=Adam+Bennani&length=2&background=87CEFA&color=FFFFFF"
     style="width: 80px; height: 80px;" class="rounded-circle mx-auto mb-2">
                    <div class="mb-2">
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                    </div>
                    <h5 class="mb-1">Adam Bennani</h5>
                    <p class="m-0">Profession</p>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">"Une équipe fiable et professionnelle qui nous a accompagnés de la phase de
                            conception jusqu'à la livraison du projet."</p>
                    </div>
               
<img src="https://ui-avatars.com/api/?name=Sara+Malki&length=2&background=90EE90&color=333333"
     style="width: 80px; height: 80px;" class="rounded-circle mx-auto mb-2">
                    <div class="mb-2">
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                    </div>
                    <h5 class="mb-1">Sara Malki</h5>
                    <p class="m-0">Profession</p>
                </div>
            </div>
        </div>
    </div>
@endsection