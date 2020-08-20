@extends('welcome')

@section('content')
   <div class="container">
    <h1 class="text-center">All Catagories</h1>
       <div class="row justify-content-center">
           <div class="col-lg-10">

            <div class="nav my-4">
              <a href="{{route('addcatagory')}}" class="btn btn-outline-success mr-3">Add Catagory</a>
                <a href="{{route('allcatagory')}}"  class="btn btn-outline-danger">All Catagory</a>
              </div>

              <strong class="text-danger"> {{session('delmsg')}}</strong> 
            <table class="table table-striped">
                <thead>
                  <tr class="text-center">
                    <th scope="col">serial</th>
                    <th scope="col">Catagory</th>
                    <th scope="col">Slug Name</th>
                    <th scope="col">Action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <tr class="">
                      @php
                          $i=0;
                      @endphp
                      @foreach ($allcat as $item)
                        @php
                            $i++;
                        @endphp
                      <th scope="row">{{$i}}</th>
                      <td>{{$item->name}}</td>
                      <td>{{$item->slugname}}</td>
                      <td>
                        
                      <a href="{{URL::to('updatecat/'.$item->id)}}" class="btn btn-sm btn-info">Edit</a>
                      <a href="{{URL::to('showcatagory/'.$item->id)}}" class="btn btn-sm btn-warning" >View</a>
                          <a type="button" class="btn btn-sm btn-danger" href="{{URL::to('deletecatagory/'.$item->id)}}">Delete</a> 
                      </td>
    
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
           </div>
       </div>
   </div>



@endsection

