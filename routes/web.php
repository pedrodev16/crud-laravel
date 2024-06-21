<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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


Route::get('/', [PostController::class, 'index']);
Route::resource('posts', PostController::class);


/*
Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/post', [PostController::class, 'index'])->name('posts.index');
Route::get('/post/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/post', [PostController::class, 'store'])->name('posts.store');
//Route::get('/notas/{id}', [PostController::class, 'show']);
Route::get('/post/{id}/editar', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/post/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('posts.destroy'); 

*/
