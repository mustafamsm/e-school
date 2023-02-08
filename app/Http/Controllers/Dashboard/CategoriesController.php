<?php

namespace App\Http\Controllers\Dashboard;
use  App\Http\Controllers\Controller;
use  Illuminate\Http\Request;
use  App\Models\Category;

class CategoriesController extends Controller
{
 public function index()
{
   //   $categories =Category::all();
   // dd($categories);
     $title='categories';
$entries=[];
//return view('dashboard.Categories.index');


// return view('dashboard.categories.index', [
//    'title' => 'Categories List ',
//    'entries' => $categories,
//   ]);
return view('Dashboard.categories.index', compact('title','entries'));

}

public function create()
{
return view('Dashboard.categories.create');
}
// public function store(Request $request)
// {

//  //return $request-> all();

// }
public function edit($id)
{

}
public function update($id)
{

}
public function destroy()
{

}

}
