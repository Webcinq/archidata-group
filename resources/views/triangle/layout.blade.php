{{-- resources/views/triangle/layout.blade.php --}}
@extends('layout')

@section('content')
<style>
    /* Animations et transitions globales */
    * {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Hero Section - Style Dark */
    .solution-hero {
        min-height: 100vh;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        position: relative;
        display: flex;
        align-items: center;
        overflow: hidden;
    }
    
   .solution-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, 
        rgba(11, 33, 84, 0.5) 0%, 
        rgba(18, 70, 152, 0.45) 30%, 
        rgba(90, 201, 144, 0.35) 60%,
        rgba(43, 40, 45, 0.4) 100%);
    animation: gradientShift 8s ease-in-out infinite alternate;
}

@keyframes gradientShift {
    0% { 
        background: linear-gradient(135deg, 
            rgba(11, 33, 84, 0.5) 0%, 
            rgba(18, 70, 152, 0.45) 30%, 
            rgba(90, 201, 144, 0.35) 60%,
            rgba(43, 40, 45, 0.4) 100%);
    }
    100% { 
        background: linear-gradient(135deg, 
            rgba(18, 70, 152, 0.45) 0%, 
            rgba(90, 201, 144, 0.35) 40%,
            rgba(43, 40, 45, 0.4) 70%, 
            rgba(11, 33, 84, 0.5) 100%);
    }
}

