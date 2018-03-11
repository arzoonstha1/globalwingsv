@extends('front.front-layout')
@section('content')
@include('front.pageparts.banner')
<section class="page-section about-heading">


    <div class="container-fluid">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3">
        
        <ul>
         
            <div align="left">
                @foreach ($categories as $category)
              <button class="filter-button "data-filter="all">
                <a class="nav-link" id="font" href="{{url('gallery/'.$category->id)}}">{{$category->name}}</a>
              </button>
              @endforeach
            </div>
            
          <br/>
            </ul>
          </div>
        
        <br/>  
        </div>
    </div>
    <div class="container-fluid">
      <div class="row">
          @foreach ($gallerys as $gallery)
          <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-4 filter">
              <a href="{{asset('image/gallery/'.$gallery->image)}}" data-lightbox="example-set">
                <img  src="{{asset('image/gallery/'.$gallery->image)}}" class="wow zoomIn img-responsive example-image p-0 m-2" data-wow-duration="1s" width="400px" height="300px">
              </a>
             
          </div>
          @endforeach
      </div>
    </div>

  </section>

@endsection