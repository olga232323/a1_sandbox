<?php
use App\Http\Controllers\ComicController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', HomeController::class);

Route::controller(ComicController::class)->group(function () {
    Route::get('/', 'index')->name('comics.index');
    Route::get('create', 'create')->name('comics.create');
    Route::get('{id}', 'show')->name('comics.show');
    Route::post('/', 'store') -> name ('comics.store');
    Route::get('{id}/edit', 'edit')->name('comics.edit');
    // El método put  es para actualizar registros en la base de datos con un formulario que no se envía por medio del método post
    Route::put('{comic}', 'update') -> name ('comics.update');
    Route::delete('{comic}', 'destroy') -> name ('comics.destroy');

});
