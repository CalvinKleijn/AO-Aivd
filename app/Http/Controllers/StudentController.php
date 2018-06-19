<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index' ,['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'naam' => 'required',
            'klas' => 'required',
            'voortgang' => 'required',
            'resultaten' => 'required',
            'werkhouding' => 'required',
            'extrahulp' => 'required',

        ]);
        $student = new Student();
        $student->naam = $request->naam;
        $student->klas = $request->klas;
        $student->voortgang = $request->voortgang;
        $student->resultaten = $request->resultaten;
        $student->werkhouding = $request->werkhouding;
        $student->extrahulp = $request->extrahulp;
        $student->save();

       return redirect('/')->with('status', 'Je hebt met succes een student toegevoegd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::find($id);
        return view('students.edit')->with('students', $students);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $students = Student::find($id);
        $validatedData = $request->validate([
            'naam' => 'required',
            'klas' => 'required',
            'voortgang' => 'required',
            'resultaten' => 'required',
            'werkhouding' => 'required',
            'extrahulp' => 'required',
        ]);
        $students->naam = $request->naam;
        $students->klas = $request->klas;
        $students->voortgang = $request->voortgang;
        $students->resultaten = $request->resultaten;
        $students->werkhouding = $request->werkhouding;
        $students->extrahulp = $request->extrahulp;
        $students->save();
        
        return redirect('/')->with('status', 'Je hebt met succes een student bewerkt!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = Student::find($id);
        $students->delete();
        return redirect('/')->with('status', 'Je hebt met succes een student verwijderd!');
    }
}
