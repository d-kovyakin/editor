<?php

namespace Kovyakin\Editor\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class EditorServiceProvider extends ServiceProvider {
    /**
     * Register services.
     */
    public function register(): void {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void {
        $this->loadRoutesFrom(__DIR__.'/../routes/editor.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'editor');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        Blade::componentNamespace('Kovyakin\\Editor\\Views\\Components', 'editor');
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/editor'),
        ]);
    }
}
