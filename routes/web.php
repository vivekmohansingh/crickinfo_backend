<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('api/team[/{id}]', 'TeamController@getTeam');
$router->post('api/team', 'TeamController@createTeam');
$router->post('api/team/addPlayer', 'TeamController@addTeamPlayer');
$router->put('api/team/{id}', 'TeamController@updateTeam');
$router->delete('api/team/{id}', 'TeamController@deleteTeam');

// Grouping to implement 'jsonx' middleware to handle xml or json response on the basis of 'Accept' header
$router->group(['middleware' => 'jsonx'],function($router){
    $router->get('api/player[/{id}]','PlayerController@getPlayer');

// Grouping to implement 'authentication' middleware for all put/post and delete APIs
    $router->group(['middleware' => 'client'],function($router)
    {
        $router->post('api/player','PlayerController@createPlayer');
        $router->put('api/player/{id}', 'PlayerController@updatePlayer');
        $router->delete('api/player/{id}', 'PlayerController@deletePlayer');
    });
    $router->get('api/player/{id}/uploadimage', 'PlayerController@uploadPlayerImage');
    $router->get('api/player/{id}/history', 'PlayerController@getPlayerHistory');
});

$router->post('api/player/{id}/image', 'PlayerController@uploadPlayerImage');
$router->delete('api/player/{id}/image', 'PlayerController@deleteImage');

$router->get('api/match[/{id}]', 'MatchController@getMatch');
$router->post('api/match', 'MatchController@createMatch');
$router->put('api/match/{id}', 'MatchController@updateMatch');
$router->delete('api/match/{id}', 'MatchController@deleteMatch');

$router->get('api/team/{id}/match', 'MatchController@getMatchTeamWise');
$router->get('api/team/{id}/fixture', 'MatchController@getFixtureTeamWise');
