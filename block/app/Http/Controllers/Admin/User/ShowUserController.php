<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;

class ShowUserController extends Controller
{
    public function __invoke(User $user)
    {
        return view('admin.users.show', compact('user'));
    }
}
