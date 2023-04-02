<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class AdminController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['$usersCount'] = $users = User::all()->count();
        $data['$postsCount'] = $posts = Post::all()->count();
        $data['$categoriesCount'] = $categories = Category::all()->count();
        $data['$tagsCount'] = $tags = Tag::all()->count();
        return view('admin.main.index', compact('data'));
    }
}
