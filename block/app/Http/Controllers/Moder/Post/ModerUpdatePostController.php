<?php

namespace App\Http\Controllers\Moder\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Http\Requests\Admin\Post\UpdateRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Moder\Post\ModerBasePostController;
use App\Service\PostService;

class ModerUpdatePostController extends ModerBasePostController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $post = $this->service->update($data, $post);

        return view('moder.posts.show', compact('post'));
    }
}
