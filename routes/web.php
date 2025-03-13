<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [PostController::class, 'index'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/{id}/{slug}', [PostController::class, 'show'])->name('post.show');
Route::get('/author/{id}', [UserController::class, 'posts'])->name('author.posts');
Route::get('/blogs/category/{slug}', [PostController::class, 'blog'])->name('category.posts');
Route::get('/blogs/tag/{slug}', [PostController::class, 'blog'])->name('posts.tag');


require __DIR__.'/auth.php';
