<?php
// app/Providers/AuthServiceProvider.php (mise à jour)

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // Gate pour vérifier si l'utilisateur est admin
        Gate::define('admin', function ($user) {
            return $user->role === 'admin';
        });

        // Gate pour vérifier si l'utilisateur peut gérer les articles
        Gate::define('manage-articles', function ($user) {
            return $user->role === 'admin';
        });

        // Gate pour vérifier si l'utilisateur peut gérer les utilisateurs
        Gate::define('manage-users', function ($user) {
            return $user->role === 'admin';
        });
    }
}