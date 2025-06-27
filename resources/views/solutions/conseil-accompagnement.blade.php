@extends('solutions.layout')

@section('hero_image', '/img/solutions/service-8.jpeg')
@section('solution_name', 'Conseil & Accompagnement')
@section('solution_title', 'CONSEIL & ACCOMPAGNEMENT')
@section('solution_subtitle', 'Encadrer, former, auditer : un BIM durable passe par l\'humain et les méthodes')

@section('solution_content')
<div class="row">
    <div class="col-lg-8">
        <!-- Introduction Section -->
        <div class="content-section">
            <h2 class="section-title">🚀 Pourquoi c'est essentiel</h2>
            <p class="lead">La réussite d'un projet BIM repose autant sur les outils que sur les <strong>méthodes, les processus et la montée en compétence des équipes</strong>. Archidata Africa propose un accompagnement stratégique à chaque étape du projet pour garantir un BIM maîtrisé, partagé et valorisé.</p>
        </div>

        <!-- Solutions Section -->
        <div class="content-section">
            <h2 class="section-title">💡 Nos solutions concrètes</h2>
            <ul class="advantages-list">
                <li>Audit des pratiques BIM existantes (MOA, MOE, entreprises)</li>
                <li>Définition de stratégies BIM (charte, convention, processus)</li>
                <li>Accompagnement à la certification ISO 19650</li>
                <li>Formations ciblées pour MOA, MOE, entreprises, FM</li>
                <li>Partenariats pédagogiques avec <strong>ESTP</strong>, <strong>UM6P</strong>, <strong>UIR</strong> pour la montée en compétences des étudiants et des professionnels</li>
            </ul>
        </div>

        <!-- Formations Section -->
        <div class="content-section">
            <h2 class="section-title">Catalogue de Formations</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="formation-card p-4 border rounded">
                        <h5 class="text-primary">
                            <i class="fa fa-graduation-cap me-2"></i>Initiation BIM
                        </h5>
                        <ul class="small list-unstyled">
                            <li>• Concepts fondamentaux</li>
                            <li>• Enjeux et bénéfices</li>
                            <li>• Vocabulaire technique</li>
                            <li>• Cas d'usage métier</li>
                        </ul>
                        <div class="formation-meta">
                            <span class="badge bg-info">2 jours</span>
                            <span class="badge bg-secondary">Débutant</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="formation-card p-4 border rounded">
                        <h5 class="text-primary">
                            <i class="fa fa-tools me-2"></i>BIM Manager
                        </h5>
                        <ul class="small list-unstyled">
                            <li>• Pilotage de projet BIM</li>
                            <li>• Conventions et chartes</li>
                            <li>• Coordination équipes</li>
                            <li>• Contrôle qualité</li>
                        </ul>
                        <div class="formation-meta">
                            <span class="badge bg-info">5 jours</span>
                            <span class="badge bg-warning">Avancé</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="formation-card p-4 border rounded">
                        <h5 class="text-primary">
                            <i class="fa fa-cube me-2"></i>Logiciels BIM
                        </h5>
                        <ul class="small list-unstyled">
                            <li>• Revit Architecture/MEP</li>
                            <li>• Navisworks Manage</li>
                            <li>• Dynamo/Grasshopper</li>
                            <li>• BIM 360/ACC</li>
                        </ul>
                        <div class="formation-meta">
                            <span class="badge bg-info">3-5 jours</span>
                            <span class="badge bg-success">Pratique</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="formation-card p-4 border rounded">
                        <h5 class="text-primary">
                            <i class="fa fa-certificate me-2"></i>ISO 19650
                        </h5>
                        <ul class="small list-unstyled">
                            <li>• Norme internationale</li>
                            <li>• Processus de livraison</li>
                            <li>• Management information</li>
                            <li>• Certification</li>
                        </ul>
                        <div class="formation-meta">
                            <span class="badge bg-info">3 jours</span>
                            <span class="badge bg-danger">Expert</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Partenariats Section -->
        <div class="content-section">
            <h2 class="section-title">Nos Partenaires Académiques</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="partner-card text-center p-4  rounded">
                        <i class="fa fa-university fa-3x text-primary mb-3"></i>
                        <h5>ESTP Paris</h5>
                        <p class="small text-muted">École Spéciale des Travaux Publics - Programmes BIM et Digital Construction</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="partner-card text-center p-4  rounded">
                        <i class="fa fa-graduation-cap fa-3x text-primary mb-3"></i>
                        <h5>UM6P</h5>
                        <p class="small text-muted">Université Mohammed VI Polytechnique - Innovation et Smart Cities</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="partner-card text-center p-4  rounded">
                        <i class="fa fa-school fa-3x text-primary mb-3"></i>
                        <h5>UIR</h5>
                        <p class="small text-muted">Université Internationale de Rabat - Génie Civil et Architecture</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Méthodologie Section -->
        <div class="content-section">
            <h2 class="section-title">Notre Méthodologie d'Accompagnement</h2>
            <div class="methodology-steps">
                <div class="step-item d-flex mb-4">
                    <div class="step-number bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; min-width: 50px;">
                        <span class="font-weight-bold">1</span>
                    </div>
                    <div>
                        <h5>Diagnostic Initial</h5>
                        <p class="text-muted">Audit des pratiques existantes, identification des besoins et définition des objectifs.</p>
                    </div>
                </div>
                <div class="step-item d-flex mb-4">
                    <div class="step-number bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; min-width: 50px;">
                        <span class="font-weight-bold">2</span>
                    </div>
                    <div>
                        <h5>Stratégie BIM</h5>
                        <p class="text-muted">Élaboration de la charte BIM, définition des processus et des rôles.</p>
                    </div>
                </div>
                <div class="step-item d-flex mb-4">
                    <div class="step-number bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; min-width: 50px;">
                        <span class="font-weight-bold">3</span>
                    </div>
                    <div>
                        <h5>Formation Équipes</h5>
                        <p class="text-muted">Programmes de formation adaptés aux différents profils et niveaux.</p>
                    </div>
                </div>
                <div class="step-item d-flex mb-4">
                    <div class="step-number bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; min-width: 50px;">
                        <span class="font-weight-bold">4</span>
                    </div>
                    <div>
                        <h5>Mise en Œuvre</h5>
                        <p class="text-muted">Accompagnement opérationnel sur les premiers projets pilotes.</p>
                    </div>
                </div>
                <div class="step-item d-flex">
                    <div class="step-number bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; min-width: 50px;">
                        <span class="font-weight-bold">5</span>
                    </div>
                    <div>
                        <h5>Suivi & Amélioration</h5>
                        <p class="text-muted">Évaluation continue et optimisation des processus BIM.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Témoignages Section -->
        <div class="content-section">
            <h2 class="section-title">Témoignages Formations</h2>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="testimonial-card p-4  rounded">
                        <div class="stars mb-2">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                        </div>
                        <p class="small mb-2">"Formation très complète qui nous a permis de structurer notre approche BIM. Formateurs experts et pédagogues."</p>
                        <div class="author">
                            <strong>Ahmed El Mansouri</strong><br>
                            <small class="text-muted">BIM Manager - Groupe Alliances</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="testimonial-card p-4  rounded">
                        <div class="stars mb-2">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                        </div>
                        <p class="small mb-2">"L'accompagnement sur notre projet pilote a été déterminant. Nous avons gagné en efficacité et en qualité."</p>
                        <div class="author">
                            <strong>Fatima Zahra Benali</strong><br>
                            <small class="text-muted">Architecte - Studio FZ Architecture</small>
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
                <div class="stat-number">100%</div>
                <div>Projets avec charte BIM</div>
                <small>(finalisée en phase APS)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">80%</div>
                <div>Taux d'adoption BIM</div>
                <small>(projets formés avec Archidata)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">50%</div>
                <div>Réduction allers-retours</div>
                <small>(MOA/MOE/Entreprise)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">200+</div>
                <div>Professionnels formés</div>
                <small>(depuis 2020)</small>
            </div>
        </div>

        <!-- Certifications Formateur -->
        <div class="content-section ">
            <h4 class="text-primary">Nos Certifications</h4>
            <ul class="list-unstyled">
                <li class="mb-2"><i class="fa fa-certificate text-warning me-2"></i>Autodesk Certified Instructor</li>
                <li class="mb-2"><i class="fa fa-medal text-success me-2"></i>BuildingSMART Professional</li>
                <li class="mb-2"><i class="fa fa-award text-primary me-2"></i>ISO 19650 Lead Implementer</li>
                <li class="mb-2"><i class="fa fa-graduation-cap text-info me-2"></i>Formateur Agréé</li>
            </ul>
        </div>

        <!-- Planning Formations -->
        <div class="content-section bg-primary text-white">
            <h4 class="text-white">Prochaines Sessions</h4>
            <div class="session-item mb-3 pb-3 border-bottom border-white-50">
                <div class="d-flex justify-content-between">
                    <strong>BIM Manager</strong>
                    <span class="badge  text-primary">5 places</span>
                </div>
                <small>15-19 Juillet 2025 • Casablanca</small>
            </div>
            <div class="session-item mb-3 pb-3 border-bottom border-white-50">
                <div class="d-flex justify-content-between">
                    <strong>Revit Architecture</strong>
                    <span class="badge  text-primary">8 places</span>
                </div>
                <small>22-24 Juillet 2025 • Rabat</small>
            </div>
            <div class="session-item mb-3">
                <div class="d-flex justify-content-between">
                    <strong>Navisworks</strong>
                    <span class="badge  text-primary">6 places</span>
                </div>
                <small>05-07 Août 2025 • En ligne</small>
            </div>
            <a href="{{ route('contact') }}" class="btn btn-light btn-sm w-100">
                S'inscrire aux formations
            </a>
        </div>

        <!-- Contact Formation -->
        <div class="content-section ">
            <h4 class="text-primary">Formation Sur Mesure</h4>
            <p class="small">Nous concevons des programmes adaptés à vos besoins spécifiques.</p>
            <ul class="list-unstyled small">
                <li><i class="fa fa-check text-success me-2"></i>Intra-entreprise</li>
                <li><i class="fa fa-check text-success me-2"></i>Contenu personnalisé</li>
                <li><i class="fa fa-check text-success me-2"></i>Planning flexible</li>
                <li><i class="fa fa-check text-success me-2"></i>Suivi post-formation</li>
            </ul>
            <a href="{{ route('contact') }}" class="btn btn-primary btn-sm w-100">
                Demander un devis
            </a>
        </div>
    </div>
</div>
@endsection