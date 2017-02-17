<?php

namespace hassanalisalem\Image;

use Illuminate\Support\ServiceProvider;

class DefaultProfileImageServiceProvider extends ServiceProvider
{

    
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Register 'defaultprofileimage' instance container to our defaultprofileimage object
        $this->app['defaultprofileimage'] = $this->app->share(function($app)
        {
            return new DefaultProfileImage;
        });

        // Shortcut so developers don't need to add an Alias in app/config/app.php
        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('DefaultProfileImage', 'hassanalisalem\Image\Facades\DefaultProfileImage');
        });
    }

    
}
