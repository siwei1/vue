<?php
namespace Pk\Vue\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
class VueServiceProvider extends ServiceProvider
{

    protected $defer = false;

    public function boot(Router $router)
    {
        $this->loadViewsFrom(realpath(__DIR__.'/../views'), 'vue');
        $router->group(['namespace' => 'Pk\Vue\Controllers'], function($router)
        {
            require __DIR__.'/../Http/routes.php';
        });

        $this->publishes([__DIR__.'/../../static/'=>base_path('public/static')],'public');
        $this->publishes([__DIR__.'/../../assets/'=>base_path('resources/assets')],'public');

    }

    public function register()
    {
        $this->app->bind('vue',function($app){
            return new Vue($app);
        });
    }

}