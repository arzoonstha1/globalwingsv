

<nav id="nav" class="navbar navbar-dark navbar-expand-lg fixed-top">
<div class="row container-fluid">
                <!-- <a class="navbar-brand" href="#"><img src="image/123.jpg" width="150px" height="75px"/></a> -->
</div>
<div class="container row">


        <ul class="navbar-nav">
        
          
          
           @foreach ($pages as $page)
               
            <li class="dropdown nav-item btn-group dropright">
                    <a class=" nav-link  " id="check" href="{{url('/'.$page->id)}}">
                      {{$page->name}}
                    </a>
        
                   
          </li>
         @endforeach

        
            
           
        </ul>
</div>

</nav>