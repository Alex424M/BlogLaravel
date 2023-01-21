<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostTag;
use Illuminate\Http\Request;

class IndexTagController extends Controller
{
    public function __invoke($id)
    {
        $post_ids=PostTag::select('post_id')->where('tag_id', $id)->get();

        $posts=Post::whereIn('id',$post_ids)->paginate(6);

        return view('main.index', compact('posts'));
    }
}
