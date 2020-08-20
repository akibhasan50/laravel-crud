@extends('welcome')

@section('content')
   <div class="container">
    <h1 class="text-center">Update Catagory</h1>
       <div class="row justify-content-center">
           <div class="col-lg-8">

            
              <strong class="text-danger"> {{session('success')}}</strong> 

            <form  action="{{url('editedcat/'.$showcat->id)}}" method="POST">
              @csrf
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Catagory</label>
                  <input type="text" class="form-control" value="{{$showcat->name}}" name="catagory" >
                 
                  </div>
                  @error('catagory')
                  <strong class="text-danger">{{$message}}</strong> 
                      
                  @enderror
                </div>
                
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Slug Name</label>
                    <input type="text" class="form-control" value="{{$showcat->slugname}}" name="slugname" >
                   
                  </div>
                  @error('slug')
                  <strong class="text-danger">{{$message}}</strong> 
                      
                  @enderror
                </div>
                
                
                
                <br>
                <div id="success"></div>
                <button type="submit" class="btn btn-primary" id="sendMessageButton">Update</button>
              </form>
           </div>
       </div>
   </div>



@endsection

