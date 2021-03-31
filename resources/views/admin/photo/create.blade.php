@extends('layouts.admin')

@section('content')

<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">create img</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal"   method="post"action="{{ route('photos.store') }}" enctype="multipart/form-data">
              @csrf
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
                       <input type="text" class="form-control" name="category" id="category" placeholder="Enter category">
                      </div>
                      <label  class="col-sm-2 control-label"for="cover" >category cover</label>
                      <div class="col-sm-10">
                   <input type="file" name="imagecover" class="form-control-file" id="cover" />
                      </div>

                    </div>
                  

                  <h1> sub images </h1>
                   <div class="form-group">
                     <label  class="col-sm-2 control-label" for="exampleInputFile" >img input</label>
                      <div class="col-sm-10">
                        <input type="file" name="image[]" class="form-control-file" id="exampleInputFile" multiple>
                      </div>
                    </div>
                
                   <div class="form-group">
                        <label  class="col-sm-2 control-label" >description</label>
                            <div class="col-sm-10">
                        <textarea class="form-control" name="description" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                      </div>
                  
                  </div><!-- /.box-body -->
                  <div class="box-footer">
               
                    <button type="submit" class="btn btn-info pull-right">Submit</button>
                  </div><!-- /.box-footer -->
                </form>
              </div>
           
@endsection