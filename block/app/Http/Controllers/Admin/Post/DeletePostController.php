<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Http\Controllers\Admin\Post\BasePostController;

class DeletePostController extends BasePostController
{
    public function __invoke(Post $post)
    {

        $post->delete();
        return redirect()->route('admin.post');
    }
}
