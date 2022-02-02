<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Category;


class CreateController extends BaseController
{
    public function __invoke()
    {
    	$categories = Category::all();
    	return view('admin.product.create',compact('categories'));
    }
}
