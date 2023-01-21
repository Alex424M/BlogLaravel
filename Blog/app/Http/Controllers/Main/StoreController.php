<?php

namespace App\Http\Controllers\Main;

use App\Http\Requests\Main\StoreRequest;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{
    public function __invoke($id,StoreRequest $request)
    {
        $data=$request->validated();
        $data['user_id']=Auth::id();
        $data['post_id']=$id;
        Comment::firstOrCreate($data);
        return redirect()->route('main.show',$id);
    }
}
