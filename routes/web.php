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

Route::get('/', [App\Http\Controllers\PostController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user-blog', [App\Http\Controllers\HomeController::class, 'personalBlog'])->name('user');
Route::get('/user-blog-add', [App\Http\Controllers\PostController::class, 'create']);
Route::post('/save', [App\Http\Controllers\PostController::class, 'store']);
Route::get('/edit', [App\Http\Controllers\PostController::class, 'edit']);
Route::put('/{id}/update', [App\Http\Controllers\PostController::class, 'update']);
Route::get('/delete', [App\Http\Controllers\PostController::class, 'delete']);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
