@extends('layouts.Index')
@section('content')
<div class = "container">
        <div class="brand text-center">
            <h1>المقررات</h1>
            <p class="lead"> اختر مستواك الدراسي لكي ترى مقرراتك طول السنة</p>
        </div>
        <section class="i3dadi text-center card grey" data-aos="fade-up">
          <div class=" details ">
            <b>الابتدائية</b>
          </div>
          <div id="degres" class="degres">
            <div class="clear"></div>
            <a href="s-cour-2btdaee.html" class=" card black" data-aos="fade-up">الاولى الابتدائي</a>
            <a href="s-cour-2btdaee2.html" class=" card black" data-aos="fade-up">الثاني الابتدائي</a>
            <a href="s-cour-2btdaee3.html" class=" card black" data-aos="fade-up">الثالث الابتدائي</a>
            <a href="s-cour-2btdaee4.html" class=" card black" data-aos="fade-up">الرابع لابتدائي</a>
            <a href="s-cour-2btdaee5.html" class=" card black" data-aos="fade-up">الخامس الابتدائي</a>
            <a href="s-cour-2btdaee6.html" class=" card black" data-aos="fade-up">السادس الابتدائي</a>
          </div>
        </section>
        <section class="i3dadi text-center card grey" data-aos="fade-up">
            <div class=" details ">
            <b>الاعدادي</b>
            </div>
            <div id = "degres" class="degres">
                <div class = "clear"></div>
                <a href="s-cour-i3dadi.html" class=" card black" data-aos="fade-up">الاولى اعدادي</a>
                <a href="s-cour-i3dadi2.html" class=" card black" data-aos="fade-up">الثانية اعدادي</a>
                <a href="s-cour-i3dadi3.html" class=" card black" data-aos="fade-up">الثالثة اعدادي</a>
            </div>
        </section>
        <section class="tanawi text-center card grey" data-aos="fade-up">
            <div class=" details ">
            <b>الثانوي</b>
            </div>
            <div id = "degres" class="degres">
                <div class = "clear"></div>
                <a href="s-cour-tanawi.html" class=" card black" data-aos="fade-up"> الصف العاشر </a>
                <a href="s-cour-tanawi2.html" class=" card black" data-aos="fade-up"> الصف الحادي عشر </a>
                <a href="s-cour-tanawi3.html" class=" card black" data-aos="fade-up"> التوجيهي </a>
            </div>
        </section>
    </div>
@endsection