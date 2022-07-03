<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=> 'admin'], function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('heroes', [HeroController::class, 'index'])->name('admin.heroes');
    Route::get('items', [ItemController::class, 'index'])->name('admin.items');
    Route::get('enemies', [EnemyController::class, 'index'])->name('admin.enemies');
});
