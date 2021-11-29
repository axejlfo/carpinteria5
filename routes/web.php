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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/productos', function(){
    return view('product');
})->middleware(['auth:sanctum', 'verified'])->name('productos');

Route::get('/pedidos', function(){
    return view('pedidos');
})->middleware(['auth:sanctum', 'verified'])->name('pedidos');
Route::get('/categorias', function(){
    return view('categorias');
})->middleware(['auth:sanctum', 'verified'])->name('categorias');
Route::get('/personas', function(){
    return view('personas');
})->middleware(['auth:sanctum', 'verified'])->name('personas');

Route::get('login/facebook', 'App\Http\Controllers\Auth\LoginFacebookController@redirect');
Route::get('login/facebook/callback', 'App\Http\Controllers\Auth\LoginFacebookController@callback');