<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use App\Models\Comment;


class PostController extends Controller
{
    // Страница отдельного поста
    public function showPost($id) {
        
        return Inertia::render('PostPage', [
            'post' => Post::find($id),
            'comments' => Comment::where('post_id',$id)->latest()->get(),
            
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
    public function deletePost($post_id) {
        Post::find($post_id)->delete();
        return Redirect('/dashboard');
    }

    }
    
