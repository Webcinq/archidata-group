
{{-- resources/views/solutions/scan-modelisation.blade.php --}}
@extends('solutions.layout')

@section('hero_image', '/img/solutions/service-3.png')
@section('solution_name', 'SCAN & Modélisation BIM')
@section('solution_title', 'SCAN & MODÉLISATION BIM')
@section('solution_subtitle', 'Numérisation précise de l\'existant et création de maquettes BIM fidèles à la réalité pour vos projets de rénovation et de maintenance.')

@section('solution_content')
<div class="row">
    <div class="col-lg-8">
        <!-- Scan to BIM Section -->
        <div class="content-section">
            <h2 class="section-title">Scan to BIM : De la Réalité au Numérique</h2>
            <p class="lead">Le <strong>Scan to BIM</strong> consiste à numériser un bâtiment existant à l'aide de scanners 3D pour créer une maquette numérique fidèle à la réalité. Cette méthode est particulièrement adaptée aux ouvrages existants qui ne disposent pas de plans à jour ou qui souhaitent initier une démarche de <strong>jumeau numérique</strong> pour l'exploitation et la maintenance.</p>
            
            <h4 class="text-primary mt-4 mb-3">Apports concrets du Scan to BIM :</h4>
            <ul class="advantages-list">
                <li>Relevé 3D rapide, précis et exhaustif (jusqu'à 2 mm de précision)</li>
                <li>Création d'une maquette fidèle à l'existant, facilitant les diagnostics et projets de rénovation</li>
                <li>Base fiable pour l'enrichissement des données techniques dans un processus BIM GEM</li>
            </ul>
        </div>

        <!-- Technologies Section -->
        <div class="content-section">
            <h2 class="section-title">Technologies de Pointe</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="technology-card p-4 border rounded">
                        <i class="fa fa-radar-alt fa-3x text-primary mb-3"></i>
                        <h5>Scanner Laser 3D</h5>
                        <p class="text-muted">Capture de millions de points avec une précision millimétrique pour une représentation exhaustive de l'existant.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="technology-card p-4 border rounded">
                        <i class="fa fa-camera fa-3x text-primary mb-3"></i>
                        <h5>Photogrammétrie</h5>
                        <p class="text-muted">Reconstruction 3D à partir de photographies pour les zones difficiles d'accès ou les détails architecturaux.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="technology-card p-4 border rounded">
                        <i class="fa fa-drone fa-3x text-primary mb-3"></i>
                        <h5>Drone & LiDAR</h5>
                        <p class="text-muted">Relevé des toitures, façades et sites étendus avec une efficacité et une sécurité optimales.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="technology-card p-4 border rounded">
                        <i class="fa fa-cube fa-3x text-primary mb-3"></i>
                        <h5>Modélisation BIM</h5>
                        <p class="text-muted">Transformation des nuages de points en modèles BIM exploitables et enrichis en données techniques.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Applications Section -->
        <div class="content-section">
            <h2 class="section-title">Domaines d'Application</h2>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="application-item text-center p-3">
                        <i class="fa fa-school fa-2x text-primary mb-2"></i>
                        <h6>Établissements Scolaires</h6>
                        <p class="small text-muted">Réhabilitation et mise aux normes d'écoles et universités</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="application-item text-center p-3">
                        <i class="fa fa-home fa-2x text-primary mb-2"></i>
                        <h6>Résidentiel</h6>
                        <p class="small text-muted">Rénovation énergétique et extension de logements</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="application-item text-center p-3">
                        <i class="fa fa-road fa-2x text-primary mb-2"></i>
                        <h6>Infrastructures</h6>
                        <p class="small text-muted">Ponts, tunnels et ouvrages d'art</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Processus Section -->
        <div class="content-section">
            <h2 class="section-title">Notre Processus Scan to BIM</h2>
            <div class="timeline">
                <div class="timeline-item d-flex mb-4">
                    <div class="timeline-marker bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; min-width: 50px;">
                        <span class="font-weight-bold">1</span>
                    </div>
                    <div>
                        <h5>Analyse Préliminaire</h5>
                        <p class="text-muted">Étude du site, définition des objectifs et choix des technologies de relevé adaptées.</p>
                    </div>
                </div>
                <div class="timeline-item d-flex mb-4">
                    <div class="timeline-marker bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; min-width: 50px;">
                        <span class="font-weight-bold">2</span>
                    </div>
                    <div>
                        <h5>Acquisition des Données</h5>
                        <p class="text-muted">Scan laser 3D, photogrammétrie et relevés complémentaires sur site.</p>
                    </div>
                </div>
                <div class="timeline-item d-flex mb-4">
                    <div class="timeline-marker bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; min-width: 50px;">
                        <span class="font-weight-bold">3</span>
                    </div>
                    <div>
                        <h5>Traitement des Nuages de Points</h5>
                        <p class="text-muted">Nettoyage, assemblage et optimisation des données de scan.</p>
                    </div>
                </div>
                <div class="timeline-item d-flex mb-4">
                    <div class="timeline-marker bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; min-width: 50px;">
                        <span class="font-weight-bold">4</span>
                    </div>
                    <div>
                        <h5>Modélisation BIM</h5>
                        <p class="text-muted">Création de la maquette 3D paramétrique à partir des nuages de points.</p>
                    </div>
                </div>
                <div class="timeline-item d-flex">
                    <div class="timeline-marker bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; min-width: 50px;">
                        <span class="font-weight-bold">5</span>
                    </div>
                    <div>
                        <h5>Enrichissement et Livraison</h5>
                        <p class="text-muted">Ajout des données techniques et livraison du modèle BIM finalisé.</p>
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
                <div>Réduction du temps de relevé</div>
                <small>(vs méthodes classiques)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">2mm</div>
                <div>Précision de mesure</div>
                <small>(scanner laser 3D)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">30%</div>
                <div>Économie sur les études préliminaires</div>
                <small>(projets hospitaliers anciens)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">35%</div>
                <div>Amélioration qualité DOE</div>
                <small>(bâtiments anciens)</small>
            </div>
        </div>

        <!-- Équipements Section -->
        <div class="content-section bg-light">
            <h4 class="text-primary">Nos Équipements</h4>
            <ul class="list-unstyled">
                <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Scanner Leica RTC360</li>
                <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Scanner Faro Focus</li>
                <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Drone DJI Matrice 300</li>
                <li class="mb-2"><i class="fa fa-check text-success me-2"></i>LiDAR mobile</li>
                <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Stations totales robotisées</li>
            </ul>
        </div>

        <!-- Logiciels Section -->
        <div class="content-section bg-light">
            <h4 class="text-primary">Logiciels Utilisés</h4>
            <div class="row text-center">
                <div class="col-6 mb-3">
                    <i class="fa fa-cube fa-2x text-primary mb-2"></i>
                    <div class="small font-weight-bold">Revit</div>
                </div>
                <div class="col-6 mb-3">
                    <i class="fa fa-project-diagram fa-2x text-primary mb-2"></i>
                    <div class="small font-weight-bold">Recap Pro</div>
                </div>
                <div class="col-6 mb-3">
                    <i class="fa fa-vector-square fa-2x text-primary mb-2"></i>
                    <div class="small font-weight-bold">PointCab</div>
                </div>
                <div class="col-6 mb-3">
                    <i class="fa fa-drafting-compass fa-2x text-primary mb-2"></i>
                    <div class="small font-weight-bold">CloudCompare</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection