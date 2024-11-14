<?php


namespace App\Providers;


use Illuminate\Support\ServiceProvider;

class BindingInterfacesProvider extends ServiceProvider
{
    public array $bindings = [
        // AfiliadoService::class => AfiliadoRepository::class,
        // AfiliadoServiceInterface::class => AfiliadoService::class,
    ];


    /**
     * Register services.
     */


    public function register(): void
    {
        foreach ($this->bindings as $interface => $concrete) {
            $this->app->bind($interface, $concrete);
        }
    }


    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}