<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function get_all_student(){
        $students = Student::all();

        return view('student_manage',['students'=>$students]);
    }


    public function get_student_by_id($id){
        $student = Student::findOrFail($id);
        return view('edit_student',["student"=>$student]);
    }

    public function edit(Request $request, $id){
        // Tìm đến đối tượng muốn update
        $validate = $request->validate([
            'fullname'=>'required',
            'birthday'=>"date_format:Y-m-d",
            'address'=>"required"
        ]);
        $student = Student::find($id);
        $student->fullname = $request->fullname;
        $student->birthday = $request->birthday;
        $student->address = $request->address;
        $student->save();
        // Student::whereId($id)->update($request->except('_token','updated_at'));
        return redirect()->route("student");
    }

    public function create_student(){
        return view('create_student');
    }

    public function add_student(Request $request){
        $validate = $request->validate([
            'fullname'=>'required',
            'birthday'=>"date_format:Y-m-d",
            'address'=>"required"
        ]);
        $student= new Student;
        $student->fullname = $request->fullname;
        $student->birthday = $request->birthday;
        $student->address = $request->address;
        // $user->created_at=false;
        $student->save();
        return redirect("/student");
    }

    public function delete_student($id){
        $item = Student::find($id);
        $item->delete();
        return redirect()->route("student");
    }
}
