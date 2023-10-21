<?php

namespace App\Providers;

use App\Traits\LogsActivity;
use Illuminate\Support\ServiceProvider;

class ExtendEloquentModelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        // Apply the LogsActivity trait to all Eloquent models
        $this->app->resolving('eloquent', function ($eloquent) {
            $eloquent->addTrait(LogsActivity::class);
        });
    }
}
