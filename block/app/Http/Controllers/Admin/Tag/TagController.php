<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke()
    {
        $tags = Tag::all();
        return view('admin.tags.index', compact('tags'));
    }
}
