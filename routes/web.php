<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('admin');
})->middleware('auth');

Route::get('/login',[LoginController::class, 'login'])->name('login');

Route::post('/loginproses',[LoginController::class, 'loginproses']);

Route::get('/register',[LoginController::class, 'register']);

Route::post('/registeruser',[LoginController::class, 'registeruser']);

Route::get('/logout',[LoginController::class, 'logout']);
