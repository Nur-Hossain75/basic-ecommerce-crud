@extends('frontend.frontend-master')

@section('title','Home Page')

@section('content')
    <section>
        <div class="container">
            <div class="roe">
                <div class="col-md-12">
                    <ul>
                        @foreach ($categories as $category)
                       
                        <li><a href="{{route('categoryProduct',$category->id)}}">{{$category->name}}</a></li>
                            
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection