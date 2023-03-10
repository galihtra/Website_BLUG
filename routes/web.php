<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\LoginController;
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

//login
Route::get('/',[LoginController::class, 'login'])->name('login');
Route::post('/loginproses',[LoginController::class, 'loginproses']);

//logout
Route::get('/logout',[LoginController::class, 'logout']);

// Admin
Route::get('admin', [AdminController::class, 'index'])->middleware('auth');
Route::post('add-admin', [AdminController::class, 'store']);
Route::get('edit-admin/{id}', [AdminController::class, 'edit']);
Route::put('update-admin', [AdminController::class, 'update']);
Route::delete('delete-admin', [AdminController::class, 'destroy']);

// Divisi
Route::get('divisi', [DivisiController::class, 'index'])->middleware('auth');
Route::post('add-divisi', [DivisiController::class, 'store']);
Route::get('edit-divisi/{id}', [DivisiController::class, 'edit']);
Route::put('update-divisi', [DivisiController::class, 'update']);
Route::delete('delete-divisi', [DivisiController::class, 'destroy']);
