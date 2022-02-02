<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\UpdateRequest;
use Illuminate\Http\Request;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use App\Exceptions\InvalidOrderException;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
    	$data = $request->validated();
    	$product = $this->service->update($data, $product);

        return view('admin.product.show', compact('product'));
    }
}
