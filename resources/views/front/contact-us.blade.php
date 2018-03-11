@extends('front.front-layout')
@section('content')
@include('front.pageparts.banner')

<section>
        <div class="row mt-2 mb-2">
            <div class="col-md-8">
                <div class="container-fluid">
                        <iframe
                        height="400px"
                        width="800px"
                        frameborder="0"
                        src="//www.google.com/maps/embed/v1/place?q=putalisadak + kathmandu, Global Wings
                            &zoom=17
                            &key=AIzaSyAuVXA0aC8MUF4PafeO3q7w7s6OwUV1ZVs">
                      
                        </iframe>
                </div>
            </div>

            <div class="col-md-4 ">
                    
                            <div class="card" style="width:400px; height:400px ">
                            <img class="card-img-top h-50" src="{{asset('image/about.jpg')}}" alt="First slide">  
                                    <div class="card-body d-block">
                                      <h5 class="card-title"><b id="font">Contact Us@ Global Wings</b></h5>
                                            <ul class="list-inline justify-content-center text-dark">
                                                    <li class="list-inline-item"><b>Address:</b> 4th Floor, Aagan Sweets, Putalisadak, Kathmandu, Nepal</li>
                                                    <li class="list-inline-item"><b>Phone:</b> 01-4233864, 012298744</li>
                                                    <li class="list-inline-item"><b>Email:</b><a href="info@nepalairhostess.com">info@nepalairhostess.com</a></li>
                                                    <li class="list-inline-item"><b>Web:</b><a href="www.globalwings.edu.np">www.globalwings.edu.np</a></li>    
                                            </ul>
                                      
                                      
                                    </div>
                                  </div>
                  
                </div>
            </div>
</section>

<section class="bgcolor" class="mt-1 mb-1">
        <div class="section-content">
            <h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
            <h3>If You Have Any Queries Don''t Hesitate to Contact Us.</h3>
        </div>
        <br>
        <div>
        <div class="container">
            
            <form>
                    <div class="row">
            
                <div class="col-md-6 form-line">
                      <div class="form-group">
                          <label for="exampleInputUsername">Your name</label>
                        <input type="text" class="form-control" id="" placeholder=" Enter Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail">Email Address</label>
                        <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id">
                      </div>	
                      <div class="form-group">
                        <label for="telephone">Mobile No.</label>
                        <input type="tel" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no.">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for ="description"> Message</label>
                           <textarea  class="form-control" id="description" placeholder="Enter Your Message"></textarea>
                           
                        </div>
                        <div>

                                <button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
                            </div>
                      
                </div>
            </div>    
            </form>
        
        </div>
        </div>
</section>




@endsection