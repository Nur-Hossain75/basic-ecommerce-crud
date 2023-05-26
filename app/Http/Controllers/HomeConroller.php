<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeConroller extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        $product = Product::all();
        return view('frontend.home.index',['sliders'=>$slider, 'products'=>$product]);
    }

    public function details($id)
    {
        $product = Product::find($id);
        $allProduct = Product::all()->take(4);
        return view('frontend.details.details',['products'=>$product, 'allProducts'=>$allProduct]);
    }
}
