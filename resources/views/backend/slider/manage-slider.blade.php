@extends('backend.backend-master')

@section('title','Manage Slider')

@section('content')
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
              <h3 class="p-3 bg-dark text-center rounded text-white">Product List</h3>
              <a class="btn btn-success p-2 mb-2" href="{{route('create.slider')}}">Add Slider</a>
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
                        <th scope="col">Sub Title</th>
                        <th scope="col">Status</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($sliders as $slider)
                      <tr>
                        <th scope="row">{{$slider->id}}</th>
                        <td><img src="{{asset('/')}}{{$slider->image}}" alt="" height="50px" width="80px"></td>
                        <td>{{$slider->title}}</td>
                        <td>{{$slider->subtitle}}</td>
                        <td>{{$slider->status}}</td>
                        <td><a class="btn btn-danger" href="{{route('delete.slider',$slider->id)}}">Delete</a>
                            <a class="btn btn-success" href="{{route('edit.slider',$slider->id)}}">edit</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</section>
@endsection