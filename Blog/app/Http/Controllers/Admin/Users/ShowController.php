<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        $user=User::find($id);
        $role=DB::table('roles')->select('role')->where('id',$user->role_id)->get();
//        dd($role);
        return view('admin.users.show',compact('user','role'));
    }
}
