<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;

class ShowCategoryController extends Controller
{
    public function __invoke(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }
}
