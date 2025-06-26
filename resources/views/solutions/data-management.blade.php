@extends('solutions.layout')

@section('hero_image', '/img/solutions/service-7.png')
@section('solution_name', 'DATA Management')
@section('solution_title', 'DATA MANAGEMENT')
@section('solution_subtitle', 'Votre patrimoine numérique valorisé, gouverné et pérenne')

@section('solution_content')
<div class="row">
    <div class="col-lg-8">
        <!-- Introduction Section -->
        <div class="content-section">
            <h2 class="section-title">🚀 Pourquoi c'est essentiel</h2>
            <p class="lead">La donnée est le <strong>fil conducteur du BIM</strong> : sa structuration, sa qualité, sa gouvernance sont clés pour des livrables fiables, un jumeau numérique performant et une gestion efficiente. Un bon <strong>Data Management</strong> permet de maîtriser le cycle de vie des informations techniques du bâtiment, de la conception jusqu'à l'exploitation.</p>
        </div>

        <!-- Solutions Section -->
        <div class="content-section">
            <h2 class="section-title">💡 Nos solutions concrètes</h2>
            <ul class="advantages-list">
                <li>Structuration et normalisation des données (classification, codification, mapping IFC)</li>
                <li>Mise en place d'environnements de données communs (CDE, plateformes collaboratives)</li>
                <li>Gouvernance de la donnée : rôles, workflows, droits d'accès</li>
                <li>Audits qualité des maquettes et contrôle de conformité</li>
                <li>Automatisation des extractions (quantitatifs, DOE, fiches équipements)</li>
            </ul>
        </div>

        <!-- Gouvernance Section -->
        <div class="content-section">
            <h2 class="section-title">Gouvernance des Données</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="governance-item p-4 border rounded">
                        <h5 class="text-primary">
                            <i class="fa fa-shield-alt me-2"></i>Sécurité
                        </h5>
                        <ul class="small list-unstyled">
                            <li>• Chiffrement des données</li>
                            <li>• Contrôle d'accès granulaire</li>
                            <li>• Traçabilité des modifications</li>
                            <li>• Sauvegarde automatisée</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="governance-item p-4 border rounded">
                        <h5 class="text-primary">
                            <i class="fa fa-check-circle me-2"></i>Qualité
                        </h5>
                        <ul class="small list-unstyled">
                            <li>• Validation automatique</li>
                            <li>• Contrôles de cohérence</li>
                            <li>• Standards de nommage</li>
                            <li>• Audit continu</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="governance-item p-4 border rounded">
                        <h5 class="text-primary">
                            <i class="fa fa-sync-alt me-2"></i>Interopérabilité
                        </h5>
                        <ul class="small list-unstyled">
                            <li>• Formats ouverts (IFC, COBie)</li>
                            <li>• API standardisées</li>
                            <li>• Mapping automatique</li>
                            <li>• Export multi-formats</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="governance-item p-4 border rounded">
                        <h5 class="text-primary">
                            <i class="fa fa-clock me-2"></i>Cycle de vie
                        </h5>
                        <ul class="small list-unstyled">
                            <li>• Versioning automatique</li>
                            <li>• Archivage intelligent</li>
                            <li>• Purge sécurisée</li>
                            <li>• Migration données</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Standards Section -->
        <div class="content-section">
            <h2 class="section-title">Standards et Conformité</h2>
            <div class="standards-grid row">
                <div class="col-md-4 mb-3">
                    <div class="standard-item text-center p-3  rounded">
                        <i class="fa fa-cube fa-2x text-primary mb-2"></i>
                        <h6>IFC 4.3</h6>
                        <p class="small text-muted">Format d'échange BuildingSMART</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="standard-item text-center p-3  rounded">
                        <i class="fa fa-table fa-2x text-primary mb-2"></i>
                        <h6>COBie</h6>
                        <p class="small text-muted">Données d'exploitation standardisées</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="standard-item text-center p-3  rounded">
                        <i class="fa fa-certificate fa-2x text-primary mb-2"></i>
                        <h6>ISO 19650</h6>
                        <p class="small text-muted">Management information BIM</p>
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
                <div>Réduction des erreurs</div>
                <small>(quantitatifs grâce à codification)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">30%</div>
                <div>Gain de temps</div>
                <small>(audits DOE et livrables)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">40%</div>
                <div>Réduction d'incertitudes</div>
                <small>(transfert vers gestionnaires)</small>
            </div>
        </div>

        <!-- Services -->
        <div class="content-section ">
            <h4 class="text-primary">Nos Services Data</h4>
            <ul class="list-unstyled">
                <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Audit qualité données</li>
                <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Mise en place CDE</li>
                <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Formation équipes</li>
                <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Automatisation exports</li>
                <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Scripts personnalisés</li>
            </ul>
        </div>
    </div>
</div>
@endsection