<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Dashboard | Miftahul Huda</title>
  <link href="{{ URL::asset('public/user/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('public/user/css/animate.min.css')}}" rel="stylesheet"> 
  <link href="{{ URL::asset('public/user/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('public/user/css/lightbox.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('public/user/css/main.css')}}" rel="stylesheet">
  <link id="css-preset" href="{{ URL::asset('public/user/css/presets/preset1.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('public/user/css/responsive.css')}}" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="{{ URL::asset('public/user/js/html5shiv.js')}}"></script>
    <script src="{{ URL::asset('public/user/js/respond.min.js')}}"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="{{ URL::asset('public/user/images/favicon.ico')}}">
</head><!--/head-->

<body>

    <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <!-- <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(public/user/images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Selamat Datang<br><span>PONDOK PESANTREN<br> MIFTAHUL RIDWAN</span></h1>
            <p class="animated fadeInRightBig">
              <a data-scroll class="btn btn-start animated fadeInUpBig" href="pendaftaran.html">PENDAFTARAN</a>
            </p>
          </div>
        </div>
        <div class="item" style="background-image: url(public/user/images/slider/2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">SELAMAT DATANG DI<br><span>PONDOK PESANTREN <br>MIFTAHUL RIDWAN</span></h1>
            <p class="animated fadeInRightBig">
              <a data-scroll class="btn btn-start animated fadeInUpBig" href="pendaftaran.html">PENDAFTARAN</a>
            </p>
          </div>
        </div>
        <div class="item" style="background-image: url(public/user/images/slider/3.jpg)">
          <div class="caption">
           <h1 class="animated fadeInLeftBig">SELAMAT DATANG DI<br><span>PONDOK PESANTREN<br> MIFTAHUL RIDWAN</span></h1>
           <p class="animated fadeInRightBig">
             <a data-scroll class="btn btn-start animated fadeInUpBig" href="pendaftaran.html">PENDAFTARAN</a>
           </p>
         </div>
       </div>
     </div>>
     <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
     <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

     <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

   </div> -->
   <!--/#home-slider-->
   <div class="main-nav">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">
          <h1><img class="img-responsive" src="{{ URL::asset('public/user/images/logo.png')}}" alt="logo" width="200"></h1>
        </a>                    
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">                 
          <li><a href="/">Home</a></li>
          <li><a href="/tentang-kami">Tentang</a></li> 
          <li><a href="/visi-misi">Visi Misi</a></li> 
          <li><a href="/pendaftaran">Pendaftaran</a></li>
          <!-- <li><a href="/login">Login</a></li>   -->       
          <!-- <li><a href=""><i class="fa fa-whatsapp" aria-hidden="true" class="btn btn-primary btn-sm"></i></a></li> -->
        </ul>
      </div>
    </div>
  </div><!--/#main-nav-->
</header><!--/#home-->

  @yield ('content-user')

<footer id="footer">
  <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
    <div class="container text-center">
      <div class="footer-logo">
        <a href="index.html"><img class="img-responsive" src="{{ URL::asset('public/user/images/logo.png')}}" alt=""></a>
      </div>
      <div class="social-icons">
        <ul>
          <li><a class="envelope" href="#"><i class="fa fa-envelope" style="margin-top: 8px;"></i></a></li>
          <li><a class="instagram" href="#"><i class="fa fa-instagram" style="margin-top: 8px;"></i></a></li> 
          <li><a class="facebook" href="#"><i class="fa fa-facebook" style="margin-top: 8px;"></i></a></li>
          <!-- <li><a class="facebook" href="#"><i class="fa fa-facebook" style="margin-top: 8px;"></i></a></li>
          <li><a class="linkedin" href="#"><i class="fa fa-linkedin" style="margin-top: 8px;"></i></a></li>
          <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square" style="margin-top: 8px;"></i></a></li> -->
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p>&copy; 2020 Pondok Pesantren Miftahul Ridwan.</p>
        </div>
        <div class="col-sm-6">
          <p class="pull-right">Developer by : <a href="https://www.instagram.com/struggleteam6/?hl=id">Struggle Team</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>

<script type="text/javascript" src="{{ URL::asset('public/user/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('public/user/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="{{ URL::asset('public/user/js/jquery.inview.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('public/user/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('public/user/js/mousescroll.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('public/user/js/smoothscroll.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('public/user/js/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('public/user/js/lightbox.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('public/user/js/main.js')}}"></script>

</body>
</html>
