<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


use App\Models\User;
use App\Models\Role;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
         $data = $request->validated();
        // dd($data);

           
        
        $data['password'] = Hash::make($data['password']);
        $user = User::firstOrCreate(['email'=>$data['email']],$data);

           
       
        return redirect()->route('admin.user.index');





    }
}

