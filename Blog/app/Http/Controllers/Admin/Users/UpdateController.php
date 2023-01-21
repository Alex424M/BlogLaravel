<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke($id,UpdateRequest $request)
    {
        $data=$request->validated();
        User::where('id','=',$id)->update($data);//??????????????
        return redirect()->route('users.index',$id);//??????????????
    }
}
