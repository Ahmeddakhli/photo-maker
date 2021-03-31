<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <title>Photo Maker</title>
    <link rel="icon" type="image/png" href="{{asset('images/icon.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('image-popup/source/jquery.fancybox.css?v=2.1.5')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('image-popup/source/helpers/jquery.fancybox-buttons.css?v=1.0.5')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
      @if (App::isLocale('en'))
         <link rel="stylesheet" type="text/css" href="{{asset('css/style-en.css')}}"> 
       @else
        <link rel="stylesheet" type="text/css" href="{{asset('css/style-ar.css')}}"> 
       @endif

</head>

<body>

<!--===============================
    NAV
===================================-->

<nav class="navbar navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                    <span class="fa fa-bars"></span>
                </button>

                <a href="index.html" class="navbar-brand hidden-sm hidden-md hidden-lg"><img src="{{asset('images/logo.png')}}" alt="LOGO"></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right text-align-left">
                    <li class="active"><a href="{{ route('/') }}">{{ __('auth.home') }}</a></li>
                    <li><a href="{{ route('ourservices') }}">{{ __('auth.ourservices') }}</a></li>
                </ul>

                <a href="index.html" class="navbar-brand hidden-xs text-center"><img src="{{asset('images/logo.png')}}" alt="LOGO"></a>

                <ul class="nav navbar-nav navbar-left text-align-right">
                    <li><a href="{{ route('gallery') }}">{{ __('auth.photosview') }}</a></li>
                    <li><a href="{{ route('clients.index') }}">{{ __('auth.callus') }}</a></li>
                   @if (App::isLocale('en')) 
                      <li><a href="{{ url('locale/ar') }}">{{ __('auth.ar') }}</a></li>
                   @else
                    <li><a href="{{ url('locale/en') }}">{{ __('auth.en') }}</a></li>
                   @endif
                  
                </ul>
            </div>
        </div>
    </div>
</nav>


<!--===============================
    SLIDER
===================================-->
 @yield('content')
<!--===============================
    FOOTER
===================================-->

<footer class="navbar-fixed-bottom text-center">
    <div class="container">
<?php
use App\Models\Setting;
   $links= Setting::all()->where('page',"link");?>
        <p>جميع الحقوق محفوظة لمؤسسة صانع الصورة للتجارة  &copy; 2005-2015 </p>
    @foreach ($links as $link)
           <a href="{{$link->value_ar}}"><i class=" {{$link->icon}}"></i></a>  
        @endforeach

    </div>
</footer>


<!--===============================
    SCRIPT
===================================-->

<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>