@extends('frontend.frontend-master')

@section('title','Details Page')

@section('content')
<div class="product-big-title-area">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="product-bit-title text-center">
                  <h2>Shop</h2>
              </div>
          </div>
      </div>
  </div>
</div>


<div class="single-product-area">
  <div class="zigzag-bottom"></div>
  <div class="container">
      <div class="row">
          <div class="col-md-4">
              <div class="single-sidebar">
                  <h2 class="sidebar-title">Search Products</h2>
                  <form action="">
                      <input type="text" placeholder="Search products...">
                      <input type="submit" value="Search">
                  </form>
              </div>
              
              <div class="single-sidebar">
                  <h2 class="sidebar-title">Products</h2>
                  @foreach ($allProducts as $allProduct)
                  <div class="thubmnail-recent">
                    <img src="{{asset('/')}}{{$allProduct->image}}" class="recent-thumb" alt="">
                    <h2><a href="">{{$allProduct->title}}</a></h2>
                    <div class="product-sidebar-price">
                        <ins>Tk{{$allProduct->price}}</ins> <del>Tk{{$allProduct->prevPrice}}</del>
                    </div>                             
                </div>
                  @endforeach
                  {{-- <div class="thubmnail-recent">
                      <img src="{{asset('/')}}frontend-assets/img/product-thumb-1.jpg" class="recent-thumb" alt="">
                      <h2><a href="">Sony Smart TV - 2015</a></h2>
                      <div class="product-sidebar-price">
                          <ins>$700.00</ins> <del>$100.00</del>
                      </div>                             
                  </div>
                  <div class="thubmnail-recent">
                      <img src="{{asset('/')}}frontend-assets/img/product-thumb-1.jpg" class="recent-thumb" alt="">
                      <h2><a href="">Sony Smart TV - 2015</a></h2>
                      <div class="product-sidebar-price">
                          <ins>$700.00</ins> <del>$100.00</del>
                      </div>                             
                  </div>
                  <div class="thubmnail-recent">
                      <img src="{{asset('/')}}frontend-assets/img/product-thumb-1.jpg" class="recent-thumb" alt="">
                      <h2><a href="">Sony Smart TV - 2015</a></h2>
                      <div class="product-sidebar-price">
                          <ins>$700.00</ins> <del>$100.00</del>
                      </div>                             
                  </div> --}}
              </div>
              
              <div class="single-sidebar">
                  <h2 class="sidebar-title">Recent Posts</h2>
                  <ul>
                    @foreach ($allProducts as $allProduct)
                    <li><a href="">{{$allProduct->title}}</a></li>
                    @endforeach
                  </ul>
              </div>
          </div>
          
          <div class="col-md-8">
              <div class="product-content-right">
                  <div class="product-breadcroumb">
                      <a href="{{route('home.page')}}">Home</a>
                      <a href="#">Category Name</a>
                      <a href="#">{{$products->title}}</a>
                  </div>
                  
                  <div class="row">
                      <div class="col-sm-6">
                          <div class="product-images">
                              <div class="product-main-img">
                                  <img src="{{asset('/')}}{{$products->image}}" alt="">
                              </div>
                              
                              {{-- <div class="product-gallery">
                                  <img src="{{asset('/')}}frontend-assets/img/product-thumb-1.jpg" alt="">
                                  <img src="{{asset('/')}}frontend-assets/img/product-thumb-2.jpg" alt="">
                                  <img src="{{asset('/')}}frontend-assets/img/product-thumb-3.jpg" alt="">
                              </div> --}}
                          </div>
                      </div>
                      
                      <div class="col-sm-6">
                          <div class="product-inner">
                              <h2 class="product-name">{{$products->title}}</h2>
                              <div class="product-inner-price">
                                  <ins>Tk{{$products->price}}</ins> <del>Tk{{$products->prevPrice}}</del>
                              </div>    
                              
                              <form action="" class="cart">
                                  <div class="quantity">
                                      <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                  </div>
                                  <button class="add_to_cart_button" type="submit">Add to cart</button>
                              </form>   
                              
                              <div class="product-inner-category">
                                  <p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                              </div> 
                              
                              <div role="tabpanel">
                                  <ul class="product-tab" role="tablist">
                                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                  </ul>
                                  <div class="tab-content">
                                      <div role="tabpanel" class="tab-pane fade in active" id="home">
                                          <h2>Product Description</h2>  
                                          <p>{{$products->description}}</p>
                                      </div>
                                      <div role="tabpanel" class="tab-pane fade" id="profile">
                                          <h2>Reviews</h2>
                                          <div class="submit-review">
                                              <p><label for="name">Name</label> <input name="name" type="text"></p>
                                              <p><label for="email">Email</label> <input name="email" type="email"></p>
                                              <div class="rating-chooser">
                                                  <p>Your rating</p>

                                                  <div class="rating-wrap-post">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                  </div>
                                              </div>
                                              <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                              <p><input type="submit" value="Submit"></p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              
                          </div>
                      </div>
                  </div>
                  
                  
                  <div class="related-products-wrapper">
                      <h2 class="related-products-title">Related Products</h2>
                      <div class="related-products-carousel">
                        @foreach ($allProducts as $allProduct)
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('/')}}{{$allProduct->image}}" alt="">
                                <div class="product-hover">
                                    <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                </div>
                            </div>

                            <h2><a href="">{{$allProduct->title}}</a></h2>

                            <div class="product-carousel-price">
                                <ins>Tk{{$allProduct->price}}</ins> <del>Tk{{$allProduct->prevPrice}}</del>
                            </div> 
                        </div> 
                        @endforeach
                         
                          {{-- <div class="single-product">
                              <div class="product-f-image">
                                  <img src="{{asset('/')}}frontend-assets/img/product-2.jpg" alt="">
                                  <div class="product-hover">
                                      <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                      <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                  </div>
                              </div>

                              <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                              <div class="product-carousel-price">
                                  <ins>$899.00</ins> <del>$999.00</del>
                              </div> 
                          </div>
                          <div class="single-product">
                              <div class="product-f-image">
                                  <img src="{{asset('/')}}frontend-assets/img/product-3.jpg" alt="">
                                  <div class="product-hover">
                                      <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                      <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                  </div>
                              </div>

                              <h2><a href="">Apple new i phone 6</a></h2>

                              <div class="product-carousel-price">
                                  <ins>$400.00</ins> <del>$425.00</del>
                              </div>                                 
                          </div>
                          <div class="single-product">
                              <div class="product-f-image">
                                  <img src="{{asset('/')}}frontend-assets/img/product-4.jpg" alt="">
                                  <div class="product-hover">
                                      <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                      <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                  </div>
                              </div>

                              <h2><a href="">Sony playstation microsoft</a></h2>

                              <div class="product-carousel-price">
                                  <ins>$200.00</ins> <del>$225.00</del>
                              </div>                            
                          </div>
                          <div class="single-product">
                              <div class="product-f-image">
                                  <img src="{{asset('/')}}frontend-assets/img/product-5.jpg" alt="">
                                  <div class="product-hover">
                                      <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                      <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                  </div>
                              </div>

                              <h2><a href="">Sony Smart Air Condtion</a></h2>

                              <div class="product-carousel-price">
                                  <ins>$1200.00</ins> <del>$1355.00</del>
                              </div>                                 
                          </div>
                          <div class="single-product">
                              <div class="product-f-image">
                                  <img src="{{asset('/')}}frontend-assets/img/product-6.jpg" alt="">
                                  <div class="product-hover">
                                      <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                      <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                  </div>
                              </div>

                              <h2><a href="">Samsung gallaxy note 4</a></h2>

                              <div class="product-carousel-price">
                                  <ins>$400.00</ins>
                              </div>                            
                          </div>                                     --}}
                      </div>
                  </div>
              </div>                    
          </div>
      </div>
  </div>
</div>
@endsection

{{-- <div class="card mb-3" style="max-width: 540px;">
    <div class=" g-0">
      <div class="col-md-4 mx-auto">
        <img src="{{asset('/')}}frontend-assets/{{asset('/')}}{{$products->image}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$products->title}}</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-body-secondary">Price: {{$products->price}}</small></p>
        </div>
      </div>
    </div>
</div> --}}