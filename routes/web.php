<?php

use App\Http\Controllers\DirectorioController;
use App\Http\Controllers\TipoContactoController;
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
Route::redirect('/', '/directorios');

Route::resource('directorios', DirectorioController::class);

Route::resource('tipos', TipoContactoController::class);


