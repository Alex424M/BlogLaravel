<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data=$request->validated();
        Category::firstOrCreate($data);
        return redirect()->route('categories.index');
    }
}
