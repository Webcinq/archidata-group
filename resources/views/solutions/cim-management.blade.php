@extends('solutions.layout')

@section('hero_image', '/img/solutions/service-6.png')
@section('solution_name', 'CIM Management')
@section('solution_title', 'CIM MANAGEMENT')
@section('solution_subtitle', 'Le BIM à l\'échelle du territoire pour une ville plus intelligente et durable')

@section('solution_content')
<div class="row">
    <div class="col-lg-8">
        <!-- Introduction Section -->
        <div class="content-section">
            <h2 class="section-title">🚀 Pourquoi c'est essentiel</h2>
            <p class="lead">Le <strong>CIM (City Information Modeling)</strong> permet de piloter des projets urbains et d'infrastructure grâce à une modélisation intelligente et intégrée. Il répond aux enjeux de durabilité, de mobilité, d'infrastructure verte, et d'anticipation des usages futurs dans les villes et territoires.</p>
        </div>

        <!-- Solutions Section -->
        <div class="content-section">
            <h2 class="section-title">💡 Nos solutions concrètes</h2>
            <ul class="advantages-list">
                <li>Modélisation BIM des infrastructures (voiries, réseaux, transports, etc.)</li>
                <li>Analyse spatiale et simulations d'impacts urbains</li>
                <li>Visualisation 3D des projets à l'échelle macro (quartiers, villes)</li>
                <li>Intégration SIG / BIM (SIG-BIM convergence)</li>
                <li>Structuration de la donnée pour l'urbanisme prédictif et la smart city</li>
            </ul>
        </div>

        <!-- Atouts Section -->
        <div class="content-section">
            <h2 class="section-title">✅ Atouts majeurs</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="atout-card p-4 border rounded text-center h-100">
                        <i class="fa fa-users fa-3x text-primary mb-3"></i>
                        <h6>Aide à la décision</h6>
                        <p class="small text-muted">Pour les autorités publiques et les aménageurs</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="atout-card p-4 border rounded text-center h-100">
                        <i class="fa fa-comments fa-3x text-primary mb-3"></i>
                        <h6>Communication citoyenne</h6>
                        <p class="small text-muted">Grâce à des visualisations pédagogiques</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="atout-card p-4 border rounded text-center h-100">
                        <i class="fa fa-sitemap fa-3x text-primary mb-3"></i>
                        <h6>Coordination multi-acteurs</h6>
                        <p class="small text-muted">Urbanistes, promoteurs, exploitants</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cas d'usage Section -->
        <div class="content-section">
            <h2 class="section-title">Projets de référence</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="case-study p-4  rounded">
                        <h5 class="text-primary">Grand Paris Express</h5>
                        <p class="small">Modélisation BIM de 68 gares et 200 km de nouvelles lignes de métro</p>
                        <div class="metrics" style="
    display: flex;
    gap: 10px;
    flex-direction: column;
">
                            <span class="badge bg-success">-25% conflits réseaux</span>
                            <span class="badge bg-info">+40% rapidité instruction</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="case-study p-4  rounded">
                        <h5 class="text-primary">Smart City Casablanca</h5>
                        <p class="small">Jumeau numérique urbain pour l'optimisation des flux et services</p>
                        <div class="metrics" style="
    display: flex;
    gap: 10px;
    flex-direction: column;
">
                            <span class="badge bg-warning">-30% temps déplacements</span>
                            <span class="badge bg-primary">+50% efficacité services</span>
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
                <div class="stat-number">35%</div>
                <div>Réduction des doublons</div>
                <small>(projets d'infrastructure)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">40%</div>
                <div>Rapidité d'instruction</div>
                <small>(validation projets urbains)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">25%</div>
                <div>Réduction conflits réseaux</div>
                <small>(projets de voirie)</small>
            </div>
        </div>

        <!-- Technologies -->
        <div class="content-section ">
            <h4 class="text-primary">Technologies CIM</h4>
            <div class="row text-center">
                <div class="col-6 mb-3">
                    <i class="fa fa-globe fa-2x text-primary mb-2"></i>
                    <div class="small font-weight-bold">SIG</div>
                </div>
                <div class="col-6 mb-3">
                    <i class="fa fa-cube fa-2x text-primary mb-2"></i>
                    <div class="small font-weight-bold">BIM</div>
                </div>
                <div class="col-6 mb-3">
                    <i class="fa fa-satellite fa-2x text-primary mb-2"></i>
                    <div class="small font-weight-bold">LiDAR</div>
                </div>
                <div class="col-6 mb-3">
                    <i class="fa fa-brain fa-2x text-primary mb-2"></i>
                    <div class="small font-weight-bold">IA</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection