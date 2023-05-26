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
                <form action="{{route('update.slider')}}" method="POST" enctype="multipart/form-data" class="bg-success rounded p-5">
                    @csrf
                    <input type="hidden" name="id" value="{{$slider->id}}">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Product Image</label>
                      <input type="file" class="form-control" id="" name="image" accept="image/*">
                      <img src="{{asset('/')}}{{$slider->image}}" alt="" height="50px" width="80px">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Title</label>
                        <input type="text" class="form-control" id="" name="title" value="{{$slider->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Color Title</label>
                        <input type="text" class="form-control" id="" name="colTitle" value="{{$slider->colTitle}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Subtitle</label>
                        <input type="text" class="form-control" id="" name="subtitle" value="{{$slider->subtitle}}">
                    </div>
                    <button type="submit" class="btn btn-dark">Save</button>
                  </form>
            </div>
        </div>
    </div>
   </section>
@endsection