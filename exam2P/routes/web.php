<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::view('/', function () {
    return view('comics');
});*/

Route::get('/',[ComicsController::class,'metodoGuardar'])->name ('guardar_comics');

Route::post('/guardarForm', function () {
    return view('comics');
});