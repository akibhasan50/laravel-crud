<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller

{
    public function writepost()
    {
        $showcats = DB::table('addcatagories')->get();
        return view('page.writepost',compact('showcats'));
    }
 
    public function addpost(Request $request)
    {

        $request->validate([
            'title'=>'required|min:3',
            'details'=>'required',
            'catagory'=>'required',
            'image'=>'required|max:1024'
        ]);


        $data = array();
        $data['title'] = $request->title;
        $data['cat_id'] = $request->catagory;
        $data['details'] = $request->details;
       
        $image= $request->file('image');

        if($image){
            $extention = strtolower($image->getClientOriginalExtension());
            $filename = time().'.'.$extention;
            $imgpath ='posts/images/';
            $imglink= $imgpath.$filename;
            $success= $image->move($imgpath,$filename);
            $data['image']=$imglink;

            //dd($data['image']);

            DB::table('posts')->insert($data);
            alert('Insert','Post Inserted  successfully', 'success');
            return  redirect()->route('allposts');

        }else{
            DB::table('posts')->insert($data);
            alert('Insert','Post Inserted  successfully', 'success');
            //$request->session()->flash('success', 'catagory inserted successfully');
            return  redirect()->route('allposts');
        }
       

    }


    
    public function allposts(){
        $allpost = DB::table('posts')
        ->join('addcatagories','posts.cat_id','addcatagories.id')
        ->select('posts.*','addcatagories.name')
        ->get();

        return view('page.allposts',compact('allpost'));
  
    }
    public function showpost($id){
       

        $showpost = DB::table('posts')
        ->join('addcatagories','posts.cat_id','addcatagories.id')
        ->select('posts.*','addcatagories.name')
        ->where('posts.id',$id)
        ->first();
      
        //  //return response()->json($showpost);
        return view('page.showpost',compact('showpost'));

    }
    public function updatepost($id){
        $singlepost = DB::table('posts')->where('id',$id)->first();
       $showcats = DB::table('addcatagories')->get();

        return view('page.updatepost',compact('singlepost','showcats'));


    }
    public function editpost(Request $request,$id){
        $request->validate([
            'title'=>'required|min:3',
            'details'=>'required',
            'catagory'=>'required',
            'image'=>'max:1024'
        ]);


        $data = array();
        $data['title'] = $request->title;
        $data['cat_id'] = $request->catagory;
        $data['details'] = $request->details;
       
        $image= $request->file('image');

        if($image){
            $extention = strtolower($image->getClientOriginalExtension());
            $filename = time().'.'.$extention;
            $imgpath ='posts/images/';
            $imglink= $imgpath.$filename;
            $success= $image->move($imgpath,$filename);
            $data['image']=$imglink;

            if($request->oldimg != null){
                unlink($request->oldimg);
            }
            
       
            DB::table('posts')->where('id',$id)->update( $data);
            alert('update','Post updated  successfully', 'success');
            return  redirect()->route('allposts');

        }else{
            $data['image']=$request->oldimg;
            DB::table('posts')->where('id',$id)->update( $data);
            alert('update','Post updated  successfully', 'success');
            //$request->session()->flash('success', 'catagory inserted successfully');
            return  redirect()->route('allposts');
        }
       

    }

    public function deletepost(Request $request,$id){
        $singlepost = DB::table('posts')->where('id',$id)->first();
        
        unlink($singlepost->image);
       $delpost = DB::table('posts')->where('id',$id)->delete();

        if($delpost){
       
            alert('Delete','Catagory deleted successfully', 'success');

            return  redirect()->route('allposts');
        }else{
            return  redirect()->route('allposts');
        }
       
    }

    public function indexpost()
    {
        
        $post = DB::table('posts')
        ->join('addcatagories','posts.cat_id','addcatagories.id')
        ->select('posts.*','addcatagories.name')
        ->paginate(2);

        return view('page.link',compact('post'));
    }


    public function singlpost($id){
       

        $showpost = DB::table('posts')
        ->join('addcatagories','posts.cat_id','addcatagories.id')
        ->select('posts.*','addcatagories.name')
        ->where('posts.id',$id)
        ->first();
      
        //  //return response()->json($showpost);
        return view('page.singlpost',compact('showpost'));

    }

}
