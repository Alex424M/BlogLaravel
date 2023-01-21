<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        $tag=Tag::find($id);
        return view('admin.tags.show',compact('tag'));
    }
}
