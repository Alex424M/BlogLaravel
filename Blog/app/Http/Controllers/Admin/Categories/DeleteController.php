<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Models\Category;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function __invoke(Category $id)
    {
        $id->delete();
        return redirect()->route('categories.index');
    }
}
