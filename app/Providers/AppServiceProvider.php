<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Models\Service;
use App\Models\Settings;
use Illuminate\Support\Facades\View;

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
        Schema::defaultStringLength(191);
        
        View::composer('*', function ($view) {
            $view->with('settings', [
                'site_name'   => Settings::getValue('site_name', 'Default Site'),
              //  'logo_url'    => Setting::getValue('logo_url', '/default-logo.png'),
                'admin_email' => Settings::getValue('admin_email', 'admin@example.com'),
                 'facebook' => Settings::getValue('facebook', 'admin@example.com'),
                'twitter' => Settings::getValue('twitter', 'admin@example.com'),
                'instagram' => Settings::getValue('instagram', 'admin@example.com'),
                'youtube' => Settings::getValue('youtube', 'admin@example.com'),
                'linkedin' => Settings::getValue('linkedin', 'admin@example.com'),
          
              
            ]);
        });
    }
}
