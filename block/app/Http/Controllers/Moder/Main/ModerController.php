<?php

namespace App\Http\Controllers\Moder\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class ModerController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['$postsCount'] = $posts = Post::all()->count();

        return view('moder.main.index', compact('data'));
    }
}
