<?php

namespace Rosyiid1440\Adminlte;

use Illuminate\Support\ServiceProvider;

class Adminlte extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/css' => public_path('adminlte/css'),
        ]);

        $this->publishes([
            __DIR__ . '/js' => public_path('adminlte/js'),
        ]);

        $this->publishes([
            __DIR__ . '/img' => public_path('adminlte/img'),
        ]);

        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/template/adminlte'),
        ]);
    }
}
