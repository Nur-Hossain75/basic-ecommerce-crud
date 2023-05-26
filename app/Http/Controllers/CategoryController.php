<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class CategoryController extends Controller
{
    public function category()
    {
        $category = Category::all();
        return view('frontend.category.category',['categories'=>$category]);
    }

    public function create()
    {
        return view('backend.category.addCategory');
    }

    public function store(Request $r)
    {
        $r->validate(
            [
                'name' => 'required | max:50 | min:2'
            ]
            );
        Category::add($r);
        return back()->with('message','Category add Successfully!');  
    }

    public function categoryProduct($id)
    {
        // $products = Product::where('category_id', $id)->orderby('id','DESC')->take(4)->get();
        $products = Product::where('category_id', $id)->latest()->take(4)->get();
        return view('frontend.category.categoryProduct',['products'=>$products]);
    }
}
