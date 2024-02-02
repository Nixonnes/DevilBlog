<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function createComment(Request $request) {
        $user = Auth::user();
            Comment::create(    
        [
            'user_id' => Auth::user()->id,
            'content' => $request->content,
            'post_id'=>$request->post_id,
            'username' => $request->username
        ])
        ;
        return Redirect('/dashboard');
}
    }

