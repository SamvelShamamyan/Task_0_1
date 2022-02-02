<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

use Auth;


class indexController extends BaseController
{
    public function __invoke()
    {

    	if(Auth::user()->role_id === 2){
    		$products = Product::paginate(3);
    	}else{
    		$products = Product::all();
    	}
    	
    	return view('admin.product.index',compact('products'));
    }
}
