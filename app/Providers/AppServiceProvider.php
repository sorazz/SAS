<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\SiteSetting;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $setting = SiteSetting::find(1);
        View::share('setting', $setting);
    }
}
