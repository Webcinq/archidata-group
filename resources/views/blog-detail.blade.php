@extends('layout')
@section('content')
    <style>
        .image {
            width: 1000px;
            height: 500px;
            object-fit: cover;
        }
        
        @media (max-width: 768px) {
            .image {
                width: 350px;
                height: 300px;
            }
        }
        
        .service-detail {
            margin-bottom: 50px;
            padding: 30px;
            background-color: #f8f9fa;
            border-radius: 10px;
        }
        
        .service-detail h3 {
            color: #0B2154;
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        .service-detail p {
            text-align: justify;
            margin-bottom: 15px;
            line-height: 1.6;
        }
        
        .service-detail ul {
            margin-bottom: 20px;
            text-align: left;
        }
        
        .service-detail ul li {
            margin-bottom: 10px;
        }
    </style>
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Nos Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    
    <div class="container">
        <!-- Introduction -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="mb-4">Nos Services Professionnels</h2>
                <p>
                    Notre entreprise propose une gamme complète de services BIM (Building Information Modeling) pour vous accompagner dans tous vos projets de construction et de gestion de bâtiments. Découvrez ci-dessous nos services spécialisés.
                </p>
            </div>
        </div>
        
        <!-- Service 1: BIM Management et Synthèse -->
        <div class="service-detail" id="bim-management">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img class="img-fluid w-100 rounded" src="{{asset('img/service-1.png')}}" alt="BIM Management et Synthèse">
                </div>
                <div class="col-lg-8">
                    <h3>BIM Management et Synthèse</h3>
                    <p>
                        Notre service de BIM Management et Synthèse offre une coordination complète de vos projets de construction en utilisant la modélisation des informations du bâtiment. Nous assurons la mise en place d'une méthodologie BIM efficace, adaptée à vos besoins spécifiques et conforme aux standards internationaux.
                    </p>
                    <p>
                        Grâce à notre expertise, nous identifions et résolvons les conflits potentiels avant même le début de la construction, ce qui permet de réduire considérablement les coûts et les délais du projet.
                    </p>
                    <ul>
                        <li><strong>Coordination BIM :</strong> Gestion des maquettes numériques entre les différents corps de métier</li>
                        <li><strong>Détection de clash :</strong> Identification et résolution des conflits entre les différents systèmes du bâtiment</li>
                        <li><strong>Mise en place de protocoles BIM :</strong> Élaboration de conventions BIM sur mesure pour vos projets</li>
                        <li><strong>Synthèse technique :</strong> Intégration de toutes les disciplines dans un modèle cohérent</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Service 2: Conseil et Formation -->
        <div class="service-detail" id="conseil-formation">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Conseil et Formation</h3>
                    <p>
                        Notre équipe d'experts vous accompagne dans votre transition vers le BIM grâce à des services de conseil stratégique et des programmes de formation adaptés à tous les niveaux de compétence. Nous vous aidons à définir et mettre en œuvre une stratégie BIM qui correspond parfaitement à vos objectifs d'entreprise.
                    </p>
                    <p>
                        Que vous soyez débutant ou utilisateur avancé des technologies BIM, nos formations sur mesure permettent à vos équipes de maîtriser les outils et méthodes nécessaires pour exceller dans leurs projets.
                    </p>
                    <ul>
                        <li><strong>Audit et diagnostic BIM :</strong> Évaluation de votre maturité BIM et recommandations personnalisées</li>
                        <li><strong>Formation aux logiciels BIM :</strong> Formations spécialisées sur Revit, Navisworks, BIM 360 et autres outils</li>
                        <li><strong>Accompagnement au changement :</strong> Mise en place de nouvelles méthodes de travail collaboratives</li>
                        <li><strong>Développement de compétences :</strong> Programmes de formation continue pour vos équipes</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid w-100 rounded" src="{{asset('img/service-2.png')}}" alt="Conseil et Formation">
                </div>
            </div>
        </div>
        
        <!-- Service 3: BIM GEM et Modélisation -->
        <div class="service-detail" id="bim-gem">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img class="img-fluid w-100 rounded" src="{{asset('img/service-3.png')}}" alt="BIM GEM et Modélisation">
                </div>
                <div class="col-lg-8">
                    <h3>BIM GEM et Modélisation</h3>
                    <p>
                        Notre service de BIM GEM (Gestion-Exploitation-Maintenance) et Modélisation vous aide à tirer pleinement parti de vos modèles BIM tout au long du cycle de vie de votre bâtiment. Nous créons des modèles 3D détaillés et riches en informations qui servent de base fiable pour la gestion efficace de vos actifs immobiliers.
                    </p>
                    <p>
                        Nous transformons vos bâtiments existants en maquettes numériques précises grâce à des techniques de relevé avancées, facilitant ainsi leur maintenance et leur rénovation future.
                    </p>
                    <ul>
                        <li><strong>Modélisation BIM :</strong> Création de maquettes numériques précises et détaillées</li>
                        <li><strong>Scan to BIM :</strong> Conversion de nuages de points en modèles BIM exploitables</li>
                        <li><strong>Enrichissement de données :</strong> Intégration d'informations techniques et de maintenance dans les maquettes</li>
                        <li><strong>Préparation de livrables DOE numériques :</strong> Documentation complète pour l'exploitation du bâtiment</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Service 4: Facility Management -->
        <div class="service-detail" id="facility-management">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Facility Management</h3>
                    <p>
                        Notre service de Facility Management basé sur le BIM vous permet d'optimiser la gestion quotidienne de vos installations et de réduire significativement les coûts d'exploitation. Nous mettons en place des systèmes intelligents qui facilitent la maintenance préventive et corrective de vos bâtiments.
                    </p>
                    <p>
                        Grâce à l'intégration des données BIM dans vos processus de gestion, vous bénéficiez d'un accès instantané à toutes les informations techniques de vos installations, ce qui permet une prise de décision rapide et éclairée.
                    </p>
                    <ul>
                        <li><strong>GMAO connectée au BIM :</strong> Gestion de la maintenance assistée par ordinateur liée aux maquettes numériques</li>
                        <li><strong>Tableaux de bord de performance :</strong> Suivi en temps réel des indicateurs clés de vos bâtiments</li>
                        <li><strong>Gestion des espaces :</strong> Optimisation de l'utilisation des surfaces et planification des déménagements</li>
                        <li><strong>Gestion des actifs :</strong> Suivi du cycle de vie des équipements et planification des remplacements</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid w-100 rounded" src="{{asset('img/service-1.png')}}" alt="Facility Management">
                </div>
            </div>
        </div>
        
        <!-- Call to Action -->
        <div class="row my-5">
            <div class="col-12 text-center">
                <h3 class="mb-4">Prêt à Transformer Vos Projets de Construction?</h3>
                <p class="mb-4">
                    Nos experts sont à votre disposition pour vous accompagner dans tous vos projets BIM, 
                    de la conception à l'exploitation de vos bâtiments.
                </p>
                <a href="{{route('contact')}}" class="btn btn-primary py-3 px-5">Contactez-nous</a>
            </div>
        </div>
    </div>
@endsection