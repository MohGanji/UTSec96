<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UTsec</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/black.css" rel="stylesheet">

    <style type="text/css">
        .strong {
            font-weight: bold;
        }
    </style>

</head>

<body style="direction: rtl;">

  <div class="intro-body">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <img src="img/logo2.png" style="float:right;">
      </div>
    </div>
  </div>

  <div class="container">
      @if($errors->any())
      <div class="alert alert-danger" style="margin: 20px;">
        @foreach($errors->all() as $error)
            {{ $error }}
        @endforeach
      </div>
      @endif

      <div style="text-align: center; margin: 20px; font-size: 1.2em;">
          <span class="strong">نام گروه:‌ </span> {{ $group->name }} <br/>
      </div>
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
                @foreach($group->members as $member)
                <div class="footer-col col-md-4" style="float: right;">
                    <h3 class="text-center">مشخصات</h3>
                    <hr class="star-primary">
                    <p>

                        <span class="strong">نام:‌ </span> {{ $member->name }} <br/>
                        <span class="strong">نام خانوادگی:‌ </span> {{ $member->family }} <br/>
                        <span class="strong">ایمیل:‌ </span> {{ $member->email }} <br/>
                        <span class="strong">موبایل:‌ </span> {{ $member->mobile }} <br/>
                        <span class="strong">نام دانشگاه:‌ </span> {{ $member->university }} <br/>
                        <span class="strong">مقطع تحصیلی:‌ </span> {{ $member->grade }} <br/>
                        <span class="strong">شماره دانشجویی:‌ </span> {{ $member->student_number }} <br/>
                        <hr/>

                        @if($member->discount)
                            <span class="strong">تخفیف:‌ </span> {{ $member->discount->percent }} % <br/>
                            <hr/>
                        @endif

                    <span class="strong">مبلغ قابل پرداخت:‌ </span> {{ number_format($member->price) }} تومان<br/>

                    </p>
                </div>
                @endforeach

                <div style="clear: both;"></div>
            </div>
        </div>
    </div>
</div>

<footer class="text-center">
    <div class="footer-above">


        @if($group->tmp)
            <span class="strong">مبلغ قابل پرداخت:‌ </span> {{ number_format($price) }} تومان
            <br/>
            <a href="{{ route('pay') }}" class="btn btn-dark" style="background-color:rgb(148, 230, 127);color:#000;margin-top:40px;font-family: 'B Yekan', Tahoma, Arial;">ورود به صفحه ی پرداخت</a>
            <a href="{{ route('cancel') }}" class="btn btn-danger" style="margin-top:40px;font-family: 'B Yekan', Tahoma, Arial;">لغو</a>
        @else
            <p style="font-size: 1.2em">
                <span class="strong">مبلغ پرداخت شده:‌ </span> {{ number_format($price) }} تومان
                <br/>
                <span class="strong" style="color: lawngreen;">کد پیگیری: </span> <span style="color: red">{{ $code }}</span>  <br/>
                <a href="{{ route('logout') }}" class="btn btn-danger" style="margin-top:40px;font-family: 'B Yekan', Tahoma, Arial;">بازگشت</a>
            </p>
        @endif
    </div>
</footer>
</body>
</html>