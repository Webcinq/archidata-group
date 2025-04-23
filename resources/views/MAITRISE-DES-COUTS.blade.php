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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Service Detail</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">MAÎTRISE DES COÛTS                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div style="padding: 0 30px; text-align: center;">
        <img class="image"   src="{{asset('img/image2.png')}}" alt="">
        <br><br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="maitrise-couts-section">
                    <h2 class="text-primary text-center mb-4">MAÎTRISE DES COÛTS</h2>
                    
                    <div class="cost-features">
                        <div class="feature-item mb-4">
                            <div class="feature-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><circle cx="12" cy="12" r="10"></circle><path d="M12 8v4l4 4"></path></svg>
                            </div>
                            <div class="feature-content">
                                <h4>Des technologies de pointe assurant un suivi quantitatif sans faille</h4>
                                <p class="feature-description">Et une gestion budgétaire rigoureuse.</p>
                            </div>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                            </div>
                            <div class="feature-content">
                                <h4>Une anticipation des besoins et des ressources</h4>
                                <p class="feature-description">Pour éviter les dépassements.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
           
            </div>
            <div class="col-lg-3"></div>
        </div>

    </div>

    <style>
        .maitrise-couts-section {
            margin-bottom: 30px;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
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
            background-color: #e9f0f8;
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
