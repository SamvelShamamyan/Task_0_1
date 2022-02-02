<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\StoreRequest;
use Illuminate\Http\Request;

use App\Models\Product;

class ShowController extends BaseController
{
    public function __invoke(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }
}
