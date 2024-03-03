<?php

namespace App\Providers;

use DeepCopy\f001\B;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Console\View\Components\Alert;
use App\View\Components\Alter;
use App\View\Components\Input\Button;
use App\View\Components\Form\Button as formButton;
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
        //
        Blade::directive('datetime', function($expression) {
            $expression = trim($expression, '\'');
            $expression = trim($expression, '"');
            $dataObject = date_create($expression);
            if(!empty($dataObject))
            {
                $date = $dataObject->format('d/m/Y H:i:s');
                return $date;
            }
            return false;
        });

        Blade::if('env', function ($value)
        {
            // tare về boolean 
            // @env là giá trị tả về 
            if (config('app.env') === $value) 
            {
                return true;
            }
            return false;
        });

        Blade::component('package-alert', Alert::class);
        Blade::component('package-alert', Button::class);
        Blade::component('button', formButton::class);
    }
}
