<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::post('/posts/{post}', [PostController::class, 'update'])->name('post.update');
