@extends('welcome')

@section('content')
   <div class="container">
   
       <div class="row justify-content-center">
           <div class="col-lg-8 ">
            <img  src="{{URL::to($showpost->image)}}" alt="">

            <div>
                <h1>{{$showpost->title}}</h1>
               
            </div>
            <p class="post-meta">Publish Date :{{$showpost->created_at}}</p>
            <div>
                <p>{{$showpost->details}}</p>
            </div>
           </div>
       </div>
   </div>



@endsection

