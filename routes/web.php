<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\ExtraitNaissanceController;
use App\Http\Controllers\HomeController;
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

Route::get(
    '/', function () {
        return redirect()->route('login');
    }
);

Auth::routes();

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function(){

    Route::get('/dashboard', [HomeController::class, 'admin'])->name('dashboard.admin');

    Route::resource('users', UserController::class);

});

Route::middleware(['auth', 'client'])->group(function(){

    Route::get('/home', [HomeController::class, 'index'])->name('dashboard.client');
    Route::resource('extrait_naissance', ExtraitNaissanceController::class);
});
