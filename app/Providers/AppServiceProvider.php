<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {

        if ($this->app->isProduction()) {
            URL::forceScheme('https');
        }

        $this->configureRateLimiting();
    }

    protected function configureRateLimiting(): void
    {

        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(5)
                ->by($request->input('email').'|'.$request->ip())
                ->response(function () {
                    return response()->json([
                        'message' => 'Terlalu banyak percobaan login. Coba lagi dalam 1 menit.',
                    ], 429);
                });
        });

        RateLimiter::for('web', function (Request $request) {
            return Limit::perMinute(60)->by($request->ip());
        });

        RateLimiter::for('contact', function (Request $request) {
            return Limit::perMinutes(5, 10)->by($request->ip());
        });
    }
}
