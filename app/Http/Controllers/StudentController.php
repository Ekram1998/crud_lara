<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'email'=>'required|unique:students',
            'phone'=>'required|unique:students',
        ]);
        Student::create($request->all());
        return redirect()->back()->with('success','Insert Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student, $id)
    {
        $students = Student::find($id);
        return view('edit',compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student, $id)
    {
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]);
        $students = Student::find($id);
        Student::create($request->all());
        return redirect()->route('index.student')->with('success','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student, $id)
    {
        $students = Student::find($id);
        $students->delete();
        return redirect()->back()->with('success','Delete Successfully');
    }
}
