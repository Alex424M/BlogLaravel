<?php

namespace App\Http\Controllers\Admin\Users;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    public function __invoke($id)
    {
        $user=User::find($id);
        $roles=Roles::all();
//        dd($roles);
        return view('admin.users.edit',compact('user','roles'));
    }
}
