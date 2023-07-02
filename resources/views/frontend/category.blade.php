@extends('layouts.customer')
@section('title')
    Category
@endsection

@section('content')
{{-- <div class="py-5"></div> --}}
    <div class="py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>All Categories</h2>
                </div>


                <div class="row ">
                    @foreach ($category as $cat)
                        <div class="col-md-4 ">
                            <a href="{{url(asset('view-category/'.$cat->slug))}}">
                                <div class="card-body zoom postion-relative" >
                                    <img src="{{asset('upload/category/'.$cat->image)}}"   class="w-100 lazy rounded" height="200px"  alt="">
                                    <div class="text-light  position-absolute top-50 start-50  translate-middle">
                                        <h4 style="letter-spacing:3px; ">{{$cat->name}}</h4>
                                    </div>
                                </div>
                            </a> 
                        </div>
                    @endforeach
                </div>

                
            </div>
        </div>
    </div>
    <div class="py-5 my-5">

    </div>
@endsection
