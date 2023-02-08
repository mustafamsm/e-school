@extends('layouts.Index')
@section('content')
<div class = "container">
        <div class="brand text-center">
            <h1>استعمالات الزمن</h1>
            <p class="lead"> اختر مستواك الدراسي لكي ترى استعمال زمنك</p>
        </div>
        <section class="i3dadi text-center">
          <div class=" details ">
            <b>الابتدائية</b>
          </div>
          <div id="degres" class="degres card grn" data-aos="fade-up">
            <div class="clear"></div>
            <a href="tabls-2btdaee.html" class=" card black" data-aos="fade-up">الاولى الابتدائي</a>
            <a href="tabls-2btdaee2.html" class=" card black" data-aos="fade-up">الثاني الابتدائي</a>
            <a href="tabls-2btdaee3.html" class=" card black" data-aos="fade-up">الثالث الابتدائي</a>
            <a href="tabls-2btdaee4.html" class=" card black" data-aos="fade-up">الرابع لابتدائي</a>
            <a href="tabls-2btdaee5.html" class=" card black" data-aos="fade-up">الخامس الابتدائي</a>
            <a href="tabls-2btdaee6.html" class=" card black" data-aos="fade-up">السادس الابتدائي</a>
          </div>
        </section>
        <section class="i3dadi text-center">
            <div class=" details ">
            <b>الاعدادي</b>
            </div>
            <div id = "degres" class="degres card grn" data-aos="fade-up" >
                <div class = "clear"></div>
                <a class="card black"  data-aos="fade-up" href="tabls-i3dadi.html">الاولى اعدادي</a>
                <a  class="card black" data-aos="fade-up"  href="tabls-i3dadi2.html">الثانية اعدادي</a>
                <a  class="card black"  data-aos="fade-up" href="tabls-i3dadi3.html">الثالثة اعدادي</a>
            </div>
        </section>
        <section class="tanawi text-center">
            <div class=" details ">
            <b>الثانوي</b>
            </div>
            <div id = "degres" class="degres card grn" data-aos="fade-up" >
                <div class = "clear"></div>
                <a class="card black"  data-aos="fade-up"  href="tabls-tanawi.html"> الصف العاشر  </a>
                <a  class="card black"  data-aos="fade-up" href="tabls-tanawi2.html">  الصف الحادي عشر </a>
                <a class="card black"  data-aos="fade-up"  href="tabls-tanawi3.html"> التوجيهي  </a>
            </div>
        </section>
    </div>
@endsection