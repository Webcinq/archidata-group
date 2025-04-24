@extends('layout')
@section('content')
    <style>
        .image{
            width: 1000px;height: 400px;
        }
        @media (max-width: 768px) {
            .image{
                width: 350px;height: 300px;
            }
        }
    </style>
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Service Détail</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Transparence</li>
                </ol>
            </nav>
        </div>
    </div>
    <div style="padding: 0 40px; text-align: center;">
        <img class="image"   src="{{asset('img/image1.png')}}" alt="">
        <br><br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="transparence-section">
                    <h2 class="text-primary text-center mb-5">TRANSPARENCE</h2>
                    
                    <div class="process-steps">
                        <div class="step-item mb-4">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h4>Un environnement de données commun (CDE) collaboratif</h4>
                                <p class="step-description">Garantissant une gestion fluide et un accès instantané aux informations essentielles du projet.</p>
                            </div>
                        </div>
                        
                        <div class="step-item">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h4>Une communication claire entre toutes les parties prenantes</h4>
                                <p class="step-description">Pour éviter les imprévus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
        
            </div>
            <div class="col-lg-3"></div>
        </div>

    </div>
    <style>
        .transparence-section {
            margin-bottom: 30px;
        }
        
        .text-primary {
            color: #1a4b99;
            font-weight: bold;
        }
        
        .process-steps {
            position: relative;
        }
        
        .process-steps:before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 20px;
            width: 4px;
            background: #f0f0f0;
            z-index: -1;
        }
        
        .step-item {
            display: flex;
            align-items: flex-start;
            position: relative;
        }
        
        .step-number {
            width: 40px;
            height: 40px;
            background-color: #1a4b99;
            color: white;
            border-radius: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 20px;
            margin-right: 15px;
            position: relative;
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
        }
        
        .step-content {
            flex: 1;
            padding-bottom: 30px;
        }
        
        .step-content h4 {
            margin-top: 0;
            margin-bottom: 5px;
            color: #333;
            font-size: 18px;
        }
        
        .step-description {
            margin: 0;
            color: #333;
        }
    </style>
@endsection
