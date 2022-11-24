<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

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

Route::get('/', function(){
    return view('dashboard');
});

Route::get('dashboard', [ArticlesController::class, 'dashboard'])->middleware(['auth']);

Route::get('login', [ArticlesController::class, 'login'])->name('login');

Route::get('register', [ArticlesController::class, 'register'])->name('register');

Route::get('add-user', [ArticlesController::class, 'addUser']);

Route::post('save-user', [ArticlesController::class, 'saveUser']);

Route::post('login-user', [ArticlesController::class, 'loginUser']);

Route::get('logout', [ArticlesController::class, 'logout'])->name('logout');