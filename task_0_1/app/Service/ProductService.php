<?php

namespace App\Service;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Exceptions\InvalidOrderException;



class ProductService
{
  public function store($data)
  {

      try
      {
        Db::beginTransaction();
          

  if(isset($data['image']))
  {
  $data['image'] = Storage::disk('public')->put('/images', $data['image']);
  }

  
        $product = Product::firstOrCreate($data);

          DB::commit();
          }

        catch(\Exception $exception)
      {
        DB::rollbak();
        abort(500);
      }
  }


  public function update($data, $product)
  {
    try
    {
      Db::beginTransaction();
      
        
  if(isset($data['image']))
  {
  $data['image'] = Storage::disk('public')->put('/images', $data['image']);
  }

   
          $product->update($data);

          DB::commit();
    }
    catch(\Exception $exception)
    {
      DB::rollbak();
      abort(500);
    }
    
        return $product;
  }
}
