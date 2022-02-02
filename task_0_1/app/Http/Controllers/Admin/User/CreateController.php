<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Role;


class CreateController extends Controller
{
    public function __invoke()
    {
    	$roles = Role::all();

    	// dd($roles);

    	return view('admin.user.create', compact('roles'));
    	
    	// return view('admin.user.create', compact('roles'));
    }
}
