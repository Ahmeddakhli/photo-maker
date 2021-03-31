
@extends('layouts.app2')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{asset('image-popup/source/jquery.fancybox.css?v=2.1.5')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('image-popup/source/helpers/jquery.fancybox-buttons.css?v=1.0.5')}}">
<!--===============================
    CONTENT
===================================-->

<div class="fixed-bg">
    <img src="{{asset('images/1.jpg')}}">
</div>


<div class="main-content">
    <div class="container-fluid">
        <h1 class="main-heading">{{$name_cat}}</h1>

        <div class="row">

              @foreach ($imgs as $key => $img)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <a class="fancybox-buttons img-holder small-img" rel="gallery" title="" data-fancybox-group="button" href="{{asset('images/'.$img->image)}}">
      
                        <img src="{{asset('images/'.$img->image)}}" alt="img" height="400">
                    </a>
                </div>
             @endforeach
        </div>

    </div>
</div>


<!--===============================
    FOOTER
===================================-->




<!--===============================
    SCRIPT
===================================-->

<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('image-popup/source/jquery.fancybox.js?v=2.1.5')}}"></script>
<script type="text/javascript" src="{{asset('image-popup/source/helpers/jquery.fancybox-buttons.js?v=1.0.5')}}"></script>
<script>
    $(document).ready(function (){
        /*Button helper. Disable animations, hide close button, change title type and content*/

        $('.fancybox-buttons').fancybox({
            openEffect  : 'none',
            closeEffect : 'none',

            prevEffect : 'none',
            nextEffect : 'none',

            closeBtn  : false,

            helpers : {
                title : {
                    type : 'inside'
                },
                buttons	: {}
            },

            afterLoad : function() {
                this.title = '<a href="https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/category/ahmed&display=popup" class="btn btn-fb btn-small"><i class="fa fa-facebook right-fa"></i> Share</a>' +
                        '<a href="#" class="btn btn-tw btn-small"><i class="fa fa-twitter right-fa"></i> Share</a>' +
                        '<a href="#" class="btn btn-inst btn-small"><i class="fa fa-instagram right-fa"></i> Share</a>';
            }
        });


    });
</script>
<script src="{{asset('js/script.js')}}"></script>
@endsection