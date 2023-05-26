<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        $category = Category::all();
        return view('backend.product.add',['categories'=>$category]);
    }

    public function manage()
    {
        $product = Product::all();
        return view('backend.product.manage',['products'=>$product]);
    }

    public function add(Request $request)
    {
        $request->validate([
            'image' => 'required | image | mimes:jpg',
            'title' => 'required | max:10 | min:5',
            'price' => 'required | numeric',
            'prevPrice' => 'required |numeric',
            'description' => 'required',
        ],[
            'title.required' => 'sir title should not be empty.',
            'title.max' => 'sir title should be less than 10 charcter.',
            'title.min' => 'sir title should be more than 5 charcter.',
            'price.required' => 'sir price should not be empty.',
            'price.numeric' => 'sir price should be number.',
            'prevPrice.required' => 'sir price should be number.',
            'prevPrice.numeric' => 'sir price should be number.',
            'description.required' => 'sir description should not be empty.',
            ]
    );
        Product::add($request);
        return  back()->with('message','Product Add Successfully.');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        if (file_exists($product->image)) {
           unlink($product->image);
        }
        $product->delete();

        return back()->with('message','Product Delete Successfully.');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('backend.product.edit',['product'=>$product]);
    }

    public function update(Request $r)
    {
        $product = Product::find($r->id);
        if ($r->image) {
            if(file_exists($product->image)){
                unlink($product->image);
            }
                $image= $r->image;
                $imgEx= $image->getClientOriginalExtension();
                $imgName= 'product-image'.time().'.'.$imgEx;
                $image->move(public_path('/product-images'),$imgName);
                $productImg= 'product-images/'.$imgName;
                $product->image = $productImg;
        }
                $product->title = $r->title;
                $product->price = $r->price;
                $product->prevPrice = $r->prevPrice;
                $product->description = $r->description;

                $product->save();
                return  back()->with('message','Product Update Successfully.');
    }

    public function slider()
    {
        return view('backend.slider.add-slider');
    }

    public function addSlider(Request $request)
    {
        $slider = new Slider();
        
        if($request->image){
         $image= $request->image;
         $imgEx= $image->getClientOriginalExtension();
         $imgName= 'slider-image'.time().'.'.$imgEx;
         $image->move(public_path('/slider-images'),$imgName);
         $productImg= 'slider-images/'.$imgName;
         $slider->image = $productImg;
        }else{
         $slider->image = null;
        }
 
        
         $slider->title = $request->title;
         $slider->colTitle = $request->colTitle;
         $slider->subtitle = $request->subtitle;
 
         $slider->save();
         return  back()->with('message','Slider Add Successfully.'); 
    }

    public function manageSlider()
    {
        $slider = Slider::all();
        return view('backend.slider.manage-slider',['sliders'=>$slider]);
    }

    public function deleteSlider($id)
    {
        $slider = Slider::find($id);
        if (file_exists($slider->image)) {
            unlink($slider->image);
        }
        $slider->delete();

        return back()->with('message','Slider Delete Successfully.');
    }

    public function editSlider($id)
    {
        $slider = Slider::find($id);

        return view('backend.slider.edit',['slider'=>$slider]);
    }

    public function updateSlider(Request $r)
    {
        $slider = Slider::find($r->id);

        if ($r->image) {
            if (file_exists($slider->image)) {
                unlink($slider->image);
            }
            $image= $r->image;
            $imgEx= $image->getClientOriginalExtension();
            $imgName= 'slider-image'.time().'.'.$imgEx;
            $image->move(public_path('/slider-images'),$imgName);
            $productImg= 'slider-images/'.$imgName;
            $slider->image = $productImg;
        }
         $slider->title = $r->title;
         $slider->colTitle = $r->colTitle;
         $slider->subtitle = $r->subtitle;
 
         $slider->save();
         return  back()->with('message','Slider Update Successfully.'); 
    }
}
