<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Role;


class EditController extends Controller
{
    public function __invoke(User $user)
    {
   
    	$roles = Role::all();
        return view('admin.user.edit', compact('user','roles'));
    }
}
