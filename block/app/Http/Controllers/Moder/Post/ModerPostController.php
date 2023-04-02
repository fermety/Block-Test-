<?php

namespace App\Http\Controllers\Moder\Post;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use App\Http\Controllers\Moder\Post\ModerBasePostController;

class ModerPostController extends ModerBasePostController
{
    public function __invoke()
    {
        $posts = Post::all();
        return view('moder.posts.index', compact('posts'));
    }
}
