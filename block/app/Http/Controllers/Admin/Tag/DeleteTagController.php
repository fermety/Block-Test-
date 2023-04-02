<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Tag;
use App\Http\Requests\Admin\Tag\UpdateRequest;

class DeleteTagController extends Controller
{
    public function __invoke(Tag $tag)
    {

        $tag->delete();
        return redirect()->route('admin.tag');
    }
}
