<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;

class DeleteController extends BaseController
{
    public function __invoke($id)
    {
        Post::find($id)->delete();
        return redirect()->route('posts.index');
    }
}
