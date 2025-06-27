@extends('layout')
@section('content')
<style>
/* Coûts Page Dark Theme */
.couts-hero {
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

.couts-hero::before {
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

.couts-content {
    background: linear-gradient(to bottom, 
        #0b2154 0%, 
        #1a1a2e 30%, 
        #16213e  70%, 
        #0b2154 100%);
    min-height: 100vh;
    padding: 100px 0;
    position: relative;
}

.couts-main-card {
    background: linear-gradient(145deg, 
        rgba(43, 40, 45, 0.95) 0%, 
        rgba(23, 34, 77, 0.9) 100%);
    border-radius: 30px;
    padding: 60px;
    border: 2px solid rgba(79, 172, 254, 0.3);
    box-shadow: 
        0 30px 80px rgba(0, 0, 0, 0.4),
        0 0 0 1px rgba(79, 172, 254, 0.1),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(15px);
    position: relative;
    overflow: hidden;
    animation: slideInUp 1s ease-out;
}

.couts-main-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, 
        transparent, 
        rgba(79, 172, 254, 0.1), 
        transparent);
    transition: left 1s ease;
}

.couts-main-card:hover::before {
    left: 100%;
}

.main-title-couts {
    color: #ffffff;
    font-weight: 800;
    font-size: 3rem;
    text-align: center;
    margin-bottom: 50px;
    position: relative;
    text-shadow: 0 0 30px rgba(79, 172, 254, 0.7);
    animation: titleGlowBlue 3s ease-in-out infinite alternate;
}

@keyframes titleGlowBlue {
    0% { 
        text-shadow: 0 0 30px rgba(79, 172, 254, 0.7);
        transform: scale(1);
    }
    100% { 
        text-shadow: 0 0 40px rgba(79, 172, 254, 0.9), 0 0 60px rgba(90, 201, 144, 0.5);
        transform: scale(1.02);
    }
}

.main-title-couts::after {
    content: '';
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    width: 150px;
    height: 5px;
    background: linear-gradient(90deg, 
        #00f2fe 0%, 
        #4facfe 50%, 
        #5AC990 100%);
    border-radius: 3px;
    box-shadow: 0 0 30px rgba(79, 172, 254, 0.8);
    animation: lineExpandBlue 2s ease-in-out infinite alternate;
}

@keyframes lineExpandBlue {
    0% { width: 120px; }
    100% { width: 200px; }
}

.features-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 40px;
    max-width: 800px;
    margin: 0 auto;
}

.feature-card {
    background: linear-gradient(145deg, 
        rgba(23, 34, 77, 0.8) 0%, 
        rgba(43, 40, 45, 0.9) 100%);
    border-radius: 25px;
    padding: 40px;
    border: 1px solid rgba(79, 172, 254, 0.3);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
    animation: featureSlideIn 0.8s ease-out;
}

.feature-card:nth-child(1) { animation-delay: 0.2s; }
.feature-card:nth-child(2) { animation-delay: 0.4s; }

@keyframes featureSlideIn {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.feature-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, 
        transparent, 
        rgba(79, 172, 254, 0.1), 
        transparent);
    transition: left 0.8s ease;
}

.feature-card:hover::before {
    left: 100%;
}

.feature-card:hover {
    transform: translateY(-10px) scale(1.02);
    border-color: rgba(79, 172, 254, 0.6);
    box-shadow: 0 30px 70px rgba(0, 0, 0, 0.4);
}

.feature-item {
    display: flex;
    align-items: flex-start;
}

.feature-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(145deg, #4facfe, #00f2fe);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 25px;
    color: #0b2154;
    flex-shrink: 0;
    box-shadow: 
        0 15px 40px rgba(79, 172, 254, 0.4),
        inset 0 2px 0 rgba(255, 255, 255, 0.2);
    transition: all 0.4s ease;
}

.feature-icon svg {
    width: 35px;
    height: 35px;
    stroke-width: 2.5px;
}

.feature-card:hover .feature-icon {
    transform: scale(1.1) rotate(360deg);
    box-shadow: 
        0 20px 60px rgba(79, 172, 254, 0.6),
        inset 0 2px 0 rgba(255, 255, 255, 0.3);
}

.feature-content {
    flex: 1;
}

.feature-content h4 {
    color: #ffffff;
    font-size: 1.4rem;
    font-weight: 700;
    margin-bottom: 15px;
    text-shadow: 0 0 20px rgba(79, 172, 254, 0.5);
    transition: all 0.3s ease;
}

.feature-card:hover .feature-content h4 {
    color: #4facfe;
    text-shadow: 0 0 30px rgba(79, 172, 254, 0.8);
}

.feature-description {
    color: #e0e6ed;
    font-size: 1.1rem;
    line-height: 1.7;
    margin: 0;
    transition: color 0.3s ease;
}

.feature-card:hover .feature-description {
    color: #ffffff;
}

/* Responsive */
@media (max-width: 768px) {
    .couts-hero {
        min-height: 50vh;
    }
    
    .couts-main-card {
        padding: 40px 25px;
    }
    
    .main-title-couts {
        font-size: 2.2rem;
    }
    
    .feature-icon {
        width: 60px;
        height: 60px;
        margin-right: 20px;
    }
    
    .feature-icon svg {
        width: 25px;
        height: 25px;
    }
    
    .feature-content h4 {
        font-size: 1.2rem;
    }
    
    .feature-description {
        font-size: 1rem;
    }
}
</style>

<!-- Hero Section -->
<div class="couts-hero">
    <div class="container">
        <div class="hero-content">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
                    <li class="breadcrumb-item active">Maîtrise des Coûts</li>
                </ol>
            </nav>
            <h1 class="display-4 font-weight-bold mb-4">Maîtrise des Coûts</h1>
            <p class="lead">Suivi quantitatif rigoureux et gestion budgétaire précise</p>
        </div>
    </div>
</div>

<!-- Content Section -->
<div class="couts-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="couts-main-card">
                    <h2 class="main-title-couts">MAÎTRISE DES COÛTS</h2>
                    
                    <div class="features-grid">
                        <div class="feature-card">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M12 8v4l4 4"></path>
                                    </svg>
                                </div>
                                <div class="feature-content">
                                    <h4>Des technologies de pointe assurant un suivi quantitatif sans faille</h4>
                                    <p class="feature-description">Et une gestion budgétaire rigoureuse. Nos outils avancés d'analyse et de monitoring permettent un contrôle précis de chaque poste de dépense, garantissant une visibilité totale sur l'évolution des coûts du projet.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="feature-card">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6"></line>
                                        <line x1="8" y1="2" x2="8" y2="6"></line>
                                        <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg>
                                </div>
                                <div class="feature-content">
                                    <h4>Une anticipation des besoins et des ressources</h4>
                                    <p class="feature-description">Pour éviter les dépassements. Grâce à notre approche prédictive et à l'analyse des données historiques, nous identifions les risques budgétaires en amont et mettons en place des stratégies de mitigation efficaces.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection