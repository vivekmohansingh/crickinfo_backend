<?php

namespace App\Providers;

use App\validations\MatchValidation;
use App\interfacerepo\MatchValidationInterface;
use App\validations\Team;
use App\interfacerepo\TeamInterface;

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;

use Illuminate\Support\ServiceProvider;

//use Illuminate\Support\Facades\Response;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            Illuminate\Contracts\Debug\ExceptionHandler::class,
            App\Exceptions\Handler::class
        );
        $this->app->singleton(MatchValidationInterface::class,MatchValidation::class);
        $this->app->singleton(TeamInterface::class,Team::class);

    }
}
