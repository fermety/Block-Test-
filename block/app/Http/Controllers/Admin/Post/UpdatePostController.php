<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Http\Requests\Admin\Post\UpdateRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Admin\Post\BasePostController;
use App\Service\PostService;

class UpdatePostController extends BasePostController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $post = $this->service->update($data, $post);

        return view('admin.posts.show', compact('post'));
    }
}
