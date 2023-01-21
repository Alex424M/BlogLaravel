<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class ShowController extends BaseController
{
    public function __invoke($id)
    {
        $post=Post::find($id);
        $category=Category::find($post->category_id);
//        $tag_ids=DB::table('post_tags')->
//        select('tag_id')->
//        where('post_id','=',$id)->get();
//        $tags=DB::table('tags')->
//            select('title')->
//                where('id','IN',$tag_ids)->get();
        $tags=DB::table('tags')
            ->join('post_tags', 'tags.id', '=', 'post_tags.tag_id')
            ->where('post_tags.post_id','=',$id)
            ->select('tags.title')
            ->get();
        return view('admin.posts.show',compact('post','tags', 'category'));
    }
}
