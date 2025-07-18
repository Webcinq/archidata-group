{{-- resources/views/contact.blade.php --}}
@extends('layout')
@section('content')
<style>
/* Contact Dark Theme */
.contact-hero {
    min-height: 60vh;
    background: linear-gradient(135deg, 
        rgba(11, 33, 84, 0.95) 0%, 
        rgba(18, 70, 152, 0.9) 30%, 
        rgba(90, 201, 144, 0.8) 60%,
        rgba(43, 40, 45, 0.85) 100%);
    position: relative;
    display: flex;
    align-items: center;
    overflow: hidden;
}

.contact-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: 
        radial-gradient(circle, rgba(255,255,255,0.1) 2px, transparent 2px),
        radial-gradient(circle, rgba(79, 172, 254, 0.15) 1px, transparent 1px),
        radial-gradient(circle, rgba(90, 201, 144, 0.1) 1.5px, transparent 1.5px);
    background-size: 50px 50px, 25px 25px, 30px 30px;
    animation: particleFloat 20s linear infinite;
}

@keyframes particleFloat {
    0% { background-position: 0 0, 0 0, 0 0; }
    100% { background-position: 50px 50px, 25px 25px, 30px 30px; }
}

.contact-content {
    background: linear-gradient(to bottom, 
        #0b2154 0%, 
        #1a1a2e 30%, 
        #16213e  70%, 
        #0b2154 100%);
    min-height: 100vh;
    padding: 80px 0;
    position: relative;
}

.contact-content::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: 
        radial-gradient(circle at 20% 20%, rgba(79, 172, 254, 0.05) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(18, 70, 152, 0.08) 0%, transparent 50%),
        radial-gradient(circle at 50% 10%, rgba(90, 201, 144, 0.06) 0%, transparent 50%);
    pointer-events: none;
}

.contact-card {
    background: linear-gradient(145deg, 
        rgba(43, 40, 45, 0.95) 0%, 
        rgba(23, 34, 77, 0.9) 100%);
    border-radius: 25px;
    padding: 50px;
    box-shadow: 
        0 25px 70px rgba(0, 0, 0, 0.3),
        0 0 0 1px rgba(79, 172, 254, 0.2),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(90, 201, 144, 0.2);
    position: relative;
    overflow: hidden;
    animation: slideInUp 0.8s ease-out;
}

@keyframes slideInUp {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.contact-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, 
        transparent, 
        rgba(90, 201, 144, 0.1), 
        transparent);
    transition: left 0.8s ease;
}

.contact-card:hover::before {
    left: 100%;
}

.contact-card:hover {
    transform: translateY(-5px);
    box-shadow: 
        0 35px 90px rgba(0, 0, 0, 0.4),
        0 0 0 1px rgba(90, 201, 144, 0.4),
        inset 0 1px 0 rgba(255, 255, 255, 0.2);
}

.form-floating > label {
    color: rgba(255, 255, 255, 0.7);
}

.form-control {
    background: rgba(43, 40, 45, 0.8);
    border: 2px solid rgba(79, 172, 254, 0.2);
    color: #ffffff;
    border-radius: 15px;
    transition: all 0.3s ease;
}

.form-control:focus {
    background: rgba(23, 34, 77, 0.9);
    border-color: rgba(90, 201, 144, 0.8);
    box-shadow: 0 0 20px rgba(90, 201, 144, 0.3);
    color: #ffffff;
}

.form-control::placeholder {
    color: rgba(255, 255, 255, 0.5);
}

.contact-btn {
    background: linear-gradient(145deg, 
        rgba(90, 201, 144, 0.9) 0%, 
        rgba(79, 172, 254, 0.8) 50%,
        rgba(0, 242, 254, 0.8) 100%);
    color: #0b2154;
    border: 2px solid rgba(90, 201, 144, 0.5);
    padding: 18px 40px;
    border-radius: 50px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
    box-shadow: 
        0 10px 30px rgba(90, 201, 144, 0.3),
        inset 0 1px 0 rgba(255, 255, 255, 0.2);
}

.contact-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, 
        transparent, 
        rgba(255, 255, 255, 0.3), 
        transparent);
    transition: left 0.6s ease;
}

.contact-btn:hover::before {
    left: 100%;
}

.contact-btn:hover {
    background: linear-gradient(145deg, 
        rgba(90, 201, 144, 1) 0%, 
        rgba(0, 242, 254, 0.9) 50%,
        rgba(79, 172, 254, 0.8) 100%);
    color: #ffffff;
    transform: translateY(-3px) scale(1.02);
    box-shadow: 
        0 20px 50px rgba(90, 201, 144, 0.5),
        0 0 30px rgba(90, 201, 144, 0.8),
        inset 0 1px 0 rgba(255, 255, 255, 0.3);
    border-color: rgba(90, 201, 144, 0.8);
}

