<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data=[];
        $data['posts']=Post::all()->count();
        $data['categories']=Category::all()->count();
        $data['tags']=Tag::all()->count();
        $data['users']=User::all()->count();
        return view('admin.main.index', compact('data'));
    }
}
