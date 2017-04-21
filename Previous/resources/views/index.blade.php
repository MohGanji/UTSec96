<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Looking for a discount code?! Ok! Go for it! -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>UTsec</title>
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/grayscale.css" rel="stylesheet">
  <link href="css/stylish-portfolio.css" rel="stylesheet">
  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  {{--<script src='https://www.google.com/recaptcha/api.js'></script>--}}
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/common.css" />
  <link rel="stylesheet" type="text/css" href="css/style2.css" />
  <link rel="stylesheet" type="text/css" href="css/style3.css" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
  <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
</head>
<body>
<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
  <ul class="sidebar-nav">
    <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
    <li class="sidebar-brand">
      <a href="#top"  onclick = $("#menu-close").click(); >UTsec</a>
    </li>
    <li>
      <a href="#top" onclick = $("#menu-close").click(); >خانه</a>
    </li>
    <li>
      <a href="#about" onclick = $("#menu-close").click(); >UTsec چیست؟</a>
    </li>
    <li>
      <a href="#workshop" onclick = $("#menu-close").click(); >کارگاه ها و مسابقه</a>
    </li>
    <li>
      <a href="#presentation" onclick = $("#menu-close").click(); >ارایه دهندگان</a>
    </li>
    <li>
      <a href="#role" onclick = $("#menu-close").click(); >شرایط ثبت نام</a>
    </li>
    <li>
      <a href="#prize" onclick = $("#menu-close").click(); >جوایز</a>
    </li>
    <li>
      <a href="#price" onclick = $("#menu-close").click(); >هزینه ثبت نام</a>
    </li>
    <li>
      <a href="#submite" onclick = $("#menu-close").click(); >کد تخفیف بگیرید !</a>
    </li>
    <li>
      <a href="#register" onclick = $("#menu-close").click(); >ثبت نام!</a>
    </li>
    <li>
      <a href="#acm" onclick = $("#menu-close").click(); >برگزارکنندگان</a>
    </li>
    <li>
      <a href="#contact" onclick = $("#menu-close").click(); >ارتباط با ما</a>
    </li>
  </ul>
</nav>
<!-- Intro Header -->
<header class="intro" id="top">
  <div class="intro-body">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1 class="brand-heading" style="font-family:Avenir;font-weight: bold;">UT<small style="color:#00ffbf;">sec</small></h1>
          <a href="#register" class="btn btn-dark btn-lg" style="font-family:Avenir;font-weight: bold;">Register</a><br/><br/>
          <a href="#about" class="btn btn-dark btn-lg" style="font-family:Avenir;font-weight: bold;">?UTsec</a>
          </a>
        </div>
        <!-- clock -->
        <div class="row" style="margin-top:10px;">
          <div class="wrapper">
            <div class="cell">
              <div id="holder">
                <div class="digits"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<section id="about" name="about" class="container content-section text-center about-back " style="padding-top:15%;padding-bottom:15%;">
  <div class="row ">
    <div  class="col-lg-8 col-lg-offset-2" >
		<div id="utdiv">
			<h2>UTsec چیست؟</h2>
			<hr class="star-primary">
		</div>
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <p>اولین دوره‌ی مسابقات و کارگاه‌های‌ UTsec .</p>
                <p>در یک مسابقه‌ی هشت‌ ساعته، دانش امنیتی خود را به چالش بکشید.</p>
                <p>کارگاه‌های آموزشی UTsec شما را برای شرکت در این مسابقه آماده می‌کند.</p>
            </div>
			<a href="{{ asset('Timeline.pdf') }}" class="btn btn-dark" style="font-size: large;width:200px;" >برنامه کارگاه‌ها و مسابقه</a>
        </div>
	</div>
  </div>
</section>


