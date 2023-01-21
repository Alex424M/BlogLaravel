<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        $post = Post::find($id);
        $popularPosts=Post::where('id','!=',$id)->orderBy('likes','DESC')->limit(3)->get();
        $comments = Comment::where('post_id', $id)->get();
        $categories=Category::all();
        $tags=Tag::all();
        return view('main.show', compact( 'post', 'comments', 'categories', 'popularPosts', 'tags'));
    }
}
