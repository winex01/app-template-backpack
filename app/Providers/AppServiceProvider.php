<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(
            \Backpack\PermissionManager\app\Http\Controllers\UserCrudController::class, //this is package controller
            \App\Http\Controllers\Admin\UserCrudController::class //this should be your own controller
        );

        $this->app->bind(
            \Backpack\PermissionManager\app\Http\Controllers\RoleCrudController::class, //this is package controller
            \App\Http\Controllers\Admin\RoleCrudController::class //this should be your own controller
        );

        $this->app->bind(
            \Backpack\PermissionManager\app\Http\Controllers\PermissionCrudController::class, //this is package controller
            \App\Http\Controllers\Admin\PermissionCrudController::class //this should be your own controller
        );

        $this->app->bind(
            \Backpack\ActivityLog\Http\Controllers\ActivityLogCrudController::class, //this is package controller
            \App\Http\Controllers\Admin\ActivityLogCrudController::class //this should be your own controller
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
