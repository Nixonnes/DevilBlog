<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});

Route::inertia('/about', 'About');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard', [
            'posts' => Post::all()->map(function($post){
                return [
                    'id' => $post->id,
                'title' => $post->title,
                'content' => $post->content
            ];
        }),
        ]);
    })->name('profile');
    Route::get('/post/{id}', [PostController::class, 'showPost',])->name('post.show');
});

Route::inertia('/newPost', 'NewPost');
Route::post('/addPost', [PostController::class, 'Store']);
Route::patch('/editPost', [PostController::class, 'editPost']);
Route::delete('/post/{id}/delete', [PostController::class, 'deletePost'])->name('post.delete');
Route::get('/post/{id}/edit', function($id) {
    return Inertia::render('EditPost', [
        'post' => Post::find($id)
    ]);
})->name('post.edit');
