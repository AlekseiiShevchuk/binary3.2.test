<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Lib\Olexii\Phone\Phone;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // General binding. Resolved every time
        $this->app->bind('Phone', function($app) {
            return new Phone('Apple iPhone','Qualcomm 5555',2,'480x320','8 megapixels','1234 mAh');
        });

//        // Singleton binding. Resolved once
//        $this->app->singleton('Phone', function($app) {
//            return new Phone();
//        });
//
//         //Instance binding
//        $phone = new Phone();
//        $this->app->instance('Phone', $phone);
//
//
//        // Automatic resolving
//        $this->app->bind('Phone', Phone::class); // or full path
    }
}
