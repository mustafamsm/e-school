<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index ()
   {
    return view('layouts.index');
   }
   public function index2 ()
   {
    return view('dashboard.page');
   }
   public function index3()
   {
    return view('dashboard.Home');
   }
}
