{{-- resources/views/solutions/bim-data-management.blade.php --}}
@extends('solutions.layout')

@section('hero_image', '/img/solutions/service-1.jpeg')
@section('solution_name', 'BIM & DATA Management')
@section('solution_title', 'BIM & DATA Management')
@section('solution_subtitle', 'Pilotage global de la maquette numérique, coordination des équipes, gestion des livrables.')

@section('solution_content')
<div class="row">
    <div class="col-lg-8">
        <!-- Programmation Section -->
        <div class="content-section">
            <h2 class="section-title">Programmation</h2>
            <p class="lead">Grâce au BIM, la programmation devient une phase stratégique fondée sur des données fiables. Elle permet d'aligner les besoins fonctionnels, les contraintes techniques et les objectifs environnementaux dès les premières phases.</p>
            
            <h4 class=" mt-4 mb-3" style="color: #5AC990">Apports concrets du BIM & DATA dans la programmation :</h4>
            <ul class="advantages-list">
                <li>Visualisation immersive des futurs espaces dès la phase amont</li>
                <li>Simulations de flux, d'occupation et de scénarios d'usage</li>
                <li>Intégration de contraintes réglementaires et environnementales dès la conception</li>
            </ul>
        </div>

        <!-- Conception Section -->
        <div class="content-section">
            <h2 class="section-title">Conception</h2>
            <p>Le BIM transforme la conception en un processus collaboratif, visuel et itératif. Les équipes conçoivent directement dans un environnement 3D partagé, facilitant les arbitrages techniques, esthétiques et économiques en temps réel.</p>
            
            <h4 class=" mt-4 mb-3" style="color: #5AC990">Apports concrets du BIM dans la conception :</h4>
            <ul class="advantages-list">
                <li>Coordination interdisciplinaire facilitée (architectes, ingénieurs, BET)</li>
                <li>Réduction des erreurs grâce à la détection des clashs dès la phase APS</li>
                <li>Meilleure prise de décision grâce à la visualisation 3D et aux données enrichies</li>
            </ul>
        </div>

        <!-- Exécution Section -->
        <div class="content-section">
            <h2 class="section-title">Exécution</h2>
            <p>La phase d'exécution bénéficie pleinement du BIM en assurant un suivi précis, une anticipation des problèmes et une communication fluide entre les acteurs du chantier.</p>
            
            <h4 class=" mt-4 mb-3"style="color: #5AC990">Apports concrets du BIM pendant l'exécution :</h4>
            <ul class="advantages-list">
                <li>Suivi en temps réel de l'avancement via la maquette actualisée</li>
                <li>Communication facilitée entre MOE, entreprise et MOA grâce à un langage commun visuel</li>
                <li>Réduction des erreurs grâce aux plans d'exécution extraits directement de la maquette validée</li>
            </ul>
        </div>
    </div>

    <div class="col-lg-4">
        <!-- Stats Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">25%</div>
                <div>Réduction des surfaces perdues</div>
                <small>(projets tertiaires)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">40%</div>
                <div>Clashs évités en phase PRO</div>
                <small>(projets industriels complexes)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">30%</div>
                <div>Réduction des modifications tardives</div>
                <small>(retours projets hospitaliers)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">20%</div>
                <div>Réduction des délais de conception</div>
                <small>(projets tertiaires BIM)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">25%</div>
                <div>Diminution des coûts de modification</div>
                <small>(grâce à une conception anticipée)</small>
            </div>
            
            <div class="stat-card">
                <div class="stat-number">30%</div>
                <div>Amélioration productivité réunions</div>
                <small>(projets hospitaliers et industriels)</small>
            </div>
        </div>

        <!-- Contact Card -->
        <div class="content-section bg-light">
            <h4 class="">Besoin d'accompagnement ?</h4>
            <p>Nos experts BIM sont à votre disposition pour vous accompagner dans la mise en place de cette solution.</p>
            <a href="{{ route('contact') }}" class="btn  btn-block" style="background-color: #5AC990; color: white;">
                <i class="fa fa-phone me-2"></i>Nous contacter
            </a>
        </div>
        
        
    </div>
         <!-- Call to Action -->
     
</div>
@endsection