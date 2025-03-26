@extends('layout')
    @section('content')

        <div class="container-fluid page-header mb-5 py-5">
            <div class="container">
                <h1 class="display-3 text-white mb-3 animated slideInDown">À propos</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">À propos</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


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
                                <h3 class="m-0 text-secondary">+012 345 6789</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4" style="min-height: 500px;">
                        <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                            <img  src="{{asset('img/triangle.png')}}" style="object-fit: cover; padding: 0 0 50px 100px;height: 540px;width: 900px" alt="">
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
                        <p class="text-white mb-0">Projets Menés à Bien</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                        <p class="text-white mb-0">Spécialistes Formés</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-users fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                        <p class="text-white mb-0">Clients Satisfaits</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-wrench fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                        <p class="text-white mb-0">Plugins Innovants</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Notre Équipe</h6>
                    <h1 class="mb-5">Rencontrez Nos Experts</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                            </div>
                            <div class="team-text">
                                <div class="bg-light">
                                    <h5 class="fw-bold mb-0">Nom Complet</h5>
                                    <small>Manager BIM</small>
                                </div>
                                <div class="bg-primary">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                            </div>
                            <div class="team-text">
                                <div class="bg-light">
                                    <h5 class="fw-bold mb-0">Nom Complet</h5>
                                    <small>Consultant Principal</small>
                                </div>
                                <div class="bg-primary">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                            </div>
                            <div class="team-text">
                                <div class="bg-light">
                                    <h5 class="fw-bold mb-0">Nom Complet</h5>
                                    <small>Analyste Data</small>
                                </div>
                                <div class="bg-primary">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                            </div>
                            <div class="team-text">
                                <div class="bg-light">
                                    <h5 class="fw-bold mb-0">Nom Complet</h5>
                                    <small>Coordinateur Projet</small>
                                </div>
                                <div class="bg-primary">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team End -->


    @endsection
