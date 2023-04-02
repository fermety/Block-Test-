<?php

namespace App\Http\Controllers\Moder\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Http\Requests\Moder\Post\UpdateRequest;
use App\Http\Controllers\Moder\Post\ModerBasePostController;

class ModerDeletePostController extends ModerBasePostController
{
    public function __invoke(Post $post)
    {

        $post->delete();
        return redirect()->route('moder.post');
    }
}
