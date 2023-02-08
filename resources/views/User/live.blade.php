@extends('layouts.Index')
@section('content')
<div class = "container">
        <div class="brand text-center">
            <h1>البثوث المباشرة</h1>
            <p class="lead"> فضاء خاص بالبثوث المباشرة لكل الطلاب </p>
        </div>
    <section class="no-ads text-center">
        <b style ="display: none">
            <i class="fas fa-calendar-times"></i>
            صندوق البثوث فارغ 
        </b>    
    </section>
    <section class="ads1 col-xs-12 col-md-6">
        <span style=" line-height: 1.7; background: red; padding: 5px; display: inline-flex">
            <i class = 'material-icons'>radio_button_checked</i>
            البث المباشر يشتغل الان 
            
        </span>
        <br>
        <img style ='margin-top:10px;' src="Images/image-here.png" class=" center-block img-responsive">
        <h1 class="text-center">عنوان البث التجريبي</h1>
        <button id="showLive" class="jm-btn-grn icon-btn">مشاهدة البث<i class = "material-icons">play_circle_filled</i></button>
    </section>
    <section class="ads1 col-xs-12 col-md-6">
        
        <h3 class="text-center">هل فاتتك بعض البثوث اللتي تم اجراءها ولم تحضر؟</h3>
        <p>من هنا يمكنك مشاهدة البثوث اللتي فاتتك</p>
        <a href="videos.html" class="jm-btn-grn icon-btn">مشاهدة البثوث السابقة<i class = "material-icons">play_circle_filled</i></a>
    </section>
        <div style = "  background: rgb(0 0 0 / 78%); position: absolute; display: block; padding: 10px; width: 80%; top: 5%; right: 10%;display: none;" class = "liveVideo">
                        <div style = "padding : 5px; background: black;" class="live-nav row">
                            <a style=" color: #fff; line-height: 2.8; text-align: left" class = "col-xs-4" href="../Admin/../../users/profile.html">اسم بروفايل الاستاذ</a>
                            <div class = "col-xs-4" style="text-align: center; font-weight: 900; font-size: 25px;">
                                عنوان البث المباشر
                            </div>
                            <div class = "col-xs-4"><button style="background: transparent; color: #fff; " class = "icon-btn"><i class = "material-icons">remove_red_eye</i><span id = "views">35</span></button></div>
                            
                        </div>
                        <div class="video col-xs-12 col-md-6">
                            <video width="100%" height="400px" controls>
                                <source src="#" type="video/mp4">
                                متصفحك لا يدعم الفيديو
                            </video>
                        </div> 
                        <div class="chat col-xs-12 col-md-6">
                            <h4>التعليقات:</h4>
                            <div style = " height: 300px; overflow-y: scroll;overflow-x: hidden;" class="comments">
                                <a href="../Admin/../../users/profile.html" style="font-size: 18px;" >احمد ابو نصر</a>
                                <p style="font-size: 12px !important; text-shadow: 1px -1px 4px black;">هذا مثال لتعليق على هذا البث المباشر</p>
                                <a href="../Admin/../../users/profile.html" style="font-size: 18px;" >اشرف حمداني</a>
                                <p style="font-size: 12px !important; text-shadow: 1px -1px 4px black;">هذا مثال لتعليق على هذا البث المباشر</p>
                                <a href="../Admin/../../users/profile.html" style="font-size: 18px;" >سعد المريني</a>
                                <p style="font-size: 12px !important; text-shadow: 1px -1px 4px black;">هذا مثال لتعليق على هذا البث المباشر</p>
                                <a href="../Admin/../../users/profile.html" style="font-size: 18px;" >احمد ابو نصر</a>
                                <p style="font-size: 12px !important; text-shadow: 1px -1px 4px black;">هذا مثال لتعليق على هذا البث المباشر</p>
                                <a href="../Admin/../../users/profile.html" style="font-size: 18px;" >اشرف حمداني</a>
                                <p style="font-size: 12px !important; text-shadow: 1px -1px 4px black;">هذا مثال لتعليق على هذا البث المباشر</p>
                                <a href="../Admin/../../users/profile.html" style="font-size: 18px;" >سعد المريني</a>
                                <p style="font-size: 12px !important; text-shadow: 1px -1px 4px black;">هذا مثال لتعليق على هذا البث المباشر</p>
                            </div>
                        </div>
                        <div style = "max-width: 100%; : 5px; " >
                            <form style = " display: inline-flex; max-width: 100%; margin: 0px; background: transparent; " action="#" method="post">
                                <input style = "margin: 5px; width: 65%;" type="text" placeholder="اكتب تعليقا">
                                <button style = "margin: 5px; width: 25%;" type="submit">ارسل</button>
                            </form>
                        </div>
                        <div style = "padding: 10px; margin: 0px auto; border-top: 2px solid #666;" class="end col-xs-4">
                            <button id = "hideLive"  style = " display: inline-flex; margin: 0px auto; background-color: red !important" class="jm-btn-grn icon-btn" type="submit">  مغادرة البث <i class = "material-icons">radio_button_checked</i></button>
                        </div>
                        <div style = "padding: 10px; margin: 0px auto; border-top: 2px solid #666;" class="end col-xs-4">
                            <button id = "copyLive"  style = " display: inline-flex; margin: 0px auto; background-color: green!important" class="jm-btn-grn icon-btn" type="submit">  نسخ رابط البث <i class = "material-icons">content_copy</i></button>
                        </div>
                        <div style = "padding: 10px; margin: 0px auto; border-top: 2px solid #666;" class="end col-xs-4">
                            
                        </div>
                    </div>
    </div>
    @endsection