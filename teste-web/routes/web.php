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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/cars/cars', [EventController::class, 'listCars']);

Route::get('/form-veiculo', [EventController::class, 'createCars']);

Route::post('/cadastrar', [EventController::class, 'store']);

Route::post('/encontrar', [EventController::class, 'find']);
