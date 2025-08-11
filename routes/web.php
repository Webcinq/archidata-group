<?php
// routes/web.php (mise à jour complète)

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// Routes publiques
Route::get('/', function () {return view('index');})->name('index');
Route::get('/services', function () {return view('service');})->name('service');
Route::get('/first_stage', function () {return view('triangle.first_stage');})->name('first_stage');
Route::get('/couts', function () {return view('triangle.couts');})->name('couts');
Route::get('/delais', function () {return view('triangle.delais');})->name('delais');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.send');
Route::get('/reload-captcha', [ContactController::class, 'reloadCaptcha']);

// Réservations
Route::post('/reserver', [ReservationController::class, 'store'])->name('reserver');

// Blog public
Route::get('/blog', [ArticleController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [ArticleController::class, 'show'])->name('blog.show');

// Anciennes routes blog (redirection)
Route::get('/blog-ressources', function () {
    return redirect()->route('blog');
})->name('blog-ressources');

Route::get('/blog-detail', function () {
    return redirect()->route('blog');
})->name('blog-detail');

// Routes pour les solutions BIM
Route::get('/solutions/bim-data-management', function () {
    return view('solutions.bim-data-management');
})->name('solutions.bim-data-management');

Route::get('/solutions/doe-bim', function () {
    return view('solutions.doe-bim');
})->name('solutions.doe-bim');

Route::get('/solutions/scan-modelisation', function () {
    return view('solutions.scan-modelisation');
})->name('solutions.scan-modelisation');

Route::get('/solutions/jumeaux-numeriques', function () {
    return view('solutions.jumeaux-numeriques');
})->name('solutions.jumeaux-numeriques');

Route::get('/solutions/synthese-bim', function () {
    return view('solutions.synthese-bim');
})->name('solutions.synthese-bim');

Route::get('/solutions/cim-management', function () {
    return view('solutions.cim-management');
})->name('solutions.cim-management');

Route::get('/solutions/data-management', function () {
    return view('solutions.data-management');
})->name('solutions.data-management');

Route::get('/solutions/conseil-accompagnement', function () {
    return view('solutions.conseil-accompagnement');
})->name('solutions.conseil-accompagnement');

// Pages statiques
Route::get('/secteurs', function () {
    return view('secteurs');
})->name('secteurs');

Route::get('/etudes-de-cas', function () {
    return view('etudes-cas');
})->name('etudes-cas');

Route::get('/a-propos', function () {
    return view('a-propos');
})->name('a-propos');

// Sous-pages À Propos
Route::get('/a-propos/vision-mission', function () {
    return view('a-propos.vision-mission');
})->name('a-propos.vision-mission');

Route::get('/a-propos/notre-equipe', function () {
    return view('a-propos.notre-equipe');
})->name('a-propos.notre-equipe');

Route::get('/a-propos/nos-engagements', function () {
    return view('a-propos.nos-engagements');
})->name('a-propos.nos-engagements');

// ==========================================
// ROUTES D'AUTHENTIFICATION
// ==========================================

// Connexion
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Inscription (optionnel - décommenter si nécessaire)
// Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
// Route::post('/register', [AuthController::class, 'register']);

// ==========================================
// ROUTES ADMIN (Protégées par middleware)
// ==========================================

// Groupe de routes admin avec middleware
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    
    // Dashboard principal
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // Gestion des articles
    Route::resource('articles', ArticleController::class)->except(['show']);
    Route::patch('/articles/{article}/toggle-status', [ArticleController::class, 'toggleStatus'])->name('articles.toggle-status');
    Route::patch('/articles/{article}/toggle-featured', [ArticleController::class, 'toggleFeatured'])->name('articles.toggle-featured');
    
    // Gestion des réservations
    Route::get('/reservations', [AdminController::class, 'reservations'])->name('reservations.index');
    Route::patch('/reservations/{reservation}/status', [ReservationController::class, 'updateStatus'])->name('reservations.update-status');
    
    // Gestion des utilisateurs
    Route::get('/users', [AdminController::class, 'users'])->name('users.index');
    Route::patch('/users/{user}/role', [AdminController::class, 'updateUserRole'])->name('users.update-role');
    Route::patch('/users/{user}/toggle-status', [AdminController::class, 'toggleUserStatus'])->name('users.toggle-status');
    Route::delete('/users/{user}', [AdminController::class, 'destroyUser'])->name('users.destroy');
    
});

// ==========================================
// ROUTES DE REDIRECTION ET ALIAS
// ==========================================

// Redirection de l'ancien blog vers le nouveau
Route::get('/blog/article-1', function () {
    return redirect()->route('blog');
});

Route::get('/blog/article-2', function () {
    return redirect()->route('blog');
});

// Route de fallback pour les URLs non trouvées
Route::fallback(function () {
    return redirect()->route('index');
});