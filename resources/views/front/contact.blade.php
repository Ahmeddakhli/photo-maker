

    <style>
        input[type="file"] {
            padding: 0;
        }

        .black-box.margin-bottom {
            margin: 0 0 15px;
        }

        .checkbox-holder {
            font-weight: 100;
            position: relative;
            cursor: pointer;
            margin-bottom: 10px;
            display: block;
        }

        .checkbox-holder span {
            vertical-align: middle;
        }

        .checkbox-holder .checkbox-icon {
            width: 13px;
            height: 13px;
            line-height: 7px;
            display: inline-block;
            border: 1px solid #000;
            background: #000;
            text-align: center;
            margin: 0 4px;
        }

        .checkbox-holder input[type="checkbox"] {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .checkbox-holder .checkbox-icon:after {
            content: '';
            background: #000;
            width: 7px;
            height: 7px;
            display: block;
            margin: 2px;
        }

        .checkbox-holder input[type="checkbox"]:checked + .checkbox-icon {
            border-color: #00bcd4;
        }

        .checkbox-holder input[type="checkbox"]:checked + .checkbox-icon:after {
            background: #00bcd4;
        }

        .main-label {
            border-bottom: 1px dashed #00bcd4;
        }

        .check-open {
            margin-top: 10px;
        }
    </style>

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
        <h1 class="main-heading">تواصل معنا</h1>

        <div class="row">
        @if(Session::has('success'))
 <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>	<i class="icon fa fa-check"></i> Alert!</h4>
                   {{ Session::get('success') }}
                  </div>
@endif
          <form method="POST" action="{{ route('clients.store') }}">
                        @csrf
            <div class="col-xs-12 col-sm-8">
            
                    <input type="text" name="name" placeholder="الاسم / الشركة">
                    <input type="text" name="kind"placeholder="نوع النشاط">
                    <input type="tel" name="phone"placeholder="رقم التواصل">
                    <input type="email" name="email" placeholder="البريد الإلكتروني">


                    <label>نوع الخدمة</label>

                    <div class="row">
                     @foreach ($category as $key => $cat)
                        <div class="col-xs-12 col-sm-6 col-md-4">
                        
                            <div class="box black-box margin-bottom">
                                <div class="main-label">
                                    <label class="checkbox-holder">
                                        <input   type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span>{{$cat->category}}</span>
                                    </label>
                                </div>
                                <div class="check-open">
                             <?php $spacefic_sub= $data->where('category',$cat->category)?>
                                    @foreach ($spacefic_sub as $key => $sub)
                                        <label class="checkbox-holder">
                                                        <input name="services[]" value="{{$sub->id}}" type="checkbox">
                                                        <span class="checkbox-icon"></span>
                                                        <span>{{$sub->name}}</span>
                                                    </label>

                                    @endforeach
                                  
                                </div>

                            </div>
                             </div>
                            @endforeach
                                  <input type="number" name="photos_num" value="50" placeholder="عدد الصور">
                         
                        </div>
                  
                    <div class="btn btn-white btn-block">
                        <span><input type="submit" value="إرسال"></span>
                    </div>
                </form>
            </div>

            <div class="col-xs-12 col-sm-4">
                <div class="box black-box text-center">
                    <h3 class="main-heading">تفاصيل الاتصال</h3>

                    <p><i class="fa fa-envelope-o right-fa"></i> Info@pmstu.com</p>
                    <p><i class="fa fa-phone right-fa"></i> 0123456789</p>
                </div>
                <div class="box black-box text-center">
                    <h3 class="main-heading">إشترك معنا</h3>

                    <form>
                        <input type="email" placeholder="بريدك الالكتروني">
                        <div class="btn btn-white btn-block">
                            <span><input type="submit" value="إشترك معنا"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>


<!--===============================
    FOOTER
===================================-->
@endsection


<!--===============================
    SCRIPT
===================================-->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function (){
        $('.check-open').slideUp(0);

        $('.main-label .checkbox-holder').click(function (){
            if($(this).find('input').is(':checked')) {
                $(this).parents('.main-label').next('.check-open').stop().slideDown();
            } else {
                $(this).parents('.main-label').next('.check-open').stop().slideUp();
            }
        });
    });
</script>
<script src="js/script.js"></script>
</body>
</html>