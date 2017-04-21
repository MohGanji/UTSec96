<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register for UTsec</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    {{--<link rel="stylesheet" href="http://awebfont.ir/css?id=1116"/>--}}
    <style>
        @font-face{font-family:'B Yekan';src:local('☺'),local('B Yekan'),url(../fonts/683a5dddcff7f1cbb08d964cc275cb50ce7840291901931.woff) format('woff');font-weight:400;font-style:normal}
        @media(min-width: 992px) {
            .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9 {
                float: right;
            }
        }
        .tooltip {
            font-family: 'B Yekan', tahoma, Arial;
        }
    </style>
    <script src='https://www.google.com/recaptcha/api.js?hl=fa'></script>
</head>
<body style="background-color: #000; direction: rtl; font-family: 'B Yekan', tahoma, Arial;">
<div class="container-fluid">
    <header style="text-align: center; font-family: Avenir; text-transform: uppercase;  color: #fff; margin: 20px auto 50px;">
        <h1 style="font-size: 64px; font-weight: bold;">UT<small style="color:#00ffbf;">sec</small></h1>
    </header>

    <div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">ثبت‌نام</h3>
            </div>
            <div class="panel-body" style="color: black">
                {!! Form::open(['route' => 'register', 'method' => 'post']) !!}
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                {{ $error }} <br/>
                            @endforeach
                        </div>
                    @endif
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">مشخصات گروه</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group @if($errors->group->any()) has-error @endif">
                                <label for="GroupName">نام گروه: </label>
                                {!! Form::text('group[name]', null, ['class' => 'form-control', 'placeholder' => 'نام گروه']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="display: inline;">مشخصات اعضا</h3>
                            <a href="#" id="add-member" style="color: white; float:left;"
                               data-toggle="tooltip" data-placement="top" title="افزودن عضو"><i class="glyphicon glyphicon-plus"></i></a>
                        </div>

                        <div class="panel-body">
                            @for($i = 0; $i < 3; ++$i)
                            <div class="panel panel-default" id="member-{{ $i }}" style="display: none;">
                                <div class="panel-heading">
                                    <h3 class="panel-title">مشخصات عضو</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="members[{{ $i }}][name]" class="sr-only">نام</label>
                                            {!! Form::text("members[$i][name]", null, ['class' => 'form-control', 'placeholder' => 'نام',]) !!}
                                        </div>
                                        <div class="form-group">
                                            <label for="members[{{ $i }}][family]" class="sr-only">نام خانوادگی</label>
                                            {!! Form::text("members[$i][family]", null, ['class' => 'form-control', 'placeholder' => 'نام خانوادگی',]) !!}
                                        </div>
                                        <div class="form-group">
                                            <label for="members[{{ $i }}][email]" class="sr-only">ایمیل</label>
                                            {!! Form::email("members[$i][email]", null, ['class' => 'form-control', 'placeholder' => 'ایمیل',]) !!}
                                        </div>
                                        <div class="form-group">
                                            <label for="members[{{ $i }}][mobile]" class="sr-only">تلفن همراه</label>
                                            {!! Form::text("members[$i][mobile]", null, ['class' => 'form-control', 'placeholder' => 'تلفن همراه',]) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="members[{{ $i }}][university]" class="sr-only">نام دانشگاه</label>
                                            {!! Form::text("members[$i][university]", null, [ 'class' => 'form-control', 'placeholder' => 'نام دانشگاه',]) !!}
                                        </div>
                                        <div class="form-group">
                                            <label for="members[{{ $i }}][grade]" class="sr-only">مقطع</label>
                                            {!! Form::select("members[$i][grade]", ['کاردانی' => 'کاردانی', 'کارشناسی' => 'کارشناسی', 'کارشناسی ارشد' => 'کارشناسی ارشد', 'دکترا و بالاتر' => 'دکترا و بالاتر',], null, ['class' => 'form-control',]) !!}
                                        </div>
                                        <div class="form-group">
                                            <label for="members[{{ $i }}][student_number]" class="sr-only">شماره دانشجویی</label>
                                            {!! Form::text("members[$i][student_number]", null, ['class' => 'form-control', 'placeholder' => 'شماره دانشجویی',]) !!}
                                        </div>
                                        <div class="form-group">
                                            <label for="members[{{ $i }}][discount_code]" class="sr-only">کد تخفیف</label>
                                            {!! Form::text("members[$i][discount_code]", null, ['class' => 'form-control', 'placeholder' => 'کد تخفیف',]) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">قوانین</h3>
                        </div>

                        <div class="panel-body">
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label style="padding-right: 20px;">
                                        <input type="checkbox" id="rules" value="1" name="rules" style="margin-right: -20px;"/>
                                        قوانین مسابقه را می‌پذیرم
                                    </label>
                                </div>
                                <div class="form-group" style="margin: 20px auto;">
                                    <div class="g-recaptcha" data-sitekey="6LfIbBcTAAAAAGDsaqdW-ZWeiFh5Uqk-czM0xu6F" data-size="compact"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="alert alert-info">
                                    در صورتی که دانشجو هستید و تمایل به استفاده از تخفیف دانشجویی دارید باید ابتدا کد تخفیف دریافت نمایید.
                                    برای دریافت کد تخفیف به
                                    <a href="{{ route('home', ['#submite']) }}" target="_blank">این صفحه</a>
                                    مراجعه کرده و ایمیل دانشگاهی خود را جهت دریافت کد تخفیف وارد نمایید.
                                    <br/>
                                    در صورت هرگونه مشکل می‌توانید با آدرس
                                    <span style="direction: ltr">info [at] utsec [dot] ir</span>
                                    در ارتباط باشید.
                                </div>
                            </div>
                        </div>
                    </div>
                <a href="{{ route('home') }}" class="btn btn-warning">بازگشت</a>
                <button class="btn btn-primary" type="submit" style="min-width: 200px;">ثبت‌نام</button>

                {!! Form::close() !!}
            </div>
        </div>

    </div>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $('#add-member').click(function(e) {
        e.preventDefault();
        $('#member-' + i).show();
        i++;
        if(i == 3)
            $(this).hide();
    });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>