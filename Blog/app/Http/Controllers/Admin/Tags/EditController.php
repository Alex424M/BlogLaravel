<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke($id)
    {
        $tag=Tag::find($id);
        return view('admin.tags.edit',compact('tag'));
    }
}
