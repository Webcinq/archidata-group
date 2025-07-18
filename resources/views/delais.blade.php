@extends('layout')
@section('content')
<style>
/* Délais Page Dark Theme */
.delais-hero {
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

.delais-hero::before {
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

.delais-content {
    background: linear-gradient(to bottom, 
        #0b2154 0%, 
        #1a1a2e 30%, 
        #16213e  70%, 
        #0b2154 100%);
    min-height: 100vh;
    padding: 100px 0;
    position: relative;
}

.delais-main-card {
    background: linear-gradient(145deg, 
        rgba(43, 40, 45, 0.95) 0%, 
        rgba(23, 34, 77, 0.9) 100%);
    border-radius: 30px;
    padding: 60px;
    border: 2px solid rgba(0, 242, 254, 0.3);
    box-shadow: 
        0 30px 80px rgba(0, 0, 0, 0.4),
        0 0 0 1px rgba(0, 242, 254, 0.1),
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

.delais-main-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, 
        transparent, 
        rgba(0, 242, 254, 0.1), 
        transparent);
    transition: left 1s ease;
}

.delais-main-card:hover::before {
    left: 100%;
}

.main-title-delais {
    color: #ffffff;
    font-weight: 800;
    font-size: 3rem;
    text-align: center;
    margin-bottom: 50px;
    position: relative;
    text-shadow: 0 0 30px rgba(0, 242, 254, 0.7);
    animation: titleGlowCyan 3s ease-in-out infinite alternate;
}

@keyframes titleGlowCyan {
    0% { 
        text-shadow: 0 0 30px rgba(0, 242, 254, 0.7);
        transform: scale(1);
    }
    100% { 
        text-shadow: 0 0 40px rgba(0, 242, 254, 0.9), 0 0 60px rgba(90, 201, 144, 0.5);
        transform: scale(1.02);
    }
}

.main-title-delais::after {
    content: '';
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    width: 150px;
    height: 5px;
    background: linear-gradient(90deg, 
        #5AC990 0%, 
        #00f2fe 50%, 
        #4facfe 100%);
    border-radius: 3px;
    box-shadow: 0 0 30px rgba(0, 242, 254, 0.8);
    animation: lineExpandCyan 2s ease-in-out infinite alternate;
}

@keyframes lineExpandCyan {
    0% { width: 120px; }
    100% { width: 200px; }
}

.delais-content-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 40px;
    max-width: 900px;
    margin: 0 auto;
}

.delais-feature-card {
    background: linear-gradient(145deg, 
        rgba(23, 34, 77, 0.8) 0%, 
        rgba(43, 40, 45, 0.9) 100%);
    border-radius: 25px;
    padding: 40px;
    border: 1px solid rgba(0, 242, 254, 0.3);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
    animation: delaisFeatureSlideIn 0.8s ease-out;
}

.delais-feature-card:nth-child(1) { animation-delay: 0.2s; }
.delais-feature-card:nth-child(2) { animation-delay: 0.4s; }

@keyframes delaisFeatureSlideIn {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.delais-feature-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, 
        transparent, 
        rgba(0, 242, 254, 0.1), 
        transparent);
    transition: left 0.8s ease;
}

.delais-feature-card:hover::before {
    left: 100%;
}

.delais-feature-card:hover {
    transform: translateY(-10px) scale(1.02);
    border-color: rgba(0, 242, 254, 0.6);
    box-shadow: 0 30px 70px rgba(0, 0, 0, 0.4);
}

.delais-feature-item {
    display: flex;
    align-items: flex-start;
}

.delais-feature-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(145deg, #00f2fe, #5AC990);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 25px;
    color: #0b2154;
    flex-shrink: 0;
    box-shadow: 
        0 15px 40px rgba(0, 242, 254, 0.4),
        inset 0 2px 0 rgba(255, 255, 255, 0.2);
    transition: all 0.4s ease;
}

.delais-feature-icon svg {
    width: 35px;
    height: 35px;
    stroke-width: 2.5px;
}

.delais-feature-card:hover .delais-feature-icon {
    transform: scale(1.1) rotate(360deg);
    box-shadow: 
        0 20px 60px rgba(0, 242, 254, 0.6),
        inset 0 2px 0 rgba(255, 255, 255, 0.3);
}

.delais-feature-content {
    flex: 1;
}

.delais-feature-content h4 {
    color: #ffffff;
    font-size: 1.4rem;
    font-weight: 700;
    margin-bottom: 15px;
    text-shadow: 0 0 20px rgba(0, 242, 254, 0.5);
    transition: all 0.3s ease;
}

.delais-feature-card:hover .delais-feature-content h4 {
    color: #00f2fe;
    text-shadow: 0 0 30px rgba(0, 242, 254, 0.8);
}

.delais-feature-description {
    color: #e0e6ed;
    font-size: 1.1rem;
    line-height: 1.7;
    margin: 0;
    transition: color 0.3s ease;
}

.delais-feature-card:hover .delais-feature-description {
    color: #ffffff;
}

/* Concept Card Special Styling */
.concept-card {
    background: linear-gradient(145deg, 
        rgba(90, 201, 144, 0.1) 0%, 
        rgba(23, 34, 77, 0.9) 100%);
    border: 2px solid rgba(90, 201, 144, 0.4);
    margin-bottom: 40px;
}

.concept-card:hover {
    border-color: rgba(90, 201, 144, 0.7);
    box-shadow: 0 30px 70px rgba(90, 201, 144, 0.2);
}

.concept-highlight {
    background: linear-gradient(145deg, #5AC990, #00f2fe);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-weight: 900;
    font-size: 1.6rem;
    text-align: center;
    padding: 20px;
    border-radius: 15px;
    border: 2px solid rgba(90, 201, 144, 0.3);
    margin-bottom: 30px;
    animation: conceptGlow 3s ease-in-out infinite alternate;
}

@keyframes conceptGlow {
    0% { 
        border-color: rgba(90, 201, 144, 0.3);
        box-shadow: 0 0 20px rgba(90, 201, 144, 0.2);
    }
    100% { 
        border-color: rgba(90, 201, 144, 0.7);
        box-shadow: 0 0 40px rgba(90, 201, 144, 0.4);
    }
}

/* Section Image Styles */
.delais-image-showcase-card {
    background: linear-gradient(145deg, 
        rgba(43, 40, 45, 0.95) 0%, 
        rgba(23, 34, 77, 0.9) 100%);
    border-radius: 30px;
    padding: 40px;
    border: 2px solid rgba(0, 242, 254, 0.3);
    box-shadow: 0 30px 80px rgba(0, 0, 0, 0.4);
    position: relative;
    overflow: hidden;
    animation: delaisImageSlideUp 1.2s ease-out;
    margin-bottom: 60px;
}

@keyframes delaisImageSlideUp {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.delais-image-showcase-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, 
        transparent, 
        rgba(0, 242, 254, 0.1), 
        transparent);
    transition: left 1s ease;
}

.delais-image-showcase-card:hover::before {
    left: 100%;
}

.delais-image-showcase-card:hover {
    transform: translateY(-10px);
    border-color: rgba(0, 242, 254, 0.6);
    box-shadow: 0 35px 90px rgba(0, 0, 0, 0.5);
}

.delais-image-container {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 50px rgba(0, 242, 254, 0.3);
}

.delais-main-showcase-image {
    width: 100%;
    height: 400px;
    object-fit: cover;
    border-radius: 20px;
    transition: all 0.6s ease;
    filter: brightness(0.9) contrast(1.1);
}

.delais-image-container:hover .delais-main-showcase-image {
    transform: scale(1.05);
    filter: brightness(1) contrast(1.2);
}

.delais-image-overlay-info {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0, 242, 254, 0.9));
    padding: 30px;
    transform: translateY(100%);
    transition: all 0.4s ease;
}

