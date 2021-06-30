<?php

namespace Bastinald\LaravelLivewireModals\Providers;

use Bastinald\LaravelLivewireModals\Components\Modals;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LaravelLivewireModalsProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../views', 'laravel-livewire-modals');

        $this->publishes([
            __DIR__ . '/../../views' => resource_path('views/vendor/laravel-livewire-modals'),
        ]);

        Livewire::component('modals', Modals::class);
    }
}
