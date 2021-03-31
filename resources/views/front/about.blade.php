
@extends('layouts.app2')

@section('content')
<link rel="icon" type="image/png" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="owl-carousel/owl.carousel.css">

   
<!--===============================
    CONTENT
===================================-->

<div class="fixed-bg">
    <img src="images/1.jpg">
</div>


<div class="main-content">
    <div class="container">
        <h1 class="main-heading">من نحن</h1>
        

        <div class="text-center div-padding">
            <p>رواد في الابداع الفني الرقمي لصنع الصورة الاحترافية.</p>
            <p>نعمل في صانع الصورة بفرق متخصصة ونسخر كافة الوسائل التقنية الحديثة لتعزيز مكانة عملائنا.</p>
            <p>الإبداع مزيج بين المنطق والخيال ... هكذا نحن </p>

            <a href="http://training.aljazeera.net/mritems/Documents/2016/2/16/e782075b14c84729a88e703e0776f66a_100.pdf" target="_blank" class="btn btn-white margin"><span>تحميل بروفايل الشركة</span></a>
            <a href="gallery.html" class="btn btn-white margin"><span>عرض اعمالنا</span></a>
        </div>


        <div class="div-small-padding">
            <h1 class="main-heading">عملائنا</h1>

            <div class="row">
                <div class="col-xs-2 col-sm-1 no-padding text-center">
                    <a class="owl-btn prev-pro margin"><span class="fa fa-angle-right"></span></a>
                </div>

                <div class="col-xs-8 col-sm-10 no-padding">
                    <div id="owl-demo-products" class="owl-carousel-clients">
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-1.jpg">
                                <img src="images/logo-1.jpg" alt="img">
                            </a>
                        </div>
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-2.jpg">
                                <img src="images/logo-2.jpg" alt="img">
                            </a>
                        </div>
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-3.jpg">
                                <img src="images/logo-3.jpg" alt="img">
                            </a>
                        </div>
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-1.jpg">
                                <img src="images/logo-1.jpg" alt="img">
                            </a>
                        </div>
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-2.jpg">
                                <img src="images/logo-2.jpg" alt="img">
                            </a>
                        </div>
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-3.jpg">
                                <img src="images/logo-3.jpg" alt="img">
                            </a>
                        </div>
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-1.jpg">
                                <img src="images/logo-1.jpg" alt="img">
                            </a>
                        </div>
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-2.jpg">
                                <img src="images/logo-2.jpg" alt="img">
                            </a>
                        </div>
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-3.jpg">
                                <img src="images/logo-3.jpg" alt="img">
                            </a>
                        </div>
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-1.jpg">
                                <img src="images/logo-1.jpg" alt="img">
                            </a>
                        </div>
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-2.jpg">
                                <img src="images/logo-2.jpg" alt="img">
                            </a>
                        </div>
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-3.jpg">
                                <img src="images/logo-3.jpg" alt="img">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-2 col-sm-1 no-padding text-center">
                    <a class="owl-btn next-pro margin"><span class="fa fa-angle-left"></span></a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
<!--===============================
    SCRIPT
===================================-->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="image-popup/source/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript" src="image-popup/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script src="js/script.js"></script>
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
                this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
            }
        });
    });
</script>
</body>
</html>