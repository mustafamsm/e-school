@extends('layouts.Index')
@section('content')
<header>
    <div class="container-fluid">
      <h1 class="text-center" data-aos="fade-up"> تسجيل الدخول </h1>
      <p class="lead text-center" data-aos="fade-up"> فضاء خاص بالمسؤوليين والمشرفين عن المكتبة </p>
      <form method="post" action="users/profile.html">
        <h1 class="text-center"> <i class="fas fa-book-open"></i> المكتبة </h1>
        <input type="text" autocomplete="on" required="required" placeholder=" اسم المستخدم " />
        <br>
        <input type="password" autocomplete="off" required="required" placeholder=" كلمة المرور " />
        <br>
        <button class="center-block" type="submit">تسجيل الدخول</button>
        <a href="reset%20password.html">هل نسيت كلمة المرور؟</a>
        <br>
        <a href="register.html">لا املك حسابا</a>
      </form>
    </div>
  </header>
  @endsection