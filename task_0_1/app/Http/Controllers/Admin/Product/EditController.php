<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;

class EditController extends BaseController
{
    public function __invoke(Product $product)
    {
    	$categories = Category::all();
        return view('admin.product.edit', compact('product','categories'));
    }
}
