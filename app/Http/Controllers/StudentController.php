<?php

namespace App\Http\Controllers;

use App\Models\Program;
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

        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $programs = Program::all();
        return view('student.add', compact('programs'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'sex' => 'required',
            'birthday' => 'required|date',
            'program_id' => 'required',
            'year_level' => 'required|integer'
        ]);


        Student::create($validatedData);

        return redirect()->route('student.index')->with('success', 'Student created successfully.');

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
    public function edit($id)
    {
        //
        $programs = Program::all();
        $student = Student::find($id);

        if (!$student) {
            return redirect()->route('student.index')->with('error', 'Student not found');

        }

        return view('student.edit', compact('student', 'programs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $student = Student::find($id);

        if (!$student) {
            return redirect()->route('student.index')->with('error', 'Student not found');
        }

        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'sex' => 'required',
            'birthday' => 'required|date',
            'program_id' => 'required',
            'year_level' => 'required|integer'
        ]);

        $student->update($validatedData);

        return redirect()->route('student.index')->with('success', 'Student updated successfully.');
}




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
