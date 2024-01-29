<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;


class PostController extends Controller
{
    // Отображение постов на странице пользователя
    public function show() {
        
        return Inertia::render('Dashboard', [
            'posts' => Post::with('user:id,name')->latest()->get(),
        ]);
    }
    // Страница отдельного поста
    public function showPost($id) {
        
        return Inertia::render('PostPage', [
            'post' => Post::find($id)
            
]);
    }
    // Функция добавления постов
    public function Store(Request $request) {
            $request->user()->posts()->create(
                
                ['title' => $request->title,
                'content' => $request->content,
            ]
            );
            return Redirect('/dashboard');
    }
    // Функция редактирования постов
    public function editPost(Request $request) {
        Post::find($request->id)->update([
            'title' => $request->title,
            'content' => $request->content
        ]);
    }
    // Функция удаления постов
    public function deletePost($id) {
        Post::find($id)->delete();
        return Redirect('/dashboard');
    }

    }
    
