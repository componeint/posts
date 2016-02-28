<?php
/**
 * PostsServiceProvider.php
 * Created by anonymous on 28/02/16 8:43.
 */

namespace Onderdelen\Posts;

use ReflectionClass;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class PostsServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(\Onderdelen\AppFoundation\AppFoundationServiceProvider::class);
        $this->app->register(\Onderdelen\Seneschal\SeneschalServiceProvider::class);
        $this->app->register(\Onderdelen\Dashboard\DashboardServiceProvider::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

}
