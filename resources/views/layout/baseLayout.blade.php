<!doctype html>
<html class="no-js" lang="zxx">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Miftahul Ridwan</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('public/assets/images/favicon.ico')}}">

  <!-- CSS here -->
  <link rel="stylesheet" href="{{ URL::asset('public/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('public/assets/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('public/assets/css/ticker-style.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('public/assets/css/flaticon.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('public/assets/css/slicknav.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('public/assets/css/animate.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('public/assets/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('public/assets/css/fontawesome-all.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('public/assets/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('public/assets/css/slick.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('public/assets/css/nice-select.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('public/assets/css/style.css')}}">
</head>

<body>
  <!-- Preloader Start -->
  <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
      <div class="preloader-inner position-relative">
        <div class="preloader-circle"></div>
        <div class="preloader-img pere-text">
          <img src="{{ URL::asset('public/assets/images/logo.png')}}" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- Preloader Start -->
  <header>
    <!-- Header Start -->
    <div class="header-area">
      <div class="main-header ">
        <div class="header-top black-bg d-none d-sm-block">
          <div class="container">
            <div class="col-xl-12">
              <div class="row d-flex justify-content-between align-items-center">
                <div class="header-info-left">
                  <ul>     
                    <li class="title"><span class="flaticon-energy"></span> PONDOK PESANTREN</li>
                    <li>
                      <marquee>Pondok Pesantren Miftahul Ridwan Kaso Malang Subang</marquee>
                    </li>
                  </ul>
                </div>
                <div class="header-info-right">
                  <ul class="header-date">
                    <li><i class="fab fa-whatsapp"></i> &nbsp; <a href="https://wa.me/6281293005886?text=Assalamualaikum. Saya ingin  mendaftar">+6281293005886</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header-mid gray-bg">
          <div class="container">
            <div class="row d-flex align-items-center">
              <!-- Logo -->
              <div class="col-xl-3 col-lg-3 col-md-3 d-none d-md-block">
                <div class="logo">
                  <a href="/"><img src="{{ URL::asset('public/assets/images/logo.png')}}" alt="Miftahul logo" style="width: 80px;"></a>
                </div>
              </div>
              <div class="col-xl-9 col-lg-9 col-md-9">
                <div class="header-banner f-right ">
                  <img src="{{ URL::asset('public/assets/images/header1.png')}}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header-bottom header-sticky">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-xl-8 col-lg-8 col-md-12 header-flex">
                <!-- sticky -->
                <div class="sticky-logo">
                  <a href="/"><img src="{{ URL::asset('public/assets/images/logo.png')}}" alt="" style="width: 60px;"></a>
                </div>
                <!-- Main-menu -->
                <div class="main-menu d-none d-md-block">
                  <nav>                  
                    <ul id="navigation">
                      <li><a href="/">Home</a></li>
                      <li><a href="/tentang">Tentang</a></li>
                      <li><a href="/visi-misi">Visi Misi</a></li>
                    </ul>
                  </nav>
                </div>
              </div>             
              <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="header-right f-right d-none d-lg-block">
                  <!-- Heder social -->
                  <a href="/psb" class="btn btn-warning btn-sm"><i class=""></i> PENDAFTARAN SISWA BARU</a>
                  <!-- Search Nav -->
                </div>
              </div>
              <!-- Mobile Menu -->
              <div class="col-12">
                <div class="mobile_menu d-block d-md-none"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->
  </header>

  @yield('content-user')           
  <!-- End Weekly-News -->
  <!-- banner-last Start -->
  <div class="banner-area gray-bg pt-90 pb-90">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-md-10">
          <div class="banner-one">
            <img src="{{ URL::asset('public/assets/images/footer-1.png')}}" alt="" style="border-radius: 10px;">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner-last End -->
