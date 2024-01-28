<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;


class PostController extends Controller
{
    public function show() {
        
        return Inertia::render('Dashboard', [
            'posts' => Post::all()->map(function ($post){
                return [
                'id' => $post->id,
                'title' => $post->title,
                'content' => $post->content,
                ];
       
    })
]);
    }

    public function showAdmin() {
        
        return Inertia::render('Admin', [
            'posts' => Post::all()->map(function ($post){
                return [
                'id' => $post->id,
                'title' => $post->title,
                'content' => $post->content,
                ];
            
    })
]);

    }
    public function showPost($id) {
        
        return Inertia::render('PostPage', [
            'post' => Post::find($id)
            
]);
    }
    public function Store(Request $request) {
            Post::create(
                ['title' => $request->title,
                'content' => $request->content,
            ]
            );
            return Redirect('/dashboard');
    }
    public function editPost(Request $request) {
        Post::find($request->id)->update([
            'title' => $request->title,
            'content' => $request->content
        ]);
    }
    public function deletePost($id) {
        Post::find($id)->delete();
        return Redirect('/dashboard');
    }

    }
    
