<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
    //     var_dump(base_path().'/public');
    // exit;
		// $this->app->bind('path.public', function() {
		// 	return base_path() . '/public';
		// });
    }
}
