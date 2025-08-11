{{-- resources/views/admin/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Dashboard Admin ArchiData Africa">
    <meta name="author" content="ArchiData Africa">

    <title>@yield('title', 'Admin') - ArchiData Africa</title>

    <!-- Custom fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom Admin CSS -->
    <style>
        :root {
            --primary-color: #0B2154;
            --secondary-color: #4dd0a7;
            --accent-color: #5AC990;
            --sidebar-width: 280px;
            --sidebar-collapsed-width: 80px;
            --header-height: 70px;
            --sidebar-bg: linear-gradient(180deg, #0B2154 0%, #1a365d 50%, #2d5a87 100%);
            --sidebar-hover: rgba(255, 255, 255, 0.1);
            --sidebar-active: rgba(77, 208, 167, 0.2);
            --text-light: rgba(255, 255, 255, 0.8);
            --text-white: #ffffff;
            --shadow-light: 0 2px 15px rgba(0, 0, 0, 0.08);
            --shadow-medium: 0 4px 25px rgba(0, 0, 0, 0.15);
            --border-radius: 12px;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            color: #334155;
            overflow-x: hidden;
        }

        /* ========== SIDEBAR ========== */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: var(--sidebar-width);
            height: 100vh;
            background: var(--sidebar-bg);
            backdrop-filter: blur(20px);
            border-right: 1px solid rgba(255, 255, 255, 0.1);
            transition: var(--transition);
            z-index: 1000;
            overflow: hidden;
        }

        .sidebar.collapsed {
            width: var(--sidebar-collapsed-width);
        }

        .sidebar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="20" cy="20" r="1" fill="rgba(255,255,255,0.05)"/><circle cx="80" cy="40" r="0.8" fill="rgba(255,255,255,0.03)"/><circle cx="40" cy="80" r="1.2" fill="rgba(255,255,255,0.04)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.6;
            pointer-events: none;
        }

        /* Brand */
        .sidebar-brand {
            display: flex;
            align-items: center;
            padding: 1.5rem 2rem;
            text-decoration: none;
            color: var(--text-white);
            font-weight: 800;
            font-size: 1.25rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: var(--transition);
            position: relative;
            z-index: 10;
        }

        .sidebar.collapsed .sidebar-brand {
            padding: 1.5rem 1.25rem;
            justify-content: center;
        }

        .sidebar-brand-icon {
            width: 40px;
            height: 40px;
            background: var(--accent-color);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            font-size: 1.2rem;
            color: var(--primary-color);
            transition: var(--transition);
        }

        .sidebar.collapsed .sidebar-brand-icon {
            margin-right: 0;
        }

        .sidebar-brand-text {
            transition: var(--transition);
            white-space: nowrap;
        }

        .sidebar.collapsed .sidebar-brand-text {
            opacity: 0;
            transform: translateX(-10px);
        }

        /* Navigation */
        .sidebar-nav {
            padding: 1rem 0;
            height: calc(100vh - var(--header-height) - 2rem);
            overflow-y: auto;
            overflow-x: hidden;
        }

        .sidebar-nav::-webkit-scrollbar {
            width: 4px;
        }

        .sidebar-nav::-webkit-scrollbar-track {
            background: transparent;
        }

        .sidebar-nav::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 4px;
        }

        .nav-section {
            margin-bottom: 2rem;
        }

        .nav-section-title {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 0 2rem 1rem;
            transition: var(--transition);
        }

        .sidebar.collapsed .nav-section-title {
            opacity: 0;
            padding: 0 1.25rem 1rem;
        }

        .nav-item {
            margin: 0.25rem 1rem;
            position: relative;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 0.875rem 1rem;
            color: var(--text-light);
            text-decoration: none;
            border-radius: var(--border-radius);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            font-weight: 500;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: var(--transition);
        }

        .nav-link:hover::before {
            left: 100%;
        }

        .nav-link:hover {
            color: var(--text-white);
            background: var(--sidebar-hover);
            transform: translateX(4px);
        }

        .nav-link.active {
            color: var(--text-white);
            background: var(--sidebar-active);
            box-shadow: 0 4px 15px rgba(77, 208, 167, 0.3);
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 60%;
            background: var(--accent-color);
            border-radius: 2px;
        }

        .nav-icon {
            width: 20px;
            height: 20px;
            margin-right: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .sidebar.collapsed .nav-icon {
            margin-right: 0;
        }

        .nav-text {
            transition: var(--transition);
            white-space: nowrap;
        }

        .sidebar.collapsed .nav-text {
            opacity: 0;
            transform: translateX(-10px);
        }

        .nav-badge {
            margin-left: auto;
            background: #ef4444;
            color: white;
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
            border-radius: 20px;
            min-width: 20px;
            text-align: center;
            transition: var(--transition);
        }

        .sidebar.collapsed .nav-badge {
            opacity: 0;
            transform: scale(0);
        }

        /* Dropdown */
        .nav-dropdown {
            position: relative;
        }

        .nav-dropdown-toggle::after {
            content: '\f107';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            margin-left: auto;
            transition: var(--transition);
        }

        .nav-dropdown.show .nav-dropdown-toggle::after {
            transform: rotate(180deg);
        }

        .nav-dropdown-menu {
            max-height: 0;
            overflow: hidden;
            transition: var(--transition);
            margin-top: 0.5rem;
        }

        .nav-dropdown.show .nav-dropdown-menu {
            max-height: 300px;
        }

        .nav-dropdown-item {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem 0.75rem 3rem;
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            border-radius: var(--border-radius);
            margin: 0.25rem 0;
            transition: var(--transition);
            font-size: 0.9rem;
        }

        .nav-dropdown-item:hover {
            color: var(--text-white);
            background: rgba(255, 255, 255, 0.05);
            transform: translateX(4px);
        }

        .nav-dropdown-item.active {
            color: var(--text-white);
            background: rgba(77, 208, 167, 0.2);
        }

        /* ========== MAIN CONTENT ========== */
        .main-content {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            transition: var(--transition);
        }

        .sidebar.collapsed + .main-content {
            margin-left: var(--sidebar-collapsed-width);
        }

        /* Header */
        .main-header {
            height: var(--header-height);
            background: white;
            border-bottom: 1px solid #e2e8f0;
            padding: 0 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: var(--shadow-light);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .sidebar-toggle {
            width: 40px;
            height: 40px;
            border: none;
            background: #f8fafc;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            color: #64748b;
        }

        .sidebar-toggle:hover {
            background: #e2e8f0;
            color: var(--primary-color);
        }

        .header-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1e293b;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .header-notifications {
            position: relative;
            width: 40px;
            height: 40px;
            border: none;
            background: #f8fafc;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            color: #64748b;
        }

        .header-notifications:hover {
            background: #e2e8f0;
            color: var(--primary-color);
        }

        .notification-badge {
            position: absolute;
            top: -2px;
            right: -2px;
            width: 18px;
            height: 18px;
            background: #ef4444;
            color: white;
            border-radius: 50%;
            font-size: 0.7rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .header-user {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.5rem;
            border-radius: 12px;
            cursor: pointer;
            transition: var(--transition);
        }

        .header-user:hover {
            background: #f8fafc;
        }

        .user-avatar {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            object-fit: cover;
        }

        .user-info {
            display: flex;
            flex-direction: column;
        }

        .user-name {
            font-weight: 600;
            color: #1e293b;
            font-size: 0.9rem;
        }

        .user-role {
            font-size: 0.75rem;
            color: #64748b;
        }

        /* Content Area */
        .main-body {
            padding: 2rem;
        }

        /* Cards */
        .card {
            background: white;
            border: none;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-light);
            overflow: hidden;
            transition: var(--transition);
        }

        .card:hover {
            box-shadow: var(--shadow-medium);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                width: var(--sidebar-width);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }

            .sidebar.collapsed + .main-content {
                margin-left: 0;
            }

            .main-header {
                padding: 0 1rem;
            }

            .main-body {
                padding: 1rem;
            }
        }

        /* Animations */
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .animate-slide-in {
            animation: slideIn 0.5s ease-out;
        }

        .animate-fade-in {
            animation: fadeIn 0.3s ease-out;
        }

        /* Utilities */
        .btn-primary {
            background: var(--primary-color);
            border-color: var(--primary-color);
            border-radius: 10px;
            font-weight: 600;
            padding: 0.625rem 1.25rem;
            transition: var(--transition);
        }

        .btn-primary:hover {
            background: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        .alert {
            border: none;
            border-radius: var(--border-radius);
            font-weight: 500;
        }

        /* Overlay for mobile */
        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
        }

        .sidebar-overlay.show {
            opacity: 1;
            visibility: visible;
        }
    </style>

    @stack('styles')
</head>

<body>
    <!-- Sidebar Overlay (Mobile) -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <!-- Brand -->
        <div class="sidebar-brand">
            <div class="sidebar-brand-icon">
                <i class="fas fa-cube"></i>
            </div>
            <div class="sidebar-brand-text">ArchiData Admin</div>
        </div>

        <!-- Navigation -->
        <nav class="sidebar-nav">
            <!-- Dashboard Section -->
            <div class="nav-section">
                <div class="nav-section-title">Principal</div>
                <div class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <div class="nav-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </div>
            </div>

            <!-- Content Management -->
            <div class="nav-section">
                <div class="nav-section-title">Contenu</div>
                
                <div class="nav-item">
                    <div class="nav-dropdown {{ request()->routeIs('admin.articles.*') ? 'show' : '' }}">
                        <a href="#" class="nav-link nav-dropdown-toggle {{ request()->routeIs('admin.articles.*') ? 'active' : '' }}">
                            <div class="nav-icon">
                                <i class="fas fa-newspaper"></i>
                            </div>
                            <span class="nav-text">Articles</span>
                        </a>
                        <div class="nav-dropdown-menu">
                            <a href="{{ route('admin.articles.index') }}" class="nav-dropdown-item {{ request()->routeIs('admin.articles.index') ? 'active' : '' }}">
                                Tous les articles
                            </a>
                            <a href="{{ route('admin.articles.create') }}" class="nav-dropdown-item {{ request()->routeIs('admin.articles.create') ? 'active' : '' }}">
                                Nouveau article
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Administration -->
            <div class="nav-section">
                <div class="nav-section-title">Administration</div>
                
                <div class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                        <div class="nav-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <span class="nav-text">Utilisateurs</span>
                    </a>
                </div>
            </div>

            <!-- Other -->
            <div class="nav-section">
                <div class="nav-section-title">Autre</div>
                
                <div class="nav-item">
                    <a href="{{ route('index') }}" target="_blank" class="nav-link">
                        <div class="nav-icon">
                            <i class="fas fa-external-link-alt"></i>
                        </div>
                        <span class="nav-text">Voir le site</span>
                    </a>
                </div>
            </div>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Header -->
        <header class="main-header">
            <div class="header-left">
                <button class="sidebar-toggle" id="sidebarToggle">
                    <i class="fas fa-bars"></i>
                </button>
                <h1 class="header-title">@yield('title', 'Dashboard')</h1>
            </div>

            <div class="header-right">
                <!-- Notifications -->
                <div class="dropdown">
                    <button class="header-notifications" data-bs-toggle="dropdown">
                        <i class="fas fa-bell"></i>
                        @if(\App\Models\Reservation::where('statut', 'en_attente')->count() > 0)
                            <span class="notification-badge">{{ \App\Models\Reservation::where('statut', 'en_attente')->count() }}</span>
                        @endif
                    </button>
                    <div class="dropdown-menu dropdown-menu-end shadow-lg border-0" style="width: 300px;">
                        <div class="dropdown-header">
                            <h6 class="mb-0">Notifications</h6>
                        </div>
                        @forelse(\App\Models\Reservation::where('statut', 'en_attente')->latest()->take(3)->get() as $reservation)
                            <a class="dropdown-item d-flex align-items-center py-3" href="{{ route('admin.reservations.index') }}">
                                <div class="me-3">
                                    <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                        <i class="fas fa-calendar text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-muted">{{ $reservation->created_at->format('d M Y') }}</div>
                                    <div class="fw-bold">Nouvelle réservation</div>
                                    <div class="small">{{ $reservation->nom }}</div>
                                </div>
                            </a>
                        @empty
                            <div class="dropdown-item text-center py-3 text-muted">
                                Aucune notification
                            </div>
                        @endforelse
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center" href="{{ route('admin.reservations.index') }}">
                            Voir toutes les notifications
                        </a>
                    </div>
                </div>

                <!-- User Menu -->
                <div class="dropdown">
                    <div class="header-user" data-bs-toggle="dropdown">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=0B2154&color=fff&size=36" 
                             alt="Avatar" class="user-avatar">
                        <div class="user-info d-none d-md-block">
                            <div class="user-name">{{ auth()->user()->name }}</div>
                            <div class="user-role">Administrateur</div>
                        </div>
                        <i class="fas fa-chevron-down ms-2 text-muted"></i>
                    </div>
                    <div class="dropdown-menu dropdown-menu-end shadow-lg border-0">
                        <a class="dropdown-item" href="{{ route('index') }}" target="_blank">
                            <i class="fas fa-home me-2"></i>
                            Voir le site
                        </a>
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">
                                <i class="fas fa-sign-out-alt me-2"></i>
                                Déconnexion
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        <!-- Content -->
        <div class="main-body">
            <!-- Alerts -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show animate-slide-in" role="alert">
                    <i class="fas fa-check-circle me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show animate-slide-in" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show animate-slide-in" role="alert">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <!-- Page Content -->
            <div class="animate-fade-in">
                @yield('content')
            </div>
        </div>
    </main>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebarOverlay = document.getElementById('sidebarOverlay');
            const dropdownToggles = document.querySelectorAll('.nav-dropdown-toggle');

            // Sidebar toggle functionality
            function toggleSidebar() {
                if (window.innerWidth <= 768) {
                    // Mobile: Show/hide sidebar with overlay
                    sidebar.classList.toggle('show');
                    sidebarOverlay.classList.toggle('show');
                } else {
                    // Desktop: Collapse/expand sidebar
                    sidebar.classList.toggle('collapsed');
                    localStorage.setItem('sidebarCollapsed', sidebar.classList.contains('collapsed'));
                }
            }

            // Restore sidebar state on desktop
            if (window.innerWidth > 768 && localStorage.getItem('sidebarCollapsed') === 'true') {
                sidebar.classList.add('collapsed');
            }

            // Toggle button event
            sidebarToggle.addEventListener('click', toggleSidebar);

            // Overlay click to close sidebar on mobile
            sidebarOverlay.addEventListener('click', function() {
                sidebar.classList.remove('show');
                sidebarOverlay.classList.remove('show');
            });

            // Dropdown functionality
            dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    const dropdown = this.closest('.nav-dropdown');
                    
                    // Close other dropdowns
                    dropdownToggles.forEach(otherToggle => {
                        if (otherToggle !== toggle) {
                            otherToggle.closest('.nav-dropdown').classList.remove('show');
                        }
                    });
                    
                    // Toggle current dropdown
                    dropdown.classList.toggle('show');
                });
            });

            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768) {
                    sidebar.classList.remove('show');
                    sidebarOverlay.classList.remove('show');
                } else {
                    sidebar.classList.remove('collapsed');
                }
            });

            // Smooth scroll for alerts
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach((alert, index) => {
                setTimeout(() => {
                    alert.style.animationDelay = `${index * 0.1}s`;
                }, 100);
            });

            // Auto-hide alerts after 5 seconds
            setTimeout(() => {
                const autoHideAlerts = document.querySelectorAll('.alert-success, .alert-info');
                autoHideAlerts.forEach(alert => {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                });
            }, 5000);
        });
    </script>

    @stack('scripts')
</body>
</html>