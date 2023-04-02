<?php

namespace App\Http\Controllers\Moder\Post;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use App\Http\Controllers\Moder\Post\ModerBasePostController;

class ModerShowPostController extends ModerBasePostController
{
    public function __invoke(Post $post)
    {
        return view('moder.posts.show', compact('post'));
    }
}