.solution-hero::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: 
        radial-gradient(circle, rgba(255,255,255,0.05) 2px, transparent 2px),
        radial-gradient(circle, rgba(79, 172, 254, 0.08) 1px, transparent 1px),
        radial-gradient(circle, rgba(90, 201, 144, 0.06) 1.5px, transparent 1.5px);
    background-size: 50px 50px, 25px 25px;
    animation: particleFloat 20s linear infinite;
    z-index: 1;
}


    @keyframes particleFloat {
        0% { background-position: 0 0, 0 0; }
        100% { background-position: 50px 50px, 25px 25px; }
    }
    
    .hero-content {
        position: relative;
        z-index: 3;
        color: white;
        animation: fadeInUp 1s ease-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Corps principal - Thème dark */
    .solution-content {
        padding: 80px 0;
        background: linear-gradient(to bottom, 
            #0b2154 0%, 
            #1a1a2e 30%, 
            #16213e  70%, 
            #0b2154 100%);
        min-height: 100vh;
        position: relative;
    }

    .solution-content::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: 
            radial-gradient(circle at 20% 20%, rgba(79, 172, 254, 0.05) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, rgba(18, 70, 152, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 50% 10%, rgba(90, 201, 144, 0.06) 0%, transparent 50%);
        pointer-events: none;
    }
    
    /* Sections de contenu - Style dark élégant */
    .content-section {
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
        border: 1px solid rgba(79, 172, 254, 0.2);
        position: relative;
        overflow: hidden;
        animation: slideInUp 0.8s ease-out;
    }

    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .content-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, 
            transparent, 
            rgba(79, 172, 254, 0.1), 
            transparent);
        transition: left 0.8s ease;
    }

    .content-section:hover::before {
        left: 100%;
    }
    
    .content-section:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 
            0 30px 80px rgba(0, 0, 0, 0.4),
            0 0 0 1px rgba(79, 172, 254, 0.3),
            inset 0 1px 0 rgba(255, 255, 255, 0.2);
    }
    
    /* Titres avec effet néon */
    .section-title {
        color: #ffffff;
        font-weight: 700;
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 15px;
        text-shadow: 0 0 20px rgba(79, 172, 254, 0.5);
        animation: titleGlow 3s ease-in-out infinite alternate;
    }

    @keyframes titleGlow {
        0% { text-shadow: 0 0 20px rgba(79, 172, 254, 0.5); }
        100% { text-shadow: 0 0 30px rgba(79, 172, 254, 0.8), 0 0 40px rgba(79, 172, 254, 0.3); }
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
        animation: lineExpand 2s ease-in-out infinite alternate;
        box-shadow: 0 0 20px rgba(90, 201, 144, 0.6);
    }

    @keyframes lineExpand {
        0% { width: 60px; box-shadow: 0 0 20px rgba(79, 172, 254, 0.6); }
        100% { width: 120px; box-shadow: 0 0 25px rgba(90, 201, 144, 0.8); }
    }

    /* Texte et contenu */
    .content-section p,
    .content-section .lead {
        color: #e0e6ed;
        line-height: 1.8;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    }

    .content-section .lead {
        font-size: 1.1rem;
        color: #b8c5d1;
    }
    
    /* Listes avec animations */
    .advantages-list {
        list-style: none;
        padding: 0;
    }
    
    .advantages-list li {
        padding: 15px 0 15px 40px;
        border-bottom: 1px solid rgba(79, 172, 254, 0.2);
        position: relative;
        color: #e0e6ed;
        transform: translateX(-20px);
        opacity: 0;
        animation: listItemSlide 0.6s ease-out forwards;
    }

    .advantages-list li:nth-child(1) { animation-delay: 0.1s; }
    .advantages-list li:nth-child(2) { animation-delay: 0.2s; }
    .advantages-list li:nth-child(3) { animation-delay: 0.3s; }
    .advantages-list li:nth-child(4) { animation-delay: 0.4s; }
    .advantages-list li:nth-child(5) { animation-delay: 0.5s; }

    @keyframes listItemSlide {
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    .advantages-list li::before {
        content: '✓';
        position: absolute;
        left: 0;
        top: 15px;
        color: #5AC990;
        font-weight: bold;
        font-size: 18px;
        text-shadow: 0 0 10px rgba(90, 201, 144, 0.8);
        animation: checkPulse 2s ease-in-out infinite;
    }

    @keyframes checkPulse {
        0%, 100% { transform: scale(1); text-shadow: 0 0 10px rgba(90, 201, 144, 0.8); }
        50% { transform: scale(1.2); text-shadow: 0 0 20px rgba(90, 201, 144, 1); }
    }

    .advantages-list li:hover {
        color: #ffffff;
        padding-left: 50px;
        background: linear-gradient(90deg, 
            rgba(90, 201, 144, 0.15) 0%, 
            rgba(79, 172, 254, 0.1) 50%,
            rgba(90, 201, 144, 0.05) 100%);
        border-radius: 10px;
        margin: 0 -10px;
        padding-left: 50px;
        padding-right: 20px;
        border-color: rgba(90, 201, 144, 0.3);
    }
    
    /* Grille de statistiques - Style cyberpunk */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin: 50px 0;
    }
    
    .stat-card {
        background: linear-gradient(145deg, 
            rgba(11, 33, 84, 0.9) 0%, 
            rgba(23, 34, 77, 0.8) 50%,
            rgba(43, 40, 45, 0.9) 100%);
        color: white;
        padding: 40px 30px;
        border-radius: 20px;
        text-align: center;
        border: 2px solid rgba(79, 172, 254, 0.3);
        box-shadow: 
            0 20px 40px rgba(0, 0, 0, 0.3),
            inset 0 1px 0 rgba(255, 255, 255, 0.1);
        position: relative;
        overflow: hidden;
        animation: cardFloat 6s ease-in-out infinite;
    }

    .stat-card:nth-child(even) {
        animation-delay: -3s;
    }

    @keyframes cardFloat {
        0%, 100% { transform: translateY(0) rotateY(0deg); }
        50% { transform: translateY(-10px) rotateY(2deg); }
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, 
            transparent, 
            rgba(79, 172, 254, 0.2), 
            transparent);
        transition: left 1s ease;
    }
    
    .stat-card:hover::before {
        left: 100%;
    }

    .stat-card:hover {
        transform: translateY(-15px) scale(1.05);
        border-color: rgba(79, 172, 254, 0.8);
        box-shadow: 
            0 30px 60px rgba(0, 0, 0, 0.4),
            0 0 30px rgba(79, 172, 254, 0.5),
            inset 0 1px 0 rgba(255, 255, 255, 0.2);
    }
    
    .stat-number {
        font-size: 3rem;
        font-weight: 800;
        margin-bottom: 15px;
        background: linear-gradient(45deg, #4facfe, #5AC990, #00f2fe);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-shadow: 0 0 30px rgba(90, 201, 144, 0.6);
        animation: numberPulse 3s ease-in-out infinite;
    }

    @keyframes numberPulse {
        0%, 100% { 
            transform: scale(1); 
            filter: drop-shadow(0 0 20px rgba(90, 201, 144, 0.5));
        }
        50% { 
            transform: scale(1.1); 
            filter: drop-shadow(0 0 30px rgba(90, 201, 144, 0.8));
        }
    }

    /* Breadcrumb dark */
    .breadcrumb-custom {
        background: transparent;
        padding: 0;
    }
    
    .breadcrumb-custom .breadcrumb-item + .breadcrumb-item::before {
        content: "›";
        color: rgba(255,255,255,0.7);
        font-size: 1.2rem;
        text-shadow: 0 0 10px rgba(79, 172, 254, 0.5);
    }

    .breadcrumb-custom a {
        color: rgba(255,255,255,0.8);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .breadcrumb-custom a:hover {
        color: #4facfe;
        text-shadow: 0 0 10px rgba(79, 172, 254, 0.8);
    }
    
    /* CTA Section - Style futuriste */
    .cta-section {
        background: linear-gradient(135deg, 
            rgba(11, 33, 84, 0.95) 0%, 
            rgba(18, 70, 152, 0.9) 50%, 
            rgba(43, 40, 45, 0.95) 100%);
        padding: 80px 0;
        text-align: center;
        color: white;
        margin-top: 60px;
        border-radius: 30px;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(79, 172, 254, 0.3);
    }

    .cta-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: 
            radial-gradient(circle at 30% 40%, rgba(79, 172, 254, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 70% 60%, rgba(0, 242, 254, 0.08) 0%, transparent 50%);
        animation: ctaGlow 8s ease-in-out infinite alternate;
    }

    @keyframes ctaGlow {
        0% { opacity: 0.5; }
        100% { opacity: 1; }
    }
    
    .btn-cta {
        background: linear-gradient(145deg, 
            rgba(90, 201, 144, 0.9) 0%, 
            rgba(79, 172, 254, 0.8) 50%,
            rgba(0, 242, 254, 0.8) 100%);
        color: #0b2154;
        border: 2px solid rgba(90, 201, 144, 0.5);
        padding: 18px 50px;
        border-radius: 50px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        position: relative;
        overflow: hidden;
        box-shadow: 
            0 10px 30px rgba(90, 201, 144, 0.3),
            inset 0 1px 0 rgba(255, 255, 255, 0.2);
    }

    .btn-cta::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, 
            transparent, 
            rgba(255, 255, 255, 0.3), 
            transparent);
        transition: left 0.6s ease;
    }

    .btn-cta:hover::before {
        left: 100%;
    }
    
    .btn-cta:hover {
        background: linear-gradient(145deg, 
            rgba(90, 201, 144, 1) 0%, 
            rgba(0, 242, 254, 0.9) 50%,
            rgba(79, 172, 254, 0.8) 100%);
        color: #ffffff;
        transform: translateY(-5px) scale(1.05);
        box-shadow: 
            0 20px 50px rgba(90, 201, 144, 0.5),
            0 0 30px rgba(90, 201, 144, 0.8),
            inset 0 1px 0 rgba(255, 255, 255, 0.3);
        border-color: rgba(90, 201, 144, 0.8);
    }

    /* Alertes et badges dark */
    .alert {
        background: linear-gradient(145deg, 
            rgba(23, 34, 77, 0.8) 0%, 
            rgba(43, 40, 45, 0.9) 100%);
        border: 1px solid rgba(79, 172, 254, 0.3);
        border-radius: 15px;
        color: #e0e6ed;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .alert-info {
        border-left: 4px solid #4facfe;
        box-shadow: 
            0 10px 30px rgba(0, 0, 0, 0.2),
            -4px 0 20px rgba(79, 172, 254, 0.3);
    }

    .badge {
        border-radius: 20px;
        padding: 8px 15px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .badge.bg-primary {
        background: linear-gradient(145deg, #4facfe, #00f2fe) !important;
        color: #0b2154 !important;
    }

    .badge.bg-success {
        background: linear-gradient(145deg, #5AC990, #4facfe) !important;
        color: #0b2154 !important;
        text-shadow: 0 0 10px rgba(90, 201, 144, 0.5);
    }

    .badge.bg-warning {
        background: linear-gradient(145deg, #5AC990, #00f2fe) !important;
        color: #0b2154 !important;
    }

    .badge.bg-info {
        background: linear-gradient(145deg, #4facfe, #5AC990) !important;
        color: #ffffff !important;
    }
    
    /* Responsive amélioré */
    @media (max-width: 768px) {
        .solution-hero {
            min-height: 50vh;
            background-attachment: scroll;
        }
        
        .content-section {
            padding: 30px 20px;
            margin-bottom: 30px;
        }
        
        .stats-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        
        .stat-number {
            font-size: 2.2rem;
        }

        .btn-cta {
            padding: 15px 30px;
            font-size: 0.9rem;
            letter-spacing: 1px;
        }
    }

    /* Scrollbar personnalisée */
    ::-webkit-scrollbar {
        width: 12px;
    }

    ::-webkit-scrollbar-track {
        background: rgba(11, 33, 84, 0.3);
    }

    ::-webkit-scrollbar-thumb {
        background: linear-gradient(180deg, #4facfe, #00f2fe);
        border-radius: 6px;
        box-shadow: 0 0 10px rgba(79, 172, 254, 0.5);
    }

    ::-webkit-scrollbar-thumb:hover {
        box-shadow: 0 0 20px rgba(79, 172, 254, 0.8);
    }

    /* Animations d'entrée pour les éléments */
    .animate-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s ease-out;
    }

    .animate-on-scroll.in-view {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<!-- Hero Section -->
<div class="solution-hero" style="background-image: url('@yield('hero_image', '/img/default-solution-bg.jpg')');">
    <div class="container"   style="margin-top: 116px;">
        <div class="hero-content">
          
            <h1 class="hero-title fade-in-up">@yield('triangle_title')</h1>
            <p class="lead mb-4">@yield('triangle_subtitle')</p>
        </div>
    </div>
</div>

<!-- Content Section -->
<div class="solution-content">
    <div class="container">
        @yield('triangle_content')
        
           {{-- <div class="cta-section rounded">
            <div class="container">
                <h3 class="mb-4">Prêt à démarrer votre projet avec cette solution ?</h3>
                <p class="lead mb-4">Contactez nos experts pour une consultation personnalisée</p>
<a href="{{ url('/#contact') }}" class="btn btn-cta btn-lg">
                    Demander un Devis Gratuit
                </a>
            </div>
        </div> --}}
   
    </div>
</div>
@endsection