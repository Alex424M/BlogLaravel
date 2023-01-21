<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Requests\Admin\Category\StoreRequest;//!!!!!!!!!!!!!!!
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)//!!!!!!!!!!
    {
        $data=$request->validated();
        Tag::firstOrCreate($data);
        return redirect()->route('tags.index');
    }
}
