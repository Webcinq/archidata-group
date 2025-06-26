@extends('solutions.layout')

@section('hero_image', '/img/solutions/service-2.png')
@section('solution_name', 'DOE BIM')
@section('solution_title', 'Le DOE BIM (Dossier d\'Ouvrage Exécuté numérique)')
@section('solution_subtitle', 'Constitue la synthèse exhaustive des données du projet à sa livraison avec maquette finale As-Built enrichie et validée.')

@section('solution_content')
<div class="row">
    <div class="col-lg-8">
        <!-- Introduction Section -->
        <div class="content-section">
            <h2 class="section-title">Qu'est-ce que le DOE BIM ?</h2>
            <p class="lead">Le DOE BIM constitue la synthèse exhaustive des données du projet à sa livraison. Il inclut la maquette finale "As-Built", enrichie et validée, ainsi que tous les documents techniques associés. Ce livrable devient un outil clé pour l'exploitation, la maintenance et les rénovations futures.</p>
            
            <h4 class=" mt-4 mb-3" style="color: #5AC990">Apports concrets du BIM pour le DOE :</h4>
            <ul class="advantages-list">
                <li>Données consolidées et fiables en fin de chantier</li>
                <li>Maquette As-Built à jour, géolocalisée et vérifiée</li>
                <li>Documentation centralisée et interopérable dans un format pérenne (IFC, COBie)</li>
            </ul>
        </div>

        <!-- As-Built Section -->
        <div class="content-section">
            <h2 class="section-title">As-Built : Le Jumeau Numérique Opérationnel</h2>
            <p>La maquette <strong>As-Built</strong> constitue la version finale validée du bâtiment tel que construit, intégrant toutes les modifications réalisées pendant le chantier. À ce stade, le <strong>jumeau numérique</strong> devient pleinement opérationnel et peut être connecté à des outils de gestion technique (GTB/GTC) pour un pilotage intelligent en temps réel.</p>
            
            <div class="alert alert-info">
                <h5><i class="fa fa-info-circle me-2"></i>Point Important</h5>
                <p class="mb-0">Il est essentiel de rappeler que <strong>la qualité du jumeau numérique dépend directement de la rigueur des phases précédentes</strong> (programmation, conception, exécution, DOE). Une structuration de données continue tout au long du projet garantit la fiabilité, la cohérence et l'exploitabilité du jumeau numérique.</p>
            </div>

            <h4 class="mt-4 mb-3" style="color: #5AC990">Apports concrets du BIM dans l'As-Built et le jumeau numérique :</h4>
            <ul class="advantages-list">
                <li>Modèle 3D exact et synchronisé avec les équipements réels</li>
                <li>Données métiers prêtes à être exploitées (surfaces, équipements, historiques...)</li>
                <li>Interopérabilité avec des plateformes de Facility Management</li>
            </ul>
        </div>

        <!-- Processus Section -->
        <div class="content-section">
            <h2 class="section-title">Notre Processus DOE BIM</h2>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="process-step">
                        <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">1</div>
                        <h5 class="mt-2">Collecte des données chantier</h5>
                        <p class="text-muted">Rassemblement de toutes les modifications et ajustements réalisés</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="process-step">
                        <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">2</div>
                        <h5 class="mt-2">Mise à jour de la maquette</h5>
                        <p class="text-muted">Intégration des modifications dans le modèle 3D</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="process-step">
                        <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">3</div>
                        <h5 class="mt-2">Enrichissement des données</h5>
                        <p class="text-muted">Ajout des informations techniques et de maintenance</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="process-step">
                        <div class="step-number bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">4</div>
                        <h5 class="mt-2">Validation et livraison</h5>
                        <p class="text-muted">Contrôle qualité et remise du DOE BIM finalisé</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <!-- Stats Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">50%</div>
                <div>Diminution du temps de constitution du DOE</div>
                <small>(grâce à l'automatisation depuis la maquette)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">15%</div>
                <div>Réduction des coûts d'exploitation</div>
                <small>(grâce à la meilleure traçabilité des équipements)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">30%</div>
                <div>Gain sur les délais de mise en service</div>
                <small>(DOE numérique immédiatement exploitable)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">40%</div>
                <div>Réduction des coûts de maintenance</div>
                <small>(grâce à une meilleure traçabilité)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">20%</div>
                <div>Baisse des interventions d'urgence</div>
                <small>(gestion préventive pilotée par la data)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">25%</div>
                <div>Amélioration satisfaction utilisateurs</div>
                <small>(cas projets hospitaliers et tertiaires)</small>
            </div>
        </div>

        <!-- Formats Support -->
        <div class="content-section bg-light">
            <h4 style="color: #5AC990">Formats Supportés</h4>
            <div class="row text-center">
                <div class="col-4 mb-3">
                    <i class="fa fa-cube fa-2x text-primary mb-2"></i>
                    <div class="small font-weight-bold">IFC</div>
                </div>
                <div class="col-4 mb-3">
                    <i class="fa fa-table fa-2x text-primary mb-2"></i>
                    <div class="small font-weight-bold">COBie</div>
                </div>
                <div class="col-4 mb-3">
                    <i class="fa fa-file-pdf fa-2x text-primary mb-2"></i>
                    <div class="small font-weight-bold">PDF</div>
                </div>
                <div class="col-4 mb-3">
                    <i class="fa fa-file-excel fa-2x text-primary mb-2"></i>
                    <div class="small font-weight-bold">Excel</div>
                </div>
                <div class="col-4 mb-3">
                    <i class="fa fa-database fa-2x text-primary mb-2"></i>
                    <div class="small font-weight-bold">BIM 360</div>
                </div>
                <div class="col-4 mb-3">
                    <i class="fa fa-cloud fa-2x text-primary mb-2"></i>
                    <div class="small font-weight-bold">Cloud</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection