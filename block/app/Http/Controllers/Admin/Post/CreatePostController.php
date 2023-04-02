<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use App\Http\Controllers\Admin\Post\BasePostController;

class CreatePostController extends BasePostController
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }
}
