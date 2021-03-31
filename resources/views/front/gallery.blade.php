
@extends('layouts.app2')

@section('content')


<!--===============================
    CONTENT
===================================-->

<div class="fixed-bg">
    <img src="images/1.jpg">
</div>


<div class="main-content">
    <div class="container-fluid">
        <h1 class="main-heading">أعمالنا</h1>
         

        <div class="row">
         @foreach ($data as $key => $category)
          
    <div class="col-xs-12 col-sm-6 col-md-4 no-padding">
                <a href="{{ route('category', $category->category) }}" class="img-holder">
                
                    <img src="images/{{$category->image}}" alt="..." height="400">

                    <div class="hover-content">
                        <h1>{{$category->category}}</h1>
                    </div>
                </a>
            </div>
@endforeach
          


        </div>

    </div>
</div>


@endsection