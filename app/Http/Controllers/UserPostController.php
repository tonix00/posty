<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function index(User $user)
    {
        $posts = $user->posts()->with(['user','likes'])->paginate(10);
        $receivedLikesCount = $user->receivedLikes->count();
        $postsCount = $posts->count();
        return view('users.post.index',[
            'user'=>$user,
            'posts'=>$posts,
            'postsCount'=>$postsCount,
            'receivedLikesCount'=>$receivedLikesCount
        ]);
    }
}