<section id = "workshop" class="workshop-back container content-section text-center " style="padding-top:0px;">
  <div id ="container" style="margin:auto;margin-top:100px;">
    <div class="row" style="margin:auto;">
      <div class="col-lg-12 text-center">
        <h2>کارگاه و مسابقه</h2>
        <hr class="star-primary">
      </div>
    </div>
    <div class="row mycol-sm-4-1" style="margin-top:20px;margin:auto;">
      <div class="col-sm-2 mycol-sm-4 workshop-item">
        <a data-target="#workshopModal1" class="workshop-link" data-toggle="modal">
          <div class="caption">
            <div class="caption-content">
              <p class="intro-text" style="font-family:Avenir;font-weight: bold;">Reverse Engineering<br>Workshop</p>
              <i class="fa fa-search-plus fa-3x"></i>
            </div>
          </div>
          <img src="img/workshop/reverse engineering.png" class="img-responsive" alt="">
        </a>
      </div>
      <div class="col-sm-2  mycol-sm-4 workshop-item">
        <a data-target="#workshopModal2" class="workshop-link" data-toggle="modal">
          <div class="caption">
            <div class="caption-content">
              <p class="workshop-text" style=";">Net Attack<br>Workshop</p>
              <i class="fa fa-search-plus fa-3x"></i>
            </div>
          </div>
          <img src="img/workshop/network-attacks.png" class="img-responsive" alt="">
        </a>
      </div>
      <div class="col-sm-2 mycol-sm-4 workshop-item">
        <a data-target="#workshopModal3" class="workshop-link"data-toggle="modal">
          <div class="caption">
            <div class="caption-content">
              <p class="intro-text" style="font-family:Avenir;font-weight: bold;">Web Attack<br>Workshop</p>
              <i class="fa fa-search-plus fa-3x"></i>
            </div>
          </div>
          <img src="img/workshop/logo - web attacks.png" class="img-responsive" alt="">
        </a>
      </div>
    </div>
    <div class ="row mycol-sm-4-2" style="margin:auto;">
      <div class="col-sm-12 workshop-item">
        <a data-target="#workshopModal4" class="workshop-link" data-toggle="modal">
          <div class="caption">
            <div class="caption-content" style="top:25%;">
              <p class="intro-text" style="font-family:Avenir;font-weight: bold;">Contest</p>
              <i class="fa fa-search-plus fa-3x"></i>
            </div>
          </div>
          <img src="img/workshop/utsec-logo.png" class="img-responsive" alt="">
        </a>
      </div>
    </div>
  </div>
</section>
@if($errors->any())
  <div class="modal fade black" id="errorModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">خطا</h4>
        </div>
        <div class="modal-body">
          <div class="alert alert-danger">
            @foreach($errors->all() as $error)
              {{ $error }} <br/>
            @endforeach
          </div>
        </div>
        <div class="modal-footer"style="text-align: left;">
          <button type="button" class="btn btn-default" style="font-family: inherit;"data-dismiss="modal">بسته</button>
        </div>
      </div>
    </div>
  </div>
@endif
@if(session('message'))
  <div class="modal fade black" id="messageModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">پیام</h4>
        </div>
        <div class="modal-body">
          <div class="alert alert-info">
            {{ session('message') }}
          </div>
        </div>
        <div class="modal-footer"style="text-align: left;">
          <button type="button" class="btn btn-default" style="font-family: inherit;"data-dismiss="modal">بسته</button>
        </div>
      </div>
    </div>
  </div>
