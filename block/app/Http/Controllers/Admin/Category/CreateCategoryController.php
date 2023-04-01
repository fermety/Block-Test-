<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\User;

class CreateCategoryController extends Controller
{
    public function __invoke()
    {
        return view('admin.categories.create');
    }
}
