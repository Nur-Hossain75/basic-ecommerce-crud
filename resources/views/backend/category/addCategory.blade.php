@extends('backend.backend-master')

@section('title','Add Product')

@section('content')
   <section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
              <h3 class="p-3 rounded bg-dark text-white text-center ">Add Category</h3>
              @if (Session::get('message'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hey! </strong>{{Session::get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
                <form action="{{route('add.category')}}" method="POST" enctype="multipart/form-data" class="bg-success rounded p-5">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="" name="name" value="{{old('title')}}">
                        @error('name')
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