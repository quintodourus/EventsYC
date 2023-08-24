<?php

namespace App\Providers;

use App\ModelControllers\EventController;
use App\ModelControllers\UserController;
use Illuminate\Support\ServiceProvider;

/**
 * Class ControllerServiceProvider
 * @package App\Providers
 */
class ControllerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     * @return void
     */
    public function boot(): void
    {
        $this->app->singleton(UserController::class);
        $this->app->alias(UserController::class, 'UserController');
        $this->app->singleton(EventController::class);
        $this->app->alias(EventController::class, 'EventController');
    }
}
