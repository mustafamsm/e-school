<?php

namespace App\Http\Controllers\Dashboard;
use  App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Grade;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        $classrooms=Classroom::with('grade')->orderBy('grade_id')->get();
       
        return view('Dashboard.classrooms.index',compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades=Grade::all() ;
        return view('Dashboard.classrooms.create',compact('grades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'grade_id'=>'required|numeric|exists:grades,id',
        ],[
            'grade_id.exists'=>'The selected grade is not exists in our school !',
            'grade_id.required'=>'The selected grade  is required  !',
        ]);
        Classroom::create([
            'name'=>$request->name,
            'grade_id'=>$request->grade_id
        ]);
        
        return redirect()->route('dashboard.classrooms.index')->with('success','Classroom created succifly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classroom=Classroom::findOrFail($id);
        $grades=Grade::all();
        return view('Dashboard.classrooms.edit',compact('classroom','grades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $classroom=Classroom::findOrFail($id);
        $classroom->update($request->all());
        return redirect()->route('dashboard.classrooms.index')->with('success','classroom updated sussfily');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $classroom=Classroom::findOrFail($id);
        $classroom->delete();
        return redirect()->route('dashboard.classrooms.index')->with('success','classroom updated sussfily');

    }
}
