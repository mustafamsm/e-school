@extends('layouts.Index')
@section('content')
<div style = "background: #87c63d; padding: 10px;padding: 10px;
    width: 60%;
    margin: auto;
    border-radius: 5px;
    box-shadow: -1px 2px 13px 0px #656565;">
        <i style = "display: block; margin: auto; width: 100%; text-align: center;" class="material-icons">close</i>
        <p style = "text-align: center">للاسف لقد تم رفض اشتراكك في الموقع راجع معلوماتك </p>
        <a style = "color: #87c63d; padding: 10px; background: #fff; display: block; margin: auto; text-align: center" href="register.html">قم باعادة المحاولة</a>
    </div>
    @endsection