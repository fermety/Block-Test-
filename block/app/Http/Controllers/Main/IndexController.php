<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(5);
        return view('main.index', compact('posts'));
    }
}
