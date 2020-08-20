@extends('welcome')

@section('content')
   <div class="container">
    <h1 class="text-center">Write a Post</h1>
       <div class="row justify-content-center">
           <div class="col-lg-8">
            <div class="nav">
              <a href="{{route('addcatagory')}}" class="btn btn-outline-success mr-3">Add Catagory</a>
              <a href="{{route('allcatagory')}}"  class="btn btn-outline-danger mr-3">All Catagory</a>
              <a href="{{route('allposts')}}" class="btn btn-outline-warning">All Posts</a>
            </div>
          <form  method="POST"  action="{{route('addpost')}}" enctype="multipart/form-data">
              @csrf
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Title" name="title" >
                  
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
                       @foreach ($showcats as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                       @endforeach
  
                     </select>

                  </div>
                </div>
                @error('catagory')
                <strong class="text-danger">{{$message}}</strong> 
                    
                @enderror
                <div class="control-group">
                  <div class="form-group col-xs-12 floating-label-form-group controls">
                   
                     <label for="">Image</label>
                     <input type="file" class="form-control-file" name="image" id="" placeholder="" aria-describedby="fileHelpId">
                     
                    
                  </div>
                </div>
                @error('image')
                <strong class="text-danger">{{$message}}</strong> 
                    
                @enderror
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Details</label>
                    <textarea rows="5" class="form-control" placeholder="Details" name='details' id="details" ></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                @error('details')
                <strong class="text-danger">{{$message}}</strong> 
                    
                @enderror
                <br>
                <div id="success"></div>
                <button type="submit" class="btn btn-primary" id="sendMessageButton">Submit</button>
              </form>
           </div>
       </div>
   </div>



@endsection

