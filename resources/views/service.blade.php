@extends('layout')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


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
                                <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="text-white mb-4">Services BIM d'Urgence</h1>
            <h3 class="text-white mb-0">Disponibles 24h / 24, 7j / 7</h3>
        </div>
        <div class="container position-relative wow fadeInUp" data-wow-delay="0.1s" style="margin-top: -6rem;">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="bg-light text-center p-5">
                        <h1 class="mb-4">Réserver une Prestation</h1>
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
                                        <option value="1">Gestion BIM</option>
                                        <option value="2">Conseil & Formation</option>
                                        <option value="3">BIM GEM & Modélisation</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control border-0 datetimepicker-input"
                                               placeholder="Date de Service" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Demande Spéciale"></textarea>
                                </div>
                                <div class="col-12">
                                    <button style="background-color: #124698" class="btn text-white w-100 py-3" type="submit">Réserver Maintenant</button>
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
                <h1 class="mb-5">Ils Parlent de Nous !</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">
                            “Grâce à ArchiData, nous avons optimisé nos délais et réduit les coûts. Leur approche BIM est un atout majeur pour tout projet moderne.”
                        </p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2"
                         src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
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
                        <p class="mb-0">
                            “Leur service de gestion BIM nous a fait gagner un temps précieux. Excellente communication et professionnalisme.”
                        </p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2"
                         src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
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
                        <p class="mb-0">
                            “La partie formation est un plus réel. ArchiData nous a aidés à déployer la culture BIM dans toute l’équipe.”
                        </p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2"
                         src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
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
                        <p class="mb-0">
                            “Leurs plugins personnalisés ont simplifié nos process. Une vraie valeur ajoutée pour optimiser nos projets.”
                        </p>
                    </div>
                    <img class="bg-light rounded-circle p-2 mx-auto mb-2"
                         src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
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
    <!-- Testimonial End -->


@endsection


