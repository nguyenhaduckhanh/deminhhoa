<?php

namespace App\Http\Controllers;

use App\Models\Student; //add
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_all_student()
    {
        $students = Student::all();
        return view('student_manage', ['students' => $students]);
    }
    // public function get_student_by_id($id)
    // {
    //     $students = Student::find($id);
    //     return $students;
    // }
    public function get_student_by_id($id)
    {
        $students = Student::find($id);
        return view('student_edit', ['students' => $students]);
    }
    public function create()
    {
        return view('student_add');
    }

    public function store(Request $request)
    {
        $students = new Student;
        $students->id = $request->input('id');
        $students->name = $request->input('name');
        $students->birthday = $request->input('birthday');
        $students->address = $request->input('adress');
        
        return redirect('/student-manage');
    }
    public function update(Request $request, $id)
    {
        $students = Student::find($id);
        $students->fullname = $request->input('fullname');
        $students->birthday = $request->input('birthday');
        $students->address = $request->input('address');
        $students->update();
        // return "Student Updated Successfully";
        return redirect("/student-manage");

    }
}
