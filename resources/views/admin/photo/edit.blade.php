@extends('layouts.admin')

@section('content')
<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">edit img</h3>
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
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile" value= "">
                        <label class="custom-file-label" for="exampleInputFile">{{$photo->image}}</label>
                      </div>
                    </div>
                       <div class="form-group" >
                    <label  class="col-sm-2 control-label" for="category" >slider</label>
                    <div class="col-sm-10">
                       <select class="custom-select custom-select-lg mb-3" id="project_id"  name="status" >
                                            <option  value="in slider" selected >put it to slider </option>
                                             <option  value="not slider"> dont put it to slider </option>
                            </select>
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
               
                    <button type="submit" class="btn btn-info pull-right">Submit</button>
                  </div><!-- /.box-footer -->
                </form>
              </div>


           
       
        
@endsection