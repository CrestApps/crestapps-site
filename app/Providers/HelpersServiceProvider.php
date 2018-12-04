<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelpersServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $helpers = scandir(base_path() . '/app/Helpers/');

        foreach($helpers as $helper) 
        {
            if( !in_array($helper, ['.','..']))
            {
                require_once base_path() . '/app/Helpers/' . $helper;  
            }
            
        }

        
    }
}
