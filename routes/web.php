<?php

use App\Http\Controllers\ApartmentController;
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

Route::get('/create', [ApartmentController::class, 'create']);
Route::post('/create', [ApartmentController::class, 'store']);
Route::get('/list', [ApartmentController::class, 'index']);
Route::get('/edit/{id}', [ApartmentController::class, 'edit']);
Route::post('/edit/{id}', [ApartmentController::class, 'update']);
Route::get('/delete/{id}', [ApartmentController::class, 'destroy']);
