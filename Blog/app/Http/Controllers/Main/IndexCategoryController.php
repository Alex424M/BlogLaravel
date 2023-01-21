<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexCategoryController extends Controller
{
    public function __invoke($id)
    {
        $posts = Post::where('category_id', $id)->paginate(6);
        return view('main.index', compact('posts'));
    }
}
