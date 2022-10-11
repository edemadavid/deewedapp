<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [LocationController::class, 'welcome'])->name('welcome');



Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/logout',[AuthController::class, 'logout'])->name('logout');



Route::middleware(['isLoggedin'])->group (function() {

    Route::get('/find', [LocationController::class, 'find'])
    ->name('find');

    Route::get('/home', [AuthController::class, 'home'])
    ->name('home');

    Route::get('/locate', [LocationController::class, 'index'])
    ->name('locate');

});
