<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testform extends Controller
{
  public function index(Request $request){

    $request->validate([
      'password'=>'required',
      'email'=>'required',
     
    ]);
    //  return "hello";
    // echo $request->file('image')->store('media');

    
    
  }
}
