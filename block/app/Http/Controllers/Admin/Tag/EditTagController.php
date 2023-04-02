<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Tag;

class EditTagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }
}