@endif
<div class="modal fade black" id="workshopModal1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" style="color:#E90000" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#000"> کارگاه مهندسى معکوس </h4>
      </div>
      <div class="modal-body">
        <p style="color:#000">1.	فرمت فایل‌هاى اجرایى</p>
		<p style="color:#000">2.	مقدمه‌اى بر اسمبلى ٣٢ و ٦٤</p>
		<p style="color:#000">3.	الگوهاى کد ماشین در کامپایلرهاى مختلف </p>
		<p style="color:#000">4.	تحلیل ایستا و پویاى اسمبلى</p>

      </div>
      <div class="modal-footer" style="text-align: left;">
        <button type="button" class="btn btn-default" style="font-family: inherit;"data-dismiss="modal">بسته</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade black" id="workshopModal2" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" style="color:#E90000" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#000"> کارگاه شبکه </h4>
      </div>
      <div class="modal-body">
        <p style="color:#000">1.	ربودن اطلاعات از پروتکل‌هاى معمول</p>
		<p style="color:#000">2.	نفوذ به عمق شبکه</p>
		<p style="color:#000">3.	تونل‌زنى (tunneling) براى ایجاد دسترسى در شبکه </p>
		<p style="color:#000">4.	مهندسى اجتماعى بر پایه‌ی مهندسى کامپیوتر</p>

      </div>
      <div class="modal-footer"style="text-align: left;">
        <button type="button" class="btn btn-default" style="font-family: inherit;"data-dismiss="modal">بسته</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade black" id="workshopModal3" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" style="color:#E90000" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#000"> کارگاه وب </h4>
      </div>
      <div class="modal-body">
        <p style="color:#000">1.	حملات مبتنى بر اجراى کد از راه دور (RCE)</p>
		<p style="color:#000">2.	حملات تزریق به پایگاه‌داده ((SQL Injection</p>
		<p style="color:#000">3.	حملات تزریق کد سمت کاربر </p>
		<p style="color:#000">4.	مهندسى اجتماعى بر پایه‌ی مهندسى کامپیوتر</p>

      </div>
      <div class="modal-footer" style="text-align: left;">
        <button type="button" class="btn btn-default" style="font-family: inherit;"data-dismiss="modal">بسته</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade black" id="workshopModal4" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" style="color:#E90000" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#000">	مسابقه </h4>
      </div>
      <div class="modal-body text-center">
        <p style="color:#000">مسابقه‌ی UTsec در روز دوم برنامه و در طول هشت ساعت برگزار خواهد شد. این مسابقه از ۹ سؤال تشکیل شده ‌است که ارتباط مستقیم با مباحث مطرح‌شده در کارگاه‌های آموزشی روز اول دارد. </p>
      </div>
      <div class="modal-footer" style="text-align: left;">
        <button type="button" class="btn btn-default" style="font-family: inherit;"data-dismiss="modal">بسته</button>
      </div>
    </div>
  </div>
  </div>

<section id='presentation' class="container content-section text-center "  style="padding-top:150px;">
  <div id ="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>ارایه دهندگان</h2>
        <hr class="star-primary">
      </div>
    </div>
    <ul class="ch-grid">
		<li>
			<div class="ch-item">
			<div class="ch-info">
				<h3>محمد رسول صفرخانی</h3>
				<p><a href="https://www.linkedin.com/in/mohammad-rasoul-safarkhani-88196655">View on Linkedin</a></p>
			</div>
			<div class="ch-thumb ch-img-6"></div>
			</div>
		</li>

		<li>
			<div class="ch-item">
			<div class="ch-info">
				<h3>سید فرهاد میری</h3>
				<p><a href="https://www.linkedin.com/in/seyed-farhad-miri-052b42a7">View on Linkedin</a></p>
			</div>
			<div class="ch-thumb ch-img-5"></div>
			</div>
		</li>
		<li>
			<div class="ch-item">
			<div class="ch-info">
				<h3>سینا هاتف</h3>
				<p> <a href="https://www.linkedin.com/in/sina-hatef-matbue-4925294b">View on Linkedin</a></p>
			</div>
			<div class="ch-thumb ch-img-4"></div>
			</div>
		</li>
	</ul>
    </div>
 </section>
  <!-- role -->
  <section id = "role" class="container content-section text-center "  style="padding-top:15px;">
    <div id ="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>چکار باید بکنیم؟</h2>
          <hr class="star-primary">
        </div>
      </div>

  	</div>
		<div class="row">
			<div class="col-xs-6 col-sm-3">
				<h3 class="text-justify" style="color:rgb(115, 241, 126);">	آیا شرکت در این مسابقه برای افرادی که قبلاً در زمینه‌ی امنیت فعالیت داشته‌اند هم جذابیتی خواهد داشت؟</h3>
				<p class="text-justify">کارگاه‌هاى UTsec با هدف ارائه‌ی مطالبى جدید و کمتر گفته‌شده در موضوع هک و امنیت شبکه برگزار می‌شوند که سؤالات مسابقه شرکت‌کنندگان را در همین مباحث به چالش می‌کشند. در نتیجه، شرکت در این مسابقه برای افراد آشنا با مبحث نیز جذاب خواهد بود.</p>
			</div>
			<div class="col-xs-6 col-sm-3">
				<h4 class="text-justify" style="color:rgb(115, 241, 126);">	آیا افرادی که قبلاً در زمینه‌ی امنیت هیچ فعالیتی نداشته‌اند هم می‌توانند در این مسابقه شرکت کنند؟</h4>
				<p class="text-justify">درصورتى که هیچ آشنایى‌ای با هک و امنیت شبکه ندارید، با شرکت در کارگاه‌ها آمادگى لازم براى شرکت در مسابقه و حل سؤالات آن را به‌دست مى آورید؛ در UTsec همه می‌توانند به برنده‌شدن امیدوار باشند. </p>
			</div>
			<!-- Add the extra clearfix for only the required viewport -->
			<div class="clearfix visible-xs-block"></div>
			<div class="col-xs-6 col-sm-3">
					<h3 class="text-justify" style="color:rgb(115, 241, 126);">برای شرکت در این رویداد چه شرایطی لازم است؟</h3>
					<p style="text-align:right;">۱. عطش شدید به یادگیری</p>
					<p style="text-align:right;">۲. دقت به جزییات</p>
					<p style="text-align:right;">۳. تفکر خارج از چارچوب‌های معمول</p>
			</div>
			<div class="col-xs-6 col-sm-3">
				<h2 style="color:rgb(115, 241, 126);">ثبت‌ نام</h2>
				<p class="text-justify">ثبت‌نام در UTSec در قالب تیم‌هاى یک تا سه‌نفره انجام می‌شود؛ با این حال، از آن‌جا که سؤالات مسابقه از هر سه مبحث مطرح‌شده در کارگاه‌ها خواهد بود، شرکت تیم‌های سه‌نفره به‌صورتی که هر یک از اعضای تیم در یکی از کارگاه‌ها شرکت کرده باشد توصیه می‌شود. </p>
			 </div>
		</div>
		<div class="row">
		<div class="col-xs-6 col-sm-4"></div>
			<div class="col-xs-6 col-sm-4">
				<h2>توجه</h2>
				<hr class="star-primary">
				<p class="text-justify">به‌همراه داشتن کامپیوتر شخصی براى شرکت در کارگاه‌ها الزامى است. علاوه بر این، لازم است که سیستم‌عامل Kali Linux 2 روی کامپیوترها نصب شده باشد. (در صورتى که این سیستم عامل را ندارید می‌توانید با حضور در محل برگزارى قبل از شروع کارگاه اقدام به نصب آن نمایید.)</P>
			</div>
		<div class="col-xs-6 col-sm-4"></div>
		</div>
	</div>
  </section>
  <!-- prize -->
  <section id = "prize" class="container content-section text-center prize-back"  style="padding-top:150px;">
    <div id ="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>جوایز</h2>
          <hr class="star-primary">
        </div>
      </div>
	  <div class="row">
				<ul class="ch-grid">
					<li>
						<div class="prize-ch-item prize-ch-img-3">
							<div class="prize-ch-info-wrap">
								<div class="prize-ch-info">
									<div class="prize-ch-info-front prize-ch-img-3"></div>
									<div class="prize-ch-info-front prize-ch-img-3">
										<h2 style="margin-top: 5%; color:#000">تیم سوم</h2>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="prize-ch-item prize-ch-img-2">
							<div class="prize-ch-info-wrap">
								<div class="prize-ch-info">
									<div class="prize-ch-info-front prize-ch-img-2"></div>
									<div class="prize-ch-info-front prize-ch-img-2">
										<h2 style="margin-top: 5%; color:#000">تیم دوم</h2>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="prize-ch-item prize-ch-img-1">
							<div class="prize-ch-info-wrap">
								<div class="prize-ch-info">
									<div class="prize-ch-info-front prize-ch-img-1">
										<h2 style="margin-top: 5%; color:#000">تیم اول</h2>
									</div>

								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
	  </div>
  </section>
   <!-- price -->
  <section id = "price" class="container content-section text-center "  style="padding-top:150px;">
  <div id="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>هزینه ثبت نام</h2>
					<hr class="star-primary">
				</div>
			</div>
			<div class="row">
              <div>
                <span class="strong" style="font-size: 1.2em;">*** هزینه‌های ثبت نام پس از دوشنبه ۲۶ بهمن‌ماه، ۳۰ درصد افزایش می‌یابد ***</span>
              </div>
				<ul class="ch-grid">
					<li>
						<div class="price-ch-item price-ch-img-1">
							<div class="price-ch-info-wrap">
								<div class="price-ch-info">
									<div class="price-ch-info-front price-ch-img-1"></div>
									<div class="price-ch-info-back">
										<h2>دانشجوی </h2>
										<h2>دانشگاه تهران</h2>
										<h2>35,000</h2>
										<h2>تومان</h2>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="price-ch-item price-ch-img-3">
							<div class="price-ch-info-wrap">
								<div class="price-ch-info">
									<div class="price-ch-info-front price-ch-img-3"></div>
									<div class="price-ch-info-back">
										<h2>دانشجوی </h2>
										<h2>دانشگاه دیگر</h2>
										<h2>45,000</h2>
										<h2>تومان</h2>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="price-ch-item price-ch-img-2">
							<div class="price-ch-info-wrap">
								<div class="price-ch-info">
									<div class="price-ch-info-front price-ch-img-2"></div>
									<div class="price-ch-info-back">
										<h2>آزاد </h2>
										<h2>100,000</h2>
										<h2>تومان</h2>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
	</div>
  </section>
  {{--<!-- submite -->--}}
  <section id = "submite" class="container content-section text-center " >
	<div id="container">
  		<div class="row">
  			<div class="col-lg-12 text-center">
  				<h2>کد تخفیف بگیرید</h2>
  				<hr class="star-primary">
  				<h6 style="margin-top:10%;"></h6>
  			</div>
  		</div>
		<div class="row">
            <div class="col-lg-8 col-lg-offset-2" style="margin-top:-10%;">
                <p>شما می‌توانید به‌منظور پرداخت هزینه‌ی ثبت‌نام از کد تخفیف استفاده کنید. براى دریافت کد تخفیف دو روش وجود دارد:</p>
                <p>١. با ثبت ای‌میل خود کد تخفیف را دریافت کنید. </p>
                <p>٢. کد تخفیف را پیدا کنید! </p>
            </div>
        </div>
  		<div class="row" style="text-align:center;">
  			<div class="subscribe wow fadeInUp">
  			{{--< class="form-inline" role="form" action="???" method="post">--}}
              {!! Form::open(['route' => 'discount', 'method' => 'post', 'class' => 'form-inline']) !!}
  				<div class="row control-group">
  					<div class="form-group col-xs-12 floating-label-form-group controls">
  						<button type="submit" class="btn btn-dark" style="font-size: large;" >کد تخفیف می خواهم</button>
  						{{--<input type="email" class="form-control text-left ltr" placeholder=" ایمیل دانشگاهی خود را وارد کنید" id="email" required data-validation-required-message="Please enter your email address.">--}}
                        {!! Form::email('email', null, ['class' => 'form-control text-left ltr', 'placeholder' => ' ایمیل دانشگاهی خود را وارد کنید', 'required', 'data-validation-required-message'=>'لطفا ایمیل خود را وارد نمایید.' ]) !!}
                      <div id="recaptcha2" style="margin: 10px auto; width: 300px; -webkit-transform: scale(0.7);-moz-transform: scale(0.7);-ms-transform: scale(0.7);-o-transform: scale(0.7);transform: scale(0.7);"></div>
  					</div>
  				</div>
  			{!! Form::close() !!}
  			</div>
  		</div>
  	</div>
  </section>
  <!-- register -->
<section id = "register" style="padding-bottom:100px;">
  <div id ="container" class="fill center">
    <div class="row" style="margin-top:20px;">
      <div class="col-lg-12 text-center">
        <h2>ثبت نام</h2>
        <hr class="star-primary">
      </div>
    </div>
  </div>

  <div class="row" style="text-align:center;">
    <div class="subscribe wow fadeInUp">
      <a href="{{ route('register') }}" class="btn btn-primary btn-lg" style="width: 200px;">ثبت نام</a>
    </div>
  </div>
</section>

<section id="acm" class="acm-back" style="padding-top:150px;">
  <div class="col-lg-12 text-center">
    <h2>برگزارکنندگان</h2>
    <hr class="star-primary">
  </div>
  <!-- circle -->
  <ul class="ch-grid">
    <li>
      <div class="ch-items ch-img-1">
        <a href="http://acm.ut.ac.ir/acm">
          <div class="ch-infos">
            <h3>ACM student chapter</h3>
          </div>
        </a>
      </div>
    </li>
    <li>
      <div class="ch-items ch-img-2">
        <a href="http://ut.ac.ir">
          <div class="ch-infos">
            <h3>University Of Tehran</h3>
          </div>
        </a>
      </div>
    </li>
    <li>
      <div class="ch-items ch-img-3">
        <a href="http://ece.ut.ac.ir/">
          <div class="ch-infos">
            <h3>College Of Engineering</h3>
          </div>
        </a>
      </div>
    </li>
    <li>
      <div class="ch-items ch-img-ramz">
        <a href="http://sbisc.ut.ac.ir/" >
          <div class="ch-infos" >
            <h3 style="font-size:20px;">Student Branch Of Iran Society Of Cryptology</h3>
          </div>
        </a>
      </div>
    </li>
  </ul>
</section>



<section id="sponsors" style="padding-top:150px;">
  <div class="col-lg-12 text-center">
    <h2>حامیان</h2>
    <hr class="star-primary">
  </div>
  {{--<!-- circle -->--}}
  <ul class="ch-grid">
    <li>
      <div class="ch-items" style="background-image: url('img/logos/SCL-sm.png'); background-size: 75%;background-position: center center;background-repeat: no-repeat;">
        <a href="http://scl.ut.ac.ir/">
          <div class="ch-infos">
            <h3 style="font-size: 1em;">Secure Communication Lab</h3>
          </div>
        </a>
      </div>
    </li>
    <li>
      <div class="ch-items" style="background-image: url('img/logos/dotin.png'); background-size: 75%;background-position: center center;background-repeat: no-repeat;">
        <a href="http://dotin.ir/">
          <div class="ch-infos">
            <h3>Dotin</h3>
          </div>
        </a>
      </div>
    </li>
  </ul>
</section>


{{--<!-- circle -->--}}
<section id="contact">
  <footer class="text-center">
    <div class="footer-above">
      <div class="container">
        <div class="row">
          <div class="footer-col col-md-4">
            <h3>آدرس</h3>
            <hr class="star-primary">
            <p> تهران، خیابان کارگر شمالی، بعد از بزرگراه جلال آل احمد، دانشگاه تهران، پرديس۲ دانشکده های فنی</p>
          </div>
          <div class="footer-col col-md-4">
            <h3>ارتباط با ما</h3>
            <hr class="star-primary">
            <br>
            <ul class="list-inline banner-social-buttons">
              <li>
                <a href="http://twitter.com/utacm1" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
              </li>
              <li>
                <a href="http://facebook.com/ut.acm" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
              </li>
            </ul>
            <ul class="list-inline banner-social-buttons">
              <li>
                <a href="http://telegram.me/ut_acm" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-send"></i> <span class="network-name">Telegram</span></a>
              </li>
              <li>
                <a href="https://www.youtube.com/channel/UCsI17I51hGLf4ssFlT563Zw" class="btn btn-default btn-lg"><i class="fa fa-youtube fa-fw"></i> <span class="network-name">Youtube</span></a>
              </li>
            </ul>
          </div>
          <div class="footer-col col-md-4">
            <h3>نقشه</h3>
            <hr class="star-primary">
            <br>
            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
            <div style="overflow:hidden;height:400px;width:100%;">
              <div id="gmap_canvas" style="height:400px;width:100%;border-radius:10px;"></div>
              <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
              <a class="google-map-code" href="http://www.map-embed.com" id="get-map-data">map-embed.com</a>
            </div>
            <script type="text/javascript"> function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(35.72872630785886,51.38563381982431),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(35.7245484,51.3862329)});infowindow = new google.maps.InfoWindow({content:"<b>University of tehran</b><br/><br/> Tehran" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});}google.maps.event.addDomListener(window, 'load', init_map);</script>
          </div>
        </div>
      </div>
      <div class="row">
        <h3>پیاده‌سازی توسط</h3>
        <hr class="star-primary">
        <ul style="padding: 0;">
          <li style="display:block;">
            <h4><a target="_blank" href="http://amir.abiri.info">امیرحسین عبیری</a></h4>
          </li>
          <li style="display:block;">
            <h4><a target="_blank" href="https://www.linkedin.com/in/ghazal-sahebjam-323621112">غزل صاحب جمع</a></h4>
          </li>
          <li style="display:block;">
            <h4><a target="_blank" href="https://www.linkedin.com/in/ermia-hasanpour-707167107">ارمیا حسن پور</a></h4>
          </li>
        </ul>
      </div>
      <div class="gap">
        <div class="footer-below">
          <div class="container">
            <div class="row">
              <div class="grow">
                <div class="btn btn-dark">
                  <p>Acm student chapter</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</section>
{{--<!-- jQuery -->--}}
<script src="js/jquery.js"></script>
{{--<!-- Bootstrap Core JavaScript -->--}}
<script src="js/bootstrap.min.js"></script>
{{--<!-- Plugin JavaScript -->--}}
<script src="js/jquery.easing.min.js"></script>
{{--<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->--}}
{{--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>--}}
{{--<!-- Custom Theme JavaScript -->--}}
<script src="js/grayscale.js"></script>
<script>
  // d i s c o u n t c o d e: pashmaloo *** USED!!! Search for other ones! ***
  $("#menu-close").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
  });

  // Opens the sidebar menu
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
  });

  // Scrolls to the selected menu item on the page
  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      // alert('1');
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

        // alert('2');
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

        // alert('3');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          // alert('4');
          return false;
        }
      }
    });
  });
