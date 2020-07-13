<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PdfServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // app()->singleton()
        // $this->app->singleton('pdf-service', function(){   // works
        
        $this->app->bind('pdf-service', function(){

            return new \Mpdf\Mpdf();
            // return new \App\Components\Example\ExampleService('123123');
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
