<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class EditController extends BaseController
{
    public function __invoke($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        $allTags = Tag::all();
        $tags = DB::table('tags')->
        join('post_tags', 'tags.id', '=', 'post_tags.tag_id')->
        where('post_tags.post_id', '=', $id)->
        get();
        return view('admin.posts.edit', compact('post', 'categories', 'tags', 'allTags'));
    }
}
