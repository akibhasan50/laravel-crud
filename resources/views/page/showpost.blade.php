@extends('welcome')

@section('content')
   <div class="container">
    <h1 class="text-center">Write a Post</h1>
       <div class="row justify-content-center">
           <div class="col-lg-8">
            <div class="nav">
              
              <a href="{{route('allposts')}}" class="btn btn-outline-warning">All Posts</a>
            </div>
          <form  method="POST"  action="" enctype="multipart/form-data">
              @csrf
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Title</label>
                    <input type="text" class="form-control" value="{{$showpost->title}}" name="title" >
                  
                  </div>
                </div>
                @error('title')
                <strong class="text-danger">{{$message}}</strong> 
                    
                @enderror
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                   
                     <label for="">Catagory</label>
                     <select class="form-control" name="catagory" >
                       <option>select catagory</option>
                      
                        <option selected>{{$showpost->name}}</option>
                      
  
                     </select>

                  </div>
                </div>
              
                <div class="control-group">
                  <div class="form-group col-xs-12 floating-label-form-group controls">
                   
                     <label for="">Image</label>
                     <img src="{{URL::to($showpost->image)}}" alt="post-img" style="width: 60px;height:50px;"> <br>
                     <input type="file" class="form-control-file" name="image" aria-describedby="fileHelpId">
                     
                    
                  </div>
                </div>
               
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Details</label>
                    <textarea rows="5" class="form-control" placeholder="Details" name='details' id="details" >{{$showpost->details}}</textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
               
                <br>
                <div id="success"></div>
               
              </form>
           </div>
       </div>
   </div>



@endsection

