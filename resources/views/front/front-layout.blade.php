<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="30">
    <meta name="description" content="airhostess training in nepal">
    <meta name="keywords" content="air hostess training institute nepal, Flight steward, cabin crew, aviation jobs, swimming, make up tips, No.1 air hostess training institute in Nepal, air hostess institute in nepal, air hostess company in nepal, requirements of airhostess, salary, jobs, aviation,Air hostess training in nepal kathmandu putalisadak, flight steward, airport, airlines, grooming, makeup, swimming">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{asset('css/slick.css')}}">
    <link href="{{asset('css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('css/fstyle.css')}}">


</head>
<body class="bgcolor">
<header>

@include('front.pageparts.navbar')




</div>
  
</header>

@yield('content')

@include('front.pageparts.footer')




   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}"></script>
   <script src="{{asset('js/slick.js')}}"></script>
  
   
   <script type="text/javascript" src="{{asset('js/lightbox.js')}}"></script>
    <script src="{{asset('js/js.js')}}"></script>
    <script>
    $(document).on('ready', function() {
      $
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 3
      });
     
    });
</script>
<script src="{{asset('js/wow.min.js')}}"></script>
              <script>
              new WOW().init();
                </script>
     <script>
    lightbox.option({
      
      'maxWidth':500,

    });
</script>
</body>
</html>
