<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{

    public function root()
    {
        return view('student');
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'address' => 'required'
        ]);

        Student::create($data);

        return redirect(route('student.root'));
    }
}
