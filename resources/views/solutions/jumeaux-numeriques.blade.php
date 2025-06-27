{{-- resources/views/solutions/jumeaux-numeriques.blade.php --}}
@extends('solutions.layout')

@section('hero_image', '/img/solutions/service-4.jpeg')
@section('solution_name', 'Jumeaux Numériques')
@section('solution_title', 'Jumeaux Numériques & Data Management')
@section('solution_subtitle', 'BIM GEM (Gestion-Exploitation-Maintenance) : Structuration des données pour l\'exploitation et la maintenance des bâtiments.')

@section('solution_content')
<div class="row">
    <div class="col-lg-8">
        <!-- Introduction Section -->
        <div class="content-section">
            <h2 class="section-title">Le Jumeau Numérique : Votre Bâtiment Intelligent</h2>
            <p class="lead">Cette étape cruciale vise à organiser et standardiser toutes les données issues de la maquette numérique afin de garantir leur exploitation optimale tout au long du cycle de vie du bâtiment. Un Data Management rigoureux fait office de fil conducteur, assurant la cohérence, la fiabilité et l'accessibilité des informations depuis les premières phases du projet jusqu'à l'exploitation et la maintenance.</p>
            
            <div class="alert alert-primary">
                <h5><i class="fa fa-lightbulb me-2"></i>Vision Stratégique</h5>
                <p class="mb-0">Cette structuration des données, orchestrée par un BIM & Data Management et une Synthèse BIM performants, est la garantie d'une exploitation maîtrisée et d'une maintenance proactive. Elle permet d'arriver à cette étape finale avec succès, car chaque phase antérieure du projet a été conduite en s'appuyant sur une gouvernance rigoureuse des données.</p>
            </div>
        </div>

        <!-- Fonctionnalités Section -->
        <div class="content-section">
            <h2 class="section-title">Fonctionnalités du Jumeau Numérique</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="feature-card p-4 border rounded h-100">
                        <i class="fa fa-chart-line fa-3x text-primary mb-3"></i>
                        <h5>Monitoring en Temps Réel</h5>
                        <p class="text-muted">Surveillance continue des performances énergétiques, de la qualité de l'air et du confort des occupants.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="feature-card p-4 border rounded h-100">
                        <i class="fa fa-tools fa-3x text-primary mb-3"></i>
                        <h5>Maintenance Prédictive</h5>
                        <p class="text-muted">Anticipation des pannes et optimisation des interventions grâce à l'analyse des données IoT.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="feature-card p-4 border rounded h-100">
                        <i class="fa fa-database fa-3x text-primary mb-3"></i>
                        <h5>Centralisation des Données</h5>
                        <p class="text-muted">Toutes les informations techniques, fonctionnelles et contractuelles en un seul endroit.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="feature-card p-4 border rounded h-100">
                        <i class="fa fa-mobile-alt fa-3x text-primary mb-3"></i>
                        <h5>Interface Intuitive</h5>
                        <p class="text-muted">Tableaux de bord interactifs accessibles sur tous supports (PC, tablette, smartphone).</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="feature-card p-4 border rounded h-100">
                        <i class="fa fa-sync fa-3x text-primary mb-3"></i>
                        <h5>Intégration GTB/GTC</h5>
                        <p class="text-muted">Connexion directe avec les systèmes de gestion technique du bâtiment.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="feature-card p-4 border rounded h-100">
                        <i class="fa fa-history fa-3x text-primary mb-3"></i>
                        <h5>Historique Complet</h5>
                        <p class="text-muted">Traçabilité complète des interventions et évolution des performances dans le temps.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Management Section -->
        <div class="content-section">
            <h2 class="section-title">Data Management : Le Fil Conducteur</h2>
            <p>Le Data Management est bien plus qu'un simple support : il est le fil conducteur qui assure la continuité et la fiabilité du jumeau numérique, facilitant la transition entre construction et exploitation.</p>
            
            <h4 class="text-primary mt-4 mb-3">Apports concrets du Data Management dans l'exploitation et la maintenance :</h4>
            <ul class="advantages-list">
                <li>Centralisation et structuration des données techniques, fonctionnelles et contractuelles</li>
                <li>Intégration fluide avec les systèmes de gestion technique du bâtiment (GMAO, GTB/GTC)</li>
                <li>Mise à jour continue des données « As-Built » pour refléter l'état réel des équipements et installations</li>
                <li>Facilitation des diagnostics, interventions et planifications de maintenance grâce à une information accessible et qualifiée</li>
            </ul>
        </div>

        <!-- Cas d'Usage Section -->
        <div class="content-section">
            <h2 class="section-title">Cas d'Usage Concrets</h2>
            <div class="accordion" id="useCasesAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                            <i class="fa fa-hospital me-2 text-primary"></i>Hôpital - CHU de Casablanca
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <p><strong>Défi :</strong> Optimiser la gestion énergétique et la maintenance dans un établissement de 500 lits.</p>
                            <p><strong>Solution :</strong> Jumeau numérique connecté aux systèmes CVC, éclairage et équipements médicaux.</p>
                            <p><strong>Résultats :</strong> 25% d'économies d'énergie, 40% de réduction des pannes d'équipements critiques.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                            <i class="fa fa-building me-2 text-primary"></i>Tour de Bureaux - Casablanca Finance City
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <p><strong>Défi :</strong> Assurer le confort des 2000 occupants tout en optimisant les coûts.</p>
                            <p><strong>Solution :</strong> Monitoring en temps réel de la qualité de l'air, température et éclairage.</p>
                            <p><strong>Résultats :</strong> 30% d'amélioration du confort, 20% de réduction des coûts d'exploitation.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                            <i class="fa fa-industry me-2 text-primary"></i>Site Industriel - OCP Jorf Lasfar
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <p><strong>Défi :</strong> Maintenance prédictive sur 50 hectares d'installations industrielles.</p>
                            <p><strong>Solution :</strong> Jumeau numérique avec capteurs IoT sur les équipements critiques.</p>
                            <p><strong>Résultats :</strong> 50% de réduction des arrêts non planifiés, 35% d'économies sur la maintenance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <!-- Stats Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">30%</div>
                <div>Réduction des coûts de maintenance</div>
                <small>(grâce à une meilleure traçabilité)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">20%</div>
                <div>Diminution des temps d'arrêt</div>
                <small>(interventions non planifiées)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">25%</div>
                <div>Amélioration performance énergétique</div>
                <small>(suivi précis des consommations)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">40%</div>
                <div>Réduction des pannes critiques</div>
                <small>(maintenance prédictive)</small>
            </div>
        </div>

        <!-- Technologies Section -->
        <div class="content-section ">
            <h4 class="text-primary">Technologies Intégrées</h4>
            <div class="row text-center">
                <div class="col-6 mb-3">
                    <i class="fa fa-wifi fa-2x text-primary mb-2"></i>
                    <div class="small font-weight-bold">IoT</div>
                </div>
                <div class="col-6 mb-3">
                    <i class="fa fa-brain fa-2x text-primary mb-2"></i>
                    <div class="small font-weight-bold">IA</div>
                </div>
                <div class="col-6 mb-3">
                    <i class="fa fa-cloud fa-2x text-primary mb-2"></i>
                    <div class="small font-weight-bold">Cloud</div>
                </div>
                <div class="col-6 mb-3">
                    <i class="fa fa-chart-bar fa-2x text-primary mb-2"></i>
                    <div class="small font-weight-bold">Big Data</div>
                </div>
                <div class="col-6 mb-3">
                    <i class="fa fa-mobile-alt fa-2x text-primary mb-2"></i>
                    <div class="small font-weight-bold">Mobile</div>
                </div>
                <div class="col-6 mb-3">
                    <i class="fa fa-eye fa-2x text-primary mb-2"></i>
                    <div class="small font-weight-bold">AR/VR</div>
                </div>
            </div>
        </div>

        <!-- ROI Calculator -->
        <div class="content-section bg-primary text-white">
            <h4 class="text-white">Calculateur ROI</h4>
            <p class="small">Estimez le retour sur investissement de votre jumeau numérique</p>
            <div class="mb-3">
                <label class="small">Surface du bâtiment (m²)</label>
                <input type="number" class="form-control" id="surface" placeholder="10000">
            </div>
            <div class="mb-3">
                <label class="small">Coût maintenance actuel (€/an)</label>
                <input type="number" class="form-control" id="maintenance" placeholder="100000">
            </div>
            <button class="btn btn-light btn-sm w-100" onclick="calculateROI()">Calculer le ROI</button>
            <div id="roi-result" class="mt-2 small"></div>
        </div>

        <script>
        function calculateROI() {
            const surface = document.getElementById('surface').value;
            const maintenance = document.getElementById('maintenance').value;
            
            if (surface && maintenance) {
                const economiesAnnuelles = maintenance * 0.25; // 25% d'économies
                const coutJumeau = surface * 15; // 15€/m²
                const roi = (economiesAnnuelles / coutJumeau * 100).toFixed(1);
                
                document.getElementById('roi-result').innerHTML = 
                    `<strong>ROI estimé: ${roi}% la première année</strong><br>
                     Économies annuelles: ${economiesAnnuelles.toLocaleString()}€`;
            }
        }
        </script>
    </div>
</div>
@endsection