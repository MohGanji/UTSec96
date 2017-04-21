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
        <p style="text-align: justify;">سلام <b>{{ $member->name }}</b> عزیز

          <br/><br/>

          از حضور شما در همایش هک و امنیت دانشگاه تهران، سپاس‌گزاریم.

          <br/><br/>

          برای شرکت در کارگاه‌ها و مسابقه، ​لطفاً ​نکات زیر را به دقت مطالعه کنید.
          <br/><br/>
          ۰- با توجه به محدودیت ظرفیت کارگاه‌ها​،​ و این‌که سؤالات مسابقه وابسته به هر سه کارگاه است، توصیه می‌شود هر یک از اعضای گروه در یکی از کارگاه‌ها شرکت کند​.​ با استفاده از
          <a href="{{ route('class.set.show', ['token' => $token->token]) }}">این فرم</a>
          ، کارگاه مورد نظر خود را انتخاب کنید. با توجه به ارائه‌ی گواهی​ برای کارگاه‌ها و همچنین همزمان بودن برگزاری آن‌ها با یکدیگر،​ هر فرد ​تنها می‌تواند در ​یکی از این​​​ کارگاه​‌ها ​شرکت کند.
          <br/><br/>
          ۱- تکمیل ثبت‌نام و پذیرش در روز چهارشنبه ۲۸ بهمن‌ماه، از ساعت ۸:۳۰ تا ۹:۳۰ انجام خواهدشد. ​توجه شود که ​بعد از ساعت ۹:۳۰ پذیرش انجام نخواهدشد.
          <br/><br/>
          ۲- ​لطفاً ​برای​ انجام امور​ پذیرش، کارت شناسایی معتبر به همراه داشته‌باشید. (دانش‌جویان محترم​ نیز حتماً​ کارت دانش‌جویی به همراه داشته‌باشند)
          <br/><br/>
          ۳- برای شرکت در​ ​کارگاه‌ها ​و مسابقه، ​لازم است با خود لپ‌تاپ به همراه داشته‌باشید و ​همچنین ​چون سیستم‌عامل Kali Linux برای کارگاه‌ها و مسابقه مورد نیاز است​، لازم است که پیش از حضور در دانشگاه، اقدام به نصب این سیستم‌عامل بر روی سیستم خود کرده باشید​. برای دریافت فایل این سیستم‌عامل می‌توانید از
          <a href="https://www.kali.org/downloads/">سایت Kali​</a>
          ​و یا
          <a href="http://acm.ut.ac.ir/utsec">شبکه‌ی داخلی دانشگاه تهران</a>
          ​استفاده ​کنید.​​
          <br/><br/>
          ۴- با توجه به قوانین دانشگاه، لطفاً با پوشش مناسب حاضر شوید.
          <br/><br/>
          ۵- ​لازم به ذکر است که ​جوایزی ​نیز ​به طور تصادفی در مراسم اختتامیه به شرکت‌کنندگان اهدا خواهدشد.
          <br/><br/><br/>
          با <span dir="ltr" style="direction: ltr">#UTsec</span> در شبکه‌های اجتماعی همراه باشید </p>
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
