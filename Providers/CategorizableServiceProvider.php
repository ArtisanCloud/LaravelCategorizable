<?php

namespace ArtisanCloud\Categorizable\Providers;

use Illuminate\Support\ServiceProvider;
use ArtisanCloud\Categorizable\Contracts\CategorizableServiceContract;
use ArtisanCloud\Categorizable\CategorizableService;

/**
 * Class CategorizableServiceProvider
 * @package App\Providers
 */
class CategorizableServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(
            CategorizableServiceContract::class,
            CategorizableService::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
              // publish config file
//              $this->publishes([
//                  __DIR__ . '/../../config/categorizable.php' => "/../" . config_path('test/categorizable.php'),
//              ], ['ArtisanCloud', 'SaaSFramework', 'Categorizable-Config']);

              // publish migration file
//              $this->publishes([
//                  __DIR__ . '/../../config/categorizable.php' => "/../" . config_path('categorizable.php'),
//              ], ['ArtisanCloud', 'SaaSFramework', 'Categorizable-Model']);

              // register artisan command
              if (! class_exists('CreateCategorizableTable')) {
                $this->publishes([
                  __DIR__ . '/../../database/migrations/create_categorizables_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_categorizables_table.php'),
                  // you can add any number of migrations here
                ], ['ArtisanCloud', 'SaaSFramework', 'Categorizable-Migration']);
              }
            }

    }
}
