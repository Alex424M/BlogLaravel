<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data=$request->validated();
        $this->service->store($data);
        return redirect()->route('posts.index');
    }
}
