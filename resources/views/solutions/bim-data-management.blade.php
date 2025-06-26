@extends('layout')

@section('content')
<!-- Hero Section Solution -->
<section class="solution-hero">
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6">
                <div class="hero-content">
                    <nav aria-label="breadcrumb" class="mb-4">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('index') }}#solutions">Solutions</a></li>
                            <li class="breadcrumb-item active">BIM & DATA Management</li>
                        </ol>
                    </nav>
                    
                    <h1 class="solution-title">
                        BIM & DATA Management
                    </h1>
                    
                    <p class="solution-subtitle">
                        Pilotage global de la maquette numérique, coordination des équipes, gestion des livrables
                    </p>
                    
                    <div class="solution-stats">
                        <div class="stat-item">
                            <span class="stat-number">25%</span>
                            <span class="stat-label">Réduction des surfaces perdues</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">30%</span>
                            <span class="stat-label">Moins de modifications tardives</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">15%</span>
                            <span class="stat-label">ROI amélioré</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="solution-visual">
                    <img src="/img/bim-data-management.jpg" alt="BIM & DATA Management" class="img-fluid rounded">
                    <div class="visual-overlay">
                        <div class="overlay-content">
                            <i class="fas fa-cogs fa-3x mb-3"></i>
                            <h3>Management Intelligent</h3>
                            <p>Coordination optimisée des données BIM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Programmation -->
<section class="solution-phase programmation-phase">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="phase-header text-center mb-5">
                    <div class="phase-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h2 class="phase-title">Programmation</h2>
                    <p class="phase-description">
                        Grâce au BIM, la programmation devient une phase stratégique fondée sur des données fiables
                    </p>
                </div>
                
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h4>Visualisation Immersive</h4>
                            <p>Visualisation immersive des futurs espaces dès la phase amont</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h4>Simulations Avancées</h4>
                            <p>Simulations de flux, d'occupation et de scénarios d'usage</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4>Conformité Réglementaire</h4>
                            <p>Intégration de contraintes réglementaires et environnementales</p>
                        </div>
                    </div>
                </div>
                
                <div class="metrics-row mt-5">
                    <div class="row text-center">
                        <div class="col-md-4">
                            <div class="metric-card">
                                <span class="metric-value">25%</span>
                                <span class="metric-label">Réduction des surfaces perdues</span>
                                <small class="metric-context">Projets tertiaires</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="metric-card">
                                <span class="metric-value">30%</span>
                                <span class="metric-label">Moins de modifications tardives</span>
                                <small class="metric-context">Projets hospitaliers BIM</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="metric-card">
                                <span class="metric-value">15%</span>
                                <span class="metric-label">ROI amélioré</span>
                                <small class="metric-context">Études préliminaires</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Conception -->
<section class="solution-phase conception-phase">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="phase-content">
                    <div class="phase-icon">
                        <i class="fas fa-drafting-compass"></i>
                    </div>
                    <h2 class="phase-title">Conception</h2>
                    <p class="phase-description">
                        Le BIM transforme la conception en un processus collaboratif, visuel et itératif
                    </p>
                    
                    <div class="benefits-list">
                        <div class="benefit-item">
                            <i class="fas fa-users"></i>
                            <div>
                                <h4>Coordination Interdisciplinaire</h4>
                                <p>Facilitation entre architectes, ingénieurs, BET</p>
                            </div>
                        </div>
                        
                        <div class="benefit-item">
                            <i class="fas fa-bug"></i>
                            <div>
                                <h4>Réduction des Erreurs</h4>
                                <p>Détection des clashs dès la phase APS</p>
                            </div>
                        </div>
                        
                        <div class="benefit-item">
                            <i class="fas fa-brain"></i>
                            <div>
                                <h4>Meilleure Décision</h4>
                                <p>Grâce à la visualisation 3D et aux données enrichies</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="metrics-grid">
                    <div class="metric-item">
                        <span class="metric-number">40%</span>
                        <span class="metric-text">Clashs évités en phase PRO</span>
                        <small>Projets industriels complexes</small>
                    </div>
                    <div class="metric-item">
                        <span class="metric-number">20%</span>
                        <span class="metric-text">Réduction des délais</span>
                        <small>Projets tertiaires BIM</small>
                    </div>
                    <div class="metric-item">
                        <span class="metric-number">25%</span>
                        <span class="metric-text">Diminution des coûts</span>
                        <small>Modifications en chantier</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Exécution -->
<section class="solution-phase execution-phase">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <div class="phase-header mb-5">
                    <div class="phase-icon">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h2 class="phase-title">Exécution</h2>
                    <p class="phase-description">
                        La phase d'exécution bénéficie pleinement du BIM en assurant un suivi précis et une communication fluide
                    </p>
                </div>
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="execution-benefit">
                            <div class="benefit-visual">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h4>Suivi Temps Réel</h4>
                            <p>Suivi en temps réel de l'avancement via la maquette actualisée</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="execution-benefit">
                            <div class="benefit-visual">
                                <i class="fas fa-comments"></i>
                            </div>
                            <h4>Communication Facilitée</h4>
                            <p>Entre MOE, entreprise et MOA grâce à un langage commun visuel</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="execution-benefit">
                            <div class="benefit-visual">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h4>Réduction d'Erreurs</h4>
                            <p>Plans d'exécution extraits directement de la maquette validée</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="execution-benefit">
                            <div class="benefit-visual">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <h4>Performance Optimisée</h4>
                            <p>Amélioration de 30% de la productivité des réunions de chantier</p>
                        </div>
                    </div>
                </div>
                
                <div class="execution-results mt-5">
                    <h3 class="mb-4">Résultats Mesurés</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="result-card">
                                <span class="result-value">20%</span>
                                <span class="result-label">Réduction des non-conformités</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="result-card">
                                <span class="result-value">30%</span>
                                <span class="result-label">Productivité améliorée</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="result-card">
                                <span class="result-value">25%</span>
                                <span class="result-label">Résolution plus rapide</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="solution-cta">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="cta-title">Prêt à optimiser votre gestion BIM ?</h2>
                <p class="cta-description">
                    Découvrez comment notre expertise en BIM & DATA Management peut transformer vos projets
                </p>
                
                <div class="cta-buttons">
                    <a href="{{ route('contact') }}" class="btn-cta-primary">
                        <i class="fas fa-calendar-alt"></i>
                        Planifier une consultation
                    </a>
                    <a href="{{ route('etudes-cas') }}" class="btn-cta-secondary">
                        Voir nos réalisations
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Navigation vers autres solutions -->
<section class="related-solutions">
    <div class="container">
        <h3 class="text-center mb-5">Découvrez nos autres solutions</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <a href="{{ route('solutions.doe-bim') }}" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h4>Le DOE BIM</h4>
                    <p>Dossier d'Ouvrage Exécuté numérique</p>
                </a>
            </div>
            
            <div class="col-md-4">
                <a href="{{ route('solutions.scan-modelisation-bim') }}" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-cube"></i>
                    </div>
                    <h4>SCAN & Modélisation</h4>
                    <p>Numérisation 3D précise</p>
                </a>
            </div>
            
            <div class="col-md-4">
                <a href="{{ route('solutions.synthese-bim') }}" class="related-card">
                    <div class="related-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h4>Synthèse BIM</h4>
                    <p>Coordination technique 3D</p>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Styles spécifiques pour les pages solutions */
.solution-hero {
    background: var(--gradient-primary);
    padding: 120px 0 80px;
    position: relative;
    overflow: hidden;
}

.solution-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('/img/pattern-overlay.png') repeat;
    opacity: 0.1;
    z-index: 1;
}

.solution-hero .container {
    position: relative;
    z-index: 2;
}

.breadcrumb {
    background: transparent;
    padding: 0;
    margin: 0;
}

.breadcrumb-item a {
    color: var(--text-light);
    text-decoration: none;
}

.breadcrumb-item.active {
    color: var(--text-white);
}

.solution-title {
    font-size: 3.5rem;
    font-weight: 800;
    color: var(--text-white);
    margin-bottom: 25px;
    line-height: 1.1;
}

.solution-subtitle {
    font-size: 1.3rem;
    color: var(--text-light);
    margin-bottom: 40px;
    line-height: 1.4;
}

.solution-stats {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
}

.solution-stats .stat-item {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.solution-stats .stat-number {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--text-white);
    line-height: 1;
}

.solution-stats .stat-label {
    font-size: 0.9rem;
    color: var(--text-light);
    margin-top: 5px;
}

.solution-visual {
    position: relative;
    border-radius: var(--border-radius);
    overflow: hidden;
    box-shadow: var(--shadow-heavy);
}

.visual-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: var(--transition);
}

.solution-visual:hover .visual-overlay {
    opacity: 1;
}

.overlay-content {
    text-align: center;
    color: var(--text-white);
}

.solution-phase {
    padding: 80px 0;
    position: relative;
}

.programmation-phase {
    background: var(--dark-bg);
}

.conception-phase {
    background: var(--darker-bg);
}

.execution-phase {
    background: var(--dark-bg);
}

.phase-header {
    margin-bottom: 60px;
}

.phase-icon {
    width: 80px;
    height: 80px;
    background: var(--gradient-primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 30px;
    font-size: 2rem;
    color: var(--text-white);
}

.phase-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--text-white);
    margin-bottom: 20px;
}

.phase-description {
    font-size: 1.2rem;
    color: var(--text-light);
    line-height: 1.5;
}

.benefit-card {
    background: var(--glass-bg);
    border: 1px solid var(--glass-border);
    border-radius: var(--border-radius);
    padding: 30px 20px;
    text-align: center;
    transition: var(--transition);
    height: 100%;
    backdrop-filter: blur(10px);
}

.benefit-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-medium);
    border-color: var(--accent-green);
}

.benefit-icon {
    width: 60px;
    height: 60px;
    background: var(--gradient-primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 1.5rem;
    color: var(--text-white);
}

.benefit-card h4 {
    color: var(--text-white);
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 15px;
}

.benefit-card p {
    color: var(--text-muted);
    font-size: 0.9rem;
    line-height: 1.4;
}

.metrics-row {
    background: var(--glass-bg);
    border-radius: var(--border-radius);
    padding: 40px 20px;
    backdrop-filter: blur(10px);
    border: 1px solid var(--glass-border);
}

.metric-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
}

.metric-value {
    font-size: 3rem;
    font-weight: 800;
    color: var(--accent-green);
    line-height: 1;
}

.metric-label {
    font-size: 1rem;
    color: var(--text-white);
    font-weight: 600;
    text-align: center;
}

.metric-context {
    font-size: 0.8rem;
    color: var(--text-muted);
    font-style: italic;
}

.benefits-list {
    margin-top: 40px;
}

.benefit-item {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 30px;
    padding: 20px;
    background: var(--glass-bg);
    border-radius: var(--border-radius);
    border: 1px solid var(--glass-border);
    backdrop-filter: blur(10px);
}

.benefit-item i {
    color: var(--accent-green);
    font-size: 1.5rem;
    margin-top: 5px;
}

.benefit-item h4 {
    color: var(--text-white);
    font-size: 1.1rem;
    margin-bottom: 8px;
}

.benefit-item p {
    color: var(--text-muted);
    font-size: 0.95rem;
    margin: 0;
}

.metrics-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 30px;
}

.metric-item {
    background: var(--glass-bg);
    border: 1px solid var(--glass-border);
    border-radius: var(--border-radius);
    padding: 30px 20px;
    text-align: center;
    backdrop-filter: blur(10px);
}

.metric-number {
    display: block;
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--accent-green);
    line-height: 1;
    margin-bottom: 10px;
}

.metric-text {
    display: block;
    color: var(--text-white);
    font-weight: 600;
    margin-bottom: 5px;
}

.metric-item small {
    color: var(--text-muted);
    font-size: 0.8rem;
}

.execution-benefit {
    background: var(--glass-bg);
    border: 1px solid var(--glass-border);
    border-radius: var(--border-radius);
    padding: 30px 20px;
    text-align: center;
    transition: var(--transition);
    backdrop-filter: blur(10px);
    height: 100%;
}

.execution-benefit:hover {
    transform: translateY(-5px);
    border-color: var(--accent-green);
}

.benefit-visual {
    width: 60px;
    height: 60px;
    background: var(--gradient-primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 1.5rem;
    color: var(--text-white);
}

.execution-benefit h4 {
    color: var(--text-white);
    font-size: 1.1rem;
    margin-bottom: 15px;
}

.execution-benefit p {
    color: var(--text-muted);
    font-size: 0.9rem;
    line-height: 1.4;
}

.execution-results {
    background: var(--glass-bg);
    border-radius: var(--border-radius);
    padding: 40px;
    backdrop-filter: blur(10px);
    border: 1px solid var(--glass-border);
}

.execution-results h3 {
    color: var(--text-white);
    font-weight: 700;
}

.result-card {
    text-align: center;
    padding: 20px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: var(--border-radius);
    border: 1px solid var(--glass-border);
}

.result-value {
    display: block;
    font-size: 2rem;
    font-weight: 800;
    color: var(--accent-green);
    line-height: 1;
    margin-bottom: 10px;
}

.result-label {
    color: var(--text-white);
    font-size: 0.9rem;
    font-weight: 500;
}

.solution-cta {
    background: var(--gradient-primary);
    padding: 80px 0;
    position: relative;
}

.solution-cta::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('/img/pattern-overlay.png') repeat;
    opacity: 0.1;
    z-index: 1;
}

.solution-cta .container {
    position: relative;
    z-index: 2;
}

.cta-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--text-white);
    margin-bottom: 20px;
}

.cta-description {
    font-size: 1.2rem;
    color: var(--text-light);
    margin-bottom: 40px;
    line-height: 1.5;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-cta-primary,
.btn-cta-secondary {
    padding: 15px 30px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1rem;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: var(--transition);
}

.btn-cta-primary {
    background: var(--text-white);
    color: var(--dark-bg);
    border: 2px solid var(--text-white);
}

.btn-cta-primary:hover {
    background: transparent;
    color: var(--text-white);
    transform: translateY(-2px);
}

.btn-cta-secondary {
    background: transparent;
    color: var(--text-white);
    border: 2px solid var(--text-white);
}

.btn-cta-secondary:hover {
    background: var(--text-white);
    color: var(--dark-bg);
    transform: translateY(-2px);
}

.related-solutions {
    background: var(--dark-bg);
    padding: 80px 0;
}

.related-solutions h3 {
    color: var(--text-white);
    font-weight: 700;
    font-size: 2rem;
}

.related-card {
    background: var(--glass-bg);
    border: 1px solid var(--glass-border);
    border-radius: var(--border-radius);
    padding: 30px 20px;
    text-align: center;
    text-decoration: none;
    display: block;
    transition: var(--transition);
    backdrop-filter: blur(10px);
    height: 100%;
}

.related-card:hover {
    transform: translateY(-10px);
    border-color: var(--accent-green);
    box-shadow: var(--shadow-medium);
    text-decoration: none;
}

.related-icon {
    width: 60px;
    height: 60px;
    background: var(--gradient-primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 1.5rem;
    color: var(--text-white);
    transition: var(--transition);
}

.related-card:hover .related-icon {
    transform: scale(1.1);
}

.related-card h4 {
    color: var(--text-white);
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 15px;
}

.related-card p {
    color: var(--text-muted);
    font-size: 0.9rem;
    line-height: 1.4;
    margin: 0;
}

/* Responsive Design */
@media (max-width: 768px) {
    .solution-title {
        font-size: 2.5rem;
    }
    
    .solution-stats {
        flex-direction: column;
        gap: 20px;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .btn-cta-primary,
    .btn-cta-secondary {
        width: 100%;
        max-width: 300px;
        justify-content: center;
    }
    
    .metrics-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .benefits-list .benefit-item {
        flex-direction: column;
        text-align: center;
        gap: 15px;
    }
    
    .phase-title {
        font-size: 2rem;
    }
    
    .cta-title {
        font-size: 2rem;
    }
}

@media (max-width: 576px) {
    .solution-hero {
        padding: 100px 0 60px;
    }
    
    .solution-title {
        font-size: 2rem;
    }
    
    .solution-subtitle {
        font-size: 1.1rem;
    }
    
    .solution-phase {
        padding: 60px 0;
    }
    
    .solution-cta {
        padding: 60px 0;
    }
    
    .related-solutions {
        padding: 60px 0;
    }
}
</style>
@endsection