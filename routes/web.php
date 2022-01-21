<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksControllers;
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
Route::resource("book", "BookController@create");
Route::get('/', function () {
    return view('welcome');
});
Route::resource('books', BooksController::class);



Auth::routes();
Route::get('/books/create', [App\Http\Controllers\BooksController::class, 'create'])->name('create');
Route::get('/books/edit/{id}', [App\Http\Controllers\BooksController::class, 'show'])->name('edit');
Route::post('/books/insert', [App\Http\Controllers\BooksController::class, 'insert'])->name('insert');
Route::post('/books/update/{id}', [App\Http\Controllers\BooksController::class, 'update'])->name('update');
Route::get('/books/delete/{id}', [App\Http\Controllers\BooksController::class, 'delete'])->name('delete');
Route::get('/home', [App\Http\Controllers\BooksController::class, 'index'])->name('home');
