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
    Route::get('comics', 'index')->name('comics.index');
    Route::get('comics/create', 'create')->name('comics.create');
    Route::get('comics/{id}', 'show')->name('comics.show');
    Route::post('/', 'store') -> name ('comics.store');
    Route::get('comics/{id}/edit', 'edit')->name('comics.edit');
    // El método put  es para actualizar registros en la base de datos con un formulario que no se envía por medio del método post
    Route::put('comics/{comic}', 'update') -> name ('comics.update');
    Route::delete('comics/{comic}', 'destroy') -> name ('comics.destroy');

});
