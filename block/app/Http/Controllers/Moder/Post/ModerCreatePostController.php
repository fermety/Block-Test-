<?php

namespace App\Http\Controllers\Moder\Post;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use App\Http\Controllers\Moder\Post\ModerBasePostController;

class ModerCreatePostController extends ModerBasePostController
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('moder.posts.create', compact('categories', 'tags'));
    }
}
