@extends('front.front-layout')
@section('content')
@include('front.pageparts.banner')


<section class="text-center m-3">
        
       

        <div class="demo">
                <div class="container-fluid ">
                    <div class="row">
                            @foreach ($posts as $post)
                        <div class="col-md-6 wow zoomIn mt-4" data-wow-duration="1s">
                            <div id="testimonial-slider" class="owl-carousel">
                                <div class="testimonial">
                                    <div class="pic">
                                        <img src="{{asset('image/gallery/'.$post->image)}}">
                                    </div>
                                </div>
                                </div>
                        </div>
                                    <div class="col-md-6 wow zoomIn m-auto pl-0 " data-wow-duration="1s">
                                    <h3 class="title">{{$post->name}}</h3>
                                    
                                    <p class="description text-justify">
                                            {!!$post->description!!}
                                  </p>
                                </div>
                                
                                
                        @endforeach
                    </div>
                </div>
            </div>
            
        
    </section>
    
@endsection