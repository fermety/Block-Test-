<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class StoreUserController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        User::firstOrCreate(['email' => $data['email']], $data);
        return redirect()->route('admin.user');
    }
}
