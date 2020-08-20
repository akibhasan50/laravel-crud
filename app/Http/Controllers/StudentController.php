<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student()
    {
        return view('student.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|max:20',
            'email'=>'required|unique:students',
            'phone'=>'required|unique:students'
           
        ]);

        $student = new Student;

        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;

       $save = $student->save();
       if($save){
       
        alert('Insert','Student Insert successfully', 'success');

        return  redirect()->route('student');
    }else{
        return  redirect()->back();
    }
    }

    public function allstudent(){
        $student= Student::all()
        ;

        return view('student.allstudent',compact('student'));

    }
    public function show($id){
        $student= Student::Find($id);

        return view('student.showstdn',compact('student'));

    }
    public function update($id){
        $student= Student::Find($id);
        return view('student.update',compact('student'));

    }
    public function edit(Request $request){
        $student = new Student;

        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;

       $save = $student->save();
       if($save){
       
        alert('Update','Student Update successfully', 'success');

        return  redirect()->route('student');
    }else{
        return  redirect()->back();
    }

    }
    public function destroy($id){
        $student= Student::Find($id);
       $del=  $student->delete();
       if($del){
        alert('Delete','Student Deleted successfully', 'success');
        return  redirect()->route('all.student');
       }else{
        alert('Delete','Student not Deleted ', 'Warning');
        return  redirect()->back();
       }
       
      

    }
}
