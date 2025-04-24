<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>ArchiData</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/triangle.css')}}" rel="stylesheet">

</head>

<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Chargement...</span>
    </div>
</div>
<!-- Spinner End -->

<style>
    /* Styles personnalisés */
    .top-bar {
        min-height: 44px;
    }
    
    .contact-info {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-end;
        align-items: center;
    }
    
    .contact-item {
        display: flex;
        align-items: center;
        margin: 0.3rem 1rem 0.3rem 0;
        white-space: nowrap;
    }
    
    .contact-item:last-child {
        margin-right: 0;
    }
    
    .contact-item p {
        margin: 0;
    }
    
    .social-icons {
        display: flex;
        justify-content: center;
        margin-top: 0.5rem;
    }
    
    .social-btn {
        width: 2rem;
        height: 2rem;
        display: flex;
        justify-content: center;
        align-items: center;
        background: white;
        color: #0d6efd;
        margin: 0 0.25rem;
        border-radius: 0.25rem;
        text-decoration: none;
    }
    
    /* Responsive adjustments */
    @media (max-width: 991.98px) {
        .contact-info {
            justify-content: center;
        }
        
        .social-icons {
            display: none;
        }
    }
    
    @media (max-width: 575.98px) {
        .contact-item {
            margin: 0.2rem 0.5rem;
        }
    }
</style>
<!-- Topbar Start -->
<div style="height: 44px" class="container-fluid bg-light d-none d-lg-block">
    <div class="row align-items-center top-bar">
        <div class="col-lg-9 col-md-12 text-end">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <i class="fa fa-phone-alt me-2"></i>
                <p class="m-0 me-4">+212 661-243730</p>
                
                <i class="fa fa-phone-alt me-2"></i>
                <p class="m-0 me-4">+33-601-276690</p>
                <i class="far fa-envelope-open text-primary me-2"></i>
                <p class="m-0">connect@archidata-groupe.com</p>
            </div>
            <div class="h-100 d-inline-flex align-items-center ms-4">
                <a class="btn btn-sm-square bg-white text-primary me-1" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.linkedin.com/in/mehdi-rasfi/"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-0" href="#"><i class="fab fa-whatsap"></i></a>
            </div>
        </div>
    </div>
</div>



<!-- Navbar Start -->
<div class="container-fluid nav-bar bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 py-lg-0 px-lg-4">
        <!-- Logo visible sur petits écrans -->
        <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
            <img src="img/image67.png" alt="Logo" style="height: 40px;">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- Logo visible sur grands écrans -->
            <a href="{{ route('index') }}" class="navbar-brand d-none d-lg-flex align-items-center me-4">
                <img src="img/image67.png"  alt="Logo" style="height: 70px;">
            </a>

            <div class="navbar-nav me-auto">
                <a href="{{ route('index') }}" class="nav-item nav-link {{ request()->routeIs('index') ? 'active' : '' }}">Accueil</a>
                <a href="{{ route('service') }}" class="nav-item nav-link {{ request()->routeIs('service') ? 'active' : '' }}">Services</a>
                <a href="{{ route('blog') }}" class="nav-item nav-link {{ request()->routeIs('blog') ? 'active' : '' }}">Blog</a>
                <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">À propos</a>
                <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
            </div>
        </div>
    </nav>
</div>

<!-- Navbar End -->

@yield('content')


<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Adresse</h4>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+212 661-243730</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+33-601-276690</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>connect@archidata-groupe.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/mehdi-rasfi/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Horaires</h4>
                <h6 class="text-light">Lundi - Samedi :</h6>
                <p class="mb-4">09h00 - 18h00</p>

            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Services</h4>
                <a class="btn btn-link" href="">BIM Management et Synthèse</a>
                <a class="btn btn-link" href="">Conseil et Formation</a>
                <a class="btn btn-link" href="">BIM GEM et Modélisation</a>
                <a class="btn btn-link" href="">Applications et Plugins BIM
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Newsletter</h4>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Votre email">
                    <button type="button"  style="background-color: #90abd7" class="btn text-white py-2 position-absolute top-0 end-0 mt-2 me-2">S'inscrire</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">ARCHIDATA</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** Ce template est gratuit tant que vous conservez le lien / l'attribution à l'auteur dans le pied de page. Pour l'utiliser sans ce lien, vous pouvez acheter la Licence d'Exclusion de Crédit sur "https://htmlcodex.com/credit-removal". Merci de votre soutien. ***/-->
                    Designé par <a class="border-bottom" href="">Webcinq</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" style="background-color: #90abd7" class="btn btn-lg  btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('lib/wow/wow.min.js')}}"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('js/main.js')}}"></script>
</body>

</html>
