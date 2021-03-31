@extends('layouts.admin')

@section('content')
<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">show img</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ route('photos.update',$photo->id) }}" enctype="multipart/form-data">
                        @csrf
                        {{method_field('put')}}
                      @if ($errors->any())
                <div class="alert alert-danger" >
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                  <div class="box-body">
                   <div class="form-group">
                      <label  class="col-sm-2 control-label"for="category" >category</label>
                      <div class="col-sm-10">
                       <input type="text" class="form-control" name="category" id="category" value="{{$photo->category}}" placeholder="Enter category">
                      </div>
                    </div>
                  
                   <div class="form-group">
                     <label  class="col-sm-2 control-label" for="exampleInputFile" >img input</label>
                      <div class="col-sm-10">
                        <img src="../images/{{ $photo->image}}" width="100%" height="400"  >

                     
                      </div>
                    </div>
                  
                   <div class="form-group">
                        <label  class="col-sm-2 control-label" >description</label>
                            <div class="col-sm-10">
                        <textarea class="form-control" name="description" rows="3" placeholder="Enter ...">{{$photo->description}}</textarea>
                        </div>
                      </div>
                  
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                  <form action="{{ route('photos.destroy',$photo->id) }}" method="post">
                    @csrf
                    {{method_field('delete')}}
                    <button class='btn btn-danger' onclick="return confirm('Are you sure?you want to delete this فكر تانى ')"> <i class="fa fa-trash"></i></button>
                                
                    <a class="btn btn-success"  href="{{ route('photos.edit',$photo->id) }}"><i class="fa fa-edit"></i></a>
                  

                    </form>
               
                  </div><!-- /.box-footer -->
                </form>
              </div>


@endsection