<?php

use App\Http\Controllers\PostController;
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

Route::get('/blog',  [PostController::class, 'index'])->name('blog.index');

Route::post('/blog/post',  [PostController::class, 'store'])->name('blog.store');

Route::delete('blog/post/{id}', [PostController::class, 'destroy'])->name('blog.delete');

//Route::get('blog/post/{id}', [PostController::class, 'edit'])->name('blog.edit');
//Route::post('blog/post/{id}', [PostController::class, 'update'])->name('blog.update');


//get -> pega informações, post -> envia informações
