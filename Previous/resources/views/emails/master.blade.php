<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>UTsec</title>
    <style>
        body{
            height: 100%;
            width:100%;
            font-family: 'B Yekan', tahoma, Arial;
            direction: rtl;
            background-color: #000;
            color: #fff;
        }
        #header {
            text-align:center;
            height: 150px;
        }
        #header > img{
            float: right;
            padding-right: 40px;
        }

        #section {
            padding:40px;
            font-size: 16px;
        }
        #footer {
            clear:both;
            text-align:center;
            padding:5px;
        }
    </style>
</head>
<body style="padding: 20px 0;">
<div id = "header">
    <img src="<?php echo $message->embed(public_path('images/logo.png')); ?>">
</div>
<hr style="color: #8c8c8c; background-color: #8c8c8c; width: 65%; margin: 20px auto; text-align: center;"/>


<div id="section">
    @section('content')
    @show
</div>

<hr style="color: #8c8c8c; background-color: #8c8c8c; width: 65%; margin: 20px auto; text-align: center;"/>
<div id = "footer">

    <p><strong>آدرس: </strong> تهران، خیابان کارگر شمالی، بعد از بزرگراه جلال آل احمد، دانشگاه تهران، پرديس۲ دانشکده های فنی</p>
    <p><strong>ایمیل: </strong>info@utsec.ir</p>
</div>
</body>
</html>
