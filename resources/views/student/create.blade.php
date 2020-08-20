@extends('welcome')

@section('content')
   <div class="container">
    <h1 class="text-center">Insert New Student</h1>
       <div class="row justify-content-center">
           <div class="col-lg-8">
            <div class="nav">
            
            <a href="{{route('all.student')}}"  class="btn btn-outline-danger mr-3">All student</a>
             
           
            </div>
        <form  action="{{route('store.student')}}" method="POST">
                @csrf
                  <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                      <label>Student Name</label>
                      <input type="text" class="form-control" placeholder="Student Name" name="name" >
                   
                    </div>
                    @error('name')
                    <strong class="text-danger">{{$message}}</strong> 
                        
                    @enderror
                  </div>
                  
                  <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                      <label>Student Email</label>
                      <input type="text" class="form-control" placeholder="Student Email" name="email" >
                     
                    </div>
                    @error('email')
                    <strong class="text-danger">{{$message}}</strong> 
                        
                    @enderror
                  </div>
                  <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                      <label>Student Phone</label>
                      <input type="text" class="form-control" placeholder="Student Phone" name="phone" >
                     
                    </div>
                    @error('phone')
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

