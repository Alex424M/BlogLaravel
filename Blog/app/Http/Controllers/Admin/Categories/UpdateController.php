<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use App\Http\Controllers\Controller;

class UpdateController extends Controller
{
    public function __invoke($id,UpdateRequest $request)
    {
        $data=$request->validated();
        $category=Category::where('id','=',$id)->update($data);//??????????????
        return redirect()->route('categories.index',$id);//??????????????
    }
}
