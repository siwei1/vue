<?php
namespace Pk\Contact\Providers;

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
    }

    public function register()
    {
        $this->app->bind('vue',function($app){
            return new Vue($app);
        });
    }

}