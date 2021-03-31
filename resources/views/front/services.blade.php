
@extends('layouts.app2')

@section('content')

<!--===============================
    CONTENT
===================================-->

<div class="fixed-bg">
    <img src="images/1.jpg">
</div>


<div class="main-content">
    <div class="container">
        <h1 class="main-heading">خدماتنا</h1>
        


@foreach ($settings as $data)
<div class="border-bottom">
            <h1><strong> {{$data->name}}</strong></h1>
            <p>{{$data->sub}}</p>
            <ul class="list-numbered">
            
            @if (App::isLocale('en')) 

               {!! $data->value_en !!}
            @else
              {!! $data->value_ar !!}
             @endif
            </ul>
        </div>

        
    
@endforeach
        
        
           

        

  
@endsection