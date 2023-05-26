@extends('backend.backend-master')

@section('title','Add Product')

@section('content')
   <section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
              <h3 class="p-3 rounded bg-dark text-white text-center ">Add Product</h3>
              @if (Session::get('message'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hey! </strong>{{Session::get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
                <form action="{{route('add.product')}}" method="POST" enctype="multipart/form-data" class="bg-success rounded p-5">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Select Category</label>
                      <select name="category_id" class="form-control">
                        <option value="" active>--- Select a Option ---</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Product Image</label>
                      <input type="file" class="form-control" id="" name="image" accept="image/*" value="{{old('image')}}">
                      @error('image')
                          <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Title</label>
                        <input type="text" class="form-control" id="" name="title" value="{{old('title')}}">
                        @error('title')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product price</label>
                        <input type="text" class="form-control" id="" name="price" value="{{old('price')}}">
                        @error('price')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Previous price</label>
                        <input type="text" class="form-control" id="" name="prevPrice" value="{{old('prevPrice')}}">
                        @error('prevPrice')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Description</label>
                        <textarea type="text" class="form-control" id="" name="description" >{{old('description')}}</textarea>
                        @error('description')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                  </form>
            </div>
        </div>
    </div>
   </section>
@endsection