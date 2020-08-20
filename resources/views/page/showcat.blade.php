@extends('welcome')

@section('content')
   <div class="container">
    <h1 class="text-center">Single Catagories</h1>
       <div class="row justify-content-center">
           <div class="col-lg-10">
            <div class="nav">
                <a href="{{route('addcatagory')}}" class="btn btn-outline-success mr-3">Add Catagory</a>
                  <a href="{{route('allcatagory')}}"  class="btn btn-outline-danger">All Catagory</a>
                </div>
                <ul class="list-group">
                <li class="list-group-item ">{{$cat->name}}</li>
                    <li class="list-group-item">{{$cat->slugname}}</li>
                    <li class="list-group-item ">{{$cat->created_at}}</li>
                </ul>

           </div>
       </div>
   </div>



@endsection

