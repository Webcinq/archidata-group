<?php

namespace App\Providers;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       Paginator::useBootstrap();
        Gate::define('isSuperAdmin', function (User $user) {

            return $user->role->value==Role::SuperAdmin->value;
        });
        Gate::define('isAdmin', function (User $user) {

            return $user->role->value==Role::Admin->value;
        });
        Gate::define('isEditor', function (User $user) {

            return $user->role->value==Role::Editor->value;
        });
        Blade::directive('datetime', function (string $expression) {
            return "<?php echo ($expression)->format('m/d/Y H:i:s'); ?>";
        });



}
}
