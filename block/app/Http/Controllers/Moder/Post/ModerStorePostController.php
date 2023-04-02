<?php

namespace App\Http\Controllers\Moder\Post;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Moder\Post\ModerBasePostController;
use App\Service\PostService;


class ModerStorePostController extends ModerBasePostController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->sevice->store($data);

        return redirect()->route('moder.post');
    }
}
