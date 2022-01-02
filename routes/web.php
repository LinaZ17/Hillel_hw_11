<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\UsersControllers;
use App\Http\Controllers\TaskControllers;
use \App\Http\Controllers\ServiceControllers;



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

Route::get('/', [HomeControllers::class, 'index'])->name('index');

Route::name('users.')->group(function () {  //группируем по имени
    Route::prefix('/users')->group(function(Router $router) { //группируем по префиксу
        $router->post('/registration', [UsersControllers::class, 'registration'])->name('registration'); //такой вариант записи
        Route::post('/authorization', [UsersControllers::class, 'authorization'])->name('authorization'); //и такой вариант записи
        $router->get('/viewing', [UsersControllers::class, 'viewing'])->name('viewing');
        $router->delete('/deletion', [UsersControllers::class, 'deletion'])->name('deletion');
    });
});

Route::resource('task', TaskControllers::class);







