@extends('layouts.Index')
@section('content')
<div class="brand text-center">
                <h1>الملفات</h1>
                <p class="lead">فضاء خاص بالملفات لكل تلاميذ المكتبة</p>
            </div>
           
                <section class=" dashbord col-xs-12 col-sm-8 col-md-9">
                
                    <h2 class=" text-center center-block">اضافة ملف</h2>
                    <p class=" text-center center-block lead" style="margin-bottom: 50px;">من هنا يمكنك تسليم واجبك</p>
                    <div class=" text-center creat-video">
                        <form method="post" action="#">
                            <div class="img-upload">
                                <input class="center-block jm-btn-grn" style="margin-top: 20px;" type="file">
                                <br>
                                <button type="submit " class="jm-btn-grn icon-btn" style="margin-bottom: 20px;"> رفع الملف <i
                                        class="material-icons">file_upload</i> </button>
                            </div>
                            <div class="ads-brand">
                                <input class=" center-block" type="text" placeholder="عنوان الملف">
                                <br>
                                
                                <button class="jm-btn-grn icon-btn" type="submit"> اضافة الملف <i
                                        class="material-icons">create</i></button>
                            </div>
                        </form>
                    </div>
                </section>
                <a href="#" style="width: 200px; display: inline-flex;" class="jm-btn-grn icon-btn"> تحميل الواجبات<span
                        class="material-icons"> cloud_download </span>
                </a>
        </div>
@endsection