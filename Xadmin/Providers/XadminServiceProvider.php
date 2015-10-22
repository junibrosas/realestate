<?php

namespace Xadmin\Providers;

use Illuminate\Support\ServiceProvider;

class XadminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include_once  __DIR__.'/../../Xadmin/Helpers/GeneralHelper.php';
        include_once  __DIR__.'/../../Xadmin/Helpers/PostHelper.php';
        include_once  __DIR__.'/../../Xadmin/Helpers/FileMediaHelper.php';
        include_once  __DIR__.'/../../Xadmin/Helpers/ProfileHelper.php';
        include __DIR__.'/../routes.php';
        
        $this->loadViewsFrom(__DIR__ . '/../Views', 'cms');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
    * Register a view file namespace.
    *
    * @param  string  $namespace
    * @param  string  $path
    * @return void
    */
    protected function loadViewsFrom($path, $namespace)
    {
        if (is_dir($appPath = $this->app->basePath().'/resources/views/vendor/'.$namespace))
        {
            $this->app['view']->addNamespace($namespace, $appPath);
        }

        $this->app['view']->addNamespace($namespace, $path);
    }
}
