<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Grade;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections=Section::with(['grade','classroom'])->get();
        return view('Dashboard.sections.index',compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades=Grade::all();
        return view('Dashboard.sections.create',compact('grades'));
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
            'name'=>'required|string|max:12',
            'grade_id'=>'required|integer|exists:grades,id',
            'classroom_id'=>'required|integer|exists:classrooms,id'
        ]);
        Section::create([
            'name'=>$request->name,
            'grade_id'=>$request->grade_id,
            'classroom_id'=>$request->classroom_id
        ]);
        return redirect()->route('dashboard.sections.index')->with('success','Section created !');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        $grades=Grade::all();
        return view('Dashboard.sections.edit',compact('section','grades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
        $request->validate([
            'name'=>'required|max:12',
            'grade_id'=>'required|integer|exists:grades,id',
            'classroom_id'=>'required|integer|exists:classrooms,id'
        ]);
        $section->update([
            'name'=>$request->name,
            'grade_id'=>$request->grade_id,
            'classroom'=>$request->classroom
        ]);
        return redirect()->route('dashboard.sections.index')->with('success','Section uptedet !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        //
    }

    public function getclasses($id){

        $list_classes = Classroom::where("grade_id", $id)->pluck("name", "id");

        return $list_classes;
    }
}
