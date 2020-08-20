@extends('welcome')

@section('content')
   <div class="container">
    <h1 class="text-center">Add Catagory</h1>
       <div class="row justify-content-center">
           <div class="col-lg-8">

            
              <strong class="text-danger"> {{session('success')}}</strong> 

            <form  action="{{route('storecatagory')}}" method="POST">
              @csrf
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Catagory</label>
                    <input type="text" class="form-control" placeholder="Catagory Name" name="catagory" >
                 
                  </div>
                  @error('catagory')
                  <strong class="text-danger">{{$message}}</strong> 
                      
                  @enderror
                </div>
                
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Slug Name</label>
                    <input type="text" class="form-control" placeholder="Slug Name" name="slugname" >
                   
                  </div>
                  @error('slug')
                  <strong class="text-danger">{{$message}}</strong> 
                      
                  @enderror
                </div>
                
                
                
                <br>
                <div id="success"></div>
                <button type="submit" class="btn btn-primary" id="sendMessageButton">Submit</button>
              </form>
           </div>
       </div>
   </div>



@endsection

