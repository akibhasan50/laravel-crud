<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','PostController@indexpost');


Route::get('/first', function () {
  
    return view('first');
});
Route::view('web', 'web');

Route::get('contact','HomeController@contact')->name('contact');
Route::get('about','HomeController@about')->name('about');

Route::get('addcatagory','BlogController@addcatagory')->name('addcatagory');
Route::get('allcatagory','BlogController@allcatagory')->name('allcatagory');
Route::post('storecatagory','BlogController@StoreCatagory')->name('storecatagory');

Route::get('writepost','PostController@writepost')->name('writepost');
Route::post('addpost','PostController@addpost')->name('addpost');
Route::get('allposts','PostController@allposts')->name('allposts');
Route::get('showpost/{id}','PostController@showpost');
Route::get('update/post/{id}','PostController@updatepost');
Route::post('edit/post/{id}','PostController@editpost');
Route::get('delete/post/{id}','PostController@deletepost');
Route::get('single/post/{id}','PostController@singlpost');


Route::get('updatecat/{id}','BlogController@updatecatagory');
Route::get('showcatagory/{id}','BlogController@showcatagory');
Route::get('deletecatagory/{id}','BlogController@deletecatagory');
Route::post('editedcat/{id}','BlogController@editedcat');


// students
Route::get('student','StudentController@student')->name('student');
Route::get('all/student','StudentController@allstudent')->name('all.student');
Route::post('store.student','StudentController@store')->name('store.student');
Route::get('show/student/{id}','StudentController@show');
Route::get('delete/student/{id}','StudentController@destroy');
Route::get('update/student/{id}','StudentController@update');
Route::post('edit/student/{id}','StudentController@edit');
