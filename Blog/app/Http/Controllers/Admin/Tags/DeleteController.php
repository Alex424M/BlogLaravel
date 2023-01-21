<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class DeleteController extends Controller
{
    public function __invoke(Tag $id)
    {
        $id->delete();
        return redirect()->route('tags.index');
    }
}
