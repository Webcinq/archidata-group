@extends('layout')
@section('content')
<style>
.secteurs-hero {
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

.secteurs-content {
    background: linear-gradient(to bottom, 
        #0b2154 0%, 
        #1a1a2e 30%, 
        #16213e  70%, 
        #0b2154 100%);
    min-height: 100vh;
    padding: 80px 0;
}

.secteur-card {
    background: linear-gradient(145deg, 
        rgba(43, 40, 45, 0.95) 0%, 
        rgba(23, 34, 77, 0.9) 100%);
    border-radius: 20px;
    padding: 40px;
    margin-bottom: 30px;
    border: 1px solid rgba(90, 201, 144, 0.2);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    transition: all 0.3s ease;
    height: 100%;
}

.secteur-card:hover {
    transform: translateY(-5px);
    border-color: rgba(90, 201, 144, 0.4);
}

.secteur-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 25px;
    font-size: 2rem;
    background: linear-gradient(145deg, #5AC990, #4facfe);
    color: white;
    box-shadow: 0 10px 30px rgba(90, 201, 144, 0.3);
}

.secteur-features {
    list-style: none;
    padding: 0;
}

.secteur-features li {
    padding: 8px 0 8px 25px;
    position: relative;
    color: #e0e6ed;
}

.secteur-features li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: #5AC990;
    font-weight: bold;
}
</style>

<!-- Hero Section -->
<div class="secteurs-hero">
    <div class="container" style="margin-top: 116px;">
        <div class="hero-content">
         
            <h1 class="display-4 font-weight-bold mb-4">Secteurs d'Activités</h1>
            <p class="lead">Nos solutions BIM adaptées à tous les secteurs de la construction</p>
        </div>
    </div>
</div>

<!-- Content Section -->
<div class="secteurs-content">
    <div class="container">
        <div class="row g-4">
            <!-- Résidentiel -->
            <div class="col-md-6 col-lg-4">
                <div class="secteur-card">
                    <div class="secteur-icon">
                        <i class="fa fa-home"></i>
                    </div>
                    <h3 class="text-white mb-3">Résidentiel</h3>
                    <p class="text-light mb-3">Solutions BIM pour logements individuels et collectifs, rénovation énergétique et extension.</p>
                    <ul class="secteur-features">
                        <li>Maisons individuelles</li>
                        <li>Immeubles collectifs</li>
                        <li>Rénovation énergétique</li>
                        <li>Extensions et surélévations</li>
                    </ul>
                </div>
            </div>

            <!-- Tertiaire -->
            <div class="col-md-6 col-lg-4">
                <div class="secteur-card">
                    <div class="secteur-icon">
                        <i class="fa fa-building"></i>
                    </div>
                    <h3 class="text-white mb-3">Tertiaire</h3>
                    <p class="text-light mb-3">Bureaux, centres commerciaux et espaces de travail modernes avec gestion intelligente.</p>
                    <ul class="secteur-features">
                        <li>Bureaux et sièges sociaux</li>
                        <li>Centres commerciaux</li>
                        <li>Espaces de coworking</li>
                        <li>Hôtels et restaurants</li>
                    </ul>
                </div>
            </div>

            <!-- Industriel -->
            <div class="col-md-6 col-lg-4">
                <div class="secteur-card">
                    <div class="secteur-icon">
                        <i class="fa fa-industry"></i>
                    </div>
                    <h3 class="text-white mb-3">Industriel</h3>
                    <p class="text-light mb-3">Usines, entrepôts et installations industrielles avec maintenance prédictive.</p>
                    <ul class="secteur-features">
                        <li>Usines de production</li>
                        <li>Entrepôts logistiques</li>
                        <li>Sites pétrochimiques</li>
                        <li>Installations minières</li>
                    </ul>
                </div>
            </div>

            <!-- Hospitalier -->
            <div class="col-md-6 col-lg-4">
                <div class="secteur-card">
                    <div class="secteur-icon">
                        <i class="fa fa-hospital"></i>
                    </div>
                    <h3 class="text-white mb-3">Hospitalier</h3>
                    <p class="text-light mb-3">Établissements de santé avec gestion optimisée des équipements critiques.</p>
                    <ul class="secteur-features">
                        <li>Hôpitaux publics</li>
                        <li>Cliniques privées</li>
                        <li>Centres de soins</li>
                        <li>Laboratoires médicaux</li>
                    </ul>
                </div>
            </div>

            <!-- Éducatif -->
            <div class="col-md-6 col-lg-4">
                <div class="secteur-card">
                    <div class="secteur-icon">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-white mb-3">Éducatif</h3>
                    <p class="text-light mb-3">Écoles, universités et centres de formation avec espaces innovants.</p>
                    <ul class="secteur-features">
                        <li>Écoles primaires et secondaires</li>
                        <li>Universités et grandes écoles</li>
                        <li>Centres de formation</li>
                        <li>Bibliothèques et médiathèques</li>
                    </ul>
                </div>
            </div>

            <!-- Infrastructure -->
            <div class="col-md-6 col-lg-4">
                <div class="secteur-card">
                    <div class="secteur-icon">
                        <i class="fa fa-road"></i>
                    </div>
                    <h3 class="text-white mb-3">Infrastructure</h3>
                    <p class="text-light mb-3">Ponts, tunnels et ouvrages d'art avec modélisation CIM avancée.</p>
                    <ul class="secteur-features">
                        <li>Ponts et viaducs</li>
                        <li>Tunnels et métros</li>
                        <li>Aéroports et gares</li>
                        <li>Réseaux urbains</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="row mt-5">
            <div class="col-12 text-center">
                <div class="secteur-card">
                    <h3 class="text-white mb-4">Votre secteur n'est pas listé ?</h3>
                    <p class="text-light mb-4">Nos experts BIM s'adaptent à tous les domaines de la construction. Contactez-nous pour découvrir comment nous pouvons vous accompagner.</p>
                    <a href="{{ route('contact') }}" class="btn btn-lg" style="background-color: #5AC990; color: white;">
                        <i class="fa fa-envelope me-2"></i>Nous Contacter
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection