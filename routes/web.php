<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

//Route::get('/', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/documento/{id}', [HomeController::class, 'show'])->name('documento.show');
//Route::get('/tipo-programa/{id}', [HomeController::class, 'documentosPorTipoPrograma'])->name('documentosPorTipoPrograma');
Route::get('/diplomados', [HomeController::class, 'diplomados'])->name('diplomados');
Route::get('/maestrias', [HomeController::class, 'maestrias'])->name('maestrias');
Route::get('/doctorados', [HomeController::class, 'doctorados'])->name('doctorados');
Route::get('/posdoctorados', [HomeController::class, 'posdoctorados'])->name('posdoctorados');

/* Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/',[HomeController::class, 'ver'])->name('main'); */

/* Route::get('/diplomados', function () {
    return view('contenido.diplomados');  // Asegúrate de usar
})->name('diplomados');
 */