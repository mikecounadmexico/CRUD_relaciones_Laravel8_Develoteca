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

Route::get('/', function () {
    return view('welcome');
});


Route::get('libros/pdf_online', [App\Http\Controllers\LibroController::class, 'pdf_online'])->name('libros.pdf');
Route::get('libros/pdf_download', [App\Http\Controllers\LibroController::class, 'pdf_download'])->name('libros.pdf');


Auth::routes();
Route::resource('libros',App\Http\Controllers\LibroController::class)->middleware('auth');
Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
