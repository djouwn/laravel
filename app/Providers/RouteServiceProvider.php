<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace='App\\Http\\Controllers';
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME_ADMIN = '/admin/home';
    public const HOME_SELLER = '/seller/home';
    public const HOME_CLIENT = '/client/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Get the home route for the given user.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function home(Request $request): string
    {
        $user = $request->user();

        if ($user && $user->role === 'admin') {
            return self::HOME_ADMIN;
        } elseif ($user && $user->role === 'seller') {
            return self::HOME_SELLER;
        } elseif ($user && $user->role === 'client') {
            return self::HOME_CLIENT;
        } else {
            // Handle unauthorized access or unknown roles
            abort(403);
        }
    }
}