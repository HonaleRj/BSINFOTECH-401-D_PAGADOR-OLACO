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
        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students',
            'age' => 'required|integer|min:1',
        ]);

        Student::create($validate);
        return redirect()->route('students.index')->with('success', 'Student created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students = Student::findOrFail($id);
        return view('students.show',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $students = Student::findOrFail($id);
        return view('students.edit',compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $students = Student::findOrFail($id);

            $validate = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:students,email,' . $students->id,
                'age' => 'required|integer|min:1',
        ]);

        $students->update($validate);

        return redirect()->route('students.index')->with('success', 'Student Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $students = Student::findOrFail($id);
        $students->delete();
        return redirect()->route('students.index')->with('success', 'Student Deleted Successfully.');
    }
}
