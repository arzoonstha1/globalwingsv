@extends('front.front-layout')


@section('content')
@include('front.pageparts.banner')
<div class="container-fluid">

        <div class="container">
        <div class="row">
                @foreach ($posts as $post)
            <div class="card col-md-5 m-4"  style="width: 18rem;">
                <div class="card-body text-dark">
                  <h2 class="card-title">{{$post->name}}</h2>
                  <p class="card-text">{!!$post->description!!}</p>
                  
                </div>
              </div>
              @endforeach 
        </div>
    </div>
            
          
</div>


    
@endsection