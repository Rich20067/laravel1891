<?php namespace 

App\Http\Controllers;
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

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\BookController;

Route::get('consultas', [BookController::class, 'Elokuent']);

Route::get('books/create', [BookController::class, 'create']);
Route::post('books/store', [BookController::class, 'store'])->name('book.store');
Route::get('books', [BookController::class, 'index'])->name('book.index');

Route::get('book/{book}', [BookController::class, 'show'])->name('book.show');
Route::put('book/{book}', [BookController::class, 'update'])->name('book.update');
Route::delete('book/{book}', [BookController::class, 'destroy'])->name('book.destroy');
Route::get('book/{book}/edit', [BookController::class, 'edit'])->name('book.edit');