</script>
<!-- Footer -->
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>--}}
<script src="js/jquery.countdown.js"></script>
<link href="css/media.css" rel="stylesheet" type="text/css" />
<script>
  $(function(){
    $(".digits").countdown({
      image: "img/digits.png",
      format: "dd:hh:mm:ss",
      endTime: new Date('Wed Feb 17 2016 08:00:00 GMT+0330 (Iran Standard Time)')
    });

    @if($errors->any())
        $('#errorModal').modal('show');
    @endif
    @if(session('message'))
        $('#messageModal').modal('show');
    @endif
  });


</script>



<script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script>
<script>
  var recaptcha1;
  var recaptcha2;
  var myCallBack = function() {
//    //Render the recaptcha1 on the element with ID "recaptcha1"
//    recaptcha1 = grecaptcha.render('recaptcha1', {
//      'sitekey' : '6LfIbBcTAAAAAGDsaqdW-ZWeiFh5Uqk-czM0xu6F', //Replace this with your Site key
//      'theme' : 'dark'
//    });

    //Render the recaptcha2 on the element with ID "recaptcha2"
    recaptcha2 = grecaptcha.render('recaptcha2', {
      'sitekey' : '6LfIbBcTAAAAAGDsaqdW-ZWeiFh5Uqk-czM0xu6F', //Replace this with your Site key
      'theme' : 'dark'
    });
  };
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73270063-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>