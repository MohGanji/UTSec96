<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>UTsec</title>
</head>

    <body style="font-family: tahoma, Arial;direction: rtl;background-color: #fff ;color:#000;">

      <div id="header" style="text-align:center;font-size:36px;">
        <h1>UT<small style="color:rgb(100,246,175)">sec</small></h1>
      </div>

      <hr/>

      <div id="section">
        <p style="text-align: justify;">سلام <b>{{ $member->name }}</b>

          <br/><br/>

          فردا ۸:۳۰ منتظرتیم

          <br/><br/>

          ایمیلی قبلی رو هم خوندی دیگه؟!
          <br/><br/>
          <span dir="ltr" style="direction: ltr">#UTsec</span>
        </p>
      </div>

      <hr/>

      <div id="footer" style="text-align:center;padding:5px;">
        <a href="http://utsec.ir"><img src="<?php echo $message->embed(public_path('img/logos/utsec-logo.png')); ?>" style="padding:5px; max-height: 60px;"></a>
        <a href="http://acm.ut.ac.ir"><img src="<?php echo $message->embed(public_path('img/logos/acm.png')); ?>" style="padding:5px; max-height: 64px;"></a>
        <a href="http://ut.ac.ir"><img src="<?php echo $message->embed(public_path('img/logos/ut.png')); ?>" style="padding:5px; max-height: 64px;"></a>
        <a href="http://sbisc.ut.ac.ir"><img src="<?php echo $message->embed(public_path('img/logos/ramz.png')); ?>" style="padding:5px; max-height: 64px;"></a>
      </div>

    </body>

</html>
