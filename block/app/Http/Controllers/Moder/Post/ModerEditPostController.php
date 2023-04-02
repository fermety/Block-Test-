<?php

namespace App\Http\Controllers\Moder\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use App\Http\Controllers\Moder\Post\ModerBasePostController;

class ModerEditPostController extends ModerBasePostController
{
    public function __invoke(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('moder.posts.edit', compact('post', 'categories', 'tags'));
    }
}
