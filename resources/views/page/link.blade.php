@extends('welcome')


@section('content')
   
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
     
       
          @foreach ($post as $item)
          <div class="post-preview">
          <a href="{{url('single/post/'.$item->id)}}">
         
          <img  src="{{URL::to($item->image)}}" alt="">
          <h2 class="post-title">
            {{$item->title}}
          </h2>
        </a>
        <p class="post-meta">Publish Date :
          
          {{$item->created_at}}</p>
          <hr>
        </div>
          @endforeach

     {{$post->links()}}
     
      
      <!-- Pager -->
      <div class="clearfix">
       
      </div>
    </div>
  </div>
</div>




@endsection



