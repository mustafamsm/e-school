@extends('layouts.Index')
@section('content')
<div class="container-fluid text-center">
        <h1> تسجيل الدخول  </h1>
        <p class="lead"> من هنا يمكنك اعادة كلمة السر الخاصة بك </p>
        <form method="post" action = "#">
           <h3>ادخل البريد الالكتروني الخاص بحسابك</h3>
            <input type = "email" autocomplete="on" required = "required" placeholder = "البريد الالكتروني الخاص بك "/>
            <br>
            <button class = "center-block" type="submit">متابعة</button>
        </form>
    </div>
    @endsection