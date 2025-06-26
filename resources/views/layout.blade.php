<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>ArchiData Africa - BIM & Data Management</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ArchiData, BIM, Data Management, Construction, Architecture" name="keywords">
    <meta content="Solutions BIM et Data Management pour la construction intelligente" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
<link href="{{asset('css/triangle.css')}}" rel="stylesheet">

</head>

<body>
    <!-- Navbar Responsive -->
    <nav class="navbar navbar-expand-lg navbar-dark top-navbar fixed-top">
        <div class="container-fluid navbar-container">
            <!-- Logo -->
            <a class="navbar-brand logo-section" href="#">
                <img src="{{asset('img/1.png')}}" alt="ArchiData Africa">
            </a>
            
            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler mobile-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
            <!-- Navigation Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav-menu mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#accueil">ACCUEIL</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="solutionsDropdown" role="button" data-bs-toggle="dropdown">
                            NOS SOLUTIONS
                        </a>
                        <ul class="dropdown-menu solutions-dropdown">
                            <li><a class="dropdown-item" href="{{route('solutions.bim-data-management')}}"><i class="fas fa-cogs"></i> BIM & DATA Management</a></li>
                            <li><a class="dropdown-item" href="{{route('solutions.doe-bim')}}"><i class="fas fa-file-alt"></i> Le DOE BIM</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cube"></i> SCAN & Modélisation BIM</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-city"></i> Jumeaux Numériques</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-project-diagram"></i> Synthèse BIM</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-map"></i> CIM Management</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-database"></i> DATA Management</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-graduation-cap"></i> Conseil & Accompagnement</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#secteurs">SECTEURS D'ACTIVITÉS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#etudes">ÉTUDES DE CAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#apropos">À PROPOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">BLOG/RESSOURCES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">CONTACT</a>
                    </li>
                </ul>
                
                <!-- User Space Button -->
                <a href="#" class="user-space">
                    <i class="fas fa-user-circle"></i>
                    VOTRE ESPACE
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->

    <!-- Hero Section -->
 
    @yield('content')


    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4>Adresse</h4>
                    <p><i class="fa fa-phone-alt me-3"></i>+212 661-243730</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+33-601-276690</p>
                    <p><i class="fa fa-envelope me-3"></i>connect@archidata-groupe.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn-social" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn-social" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn-social" href="https://www.linkedin.com/in/mehdi-rasfi/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4>Horaires</h4>
                    <h6>Lundi - Samedi :</h6>
                    <p>09h00 - 18h00</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4>Services</h4>
                    <a class="btn-link" href="#">BIM Management et Synthèse</a>
                    <a class="btn-link" href="#">Conseil et Formation</a>
                    <a class="btn-link" href="#">BIM GEM et Modélisation</a>
                    <a class="btn-link" href="#">Applications et Plugins BIM</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4>Newsletter</h4>
                    <p>Inscrivez-vous à notre newsletter pour recevoir les dernières actualités et offres exclusives.</p>
                    <div class="mt-3">
                        <a href="#" class="btn btn-primary">S'inscrire</a>
                    </div>
                </div>
            </div>
            
            <hr class="my-4" style="border-color: #666;">
            
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    &copy; 2024 <a href="#" style="color: var(--accent-green);">ARCHIDATA</a>. Tous droits réservés.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Designé par <a href="#" style="color: var(--accent-green);">Webcinq</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="bi bi-arrow-up"></i>
    </a>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Spinner
            const spinner = document.getElementById('spinner');
            setTimeout(() => {
                spinner.style.display = 'none';
            }, 1000);

            // Navbar scroll effect
            const navbar = document.querySelector('.top-navbar');
            
            window.addEventListener('scroll', function() {
                if (window.scrollY > 100) {
                    navbar.style.background = 'rgba(10, 22, 40, 0.98)';
                    navbar.style.backdropFilter = 'blur(20px)';
                } else {
                    navbar.style.background = 'transparent';
                    navbar.style.backdropFilter = 'none';
                }
            });

            // Back to top button
            const backToTop = document.getElementById('backToTop');
            
            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) {
                    backToTop.classList.add('show');
                } else {
                    backToTop.classList.remove('show');
                }
            });

            backToTop.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    
                    if (target) {
                        const headerOffset = 80;
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
    </script>
</body>
</html>