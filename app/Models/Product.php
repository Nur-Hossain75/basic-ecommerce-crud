<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function add($request)
    {
        $product = new Product();
        
        $product->category_id = $request->category_id;
       if($request->image){
        $image= $request->image;
        $imgEx= $image->getClientOriginalExtension();
        $imgName= 'product-image'.time().'.'.$imgEx;
        $image->move(public_path('/product-images'),$imgName);
        $productImg= 'product-images/'.$imgName;
        $product->image = $productImg;
       }else{
        $product->image = null;
       }

       
        $product->title = $request->title;
        $product->price = $request->price;
        $product->prevPrice = $request->prevPrice;
        $product->description = $request->description;

        $product->save();
    }
}
