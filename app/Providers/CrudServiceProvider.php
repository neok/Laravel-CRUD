<?php

namespace App\Providers;

use App\Http\Controllers\SimpleController;
use App\Service\UserService;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;

/**
 * Class CrudServiceProvider
 */
class CrudServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(ResponseFactory $responseFactory)
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(SimpleController::class)
            ->needs('$offer')
            ->give('1000$ for free!!!');
        $this->app->when(SimpleController::class)
            ->give(new UserService());
    }
}
