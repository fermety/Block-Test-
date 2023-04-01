<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminController extends Controller
{
    public function __invoke()
    {
        return view('admin.main.index');
    }
}
