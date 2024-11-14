1. Crear modelo
2. Crear en app carpeta “Interfaces”
3. Crear dentro de app/Interfaces las carpetas “Repositories” y “Services”
4. Crear archivos correspondientes al modelo. Convención “NombreModeloService.php” o “NombreModeloRepository.php
5. Definir estructura de métodos que va a usar la interfaz. Parámetros y return
6. Crear en app las carpetas “Services” y “Repositories
7. Crear los archivos que contendrán las clases y la implementación de la interfaz
8. Definir funcionalidad de métodos de repositorios y servicios
    Repositorio
    Métodos CRUD y manejo de base de datos
    Servicios
    Funcionalidad 
9. Crear en app/Providers archivo BindingInterfaceProvider.php

//*
<?php


namespace App\Providers;


use App\Repositories\AfiliadoRepository;
use App\Services\AfiliadoService;


class BindingInterfacesProvider extends ServiceProvider
{
    public array $bindings = [
        AfiliadoRepositoryInterface::class => AfiliadoRepository::class,
        AfiliadoServiceInterface::class => AfiliadoService::class,
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

*//

10. Copiar y pegar estructura de BindingInterfaceProvider.php
