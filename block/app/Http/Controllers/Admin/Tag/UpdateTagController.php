<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\User;
use App\Http\Requests\Admin\Tag\UpdateRequest;

class UpdateTagController extends Controller
{
    public function __invoke(UpdateRequest $request, Tag $tag)
    {
        $data = $request->validated();
        $tag->update($data);
        return view('admin.tags.show', compact('tag'));
    }
}
