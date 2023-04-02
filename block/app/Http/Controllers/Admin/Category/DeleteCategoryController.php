<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use App\Http\Requests\Admin\Category\UpdateRequest;

class DeleteCategoryController extends Controller
{
    public function __invoke(Category $category)
    {

        $category->delete();
        return redirect()->route('admin.category');
    }
}
