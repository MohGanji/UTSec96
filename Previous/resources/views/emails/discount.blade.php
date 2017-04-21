@extends('emails.master')
@section('content')
ممنون از این که میخوای تو utsec شرکت کنی :)
    <br/>

    کد تخفیفت: <span style="direction: ltr; font-weight: bold; color: red;">{{ $dis->code }}</span>

    <br/>

    دقت کن که کد تخفیف به حروف کوچک و بزرگ حساسه. همچنین برای استفاده از کد تخفیف هنگام ثبت‌نام از همین آدرس ایمیل استفاده کن :)
    <br/>
@endsection