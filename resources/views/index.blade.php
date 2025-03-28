@extends('layout')
@section('content')
    <style>
        @media (max-width: 768px) {
            .triangle{
                display: none;
            }

        }
    </style>
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">BIM & Gestion de Projets</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Solutions Résidentielles Efficaces</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Nous utilisons des approches BIM avancées pour assurer une transparence totale, une anticipation des coûts et des délais, et une meilleure durabilité.</p>
                                <a href="" style="color: black" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">En savoir plus</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Devis gratuit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">BIM & Gestion de Projets</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Expertise en Construction Commerciale</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Grâce à une planification minutieuse et une gestion de données collaborative, nous répondons aux défis des grands projets en toute efficacité.</p>
                                <a href="" style="color: black" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">En savoir plus</a>
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
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="{{asset('img/service-1.png')}}" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0">BIM Management et Synthèse</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="{{asset('img/service-2.png')}}" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0">Conseil et Formation
                        </h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.5s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="{{asset('img/service-3.png')}}" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0">BIM GEM et Modélisation</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">À propos</h6>
                    <h1 class="mb-4">Nous Sommes une Entreprise Fiable Depuis 2010</h1>
                    <p class="mb-4">ArchiData révolutionne le secteur du bâtiment grâce à des solutions BIM et des processus collaboratifs. Notre mission est d'assurer la transparence, l'efficacité et la durabilité dans chaque projet.</p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Projets résidentiels et commerciaux</p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Services de qualité à des prix accessibles</p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Assistance urgente 24/7</p>
                    <div class="bg-primary d-flex align-items-center p-4 mt-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt fa-2x text-primary"></i>
                        </div>
                        <div class="ms-3">
                            <p class="fs-5 fw-medium mb-2 text-white">Intervention 24/7</p>
                            <h3 class="m-0 text-secondary">+212-601-632963</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-4 triangle" style="min-height: 500px;">
                    <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                        <img class="" src="{{asset('img/triangle.png')}}" style="object-fit: cover; padding: 0 0 50px 100px;height: 540px;width: 900px" alt="">
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
                                <i class="fa fa-water fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Maintenance des Données</h4>
                            <p>Garantir la collaboration entre toutes les parties prenantes grâce à un environnement de données commun et accessible.</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Service de Qualité</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Satisfaction Client</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Assistance 24/7</p>
                            <a href="" class="btn bg-white text-primary w-100 mt-2">En savoir plus<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                        </div>
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                                <i class="fa fa-toilet fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Gestion Budgétaire</h4>
                            <p>Un suivi précis des coûts et une anticipation efficace des dépassements budgétaires garantissent des projets plus rentables.</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Service de Qualité</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Satisfaction Client</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Assistance 24/7</p>
                            <a href="" class="btn bg-white text-primary w-100 mt-2">En savoir plus<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                        </div>
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                                <i class="fa fa-shower fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Simulations & Délais</h4>
                            <p>
                                Une planification avancée et une détection proactive des conflits assurent le respect des échéances et l’anticipation des problèmes.                            </p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Service de Qualité</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Satisfaction Client</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Assistance 24/7</p>
                            <a href="" class="btn bg-white text-primary w-100 mt-2">En savoir plus<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                        </div>
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                                <i class="fa fa-tint fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Solutions Durables</h4>
                            <p>Intégration de matériaux à faible empreinte carbone et approche écoresponsable pour réduire l'impact environnemental.</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Service de Qualité</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Satisfaction Client</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Assistance 24/7</p>
                            <a href="" class="btn bg-white text-primary w-100 mt-2">En savoir plus<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
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
            <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
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
                                <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                        allow="autoplay"></iframe>
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
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Votre Nom" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Votre Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Choisissez un Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text"
                                               class="form-control border-0 datetimepicker-input"
                                               placeholder="Date de Service" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Demande Spéciale"></textarea>
                                </div>
                                <div class="col-12">
                                    <button style="background-color: #124698" class="btn w-100 py-3" type="submit">
                                        <span style="color: white"> Réserver Maintenant</span>

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
                        <p class="mb-0">“Grâce à ArchiData, nous avons économisé du temps et évité les retards. Leur approche BIM est un atout majeur pour tout chantier.”</p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <div class="mb-2">
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                    </div>
                    <h5 class="mb-1">Nom Client</h5>
                    <p class="m-0">Profession</p>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">“Le suivi budgétaire précis et la transparence de leurs données nous ont permis de respecter nos objectifs financiers.”</p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <div class="mb-2">
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                    </div>
                    <h5 class="mb-1">Nom Client</h5>
                    <p class="m-0">Profession</p>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">“Excellente assistance 24/7. ArchiData a toujours été disponible pour résoudre nos questions urgentes.”</p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <div class="mb-2">
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                    </div>
                    <h5 class="mb-1">Nom Client</h5>
                    <p class="m-0">Profession</p>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">“Une équipe fiable et professionnelle qui nous a accompagnés de la phase de conception jusqu'à la livraison du projet.”</p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <div class="mb-2">
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                    </div>
                    <h5 class="mb-1">Nom Client</h5>
                    <p class="m-0">Profession</p>
                </div>
            </div>
        </div>
    </div>
@endsection
