@extends('layouts.admin')

@section('content')

<div class="col-lg-3 col-6" style=" margin:100px; ">

          
<div class="card card-primary " width="100%">
              <div class="card-header" width="100%">
                <h3 class="card-title" width="100%">import new img</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                @if ($errors->any())
                <div class="alert alert-danger" >
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
              <form method="post"action="{{ route('photos.store') }}" enctype="multipart/form-data">
              @csrf
                <div class="card-body" width="100%">
                  <div class="form-group" width="100%">
                    <label for="category" width="100%">category</label>
                    <input type="text" class="form-control" name="category" id="category" placeholder="Enter category">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputFile">img input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    
                    </div>
                  </div>
                  <div class="form-group" width="100%">
                    <label for="category" width="100%">slider</label>
                       <select class="custom-select custom-select-lg mb-3" id="project_id"  name="status" >
                              
                         
                                            <option  value="in slider" selected >put it to slider </option>
                                             <option  value="not slider"> dont put it to slider </option>
                                         
                              
                              
                            </select>
                  </div>
                
                 <div class="form-group">
                        <label>description</label>
                        <textarea class="form-control" name="description" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
 </div>
@endsection
