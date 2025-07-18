@extends('layout')
@section('content')
<style>
/* Transparence Page Dark Theme */
.transparence-hero {
    min-height: 70vh;
    background: linear-gradient(135deg, 
        rgba(11, 33, 84, 0.95) 0%, 
        rgba(18, 70, 152, 0.9) 30%, 
        rgba(90, 201, 144, 0.8) 60%,
        rgba(43, 40, 45, 0.85) 100%);
    background-size: cover;
    background-position: center;
    background-blend-mode: overlay;
    position: relative;
    display: flex;
    align-items: center;
    overflow: hidden;
}

.transparence-hero::before {
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

.transparence-content {
    background: linear-gradient(to bottom, 
        #0b2154 0%, 
        #1a1a2e 30%, 
        #16213e  70%, 
        #0b2154 100%);
    min-height: 100vh;
    padding: 100px 0;
    position: relative;
}

.transparence-main-card {
    background: linear-gradient(145deg, 
        rgba(43, 40, 45, 0.95) 0%, 
        rgba(23, 34, 77, 0.9) 100%);
    border-radius: 30px;
    padding: 60px;
    border: 2px solid rgba(90, 201, 144, 0.3);
    box-shadow: 
        0 30px 80px rgba(0, 0, 0, 0.4),
        0 0 0 1px rgba(79, 172, 254, 0.1),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(15px);
    position: relative;
    overflow: hidden;
    animation: slideInUp 1s ease-out;
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

.transparence-main-card::before {
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
    transition: left 1s ease;
}

.transparence-main-card:hover::before {
    left: 100%;
}

.main-title {
    color: #ffffff;
    font-weight: 800;
    font-size: 3rem;
    text-align: center;
    margin-bottom: 50px;
    position: relative;
    text-shadow: 0 0 30px rgba(90, 201, 144, 0.7);
    animation: titleGlow 3s ease-in-out infinite alternate;
}

@keyframes titleGlow {
    0% { 
        text-shadow: 0 0 30px rgba(90, 201, 144, 0.7);
        transform: scale(1);
    }
    100% { 
        text-shadow: 0 0 40px rgba(90, 201, 144, 0.9), 0 0 60px rgba(79, 172, 254, 0.5);
        transform: scale(1.02);
    }
}

.main-title::after {
    content: '';
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    width: 150px;
    height: 5px;
    background: linear-gradient(90deg, 
        #4facfe 0%, 
        #5AC990 50%, 
        #00f2fe 100%);
    border-radius: 3px;
    box-shadow: 0 0 30px rgba(90, 201, 144, 0.8);
    animation: lineExpand 2s ease-in-out infinite alternate;
}

@keyframes lineExpand {
    0% { width: 120px; }
    100% { width: 200px; }
}

.process-timeline {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
}

.process-timeline::before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    left: 40px;
    width: 6px;
    background: linear-gradient(180deg, 
        #5AC990 0%, 
        #4facfe 50%, 
        #00f2fe 100%);
    border-radius: 3px;
    box-shadow: 0 0 20px rgba(90, 201, 144, 0.6);
    animation: lineGlow 3s ease-in-out infinite alternate;
}

@keyframes lineGlow {
    0% { box-shadow: 0 0 20px rgba(90, 201, 144, 0.6); }
    100% { box-shadow: 0 0 30px rgba(90, 201, 144, 0.9); }
}

.step-item {
    display: flex;
    align-items: flex-start;
    position: relative;
    margin-bottom: 50px;
    animation: stepSlideIn 0.8s ease-out;
}

.step-item:nth-child(1) { animation-delay: 0.2s; }
.step-item:nth-child(2) { animation-delay: 0.4s; }

@keyframes stepSlideIn {
    from {
        opacity: 0;
        transform: translateX(-30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.step-number {
    width: 80px;
    height: 80px;
    background: linear-gradient(145deg, #5AC990, #4facfe);
    color: #0b2154;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 900;
    font-size: 2rem;
    margin-right: 30px;
    position: relative;
    box-shadow: 
        0 15px 40px rgba(90, 201, 144, 0.4),
        inset 0 2px 0 rgba(255, 255, 255, 0.2);
    transition: all 0.4s ease;
    z-index: 2;
}

.step-number::before {
    content: '';
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    background: linear-gradient(145deg, #5AC990, #4facfe, #00f2fe);
    border-radius: 50%;
    z-index: -1;
    opacity: 0;
    transition: opacity 0.4s ease;
}

.step-item:hover .step-number {
    transform: scale(1.1) rotate(360deg);
    box-shadow: 
        0 20px 60px rgba(90, 201, 144, 0.6),
        inset 0 2px 0 rgba(255, 255, 255, 0.3);
}

.step-item:hover .step-number::before {
    opacity: 1;
}

.step-content {
    flex: 1;
    background: linear-gradient(145deg, 
        rgba(23, 34, 77, 0.8) 0%, 
        rgba(43, 40, 45, 0.9) 100%);
    padding: 35px;
    border-radius: 20px;
    border: 1px solid rgba(90, 201, 144, 0.2);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
}

.step-content::before {
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

.step-item:hover .step-content::before {
    left: 100%;
}

.step-item:hover .step-content {
    transform: translateY(-5px);
    border-color: rgba(90, 201, 144, 0.5);
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.4);
}

.step-content h4 {
    color: #ffffff;
    font-size: 1.4rem;
    font-weight: 700;
    margin-bottom: 15px;
    text-shadow: 0 0 20px rgba(90, 201, 144, 0.5);
    transition: all 0.3s ease;
}

.step-item:hover .step-content h4 {
    color: #5AC990;
    text-shadow: 0 0 30px rgba(90, 201, 144, 0.8);
}

.step-description {
    color: #e0e6ed;
    font-size: 1.1rem;
    line-height: 1.7;
    margin: 0;
    transition: color 0.3s ease;
}

.step-item:hover .step-description {
    color: #ffffff;
}

/* Section Image Styles */
.transparence-image-showcase-card {
    background: linear-gradient(145deg, 
        rgba(43, 40, 45, 0.95) 0%, 
        rgba(23, 34, 77, 0.9) 100%);
    border-radius: 30px;
    padding: 40px;
    border: 2px solid rgba(90, 201, 144, 0.3);
    box-shadow: 0 30px 80px rgba(0, 0, 0, 0.4);
    position: relative;
    overflow: hidden;
    animation: transparenceImageSlideUp 1.2s ease-out;
    margin-bottom: 60px;
}

@keyframes transparenceImageSlideUp {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.transparence-image-showcase-card::before {
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
    transition: left 1s ease;
}

.transparence-image-showcase-card:hover::before {
    left: 100%;
}

.transparence-image-showcase-card:hover {
    transform: translateY(-10px);
    border-color: rgba(90, 201, 144, 0.6);
    box-shadow: 0 35px 90px rgba(0, 0, 0, 0.5);
}

.transparence-image-container {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 50px rgba(90, 201, 144, 0.3);
}

.transparence-main-showcase-image {
    width: 100%;
    height: 400px;
    object-fit: cover;
    border-radius: 20px;
    transition: all 0.6s ease;
    filter: brightness(0.9) contrast(1.1);
}

.transparence-image-container:hover .transparence-main-showcase-image {
    transform: scale(1.05);
    filter: brightness(1) contrast(1.2);
}

.transparence-image-overlay-info {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(90, 201, 144, 0.9));
    padding: 30px;
    transform: translateY(100%);
    transition: all 0.4s ease;
}

.transparence-image-container:hover .transparence-image-overlay-info {
    transform: translateY(0);
}

.transparence-image-overlay-info h4 {
    color: #ffffff;
    font-size: 1.4rem;
    font-weight: 700;
    margin-bottom: 10px;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
}

.transparence-image-overlay-info p {
    color: #e0e6ed;
    font-size: 1rem;
    margin: 0;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
}

/* Breadcrumb styling */
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

@keyframes particleFloat {
    0% { background-position: 0 0, 0 0, 0 0; }
    100% { background-position: 50px 50px, 25px 25px, 30px 30px; }
}

/* Responsive */
@media (max-width: 768px) {
    .transparence-hero {
        min-height: 50vh;
    }
    
    .transparence-main-card {
        padding: 40px 25px;
    }
    
    .main-title {
        font-size: 2.2rem;
    }
    
    .step-number {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
        margin-right: 20px;
    }
    
    .step-content {
        padding: 25px;
    }
    
    .step-content h4 {
        font-size: 1.2rem;
    }
    
    .step-description {
        font-size: 1rem;
    }
    
    .transparence-main-showcase-image {
        height: 250px;
    }
    
    .transparence-image-overlay-info h4 {
        font-size: 1.2rem;
    }
    
    .transparence-image-overlay-info p {
        font-size: 0.9rem;
    }
}
</style>

<!-- Hero Section -->
<div class="transparence-hero">
    <div class="container">
        <div class="hero-content">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
                    <li class="breadcrumb-item active">Transparence</li>
                </ol>
            </nav>
            <h1 class="display-4 font-weight-bold mb-4">Transparence</h1>
            <p class="lead">Communication claire et gestion fluide des données projet</p>
        </div>
    </div>
</div>

<!-- Content Section -->
<div class="transparence-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="transparence-main-card">
                    <h2 class="main-title">TRANSPARENCE</h2>
                    
                    <div class="process-timeline">
                        <div class="step-item">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h4>Un environnement de données commun (CDE) collaboratif</h4>
                                <p class="step-description">Garantissant une gestion fluide et un accès instantané aux informations essentielles du projet. Notre plateforme collaborative centralise toutes les données et permet une synchronisation en temps réel entre tous les intervenants.</p>
                            </div>
                        </div>
                        
                        <div class="step-item">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h4>Une communication claire entre toutes les parties prenantes</h4>
                                <p class="step-description">Pour éviter les imprévus et assurer une coordination optimale. Nos outils de communication intégrés facilitent les échanges et garantissent que chaque acteur dispose des informations nécessaires au bon moment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Section Image -->
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10">
                <div class="transparence-image-showcase-card">
                    <div class="transparence-image-container">
                        <img src="{{ asset('img/image.png') }}" alt="Environnement de Données Collaboratif" class="transparence-main-showcase-image">
                        <div class="transparence-image-overlay-info">
                            <h4>Plateforme Collaborative CDE</h4>
                            <p>Environnement de données commun pour tous les intervenants</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection