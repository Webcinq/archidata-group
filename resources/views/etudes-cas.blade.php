@extends('layout')
@section('content')
<style>
.cases-hero {
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

.cases-content {
    background: linear-gradient(to bottom, 
        #0b2154 0%, 
        #1a1a2e 30%, 
        #16213e  70%, 
        #0b2154 100%);
    min-height: 100vh;
    padding: 80px 0;
}

.case-study-card {
    background: linear-gradient(145deg, 
        rgba(43, 40, 45, 0.95) 0%, 
        rgba(23, 34, 77, 0.9) 100%);
    border-radius: 20px;
    padding: 40px;
    margin-bottom: 40px;
    border: 1px solid rgba(90, 201, 144, 0.2);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.case-study-card:hover {
    transform: translateY(-5px);
    border-color: rgba(90, 201, 144, 0.4);
}

.case-visual-placeholder {
    width: 100%;
    height: 250px;
    background: linear-gradient(145deg, 
        rgba(23, 34, 77, 0.8) 0%, 
        rgba(43, 40, 45, 0.9) 100%);
    border-radius: 15px;
    border: 2px dashed rgba(90, 201, 144, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 25px;
    color: rgba(255, 255, 255, 0.7);
    font-size: 1.1rem;
}

.metrics-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin: 25px 0;
}

.metric-item {
    background: rgba(90, 201, 144, 0.1);
    border-radius: 15px;
    padding: 20px;
    text-align: center;
    border: 1px solid rgba(90, 201, 144, 0.3);
}

.metric-number {
    font-size: 2rem;
    font-weight: bold;
    color: #5AC990;
    display: block;
}

.coming-soon-section {
    background: linear-gradient(145deg, 
        rgba(43, 40, 45, 0.95) 0%, 
        rgba(23, 34, 77, 0.9) 100%);
    border-radius: 20px;
    padding: 60px;
    text-align: center;
    border: 2px dashed rgba(90, 201, 144, 0.5);
    margin-top: 40px;
}
</style>

<!-- Hero Section -->
<div class="cases-hero">
    <div class="container" style="margin-top: 116px">
        <div class="hero-content">
         
            <h1 class="display-4 font-weight-bold mb-4">Études de Cas</h1>
            <p class="lead">Découvrez nos projets phares et les résultats obtenus</p>
        </div>
    </div>
</div>

<!-- Content Section -->
<div class="cases-content">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <div class="case-study-card">
                    <h2 class="section-title text-white text-center mb-4">📋 Présentation de 4 à 6 projets phares</h2>
                    <p class="text-light text-center">Chaque étude de cas comprendra :</p>
                    <div class="row">
                        <div class="col-md-3 text-center mb-4">
                            <div class="feature-icon mb-3">
                                <i class="fa fa-bullseye fa-3x" style="color: #5AC990;"></i>
                            </div>
                            <h5 class="text-white">Objectifs</h5>
                            <p class="text-light small">Définition claire des enjeux et défis du projet</p>
                        </div>
                        <div class="col-md-3 text-center mb-4">
                            <div class="feature-icon mb-3">
                                <i class="fa fa-chart-line fa-3x" style="color: #4facfe;"></i>
                            </div>
                            <h5 class="text-white">Résultats Chiffrés</h5>
                            <p class="text-light small">Métriques et performances mesurables</p>
                        </div>
                        <div class="col-md-3 text-center mb-4">
                            <div class="feature-icon mb-3">
                                <i class="fa fa-comments fa-3x" style="color: #00f2fe;"></i>
                            </div>
                            <h5 class="text-white">Témoignages</h5>
                            <p class="text-light small">Retours d'expérience de nos clients</p>
                        </div>
                        <div class="col-md-3 text-center mb-4">
                            <div class="feature-icon mb-3">
                                <i class="fa fa-cube fa-3x" style="color: #5AC990;"></i>
                            </div>
                            <h5 class="text-white">Visuels 3D</h5>
                            <p class="text-light small">Maquettes et visualisations BIM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Exemples d'études de cas en cours de développement -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="case-study-card h-100">
                    <div class="case-visual-placeholder">
                        <div class="text-center">
                            <i class="fa fa-hospital fa-3x mb-3" style="color: #5AC990;"></i>
                            <div>Projet Hospitalier</div>
                            <small>Maquette 3D et visuels à venir</small>
                        </div>
                    </div>
                    <h4 class="text-white mb-3">Centre Hospitalier Universitaire</h4>
                    <p class="text-light mb-3">Optimisation de la gestion énergétique et de la maintenance dans un établissement de 500 lits.</p>
                    
                    <div class="metrics-grid">
                        <div class="metric-item">
                            <span class="metric-number">25%</span>
                            <small class="text-light">Économies d'énergie</small>
                        </div>
                        <div class="metric-item">
                            <span class="metric-number">40%</span>
                            <small class="text-light">Réduction des pannes</small>
                        </div>
                    </div>
                    
                    {{-- <div class="testimonial p-3 mt-3" style="background: rgba(90, 201, 144, 0.1); border-radius: 10px;">
                        <em class="text-light">"Testimonial client à développer..."</em>
                    </div> --}}
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="case-study-card h-100">
                    <div class="case-visual-placeholder">
                        <div class="text-center">
                            <i class="fa fa-building fa-3x mb-3" style="color: #4facfe;"></i>
                            <div>Tour de Bureaux</div>
                            <small>Maquette 3D et visuels à venir</small>
                        </div>
                    </div>
                    <h4 class="text-white mb-3">Casablanca Finance City</h4>
                    <p class="text-light mb-3">Assurer le confort de 2000 occupants tout en optimisant les coûts d'exploitation.</p>
                    
                    <div class="metrics-grid">
                        <div class="metric-item">
                            <span class="metric-number">30%</span>
                            <small class="text-light">Amélioration confort</small>
                        </div>
                        <div class="metric-item">
                            <span class="metric-number">20%</span>
                            <small class="text-light">Réduction coûts</small>
                        </div>
                    </div>
                    
                    {{-- <div class="testimonial p-3 mt-3" style="background: rgba(79, 172, 254, 0.1); border-radius: 10px;">
                        <em class="text-light">"Testimonial client à développer..."</em>
                    </div> --}}
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="case-study-card h-100">
                    <div class="case-visual-placeholder">
                        <div class="text-center">
                            <i class="fa fa-industry fa-3x mb-3" style="color: #00f2fe;"></i>
                            <div>Site Industriel</div>
                            <small>Maquette 3D et visuels à venir</small>
                        </div>
                    </div>
                    <h4 class="text-white mb-3">OCP Jorf Lasfar</h4>
                    <p class="text-light mb-3">Maintenance prédictive sur 50 hectares d'installations industrielles.</p>
                    
                    <div class="metrics-grid">
                        <div class="metric-item">
                            <span class="metric-number">50%</span>
                            <small class="text-light">Réduction arrêts</small>
                        </div>
                        <div class="metric-item">
                            <span class="metric-number">35%</span>
                            <small class="text-light">Économies maintenance</small>
                        </div>
                    </div>
                    
                    {{-- <div class="testimonial p-3 mt-3" style="background: rgba(0, 242, 254, 0.1); border-radius: 10px;">
                        <em class="text-light">"Testimonial client à développer..."</em>
                    </div> --}}
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="case-study-card h-100">
                    <div class="case-visual-placeholder">
                        <div class="text-center">
                            <i class="fa fa-graduation-cap fa-3x mb-3" style="color: #5AC990;"></i>
                            <div>Campus Universitaire</div>
                            <small>Maquette 3D et visuels à venir</small>
                        </div>
                    </div>
                    <h4 class="text-white mb-3">Université Mohammed VI Polytechnique</h4>
                    <p class="text-light mb-3">Gestion intelligente des espaces et optimisation énergétique du campus.</p>
                    
                    <div class="metrics-grid">
                        <div class="metric-item">
                            <span class="metric-number">45%</span>
                            <small class="text-light">Optimisation espaces</small>
                        </div>
                        <div class="metric-item">
                            <span class="metric-number">28%</span>
                            <small class="text-light">Économies énergie</small>
                        </div>
                    </div>
                    
                    {{-- <div class="testimonial p-3 mt-3" style="background: rgba(90, 201, 144, 0.1); border-radius: 10px;">
                        <em class="text-light">"Testimonial client à développer..."</em>
                    </div> --}}
                </div>
            </div>
        </div>

        <!-- Section À Développer -->
        <div class="coming-soon-section">
            <i class="fa fa-construction fa-4x mb-4" style="color: #5AC990;"></i>
            <h3 class="text-white mb-3">À DÉVELOPPER</h3>
            <p class="text-light mb-4">Ces études de cas détaillées seront bientôt disponibles avec :</p>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <i class="fa fa-file-alt fa-2x mb-2" style="color: #4facfe;"></i>
                    <div class="text-light">Documentation complète</div>
                </div>
                <div class="col-md-3 mb-3">
                    <i class="fa fa-chart-bar fa-2x mb-2" style="color: #5AC990;"></i>
                    <div class="text-light">Métriques détaillées</div>
                </div>
                <div class="col-md-3 mb-3">
                    <i class="fa fa-video fa-2x mb-2" style="color: #00f2fe;"></i>
                    <div class="text-light">Présentations vidéo</div>
                </div>
                <div class="col-md-3 mb-3">
                    <i class="fa fa-users fa-2x mb-2" style="color: #4facfe;"></i>
                    <div class="text-light">Témoignages clients</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection