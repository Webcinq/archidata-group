{{-- resources/views/a-propos/vision-mission.blade.php --}}
@extends('layout')
@section('content')
<style>
/* Shared dark theme styles for all about pages */
.about-hero {
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

.about-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: 
        radial-gradient(circle, rgba(255,255,255,0.1) 2px, transparent 2px),
        radial-gradient(circle, rgba(79, 172, 254, 0.15) 1px, transparent 1px),
        radial-gradient(circle, rgba(90, 201, 144, 0.1) 1.5px, transparent 1.5px);
    background-size: 50px 50px, 25px 25px, 30px 30px;
    animation: particleFloat 20s linear infinite;
}

.about-content {
    background: linear-gradient(to bottom, 
        #0b2154 0%, 
        #1a1a2e 30%, 
        #16213e  70%, 
        #0b2154 100%);
    min-height: 100vh;
    padding: 80px 0;
    position: relative;
}

.about-section {
    margin-bottom: 60px;
    padding: 50px;
    background: linear-gradient(145deg, 
        rgba(43, 40, 45, 0.95) 0%, 
        rgba(23, 34, 77, 0.9) 100%);
    border-radius: 20px;
    box-shadow: 
        0 20px 60px rgba(0, 0, 0, 0.3),
        0 0 0 1px rgba(79, 172, 254, 0.1),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(90, 201, 144, 0.2);
    position: relative;
    overflow: hidden;
    animation: slideInUp 0.8s ease-out;
}

.section-title {
    color: #ffffff;
    font-weight: 700;
    margin-bottom: 25px;
    position: relative;
    padding-bottom: 15px;
    text-shadow: 0 0 20px rgba(90, 201, 144, 0.5);
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, 
        #4facfe 0%, 
        #5AC990 50%, 
        #00f2fe 100%);
    border-radius: 2px;
    box-shadow: 0 0 20px rgba(90, 201, 144, 0.6);
}

.pillar-card {
    background: linear-gradient(145deg, 
        rgba(23, 34, 77, 0.8) 0%, 
        rgba(43, 40, 45, 0.9) 100%);
    border-radius: 15px;
    padding: 30px;
    border: 1px solid rgba(79, 172, 254, 0.2);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
    height: 100%;
}

.pillar-card:hover {
    transform: translateY(-10px);
    border-color: rgba(90, 201, 144, 0.5);
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.3);
}

.pillar-icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    font-size: 1.5rem;
}

.expertise-list {
    list-style: none;
    padding: 0;
}

.expertise-list li {
    padding: 15px 0 15px 40px;
    border-bottom: 1px solid rgba(79, 172, 254, 0.2);
    position: relative;
    color: #e0e6ed;
    transition: all 0.3s ease;
}

.expertise-list li::before {
    content: '✓';
    position: absolute;
    left: 0;
    top: 15px;
    color: #5AC990;
    font-weight: bold;
    font-size: 18px;
    text-shadow: 0 0 10px rgba(90, 201, 144, 0.8);
}

.expertise-list li:hover {
    color: #ffffff;
    padding-left: 50px;
    background: linear-gradient(90deg, 
        rgba(90, 201, 144, 0.15) 0%, 
        rgba(79, 172, 254, 0.1) 50%,
        rgba(90, 201, 144, 0.05) 100%);
    border-radius: 10px;
    margin: 0 -10px;
    padding-right: 20px;
}
</style>

<!-- Hero Section -->
<div class="about-hero">
    <div class="container" style="margin-top: 116px">
        <div class="hero-content">
         
            <h1 class="display-4 font-weight-bold mb-4">Vision & Mission</h1>
            <p class="lead">ARCHIDATA AFRICA - Votre partenaire pour une gestion BIM maîtrisée, performante et durable</p>
        </div>
    </div>
</div>

<!-- Content Section -->
<div class="about-content">
    <div class="container">
        <!-- Mission Section -->
        <div class="about-section">
            <h2 class="section-title">Notre Mission</h2>
            <p class="text-light lead mb-4">ArchiData Africa est une société experte en management de projets BIM et en optimisation numérique du cycle de vie du bâtiment. Nous accompagnons les acteurs de la construction, de l'architecture et de l'ingénierie dans la mise en œuvre de solutions BIM avancées, répondant aux standards internationaux et aux exigences locales.</p>
            
            <p class="text-light lead mb-4">Grâce à une approche intégrée du BIM, combinée à une expertise en data management et en automatisation intelligente, ArchiData Africa améliore la qualité, la coordination et la performance globale des projets, de la conception à l'exploitation.</p>
        </div>

        <!-- Nos Engagements Section -->
        <div class="about-section">
            <h2 class="section-title">Nous nous engageons à :</h2>
            <ul class="expertise-list">
                <li>Structurer les processus BIM avec rigueur, transparence et conformité</li>
                <li>Assurer la production, le contrôle qualité et l'interopérabilité des maquettes numériques</li>
                <li>Exploiter les données projet pour fluidifier les échanges et anticiper les risques</li>
                <li>Favoriser la collaboration interdisciplinaire à travers des workflows efficaces et partagés</li>
            </ul>
        </div>

        <!-- Expertises Clés Section -->
        <div class="about-section">
            <h2 class="section-title">Nos Expertises Clés</h2>
            <div class="row">
                <div class="col-md-6">
                    <ul class="expertise-list">
                        <li>Pilotage BIM & élaboration des conventions</li>
                        <li>Data Management</li>
                        <li>Clash detection & contrôle qualité des maquettes</li>
                        <li>Gestion de l'environnement commun de données (CDE)</li>
                        <li>Préparation des maquettes DOE et des livrables exploitables</li>
                        <li>As-Built</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="expertise-list">
                        <li>Jumeaux Numérique</li>
                        <li>Dashboard Power BI & Monitoring des jumeaux numériques</li>
                        <li>Contrôle GTB et GTC</li>
                        <li>Automatisation & analyse de données (scripts, IA)</li>
                        <li>Création de plugin & Intelligence Artificielle</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Les 3 Piliers Section -->
        <div class="about-section">
            <h2 class="section-title">Les 3 Piliers d'ArchiData Africa</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="pillar-card">
                        <div class="pillar-icon bg-primary">
                            <i class="fa fa-eye text-white"></i>
                        </div>
                        <h4 class="text-white mb-3">Transparence</h4>
                        <p class="text-light">Communication claire, partage d'informations en temps réel et accès permanent aux données du projet.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pillar-card">
                        <div class="pillar-icon" style="background: linear-gradient(145deg, #5AC990, #4facfe);">
                            <i class="fa fa-chart-line text-white"></i>
                        </div>
                        <h4 class="text-white mb-3">Maîtrise des Coûts et des Délais</h4>
                        <p class="text-light">Suivi quantitatif rigoureux et gestion anticipée des ressources et des risques pour garantir la performance.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pillar-card">
                        <div class="pillar-icon" style="background: linear-gradient(145deg, #4facfe, #00f2fe);">
                            <i class="fa fa-brain text-white"></i>
                        </div>
                        <h4 class="text-white mb-3">BIM Intelligence & IA</h4>
                        <p class="text-light">Simulations avancées, visualisation prédictive et exploitation des données pour une prise de décision optimisée.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Équipe Section -->
        <div class="about-section">
            <h2 class="section-title">Notre Équipe</h2>
            <p class="text-light">ArchiData Africa s'appuie sur une équipe pluridisciplinaire, à la croisée de l'ingénierie, du digital et de la gestion de projet, pour accompagner efficacement maîtres d'ouvrage, maîtres d'œuvre et entreprises à chaque étape clé.</p>
        </div>
    </div>
</div>
@endsection