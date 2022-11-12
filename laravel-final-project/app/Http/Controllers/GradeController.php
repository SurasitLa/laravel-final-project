<?php

namespace App\Http\Controllers;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::all();
        return view ('grade\index')->with('grades', $grades);
    }
    
    public function create()
    {
        return view('grade\create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Grade::create($input);
        return redirect('grade')->with('flash_message', 'Grade Addedd!');  
    }
    
    public function show($id)
    {
        $grade = Grade::find($id);
        return view('grade\show')->with('grades', $grade);
    }
    
    public function edit($id)
    {
        $grade = Grade::find($id);
        return view('grade\edit')->with('grades', $grade);
    }
  
    public function update(Request $request, $id)
    {
        $grade = Grade::find($id);
        $input = $request->all();
        $grade->update($input);
        return redirect('grade')->with('flash_message', 'grade Updated!');  
    }
  
    public function destroy($id)
    {
        Grade::destroy($id);
        return redirect('grade')->with('flash_message', 'Grade deleted!');  
    }
}