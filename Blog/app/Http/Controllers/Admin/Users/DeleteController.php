<?php

namespace App\Http\Controllers\Admin\Users;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\User;

class DeleteController extends Controller
{
    public function __invoke(User $id)
    {
        $id->delete();
        return redirect()->route('users.index');
    }
}
