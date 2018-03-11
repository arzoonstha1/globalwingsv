@extends('front.front-layout')

@section('content')

@include('front.pageparts.slider');

<br><br>

<!--text about courses-->      
<h1 class="text-sm-center text-md-center text-lg-center text-xl-center text-primary">Global Wings - An Air hostess Training Center</h1>
<p class="text-sm-center lead">
Global Wings Pvt. Ltd. is registered with and licensed by Government of Nepal,
Company registrar’s Office as a private limited company. 
It is one of the finest Flight Attendant (Air-Hosts/ Air-Hostess) training institute of Nepal accredited by IAO, USA. 
It aggregates well-experienced faculty members. 
Global Wings is focus on the training and recruitment of the students. 
Training includes both theoretical as well as practical knowledge along with in flight experience
</p>

<hr/>
@include('front.pageparts.course')
<hr/>
<!--text about courses-->
<div class="container-fluid mt-5 p-3 choose lead">
    <div class="container">
<div class="row text-center">
<div class="col-md-12">
<h2>WHY <strong class="text-primary">CHOOSE</strong> US</h2>
</div>
</div>

<div class="row text-center">
<div class="col-md-8 offset-md-2">
Atque ducimus velit, earum quidem, iusto dolorem. Ex ipsam totam quas blanditiis, pariatur maxime ipsa iste, doloremque neque doloribus, error. Corrupti, tenetur.
</div>
</div>

<div class="row mt-5">
<div class="col-md-6">
<img src="image/123.jpg" alt="image" class="img-fluid m-auto">
</div>
<div class="col-md-6">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae tenetur sit quod quaerat officiis aperiam, molestiae nam omnis quam cupiditate. Eius amet nemo maxime error accusamus reprehenderit dignissimos. Necessitatibus, ipsa.</p>
<div class="media">
<i class="fa fa-eye" aria-hidden="true"></i>
<div class="media-body">
<h5 class="mt-0">Extramly Flexable</h5>
Cras sit amet nibh libero, in gravida nulla. 

</div>
</div>

<div class="media">
<i class="fa fa-diamond" aria-hidden="true"></i>
<div class="media-body">
<h5 class="mt-0">Packed Full Of Features</h5>
Cras sit amet nibh libero, in gravida nulla. 

</div>
</div>


<div class="media">
<i class="fa fa-phone" aria-hidden="true"></i>
<div class="media-body">
<h5 class="mt-0">24/7 Support</h5>
Cras sit amet nibh libero, in gravida nulla. 

</div>
</div>
<div class="my-btn">
<button class="btn btn-lg btn-outline-success">LEARN MORE &gt;</button>
</div>
</div>
</div>
</div>
</div>



@endsection