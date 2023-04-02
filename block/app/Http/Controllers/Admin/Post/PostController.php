<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use App\Http\Controllers\Admin\Post\BasePostController;

class PostController extends BasePostController
{
    public function __invoke()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }
}
