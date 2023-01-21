<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        $category=Category::find($id);
        return view('admin.categories.show',compact('category'));
    }
}
