<?php


namespace App\Http\Controllers\Dashboard;
use  App\Http\Controllers\Controller;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades=Grade::get();
        return view('Dashboard.grades.index',compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.grades.create');
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
            'name'=>'required|string|unique:grades,name|max:250',

          ]);
          Grade::create([
            'name'=>$request->name,
            'Notes'=>$request->Notes
          ]);
          return redirect()->route('dashboard.grades.index')->with('success','Grade Creadetd Sussfily');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grade=Grade::findOrFail($id);
       
        return view('Dashboard.grades.edit',compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $grade=Grade::findOrFail($id);
        $request->validate([
            'name'=>'required|string',
            
        ]);

        $grade->update([
            'name'=>$request->name,
            'Notes'=>$request->Notes
        ]);
        return redirect()->route('dashboard.grades.index')->with('success','Grade updated !');
    }
         
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $grade=Grade::findOrFail($id);
         $grade->delete();
         
         return redirect()->route('dashboard.grades.index')->with('success','Grade Deleted !');
    }
}
