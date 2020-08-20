@extends('welcome')

@section('content')
   <div class="container">
    <h1 class="text-center">Single student</h1>
       <div class="row justify-content-center">
           <div class="col-lg-10">
            <div class="nav my-4">
                <a href="{{route('student')}}" class="btn btn-outline-success mr-3">Add student</a>
                <a href="{{route('all.student')}}"  class="btn btn-outline-danger mr-3">All student</a>
            </div>
                <ul class="list-group">
                <li class="list-group-item ">{{$student->name}}</li>
                    <li class="list-group-item">{{$student->email}}</li>
                    <li class="list-group-item ">{{$student->phone}}</li>
                </ul>

           </div>
       </div>
   </div>



@endsection

