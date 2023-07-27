<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Pagination\Paginator;
use App\View\Components\Alert;
use App\Helpers\CartHelpers;
use App\Models\Orders;

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
    // public function boot(): void
    // {
    //     Blade::directive('datetime', function ($expression) {
    //         $expression = trim($expression, '\'');
    //         $expression = trim($expression, '"');

    //         $dateObject = date_create(($expression));
    //         if (!empty($dateObject)) {
    //             $dateFormat = $dateObject->format('d/m/Y H:i:s');
    //             return $dateFormat;
    //         }
    //         return false;
    //     });
    // }
    public function boot()
    {
        Blade::if('env', function ($value) {
            // return config('filesystems.default') == $value;
            if (config('app.env') === $value) {
                return true;
            }
            return false;
        });

        // Blade::component('package-alert', Alert::class);
        // Blade::component('button', button::class);
        // // Blade::component('form-button', formButton::class);
        Paginator::useBootstrap();

        view()->composer('*', function ($view) {
            $view->with([
                'cart' => new CartHelpers(),
                'od_count' => Orders::where('status', 0)->count(),

            ]);
        });
    }
}
