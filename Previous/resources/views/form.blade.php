<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>UTsec - Complete Registration</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    {{--<link rel="stylesheet" href="http://awebfont.ir/css?id=1116"/>--}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
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
                <h3 class="panel-title">انتخاب کارگاه</h3>
            </div>
            <div class="panel-body" style="color: black">
                {!! Form::open(['route' => 'class.set.set', 'method' => 'post']) !!}
                {!! Form::hidden('token', $token) !!}
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            {{ $error }} <br/>
                        @endforeach
                    </div>
                @endif
                <div class="form-group">
                    <label for="GroupName">ایمیل: </label>
                    {!! Form::email('email', null, ['class' => 'form-control ltr', 'placeholder' => 'asghar@example.ac.ir']) !!}
                </div>

                <div class="form-group">
                    <label for="GroupName">کارگاه: </label>
                    {!! Form::select('class', config('classes.list'), null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group" style="margin: 20px auto;">
                    <div class="g-recaptcha" data-sitekey="6LfIbBcTAAAAAGDsaqdW-ZWeiFh5Uqk-czM0xu6F" data-size="compact"></div>
                </div>

                <a href="{{ route('home') }}" class="btn btn-warning">بازگشت</a>
                <button class="btn btn-primary" type="submit" style="min-width: 200px;">ثبت</button>

                {!! Form::close() !!}
            </div>
        </div>

    </div>

    <footer style="text-align: center;">
        <small>Programmed by</small>
        <br/>
        <a href="http://amir.abiri.info">Amir Hossein Abiri</a>
    </footer>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>