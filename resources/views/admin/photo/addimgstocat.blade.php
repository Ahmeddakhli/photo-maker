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
                      <label  class="col-sm-2 control-label"for="category" > select category </label>
                      
                      <div class="col-sm-10">
              
                       <select class="custom-select custom-select-lg mb-3" id="project_id"  name="category" >
                              @foreach ($data as $categ)
                               <option  value="{{$categ->category}}" >{{$categ->category}}</option>

                              @endforeach

                            </select>
                      </div>
                      

                    </div>
                   <select hidden class="custom-select custom-select-lg mb-3" id="project_id"  name="status" >
                         
                         <option  value="not slider" selected> dont put it </option>
                                 
                            </select>

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