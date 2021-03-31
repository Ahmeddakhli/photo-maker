
@extends('layouts.app2')

@section('content')
    <link rel="icon" type="image/png" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    @if (App::isLocale('en'))
    <link rel="stylesheet" type="text/css" href="css/style-en.css">
    @else
    <link rel="stylesheet" type="text/css" href="css/style-ar.css">
    @endif

<!--===============================
    SLIDER
===================================-->

<div id="owl-demo" class="owl-carousel owl-theme">
  @foreach ($data as $key => $slid)
    <div class="item"><img src="images/{{$slid->image}}" alt="..."></div>
@endforeach
</div>

<div class="">
    <a class="btn owl-btn next"><span class="fa fa-angle-right"></span></a>
    <a class="btn owl-btn prev"><span class="fa fa-angle-left"></span></a>
</div>


@endsection