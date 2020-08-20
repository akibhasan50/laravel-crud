@extends('welcome')

@section('content')
   <div class="container">
    <h1 class="text-center">All Catagories</h1>
       <div class="row justify-content-center">
           <div class="col-lg">

            <div class="nav my-4">
              <a href="{{route('student')}}" class="btn btn-outline-success mr-3">Add student</a>
                
              </div>

              <strong class="text-danger"> {{session('delmsg')}}</strong> 
            <table class="table table-striped">
                <thead>
                  <tr class="text-center">
                    <th scope="col">serial</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email </th>
                    <th scope="col">Phone </th>
                    <th scope="col">Action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <tr class="">
                      @php
                          $i=0;
                      @endphp
                      @foreach ($student as $item)
                        @php
                            $i++;
                        @endphp
                      <th scope="row">{{$i}}</th>
                      <td>{{$item->name}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->phone}}</td>
                      
                      <td>
                        
                      <a href="{{URL::to('update/student/'.$item->id)}}" class="btn btn-sm btn-info">Edit</a>
                      <a href="{{URL::to('show/student/'.$item->id)}}" class="btn btn-sm btn-warning" >View</a>
                          <a type="button" class="btn btn-sm btn-danger" href="{{URL::to('delete/student/'.$item->id)}}">Delete</a> 
                      </td>
    
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
           </div>
       </div>
   </div>



@endsection

