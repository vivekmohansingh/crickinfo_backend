<?php

namespace App\Providers;

use App\repo\PlayerInterface;
use App\domain\Player;
use App\repo\TeamInterface;
use App\domain\Team;
use App\repo\MatchInterface;
use App\domain\Match;
use App\repo\SummaryInterface;
use App\domain\PlayerSummary;

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;

use App\infra\infrainterface\FileHandlerInterface;
use App\infra\implementation\ImageFileHandler;
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
        $this->app->singleton(PlayerInterface::class,Player::class);
        $this->app->singleton(TeamInterface::class,Team::class);
        $this->app->singleton(FileHandlerInterface::class,ImageFileHandler::class);
        $this->app->singleton(MatchInterface::class,Match::class);
        if(PlayerController::class)
        {
          $this->app->singleton(SummaryInterface::class,PlayerSummary::class);
        }

    }
}
