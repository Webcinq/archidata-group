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
        <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/triangle.css')}}" rel="stylesheet">

    <style>
        /* VARIABLES CSS */
        :root {
            --primary-blue: #1e40af;
            --dark-bg: #0a1628;
            --accent-green: #5AC990;
            --text-light: #FFF8F2;
            --glass-bg: rgba(255, 255, 255, 0.1);
        }

        /* RESET ET BASE */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        /* SPINNER */
        #spinner {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        .spinner-border {
            width: 3rem;
            height: 3rem;
            border: 0.25rem solid #f3f3f3;
            border-top: 0.25rem solid var(--accent-green);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* NAVBAR */
        .top-navbar {
            top: 0;
            left: 0;
            right: 0;
            background: transparent;
            backdrop-filter: none;
            transition: all 0.3s ease;
            z-index: 1000;
            padding: 0;
            border: none
        }

        .navbar-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
        }

        .logo-section img {
    height: 107px;
            width: auto;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 30px;
            margin: 0;
            padding: 0;
        }

        .nav-item a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-item a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent-green);
            transition: width 0.3s ease;
        }

        .nav-item a:hover,
        .nav-item a.active {
            color: var(--accent-green);
        }

        .nav-item a:hover::after,
        .nav-item a.active::after {
            width: 100%;
        }

        .user-space {
            background: var(--glass-bg);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 25px;
            padding: 8px 20px;
            color: white;
            text-decoration: none;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .user-space:hover {
            background: white;
            color: var(--dark-bg);
        }

        /* HERO SECTION */
    .hero-section {
    background-image: url('/img/hero_section.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
.hero-text {
    border-left: 4px solid #5AC990;
    padding-left: 20px; /* espace entre la ligne et le texte */
}

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 30%, rgba(77, 208, 167, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(44, 90, 160, 0.15) 0%, transparent 50%);
            z-index: 1;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: grid-move 20s linear infinite;
            z-index: 1;
        }

        @keyframes grid-move {
            0% { transform: translate(0, 0); }
            100% { transform: translate(50px, 50px); }
        }

        .hero-content {
           max-width: 1400px;
            margin: 0 auto;
            padding: 0 40px;
            display: grid
        ;
            /* grid-template-columns: 1fr 1fr; */
            gap: 60px;
            align-items: center;
            position: relative;
            z-index: 10;
            justify-content: start;
            align-content: space-around;
        }

   

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 20px;
            color: #FFF8F2;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .hero-subtitle {
            font-size: 1.3rem;
            font-weight: 400;
            color: var(--text-light);
            margin-bottom: 30px;
            line-height: 1.4;
        }

        .hero-description {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 40px;
            line-height: 1.6;
        }

        /* BOUTONS HERO */
        .hero-buttons {
            display: flex;
            gap: 20px;
            margin-bottom: 40px;
        }
.btn-primary-hero {
    background: linear-gradient(135deg, #5AC990, #2FA380);
    color: black;
    padding: 15px 30px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    border: none;
    display: flex;
    align-items: center;
    gap: 10px;
}


        .btn-primary-hero:hover {
            background: #3ab895;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(77, 208, 167, 0.3);
            color: black;
        }

        .btn-secondary-hero {
            background-color: #092138;
            color: white;
            padding: 0px 30px;
            border-radius: 25px;
            border: 2px solid #5AC990;
            text-decoration: none;
            font-weight: 600;
            font-size: 19px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .btn-secondary-hero:hover {
            background: white;
            color: var(--dark-bg);
            transform: translateY(-2px);
        }

        /* BUILDING 3D */
        .hero-visual {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .building-3d {
            position: relative;
            width: 100%;
            max-width: 500px;
            height: 400px;
            perspective: 1000px;
        }

        .building-container {
            width: 100%;
            height: 100%;
            position: relative;
            transform-style: preserve-3d;
            animation: building-float 6s ease-in-out infinite;
        }

        .building-wireframe {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(77, 208, 167, 0.1), rgba(44, 90, 160, 0.2));
            border: 2px solid rgba(77, 208, 167, 0.5);
            border-radius: 10px;
            animation: wireframe-pulse 3s ease-in-out infinite;
        }

        .building-lines {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .line {
            position: absolute;
            background: rgba(77, 208, 167, 0.7);
            animation: line-glow 2s ease-in-out infinite alternate;
        }

        .line-vertical {
            width: 2px;
            height: 100%;
            left: 25%;
            animation-delay: 0s;
        }

        .line-vertical-2 {
            width: 2px;
            height: 100%;
            right: 25%;
            animation-delay: 0.5s;
        }

        .line-horizontal {
            height: 2px;
            width: 100%;
            top: 33%;
            animation-delay: 1s;
        }

        .line-horizontal-2 {
            height: 2px;
            width: 100%;
            top: 66%;
            animation-delay: 1.5s;
        }

        @keyframes building-float {
            0%, 100% { transform: translateY(0px) rotateY(0deg); }
            50% { transform: translateY(-10px) rotateY(2deg); }
        }

        @keyframes wireframe-pulse {
            0%, 100% { 
                border-color: rgba(77, 208, 167, 0.5);
                box-shadow: 0 0 20px rgba(77, 208, 167, 0.2);
            }
            50% { 
                border-color: rgba(77, 208, 167, 0.8);
                box-shadow: 0 0 40px rgba(77, 208, 167, 0.4);
            }
        }

        @keyframes line-glow {
            0% { 
                background: rgba(77, 208, 167, 0.5);
                box-shadow: 0 0 5px rgba(77, 208, 167, 0.3);
            }
            100% { 
                background: rgba(77, 208, 167, 1);
                box-shadow: 0 0 15px rgba(77, 208, 167, 0.6);
            }
        }

        /* STATS BAR */
        .stats-bar {
            position: absolute;
            bottom: 120px;
            left: 0;
            right: 0;
            background: black;
            backdrop-filter: blur(10px);
            border-top: 1px solid rgba(77, 208, 167, 0.3);
            border-bottom: 1px solid rgba(77, 208, 167, 0.3);
            padding: 6px 0;
            overflow: hidden;
            z-index: 20;
        }

        .stats-scroll {
            display: flex;
            animation: scroll-stats 20s linear infinite;
            white-space: nowrap;
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-right: 60px;
            font-weight: 600;
            font-size: 20px;
        }

        .stat-number {
            color: var(--accent-green);
            font-weight: 700;
        }

        .stat-text {
            color: white;
        }

        .stat-separator {
            color: var(--accent-green);
            margin: 0 20px;
        }

        @keyframes scroll-stats {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }

        /* PARTICLES */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            z-index: 2;
        }

        .particle {
            position: absolute;
            background: rgba(77, 208, 167, 0.6);
            border-radius: 50%;
            animation: particle-float 8s ease-in-out infinite;
        }

        .particle:nth-child(1) {
            width: 4px;
            height: 4px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .particle:nth-child(2) {
            width: 6px;
            height: 6px;
            top: 60%;
            right: 20%;
            animation-delay: 2s;
        }

        .particle:nth-child(3) {
            width: 3px;
            height: 3px;
            bottom: 30%;
            left: 30%;
            animation-delay: 4s;
        }

        .particle:nth-child(4) {
            width: 5px;
            height: 5px;
            top: 40%;
            right: 10%;
            animation-delay: 6s;
        }

        @keyframes particle-float {
            0%, 100% { transform: translateY(0px) translateX(0px); opacity: 0.3; }
            33% { transform: translateY(-20px) translateX(10px); opacity: 0.8; }
            66% { transform: translateY(10px) translateX(-5px); opacity: 0.5; }
        }

        /* ANIMATIONS */
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease forwards;
        }

        .fade-in-up-delay-1 { animation-delay: 0.2s; }
        .fade-in-up-delay-2 { animation-delay: 0.4s; }
        .fade-in-up-delay-3 { animation-delay: 0.6s; }
        .fade-in-up-delay-4 { animation-delay: 0.8s; }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* FOOTER */
        .footer {
            background: #1a1a1a;
            color: #ffffff;
            padding: 60px 0 20px;
        }

        .footer h4 {
            color: white;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .footer p {
            color: #cccccc;
            margin-bottom: 10px;
        }

        .footer .btn-link {
            color: #cccccc;
            text-decoration: none;
            padding: 5px 0;
            display: block;
            transition: color 0.3s ease;
        }

        .footer .btn-link:hover {
            color: var(--accent-green);
        }

        .btn-social {
            width: 40px;
            height: 40px;
            border: 1px solid #666;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #cccccc;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        .btn-social:hover {
            background: var(--accent-green);
            border-color: var(--accent-green);
            color: white;
        }

        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: var(--accent-green);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            opacity: 0;
            visibility: hidden;
        }

        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background: #3ab895;
            transform: translateY(-2px);
        }

        /* RESPONSIVE */
        @media (max-width: 1200px) {
            .hero-content {
                gap: 40px;
                padding: 0 20px;
            }
            
            .hero-title {
                font-size: 3rem;
            }
        }

        @media (max-width: 992px) {
            .nav-menu {
                display: none;
            }
            
            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 40px;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .stats-bar {
                bottom: 80px;
            }
        }

        @media (max-width: 768px) {
            .navbar-container {
                padding: 0 20px;
            }
            
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }
            
            .btn-primary-hero,
            .btn-secondary-hero {
                width: 100%;
                max-width: 250px;
                justify-content: center;
            }
            
            .stat-item {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <!-- Spinner -->
    <div id="spinner">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Chargement...</span>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="top-navbar">
        <div class="navbar-container">
            <div class="logo-section">
                <img src="img/1.png" alt="ArchiData Africa">
            </div>
            
            <ul class="nav-menu">
                <li class="nav-item"><a href="#" class="active">ACCUEIL</a></li>
                <li class="nav-item"><a href="#">NOS SOLUTIONS</a></li>
                <li class="nav-item"><a href="#">SECTEURS D'ACTIVITÉS</a></li>
                <li class="nav-item"><a href="#">ÉTUDES DE CAS</a></li>
                <li class="nav-item"><a href="#">À PROPOS</a></li>
                <li class="nav-item"><a href="#">BLOG/RESSOURCES</a></li>
                <li class="nav-item"><a href="#">CONTACT</a></li>
            </ul>
            
            <a href="#" class="user-space">
                <i class="fas fa-user-circle"></i>
                VOTRE ESPACE
            </a>
        </div>
    </nav>

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