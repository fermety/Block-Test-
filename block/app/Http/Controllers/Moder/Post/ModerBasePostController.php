<?php

namespace App\Http\Controllers\Moder\Post;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use App\Service\PostService;

class ModerBasePostController extends Controller
{
    public $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }
}