.contact-info {
    background: linear-gradient(145deg, 
        rgba(23, 34, 77, 0.8) 0%, 
        rgba(43, 40, 45, 0.9) 100%);
    border-radius: 20px;
    padding: 40px;
    color: #ffffff;
    border: 1px solid rgba(79, 172, 254, 0.2);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
}

.contact-info h2 {
    color: #ffffff;
    text-shadow: 0 0 20px rgba(90, 201, 144, 0.5);
    margin-bottom: 30px;
}

.contact-info p {
    color: #e0e6ed;
    line-height: 1.7;
}

.alert-success, .alert-danger {
    background: linear-gradient(145deg, 
        rgba(23, 34, 77, 0.8) 0%, 
        rgba(43, 40, 45, 0.9) 100%);
    border: 1px solid rgba(90, 201, 144, 0.3);
    border-radius: 15px;
    color: #e0e6ed;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

.alert-success {
    border-left: 4px solid #5AC990;
    box-shadow: 
        0 10px 30px rgba(0, 0, 0, 0.2),
        -4px 0 20px rgba(90, 201, 144, 0.3);
}

.alert-danger {
    border-left: 4px solid #ff6b6b;
    box-shadow: 
        0 10px 30px rgba(0, 0, 0, 0.2),
        -4px 0 20px rgba(255, 107, 107, 0.3);
}

.captcha {
    display: flex;
    align-items: center;
    gap: 15px;
    background: rgba(43, 40, 45, 0.8);
    padding: 15px;
    border-radius: 10px;
    border: 1px solid rgba(79, 172, 254, 0.2);
}

.captcha span {
    background: white;
    padding: 10px;
    border-radius: 8px;
    display: inline-block;
}

.breadcrumb {
    background: transparent;
    color: rgba(255, 255, 255, 0.8);
}

.breadcrumb-item + .breadcrumb-item::before {
    content: "›";
    color: rgba(255, 255, 255, 0.7);
    font-size: 1.2rem;
}

.breadcrumb a {
    color: rgba(255, 255, 255, 0.9);
    text-decoration: none;
    transition: all 0.3s ease;
}

.breadcrumb a:hover {
    color: #5AC990;
    text-shadow: 0 0 10px rgba(90, 201, 144, 0.8);
}

.hero-content {
    position: relative;
    z-index: 2;
    color: white;
    animation: fadeInUp 1s ease-out;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 768px) {
    .contact-card {
        padding: 30px 20px;
    }
    
    .contact-hero {
        min-height: 40vh;
    }
    
    .contact-btn {
        padding: 15px 30px;
        font-size: 0.9rem;
    }
}
</style>

<!-- Hero Section -->
<div class="contact-hero">
    <div class="container">
        <div class="hero-content">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </nav>
            <h1 class="display-4 font-weight-bold mb-4">Contactez-nous</h1>
            <p class="lead">Transformons ensemble vos projets BIM en succès</p>
        </div>
    </div>
</div>

<!-- Contact Content -->
<div class="contact-content">
    <div class="container">
        <!-- Messages d'état -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-4">
                <i class="fa fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show mb-4">
                <i class="fa fa-exclamation-circle me-2"></i>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="row g-5">
            <!-- Informations de contact -->
            <div class="col-lg-5">
                <div class="contact-info h-100">
                    <h2 class="mb-4">
                        <i class="fa fa-comments me-3"></i>Entrer en Contact
                    </h2>
                    <p class="mb-5">Nous sommes à votre disposition pour toute question concernant nos services BIM et la construction durable. Notre équipe d'experts vous accompagne dans tous vos projets.</p>
                    
                    <!-- Informations de contact -->
                    <div class="contact-details">
                        <div class="contact-item d-flex align-items-center mb-4">
                            <div class="contact-icon me-4">
                                <i class="fa fa-phone-alt fa-2x" style="color: #5AC990;"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Téléphone</h5>
                                <p class="mb-0">+212 661-243730</p>
                                <p class="mb-0">+33-601-276690</p>
                            </div>
                        </div>
                        
                        <div class="contact-item d-flex align-items-center mb-4">
                            <div class="contact-icon me-4">
                                <i class="fa fa-envelope fa-2x" style="color: #4facfe;"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Email</h5>
                                <p class="mb-0">connect@archidata-groupe.com</p>
                            </div>
                        </div>
                        
                        <div class="contact-item d-flex align-items-center mb-4">
                            <div class="contact-icon me-4">
                                <i class="fa fa-clock fa-2x" style="color: #00f2fe;"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Horaires</h5>
                                <p class="mb-0">Lundi - Samedi : 09h00 - 18h00</p>
                            </div>
                        </div>
                    </div>

                    <!-- Réseaux sociaux -->
                    <div class="social-links mt-5">
                        <h5 class="mb-3">Suivez-nous</h5>
                        <div class="d-flex gap-3">
                            <a href="#" class="btn btn-outline-light btn-social rounded-circle">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="btn btn-outline-light btn-social rounded-circle">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn btn-outline-light btn-social rounded-circle">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-outline-light btn-social rounded-circle">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulaire de contact -->
            <div class="col-lg-7">
                <div class="contact-card">
                    <h2 class="text-white mb-4">
                        <i class="fa fa-paper-plane me-3" style="color: #5AC990;"></i>Envoyez-nous un Message
                    </h2>
                    
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="row g-4">
                            <!-- Champs selon le document -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Votre Nom" required value="{{ old('name') }}">
                                    <label for="name">Nom *</label>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Votre Email" required value="{{ old('email') }}">
                                    <label for="email">Adresse E-mail *</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Votre Téléphone" value="{{ old('phone') }}">
                                    <label for="phone">Numéro de téléphone</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                 <select class="form-control" id="project_type" name="project_type">
                                    <option value="">Sélectionnez...</option>
                                    <option value="BIM & DATA Management" {{ old('project_type') == 'BIM & DATA Management' ? 'selected' : '' }}>BIM & DATA Management</option>
                                    <option value="Le DOE BIM" {{ old('project_type') == 'Le DOE BIM' ? 'selected' : '' }}>Le DOE BIM</option>
                                    <option value="SCAN & Modélisation BIM" {{ old('project_type') == 'SCAN & Modélisation BIM' ? 'selected' : '' }}>SCAN & Modélisation BIM</option>
                                    <option value="Jumeaux Numériques" {{ old('project_type') == 'Jumeaux Numériques' ? 'selected' : '' }}>Jumeaux Numériques</option>
                                    <option value="Synthèse BIM" {{ old('project_type') == 'Synthèse BIM' ? 'selected' : '' }}>Synthèse BIM</option>
                                    <option value="CIM Management" {{ old('project_type') == 'CIM Management' ? 'selected' : '' }}>CIM Management</option>
                                    <option value="DATA Management" {{ old('project_type') == 'DATA Management' ? 'selected' : '' }}>DATA Management</option>
                                    <option value="Conseil & Accompagnement" {{ old('project_type') == 'Conseil & Accompagnement' ? 'selected' : '' }}>Conseil & Accompagnement</option>
                                </select>
                                    <label for="project_type">solutions de nos projet</label>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" name="message" placeholder="Votre Message" style="height: 150px" required>{{ old('message') }}</textarea>
                                    <label for="message">Besoin / Message *</label>
                                </div>
                            </div>
                            
                            <!-- CAPTCHA -->
                         <div class="col-12">
                            <div class="captcha">
                                <div class="d-flex align-items-center gap-3">
                                    <span class="captcha-question" style="color: #5AC990; font-size: 1.2rem; font-weight: bold;">
                                        Calcul simple : {{ session('captcha_question', '3 + 5 = ?') }}
                                    </span>
                                    <button type="button" class="btn btn-sm btn-outline-light" id="reload">
                                        <i class="fa fa-sync-alt"></i> Nouveau calcul
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input id="captcha" type="number" class="form-control" placeholder="Entrez le résultat" name="captcha" required>
                                <label for="captcha">Résultat du calcul *</label>
                            </div>
                        </div>
                            
                            <div class="col-12">
                                <button type="submit" class="contact-btn w-100">
                                    <i class="fa fa-paper-plane me-2"></i>Envoyer le Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    document.getElementById('reload').addEventListener('click', function() {
        fetch('/reload-captcha')
            .then(response => response.json())
            .then(data => {
                document.querySelector('.captcha-question').textContent = 'Calcul simple : ' + data.captcha;
                document.getElementById('captcha').value = '';
            })
            .catch(error => {
                console.error('Erreur lors du rechargement du CAPTCHA:', error);
            });
    });
</script>
<style>
    .captcha {
    background: rgba(43, 40, 45, 0.8);
    padding: 20px;
    border-radius: 15px;
    border: 2px solid rgba(90, 201, 144, 0.3);
    margin-bottom: 20px;
}

.captcha-question {
    background: rgba(90, 201, 144, 0.1);
    padding: 15px 20px;
    border-radius: 10px;
    border: 1px solid rgba(90, 201, 144, 0.3);
    color: #5AC990 !important;
    font-size: 1.2rem !important;
    font-weight: bold !important;
    text-align: center;
    min-width: 200px;
}

#reload {
    background: rgba(79, 172, 254, 0.2);
    border: 1px solid rgba(79, 172, 254, 0.4);
    color: #4facfe;
    padding: 10px 15px;
    border-radius: 8px;
    transition: all 0.3s ease;
}

#reload:hover {
    background: rgba(79, 172, 254, 0.3);
    border-color: rgba(79, 172, 254, 0.6);
    color: #ffffff;
    transform: translateY(-2px);
}

/* Style pour le champ de saisie du résultat */
#captcha {
    text-align: center;
    font-size: 1.1rem;
    font-weight: bold;
}

#captcha:focus {
    border-color: rgba(90, 201, 144, 0.8);
    box-shadow: 0 0 20px rgba(90, 201, 144, 0.4);
}
</style>
@endsection 