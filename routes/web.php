<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();



Route::group(['prefix' => '/todo', 'as' => 'todo.'], function () {
    Route::get('/index', [\App\Http\Controllers\TodoController::class, 'index'])->name('index');
    Route::get('/create', [\App\Http\Controllers\TodoController::class, 'create'])->name('create');
    Route::post('/store', [\App\Http\Controllers\TodoController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [\App\Http\Controllers\TodoController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [\App\Http\Controllers\TodoController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [\App\Http\Controllers\TodoController::class, 'destroy'])->name('delete');
});
