@extends('layouts.Index')
@section('content')
<div class="container-fluid">

            <div class = "header-brand">
                <h1 class=""> <i class=" text-center center-block fas fa-search"></i> ابحث في المكتبة ... </h1>
                <div class="container text-center">
                    <form method="post" action = "#">
                        <div  class=" row">
                        <input class = " col-md-10 col-xs-12" type="search" placeholder=" ابحث داخل مؤسستك ... " />
                        <button class = "icon-btn" type = "submit" style="width: 100%; margin: 14px 0;"> بحث <i class = "material-icons">search</i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class = "no-results text-center">
                <div class = "container">
                    <i class="fas fa-skull"></i>
                    <b> لا نتائج </b>
                </div>
            </div>
            <section class = "search1 text-center">
                <div class="container">
                    <div class="row">
                        <div class=" col-xs-12 col-sm-10">
                        <a href="search-details.html">Antigone <i class="fas fa-book"></i></a>
                        <p>هذه رواية فرنسية لمستوى الاولى باك</p>
                        </div>
                        <img class = "img-responsive col-xs-12 col-sm-2" src="Images/image-here.png" class="card2">
                    </div>
                </div>
            </section>
        </div>
@endsection
