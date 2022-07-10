<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [APIController::class, 'index']);

//Endpoint de Heroes
Route::get('heroes', [APIController::class, 'getAllHeroes']);
Route::get('heroes/{id}', [APIController::class, 'getHero']);

//Endpoint de Enemies
Route::get('enemies', [APIController::class, 'getAllEnemies']);
Route::get('enemies/{id}', [APIController::class, 'getEnemy']);

//Endpoint de Items
Route::get('items', [APIController::class, 'getAllItems']);
Route::get('items/{id}', [APIController::class, 'getItem']);

//Endpoint de BS
Route::get('bs/{heroId}/{enemyId}', [APIController::class, 'runManualBS']);