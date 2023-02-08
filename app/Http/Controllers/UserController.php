<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index ()
   {
    return view('layouts.index');
   }
   public function index2 ()
   {
    return view('User.page');
   }
   public function index3()
   {
    return view('User.Home');
   }
   public function Login()
   {
    return view('User.Login');
   }
   public function register()
   {
    return view('User.register');
   }
   public function aboutus()
   {
    return view('User.AboutUs');
   }
   public function ads()
   {
    return view('User.ads');
   }

   public function Videos()
   {
    return view('User.Videos');
   }
   public function Homeworks()
   {
    return view('User.Homeworks');
   }

   public function Courses()
   {
    return view('User.Courses');
   }

   public function agree()
   {
    return view('User.agree');
   }
   public function Coursestable()
   {
    return view('User.Coursestable');
   }
   public function Coursestabletime()
   {
    return view('User.Coursestabletime');
   }
   public function live()
   {
    return view('User.live');
   }
   public function refuse()
   {
    return view('User.refuse');
   }
   public function resetpass()
   {
    return view('User.resetpass');
   }
   public function resources()
   {
    return view('User.resources');
   }
   public function search()
   {
    return view('User.search');
   }
   public function searchresult()
   {
    return view('User.searchresult');
   }
   public function tabledetails()
   {
    return view('User.tabledetails');
   }
   public function tabletime()
   {
    return view('User.tabletime');
   }
   
}