</main>
<footer>
  <!-- Footer Start-->
  <div class="footer-main footer-bg">
    <div class="footer-area footer-padding">
      <div class="container">
        <div class="row d-flex justify-content-between">
          <div class="col-xl-3 col-lg-3 col-md-5 col-sm-8">
            <div class="single-footer-caption mb-50">
              <div class="single-footer-caption mb-30">
                <!-- logo -->
                <div class="footer-logo">
                  <a href="/"><img src="{{ URL::asset('public/assets/images/logo2.png')}}" alt="" style="width: 300px;"></a>
                </div>
                <div class="footer-tittle">
                  <div class="footer-pera">
                    <p class="info2">198 West 21th Street, Suite 721 New York,NY 10010</p>
                    <p class="info2">Phone: +95 (0) 123 456 789 Cell: +95 (0) 123 456 789</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
            <div class="single-footer-caption mb-50">
              <div class="footer-tittle">
                <h4>Link Akses</h4>
              </div>
              <!-- Popular post -->
              <div class="whats-right-single mb-20">
                <div class="whats-right-cap">
                  <h4><a href="/psb">PSB Online</a></h4>
                </div>
              </div>
              <div class="whats-right-single mb-20">
                <div class="whats-right-cap">
                  <h4><a href="/tentang">Tentang Pesantren</a></h4>
                </div>
              </div>
              <!-- Popular post -->
              <div class="whats-right-single mb-20">
                <div class="whats-right-cap">
                  <h4><a href="/psb">Berita</a></h4>
                </div>
              </div>
              <!-- Popular post -->
              <div class="whats-right-single mb-20">
                <div class="whats-right-cap">
                  <h4><a href="https://wa.me/6281293005886?text=Assalamualaikum. Saya ingin  mendaftar">Narahubung</a></h4>
                </div>
              </div>
              <div class="whats-right-single mb-20">
                <div class="whats-right-cap">
                  <h4><a href="/">Gallery</a></h4>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
            <div class="single-footer-caption mb-50">
              <div class="banner">
                <img src="{{ URL::asset('public/assets/images/left.png')}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer-bottom aera -->
    <div class="footer-bottom-area footer-bg">
      <div class="container">
        <div class="footer-border">
          <div class="row d-flex align-items-center">
            <div class="col-xl-12 ">
              <div class="footer-copy-right text-center">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Miftahul Ridwan | Support by <a href="https://www.instagram.com/jasaweb.karawang/" target="_blank">Bitsklab | Struggle Team</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End-->
  </footer>
  <!-- Search model Begin -->
  <div class="search-model-box">
    <div class="d-flex align-items-center h-100 justify-content-center">
      <div class="search-close-btn">+</div>
      <form class="search-model-form">
        <input type="text" id="search-input" placeholder="Searching key.....">
      </form>
    </div>
  </div>
  <!-- Search model end -->

  <!-- JS here -->

  <script src="{{ URL::asset('public/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
  <!-- Jquery, Popper, Bootstrap -->
  <script src="{{ URL::asset('public/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
  <script src="{{ URL::asset('public/assets/js/popper.min.js')}}"></script>
  <script src="{{ URL::asset('public/assets/js/bootstrap.min.js')}}"></script>
  <!-- Jquery Mobile Menu -->
  <script src="{{ URL::asset('public/assets/js/jquery.slicknav.min.js')}}"></script>

  <!-- Jquery Slick , Owl-Carousel Plugins -->
  <script src="{{ URL::asset('public/assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{ URL::asset('public/assets/js/slick.min.js')}}"></script>
  <!-- Date Picker -->
  <script src="{{ URL::asset('public/assets/js/gijgo.min.js')}}"></script>
  <!-- One Page, Animated-HeadLin -->
  <script src="{{ URL::asset('public/assets/js/wow.min.js')}}"></script>
  <script src="{{ URL::asset('public/assets/js/animated.headline.js')}}"></script>
  <script src="{{ URL::asset('public/assets/js/jquery.magnific-popup.js')}}"></script>

  <!-- Scrollup, nice-select, sticky -->
  <script src="{{ URL::asset('public/assets/js/jquery.scrollUp.min.js')}}"></script>
  <script src="{{ URL::asset('public/assets/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{ URL::asset('public/assets/js/jquery.sticky.js')}}"></script>

  <!-- contact js -->
  <script src="{{ URL::asset('public/assets/js/contact.js')}}"></script>
  <script src="{{ URL::asset('public/assets/js/jquery.form.js')}}"></script>
  <script src="{{ URL::asset('public/assets/js/jquery.validate.min.js')}}"></script>
  <script src="{{ URL::asset('public/assets/js/mail-script.js')}}"></script>
  <script src="{{ URL::asset('public/assets/js/jquery.ajaxchimp.min.js')}}"></script>

  <!-- Jquery Plugins, main Jquery -->  
  <script src="{{ URL::asset('public/assets/js/plugins.js')}}"></script>
  <script src="{{ URL::asset('public/assets/js/main.js')}}"></script>

</body>
</html>