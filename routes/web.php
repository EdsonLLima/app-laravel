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

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\App;

Route::get('/', [AppController::class, 'index']);

Route::get('/cadastrar', [AppController::class, 'register']);

Route::get('/equipamentos', [AppController::class, 'equipments']);
