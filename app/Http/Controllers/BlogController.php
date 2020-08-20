<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
 
    public function addcatagory()
    {
        return view('page.add_catagory');
    }
  

    public function StoreCatagory(Request $request){
     
        $request->validate([
            'catagory'=>'required|min:3',
            'slugname'=>'required'
        ]);
        
        $data = array();
        $data['name']=$request->catagory;
        $data['slugname']=$request->slugname;

        $catagory = DB::table('addcatagories')->insert($data);

        if($catagory){
            alert('Insert','Catagory Inserted  successfully', 'success');
            //$request->session()->flash('success', 'catagory inserted successfully');
            return  redirect()->route('addcatagory');
        }else{
            return  redirect()->route('addcatagory');
        }

        

    }


    public function allcatagory(){
        $allcat = DB::table('addcatagories')->orderBy('id','desc')->get();

        return view('page.all_catagory',compact('allcat'));

        
    }
    public function showcatagory($id){
       
        $showcat = DB::table('addcatagories')->where('id',$id)->first();

        //return response()->json($showcat);

        return view('page.showcat')->with('cat',$showcat);

        
    }
    public function deletecatagory($id){
       
        $delcat = DB::table('addcatagories')->where('id',$id)->delete();

        if($delcat){
            //session()->flash('delmsg', 'catagory deleted successfully');
            alert('Delete','Catagory deleted successfully', 'success');

            return  redirect()->route('allcatagory');
        }else{
            return  redirect()->route('allcatagory');
        }
       
                    

        
    }
    public function updatecatagory($id){
        $showcat = DB::table('addcatagories')->where('id',$id)->first();
     return view('page.updatecat',compact('showcat'));
                    

        
    }
    public function editedcat(Request $request,$id){
        $request->validate([
            'catagory'=>'required|min:3',
            'slugname'=>'required'
        ]);
        
        $data = array();
        $data['name']=$request->catagory;
        $data['slugname']=$request->slugname;

        $editcat = DB::table('addcatagories')->where('id',$id)->update($data);

        if($editcat){
            alert('Update','Catagory updated  successfully', 'success');
            //$request->session()->flash('success', 'catagory inserted successfully');
            return  redirect()->route('allcatagory');
        }else{
           
            return  Redirect()->route('allcatagory');
        }

                    

        
    }
}
