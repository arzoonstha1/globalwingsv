

<!--Section: Testimonials v.1-->
<section class="pb-2 text-center">
        
        <!--Section heading-->
        <h1 class="font-weight-bold h1 py-2  wow bounceInUp ">Testimonials</h1>
        <!--Section description-->
        
        <div class="row">
        
            <!--Grid column-->
            @foreach ($posts as $post)
                
           
            <div class="col-lg-4 col-md-12 mb-4 wow bounceInUp" data-wow-duration="1s" data-wow-delay="1s">
        
                <!--Card-->
                <div class="card testimonial-card gb">
        
                    <!--Background color-->
                    <div class="card-up info-color"></div>
        
                    <!--Avatar-->
                    <div class="avatar mx-auto white">
                        <img src="{{asset('image/gallery/'.$post->image)}}"class="rounded-circle img-fluid">
                    </div>
        
                    <div class="card-body">
                        <!--Name-->
                        <h4 class="mt-1">
                            <strong>{{$post->name}}</strong>
                        </h4>
                        <hr>
                        <!--Quotation-->
                        <p class="dark-grey-text">{!!$post->description!!}.......<a href="#" >Read More</a></p>
                    </div>
        
                </div>
                <!--Card-->
        
            </div>
            @endforeach
            <!--Grid column-->
        
           
        
        </div>
        
    </section>
    <!--Section: Testimonials v.1-->