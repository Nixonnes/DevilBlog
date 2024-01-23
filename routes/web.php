<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [PostController::class, 'show'])->name('post.index');
Route::get('/post/{id}', [PostController::class, 'showPost'])->name('post.show');


Route::get('/post/edit', [PostController::class, 'showEditPostForm'])->name('post.edit');
    
Route::get('/newPost', function() {
    return Inertia::render('NewPost');
});

Route::inertia('/about', 'About');
Route::get('/admin', [PostController::class, 'showAdmin']);

Route::post('/addPost', [PostController::class, 'Store']);
