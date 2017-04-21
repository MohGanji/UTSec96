@extends('emails.master')
@section('content')
ممنون از این که میخواین تو UTsec شرکت کنید :)
    <br/>
شما با موفقیت ثبت‌نام شدید.
<br/>
    کد پیگیری: <span style="direction: ltr; font-weight: bold;">{{ $code }}</span> <br/>
    شناسه‌ی پرداخت: <span style="direction: ltr; font-weight: bold;">{{ $transaction->trans_id }}</span> <br/>
    مبلغ: <span style="direction: ltr; font-weight: bold;">{{ number_format($transaction->price) }}</span> ریال<br/>


    <br/>

    امیدواریم تو مسابقه بدرخشید :)
    <br/>
@endsection