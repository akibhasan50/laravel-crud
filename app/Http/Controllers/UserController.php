<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
 public function dex($id= ' '){
 

   return view('user.header').view('user.body').view('user.footer');
 }
 public function home($id= ' '){
 

   return view('user.header').view('user.home');
 }
 public function about(Request $r){
 

    return view('user.header').view('user.about');
  
 }
 public function services($id= ' '){
 

   return view('user.header').view('user.services');
 }


public function session_set(Request $r){
   $r->session()->put('name','akib');
}
public function session_get(Request $r){
  echo  $r->session()->get('name');
}
public function session_remove(Request $r){
  echo  $r->session()->forget('name');
}
public function session_check(Request $r){
  if( $r->session()->has('name')) {
    echo "session set";
  }else{
    echo "session not set";
  }
}

public function loginform(Request $r){
  $r->validate([
    'password'=>'required|min:6',
    'email'=>'required',
   
  ]);

   $email = $r->input('email');
   $pass = $r->input('password');
   
   if($email =='akib@gmail.com' && $pass == '123456'){
    return redirect('about');
  }else{
    $r->session()->flash('error','please enter valid login details');
      return redirect('login');
  } 
   
}
 
}
