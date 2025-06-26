{{-- resources/views/solutions/synthese-bim.blade.php --}}
@extends('solutions.layout')

@section('hero_image', '/img/solutions/service-5.png')
@section('solution_name', 'Synthèse BIM')
@section('solution_title', 'Synthèse Technique BIM')
@section('solution_subtitle', 'Coordination technique 3D, détection de clashs, anticipation des conflits pour construire avant de construire.')

@section('solution_content')
<div class="row">
    <div class="col-lg-8">
        <!-- Introduction Section -->
        <div class="content-section">
            <h2 class="section-title">Construire Avant de Construire</h2>
            <p class="lead">La synthèse technique BIM permet une coordination fine des différents corps d'état avant même le démarrage du chantier. Grâce à la détection automatique des conflits (clashs) entre les éléments structurels, techniques et architecturaux dans un environnement 3D partagé, les erreurs sont anticipées et corrigées en phase étude, réduisant ainsi drastiquement les aléas de chantier.</p>
            
            <div class="alert alert-success">
                <h5><i class="fa fa-lightbulb me-2"></i>Concept Clé</h5>
                <p class="mb-0"><strong>Construire avant de construire</strong> devient une réalité : l'ensemble des équipes visualise et résout les conflits techniques dans le jumeau numérique, bien avant d'engager des ressources sur site.</p>
            </div>
        </div>

        <!-- Types de Clash Section -->
        <div class="content-section">
            <h2 class="section-title">Types de Conflits Détectés</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="clash-type p-4 border-start border-danger border-4 ">
                        <h5 class="text-danger">
                            <i class="fa fa-exclamation-triangle me-2"></i>Clashs Géométriques
                        </h5>
                        <p class="mb-0">Interférences physiques entre éléments (tuyauterie vs structure, gaines vs poutres)</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="clash-type p-4 border-start border-warning border-4 ">
                        <h5 class="text-warning">
                            <i class="fa fa-search me-2"></i>Clashs de Dégagement
                        </h5>
                        <p class="mb-0">Espaces insuffisants pour la maintenance et l'accessibilité des équipements</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="clash-type p-4 border-start border-info border-4 ">
                        <h5 class="text-info">
                            <i class="fa fa-clock me-2"></i>Clashs Temporels
                        </h5>
                        <p class="mb-0">Conflits de planning entre les différents corps d'état sur une même zone</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="clash-type p-4 border-start border-success border-4 ">
                        <h5 class="text-success">
                            <i class="fa fa-book me-2"></i>Clashs Normatifs
                        </h5>
                        <p class="mb-0">Non-conformités aux règlements et normes en vigueur</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Processus Section -->
        <div class="content-section">
            <h2 class="section-title">Notre Processus de Synthèse</h2>
            <div class="process-flow">
                <div class="row align-items-center mb-4">
                    <div class="col-md-2 text-center">
                        <div class="process-step bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fa fa-download"></i>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <h5>1. Récupération des Maquettes</h5>
                        <p class="text-muted">Collecte et import des modèles BIM de tous les corps d'état (architecture, structure, CVC, électricité, plomberie)</p>
                    </div>
                </div>
                
                <div class="row align-items-center mb-4">
                    <div class="col-md-2 text-center">
                        <div class="process-step bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fa fa-sync"></i>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <h5>2. Fédération des Modèles</h5>
                        <p class="text-muted">Assemblage des maquettes dans un environnement commun avec vérification de la cohérence géométrique</p>
                    </div>
                </div>
                
                <div class="row align-items-center mb-4">
                    <div class="col-md-2 text-center">
                        <div class="process-step bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fa fa-search-plus"></i>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <h5>3. Détection Automatique</h5>
                        <p class="text-muted">Lancement des algorithmes de détection de clashs avec paramétrage des tolérances et filtres</p>
                    </div>
                </div>
                
                <div class="row align-items-center mb-4">
                    <div class="col-md-2 text-center">
                        <div class="process-step bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fa fa-list-alt"></i>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <h5>4. Analyse et Priorisation</h5>
                        <p class="text-muted">Classification des conflits par criticité et impact sur le projet</p>
                    </div>
                </div>
                
                <div class="row align-items-center mb-4">
                    <div class="col-md-2 text-center">
                        <div class="process-step bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <h5>5. Réunion de Synthèse</h5>
                        <p class="text-muted">Présentation visuelle des conflits et recherche collaborative de solutions</p>
                    </div>
                </div>
                
                <div class="row align-items-center">
                    <div class="col-md-2 text-center">
                        <div class="process-step bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="fa fa-check"></i>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <h5>6. Validation et Suivi</h5>
                        <p class="text-muted">Vérification des corrections apportées et mise à jour continue des modèles</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Outils Section -->
        <div class="content-section">
            <h2 class="section-title">Outils de Synthèse Utilisés</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="tool-card text-center p-4 border rounded h-100">
                        <i class="fa fa-cube fa-3x text-primary mb-3"></i>
                        <h5>Navisworks Manage</h5>
                        <p class="text-muted small">Fédération de modèles et détection de clashs avancée</p>
                        <span class="badge bg-primary">Principal</span>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="tool-card text-center p-4 border rounded h-100">
                        <i class="fa fa-project-diagram fa-3x text-primary mb-3"></i>
                        <h5>Solibri Model Checker</h5>
                        <p class="text-muted small">Vérification qualité et conformité normative</p>
                        <span class="badge bg-secondary">Complémentaire</span>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="tool-card text-center p-4 border rounded h-100">
                        <i class="fa fa-cloud fa-3x text-primary mb-3"></i>
                        <h5>BIM 360 Design</h5>
                        <p class="text-muted small">Collaboration en temps réel et suivi des modifications</p>
                        <span class="badge bg-info">Cloud</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Méthodologie Section -->
        <div class="content-section">
            <h2 class="section-title">Méthodologie de Coordination</h2>
            <div class="methodology-grid">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="methodology-item p-4  rounded">
                            <h5 class="text-primary">
                                <i class="fa fa-calendar-week me-2"></i>Planning de Synthèse
                            </h5>
                            <ul class="list-unstyled small">
                                <li>• Synthèse hebdomadaire en phase étude</li>
                                <li>• Synthèse bi-hebdomadaire en phase PRO</li>
                                <li>• Synthèse quotidienne en préparation chantier</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="methodology-item p-4  rounded">
                            <h5 class="text-primary">
                                <i class="fa fa-layer-group me-2"></i>Niveaux de Développement
                            </h5>
                            <ul class="list-unstyled small">
                                <li>• LOD 300 : Synthèse esquisse</li>
                                <li>• LOD 350 : Synthèse APS/APD</li>
                                <li>• LOD 400 : Synthèse PRO/EXE</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="methodology-item p-4  rounded">
                            <h5 class="text-primary">
                                <i class="fa fa-exclamation-circle me-2"></i>Criticité des Clashs
                            </h5>
                            <ul class="list-unstyled small">
                                <li>• <span class="text-danger">●</span> Critique : Blocage chantier</li>
                                <li>• <span class="text-warning">●</span> Majeur : Impact planning</li>
                                <li>• <span class="text-info">●</span> Mineur : Optimisation</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="methodology-item p-4  rounded">
                            <h5 class="text-primary">
                                <i class="fa fa-chart-pie me-2"></i>Indicateurs de Suivi
                            </h5>
                            <ul class="list-unstyled small">
                                <li>• Nombre de clashs détectés</li>
                                <li>• Taux de résolution</li>
                                <li>• Délai moyen de correction</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Livrables Section -->
        <div class="content-section">
            <h2 class="section-title">Nos Livrables</h2>
            <div class="deliverables-list">
                <div class="deliverable-item d-flex align-items-center mb-3 p-3  rounded">
                    <i class="fa fa-file-pdf fa-2x text-danger me-3"></i>
                    <div>
                        <h6 class="mb-1">Rapport de Synthèse</h6>
                        <p class="mb-0 small text-muted">Document détaillé avec captures d'écran et solutions proposées</p>
                    </div>
                </div>
                <div class="deliverable-item d-flex align-items-center mb-3 p-3  rounded">
                    <i class="fa fa-cube fa-2x text-primary me-3"></i>
                    <div>
                        <h6 class="mb-1">Maquette Fédérée</h6>
                        <p class="mb-0 small text-muted">Modèle 3D consolidé accessible via visionneuse</p>
                    </div>
                </div>
                <div class="deliverable-item d-flex align-items-center mb-3 p-3  rounded">
                    <i class="fa fa-table fa-2x text-success me-3"></i>
                    <div>
                        <h6 class="mb-1">Matrice de Clashs</h6>
                        <p class="mb-0 small text-muted">Tableau Excel avec suivi des résolutions</p>
                    </div>
                </div>
                <div class="deliverable-item d-flex align-items-center mb-3 p-3  rounded">
                    <i class="fa fa-video fa-2x text-info me-3"></i>
                    <div>
                        <h6 class="mb-1">Animations 3D</h6>
                        <p class="mb-0 small text-muted">Visualisations des conflits et solutions</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <!-- Stats Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">60%</div>
                <div>Réduction des conflits en chantier</div>
                <small>(projets hospitaliers et tertiaires)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">20%</div>
                <div>Économie sur les coûts de reprise</div>
                <small>(grâce à une planification optimisée)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">30%</div>
                <div>Diminution du temps de réunions</div>
                <small>(synthèse technique efficace)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">40%</div>
                <div>Clashs évités en phase PRO</div>
                <small>(détection précoce)</small>
            </div>
        </div>

        <!-- Types de Projets -->
        <div class="content-section ">
            <h4 class="text-primary">Types de Projets</h4>
            <div class="project-types">
                <div class="project-type d-flex align-items-center mb-3">
                    <i class="fa fa-hospital fa-2x text-primary me-3"></i>
                    <div>
                        <h6 class="mb-0">Hospitalier</h6>
                        <small class="text-muted">Complexité technique élevée</small>
                    </div>
                </div>
                <div class="project-type d-flex align-items-center mb-3">
                    <i class="fa fa-industry fa-2x text-primary me-3"></i>
                    <div>
                        <h6 class="mb-0">Industriel</h6>
                        <small class="text-muted">Réseaux et process complexes</small>
                    </div>
                </div>
                <div class="project-type d-flex align-items-center mb-3">
                    <i class="fa fa-building fa-2x text-primary me-3"></i>
                    <div>
                        <h6 class="mb-0">Tertiaire</h6>
                        <small class="text-muted">Coordination multitechnique</small>
                    </div>
                </div>
                <div class="project-type d-flex align-items-center mb-3">
                    <i class="fa fa-graduation-cap fa-2x text-primary me-3"></i>
                    <div>
                        <h6 class="mb-0">Éducatif</h6>
                        <small class="text-muted">Normes acoustiques et sécurité</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formations -->
        <div class="content-section bg-primary text-white">
            <h4 class="text-white">Formations Disponibles</h4>
            <ul class="list-unstyled">
                <li class="mb-2"><i class="fa fa-check me-2"></i>Navisworks Manage</li>
                <li class="mb-2"><i class="fa fa-check me-2"></i>Détection de clashs</li>
                <li class="mb-2"><i class="fa fa-check me-2"></i>Coordination BIM</li>
                <li class="mb-2"><i class="fa fa-check me-2"></i>Animation 4D</li>
            </ul>
            <a href="{{ route('contact') }}" class="btn btn-light btn-sm">
                Demander un devis formation
            </a>
        </div>

        <!-- Certifications -->
        <div class="content-section ">
            <h4 class="text-primary">Nos Certifications</h4>
            <div class="certifications text-center">
                <div class="cert-item mb-3">
                    <i class="fa fa-certificate fa-2x text-warning mb-2"></i>
                    <div class="small"><strong>Autodesk Certified</strong><br>Navisworks Professional</div>
                </div>
                <div class="cert-item mb-3">
                    <i class="fa fa-medal fa-2x text-success mb-2"></i>
                    <div class="small"><strong>BuildingSMART</strong><br>IFC Certified</div>
                </div>
                <div class="cert-item">
                    <i class="fa fa-award fa-2x text-primary mb-2"></i>
                    <div class="small"><strong>ISO 19650</strong><br>BIM Management</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection