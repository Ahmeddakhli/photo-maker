@extends('layouts.admin')

@section('content')
 <link rel="stylesheet" type="text/css" href="{{asset('image-popup/source/jquery.fancybox.css?v=2.1.5')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('image-popup/source/helpers/jquery.fancybox-buttons.css?v=1.0.5')}}">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/3.3.2/css/fixedColumns.dataTables.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
   


<x-forms.input  class="mb-4" typeAhmed="errorhh" mass="ahmed">




</x-forms.input>


      <div class="box-header with-border">
      @if(Session::has('success'))
 <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>	<i class="icon fa fa-check"></i> Alert!</h4>
                   {{ Session::get('success') }}
                  </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                  <h3 class="box-title">photo Table</h3>
                </div><!-- /.box-header -->
     <a class="btn btn-success" href="{{ route('photos.create') }}">  add category <i class="fa fa-plus-square"></i></a>
     <a class="btn btn-success" href="{{ route('addphoto') }}">  add photo to spasific category<i class="fa fa-plus-square"></i></a>

<table id="example" class="stripe row-border order-column" style="width:100% ; hieght:100%">
        <thead>
            <tr>
                       <th style="width: 10px">#</th>
                      <th>descrebtion</th>
                      <th>category</th>
                      <th>img</th>
                      <th style="width: 40px">action</th>
            </tr>
        </thead>
        <tbody>
              @foreach ($data as $key => $img)
                    <tr>
                    <th scope="row">{{ $img->id }}</th>
                    <td>{{ \Str::limit($img->description, 100) }}</td>
                    <td>{{$img->category}}</td>
                     <td width="30%" height="150">
                      <a class="fancybox-buttons img-holder small-img" rel="gallery" title="" data-fancybox-group="button" href="{{asset('images/'.$img->image)}}">

                          <img src="images/{{ $img->image }}" width="100%" height="150"  >
                      </a>
                      </td>

                <td> 
                    <form action="{{ route('photos.destroy',$img->id) }}" method="post">
                    @csrf
                    {{method_field('delete')}}
                    <button class='btn btn-danger' onclick="return confirm('Are you sure?you want to delete this فكر تانى ')"> <i class="fa fa-trash"></i></button>
                                
                    <a class="btn btn-success"  href="{{ route('photos.edit',$img->id) }}"><i class="fa fa-edit"></i></a>
                  <br>
                  <a class="btn btn-info"  href="{{ route('photos.show',$img->id) }}">  <i class="fa fa-eye"></i></a>

                    </form>
                            
                    </tr>
                   @endforeach 
            
         
          
        </tbody>
    </table>

    




@endsection
@section('js')

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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/3.3.2/js/dataTables.fixedColumns.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>


<script >
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

</script>

@endsection