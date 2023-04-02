<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\User;

class CreateTagController extends Controller
{
    public function __invoke()
    {
        return view('admin.tags.create');
    }
}
