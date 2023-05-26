@extends('backend.backend-master')

@section('title','Manage Product')

@section('content')
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                  <h3 class="p-3 bg-dark text-center rounded text-white">Product List</h3>
                  <a class="btn btn-success p-2 mb-2" href="{{route('create.product')}}">Add Product</a>
                  @if (Session::get('message'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hey! </strong>{{Session::get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
                    <table class="table text-center table-bordered border-primary">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($products as $product)
                          <tr>
                            <th scope="row">{{$product->id}}</th>
                            <td><img src="{{asset('/')}}{{$product->image}}" alt="" height="50px" width="80px"></td>
                            <td>{{$product->title}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->status}}</td>
                            <td><a class="btn btn-danger" href="{{route('delete.product',$product->id)}}">Delete</a>
                                <a class="btn btn-success" href="{{route('edit.product',$product->id)}}">Edit</a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </section>
@endsection