@extends('backend.backend-master')

@section('title','Add Slider')

@section('content')
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
              <h3 class="p-3 rounded bg-dark text-white text-center ">Add Slider</h3>
              @if (Session::get('message'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hey! </strong>{{Session::get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
                <form action="{{route('add.slider')}}" method="POST" enctype="multipart/form-data" class="bg-success rounded p-5">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Product Image</label>
                      <input type="file" class="form-control" id="" name="image" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Title</label>
                        <input type="text" class="form-control" id="" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Title</label>
                        <input type="text" class="form-control" id="" name="colTitle">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Subtitle</label>
                        <input type="text" class="form-control" id="" name="subtitle">
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                  </form>
            </div>
        </div>
    </div>
   </section>
@endsection