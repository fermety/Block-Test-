<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use App\Http\Requests\Admin\User\UpdateRequest;

class DeleteUserController extends Controller
{
    public function __invoke(User $user)
    {

        $user->delete();
        return redirect()->route('admin.user');
    }
}