.delais-image-container:hover .delais-image-overlay-info {
    transform: translateY(0);
}

.delais-image-overlay-info h4 {
    color: #ffffff;
    font-size: 1.4rem;
    font-weight: 700;
    margin-bottom: 10px;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
}

.delais-image-overlay-info p {
    color: #e0e6ed;
    font-size: 1rem;
    margin: 0;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
}

/* Breadcrumb */
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
    .delais-hero {
        min-height: 50vh;
    }
    
    .delais-main-card {
        padding: 40px 25px;
    }
    
    .main-title-delais {
        font-size: 2.2rem;
    }
    
    .delais-feature-icon {
        width: 60px;
        height: 60px;
        margin-right: 20px;
    }
    
    .delais-feature-icon svg {
        width: 25px;
        height: 25px;
    }
    
    .delais-feature-content h4 {
        font-size: 1.2rem;
    }
    
    .delais-feature-description {
        font-size: 1rem;
    }
    
    .concept-highlight {
        font-size: 1.3rem;
        padding: 15px;
    }
    
    .delais-main-showcase-image {
        height: 250px;
    }
    
    .delais-image-overlay-info h4 {
        font-size: 1.2rem;
    }
    
    .delais-image-overlay-info p {
        font-size: 0.9rem;
    }
}
</style>

<!-- Hero Section -->
<div class="delais-hero">
    <div class="container">
        <div class="hero-content">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
                    <li class="breadcrumb-item active">Maîtrise des Délais</li>
                </ol>
            </nav>
            <h1 class="display-4 font-weight-bold mb-4">Maîtrise des Délais</h1>
            <p class="lead">Simulations BIM avancées et planification optimisée</p>
        </div>
    </div>
</div>

<!-- Content Section -->
<div class="delais-content">
    <div class="container">
           <!-- Section Image -->
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10">
                <div class="delais-image-showcase-card">
                    <div class="delais-image-container">
                        <img src="{{ asset('img/image2.png') }}" alt="Simulation BIM et Planification" class="delais-main-showcase-image">
                        <div class="delais-image-overlay-info">
                            <h4>Simulation 4D - Planification Temporelle</h4>
                            <p>Visualisation de la séquence de construction optimisée</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="delais-main-card">
                    <h2 class="main-title-delais">MAÎTRISE DES DÉLAIS</h2>
                    
                    <!-- Concept Highlight -->
         
                    <div class="delais-content-grid">
                        <div class="delais-feature-card concept-card">
                            <div class="delais-feature-item">
                                <div class="delais-feature-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                </div>
                                <div class="delais-feature-content">
                                    <h4>Construire avant de construire</h4>
                                    <p class="delais-feature-description">Une simulation et un contrôle des modèles BIM garantissant un chantier sans erreurs ni clashs. Cette approche révolutionnaire permet de détecter et résoudre les conflits dans l'environnement virtuel, évitant ainsi les retards coûteux sur le terrain.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="delais-feature-card">
                            <div class="delais-feature-item">
                                <div class="delais-feature-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    </svg>
                                </div>
                                <div class="delais-feature-content">
                                    <h4>Un scénario de Gestion - Exploitation Maintenance (GEM) et de Facility Management (FM) défini dès la conception</h4>
                                    <p class="delais-feature-description">Assurant une exploitation optimisée sur le long terme. Cette planification anticipée des phases d'exploitation et de maintenance permet une transition fluide de la construction vers l'utilisation, garantissant la pérennité et l'efficacité du bâtiment.</p>
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