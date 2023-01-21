<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Models\Category;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function __invoke($id)
    {
        $category=Category::find($id);
        return view('admin.categories.edit',compact('category'));
    }
}
