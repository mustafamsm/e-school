@extends('layouts.Index')
@section('content')
<div class="container-fluid">
        <h1 class="text-center"> الاشتراك   </h1>
        <p class="lead text-center"> فضاء خاص بالاشتراك في المكتبة </p>
        <form method="post" action = "wait.html">
            <h1 class="text-center"> <i class="fas fa-book-open"></i> المكتبة </h1>
            <input type = "text" autocomplete="on" required = "required" placeholder = " اسم المستخدم "/>
            <br>
            <input type = "email" autocomplete="on" required = "required" placeholder = "البريد الالكتروني "/>
            <br>
            <input type = "password" autocomplete="off" required = "required" placeholder = " كلمة المرور "/>
            <br>
            <input type = "password" autocomplete="off" required = "required" placeholder = "اعادة كلمة المرور "/>
            <br>
            <div class="swappy-radios" role="radiogroup" aria-labelledby="swappy-radios-label">
              <h3 id="swappy-radios-label">جنسيتك:</h3>
              <label>
                <input type="radio" name="options" checked />
                <span class="radio"></span>
                <span>ذكر</span>
              </label>
              <label>
                <input type="radio" name="options" checked />
                <span class="radio"></span>
                <span>أنثى</span>
              </label>
            </div>
            <button class = "center-block" type="submit">تسجيل الدخول</button>
            <a href="log%20in.html" class="link">املك حسابا قبلا</a>
        </form>
    </div>
@endsection