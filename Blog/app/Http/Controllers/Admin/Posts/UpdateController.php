<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke($id,UpdateRequest $request, Post $post)
    {
        $data=$request->validated();
        $this->service->update($data,$id);
        return redirect()->route('posts.show',$id);
    }
}
