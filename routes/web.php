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

    

    Route::group(['prefix'=> 'heroes'], function(){
        Route::get('/', [HeroController::class, 'index'])->name('admin.heroes');
        Route::get('create', [HeroController::class, 'create'])->name('admin.heroes.create');
        Route::post('store', [HeroController::class, 'store'])->name('admin.heroes.store');
        Route::get('edit/{id}', [HeroController::class, 'edit'])->name('admin.heroes.edit');
        Route::post('update/{id}', [HeroController::class, 'update'])->name('admin.heroes.update');
        Route::delete('destroy/{id}', [HeroController::class, 'destroy'])->name('admin.heroes.destroy');
    });

    Route::get('items', [ItemController::class, 'index'])->name('admin.items');
    Route::get('enemies', [EnemyController::class, 'index'])->name('admin.enemies');
});
