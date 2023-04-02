<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use App\Http\Controllers\Admin\Post\BasePostController;

class ShowPostController extends BasePostController
{
    public function __invoke(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }
}
