{{-- resources/views/auth/login.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connexion Admin - ArchiData Africa</title>
    
    <!-- Custom fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #0B2154;
            --secondary-color: #4dd0a7;
            --accent-color: #5AC990;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(135deg, 
                var(--primary-color) 0%, 
                #1a365d 50%, 
                var(--accent-color) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            backdrop-filter: blur(10px);
        }

        .login-brand {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
            padding: 60px 40px;
            text-align: center;
        }

        .login-brand h1 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .login-brand p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .login-form {
            padding: 60px 40px;
        }

        .form-floating {
            margin-bottom: 20px;
        }

        .form-control {
            border: 2px solid #e3e6f0;
            border-radius: 10px;
            padding: 15px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.2rem rgba(90, 201, 144, 0.25);
        }

        .btn-login {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            border: none;
            border-radius: 50px;
            padding: 15px 40px;
            font-weight: 600;
            font-size: 1.1rem;
            color: white;
            width: 100%;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(90, 201, 144, 0.4);
            color: white;
        }

        .alert {
            border-radius: 10px;
            border: none;
        }

        .form-check-input:checked {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
        }

        .back-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .back-link:hover {
            color: var(--accent-color);
        }

        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .particle:nth-child(1) {
            width: 20px;
            height: 20px;
            left: 10%;
            animation-delay: 0s;
        }

        .particle:nth-child(2) {
            width: 15px;
            height: 15px;
            left: 20%;
            animation-delay: 2s;
        }

        .particle:nth-child(3) {
            width: 25px;
            height: 25px;
            left: 70%;
            animation-delay: 4s;
        }

        .particle:nth-child(4) {
            width: 18px;
            height: 18px;
            left: 90%;
            animation-delay: 1s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        @media (max-width: 768px) {
            .login-brand {
                padding: 40px 20px;
            }
            
            .login-brand h1 {
                font-size: 2rem;
            }
            
            .login-form {
                padding: 40px 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Particles Background -->
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="login-container">
                    <div class="row no-gutters">
                        <!-- Brand Section -->
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="login-brand">
                                <div class="mb-4">
                                    <i class="fas fa-building fa-3x mb-3"></i>
                                </div>
                                <h1>ArchiData</h1>
                                <p class="mb-4">Administration</p>
                                <p class="small">
                                    Solutions BIM & Data Management<br>
                                    pour la construction intelligente
                                </p>
                                <div class="mt-5">
                                    <a href="{{ route('index') }}" class="back-link">
                                        <i class="fas fa-arrow-left me-2"></i>
                                        Retour au site
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Login Form -->
                        <div class="col-lg-6">
                            <div class="login-form">
                                <div class="text-center mb-4">
                                    <h3 class="text-gray-900 mb-2">Connexion Administrateur</h3>
                                    <p class="text-muted">Connectez-vous pour accéder au dashboard</p>
                                </div>

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <i class="fas fa-exclamation-triangle me-2"></i>
                                        {{ $errors->first() }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    
                                    <!-- Email -->
                                    <div class="form-floating">
                                        <input type="email" 
                                               class="form-control @error('email') is-invalid @enderror" 
                                               id="email" 
                                               name="email" 
                                               placeholder="nom@exemple.com"
                                               value="{{ old('email') }}" 
                                               required 
                                               autocomplete="email" 
                                               autofocus>
                                        <label for="email">
                                            <i class="fas fa-envelope me-2"></i>Adresse Email
                                        </label>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Password -->
                                    <div class="form-floating">
                                        <input type="password" 
                                               class="form-control @error('password') is-invalid @enderror" 
                                               id="password" 
                                               name="password" 
                                               placeholder="Mot de passe"
                                               required 
                                               autocomplete="current-password">
                                        <label for="password">
                                            <i class="fas fa-lock me-2"></i>Mot de Passe
                                        </label>
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Remember Me -->
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" 
                                               type="checkbox" 
                                               name="remember" 
                                               id="remember" 
                                               {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            Se souvenir de moi
                                        </label>
                                    </div>

                                    <!-- Submit Button -->
                                    <button type="submit" class="btn btn-login">
                                        <i class="fas fa-sign-in-alt me-2"></i>
                                        Se Connecter
                                    </button>
                                </form>

                                <!-- Mobile back link -->
                                <div class="text-center mt-4 d-lg-none">
                                    <a href="{{ route('index') }}" class="back-link">
                                        <i class="fas fa-arrow-left me-2"></i>
                                        Retour au site
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>