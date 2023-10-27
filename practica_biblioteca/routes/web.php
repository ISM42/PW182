<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('index');
});

Route::get('/registroLibro', function () {
    return view('registro_libro');
});*/
use App\Http\Controllers\bibliotecaController;

Route::get('/',[bibliotecaController::class,'metodoInicio'])->name('apodoInicio');
Route::get('/registroLibro',[bibliotecaController::class,'metodoRegistro'])->name('apodoRegistroLibro');

Route::post('/guardarRegistro',[bibliotecaController::class,'metodoGuardarRegistro'])->name('guardar');