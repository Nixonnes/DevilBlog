<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function toggleLike(Request $request)
{
    $post_id = $request->post_id;
    $user_id = Auth::user()->id;

    $like = Like::where('user_id', $user_id)->where('post_id', $post_id)->first();

    // ... (проверка и создание/удаление лайка)
    if ($like) {
        // Если лайк существует, удаляем его
        $like->delete();
        $likesCount = Post::find($post_id)->likes->count();
        $action = 'unliked';
    } else {
        // Если лайка нет, создаем новый
        Like::create([
            'user_id' => $user_id,
            'post_id' => $post_id,
        ]);
        $likesCount = Post::find($post_id)->likes->count();
        $action = 'liked';
    }

    return response()->json([
        'action' => $action,
        'likesCount' => $likesCount,
    ]);
}
}
