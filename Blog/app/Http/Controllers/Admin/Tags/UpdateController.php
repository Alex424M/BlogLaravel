<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class UpdateController extends Controller
{
    public function __invoke($id,UpdateRequest $request)
    {
        $data=$request->validated();
        Tag::where('id','=',$id)->update($data);//??????????????
        return redirect()->route('tags.index',$id);//??????????????
    }
}
