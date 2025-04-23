@extends('layout')
@section('content')
    <style>
        .custom-image {
            max-width: 100%;
            height: auto;
        }
        
        @media (max-width: 768px) {
            .custom-image {
                max-width: 350px;
                margin-bottom: 30px;
            }
            .side-by-side-container {
                flex-direction: column;
            }
        }
    </style>
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Service Detail</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">MAÎTRISE DES DÉLAIS </li>
                </ol>
            </nav>
        </div>
    </div>
    
    <div class="container py-5">
        <div class="row side-by-side-container d-flex align-items-center">
            <!-- Image à gauche -->
            <div class="col-lg-5 mb-4 mb-lg-0">
                <img class="custom-image" src="{{asset('img/image.png')}}" alt="Maîtrise des délais">
            </div>
            
            <!-- Contenu à droite -->
            <div class="col-lg-7">
                <div class="maitrise-delais-section">
                    <h2 class="text-primary text-center mb-4">MAÎTRISE DES DÉLAIS</h2>
                    
                    <div class="delay-features">
                        <div class="feature-item mb-4">
                            <div class="feature-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            </div>
                            <div class="feature-content">
                                <h4>Construire avant de construire</h4>
                                <p class="feature-description">Une simulation et un contrôle des modèles BIM garantissant un chantier sans erreurs ni clashs.</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                            </div>
                            <div class="feature-content">
                                <h4>Un scénario de Gestion - Exploitation Maintenance (GEM) et de Facility Management (FM) défini dès la conception</h4>
                                <p class="feature-description">Assurant une exploitation optimisée sur le long terme.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        .maitrise-delais-section {
            margin-bottom: 30px;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
        }
        
        .text-primary {
            color: #0047ab;
            font-weight: bold;
        }
        
        .feature-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }
        
        .feature-icon {
            width: 40px;
            height: 40px;
            background-color: #e6f0fa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: #0047ab;
            flex-shrink: 0;
        }
        
        .feature-content {
            flex: 1;
        }
        
        .feature-content h4 {
            margin-top: 0;
            margin-bottom: 5px;
            color: #333;
            font-size: 18px;
            font-weight: 600;
        }
        
        .feature-description {
            margin: 0;
            color: #555;
            font-size: 14px;
        }
    </style>
@endsection