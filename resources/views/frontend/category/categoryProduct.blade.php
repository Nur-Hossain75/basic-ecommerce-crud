@extends('frontend.frontend-master')

@section('title','Home Page')

@section('content')
<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Latest Products</h2>
                    <div class="product-carousel">
                        @foreach ($products as $product)
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('/')}}{{$product->image}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <a href="{{route('details.page',$product->id)}}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                </div>
                            </div>
                            
                            <h2><a href="single-product.html">{{$product->title}}</a></h2>
                            
                            <div class="product-carousel-price">
                                <ins>{{$product->price}}</ins> <del>{{$product->prevPrice}}</del>
                            </div> 
                        </div>
                        @endforeach
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> 
@endsection