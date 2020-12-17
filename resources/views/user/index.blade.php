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
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(public/user/images/slider/slide-3.png)">
          <div class="caption">
            <!-- <h1 class="animated fadeInLeftBig">Selamat Datang<br><span>PONDOK PESANTREN<br> MIFTAHUL RIDWAN</span></h1> -->
            <p class="animated fadeInRightBig">
            	<!-- <a data-scroll class="btn btn-start animated fadeInUpBig" href="#service">PENDAFTARAN</a> -->
            </p>
          </div>
        </div>
        <div class="item" style="background-image: url(public/user/images/slider/slide-2.png)">
          <div class="caption">
            <!-- <h1 class="animated fadeInLeftBig">SELAMAT DATANG DI<br><span>PONDOK PESANTREN <br>MIFTAHUL RIDWAN</span></h1> -->
            <p class="animated fadeInRightBig">
            	<!-- <a data-scroll class="btn btn-start animated fadeInUpBig" href="#service">PENDAFTARAN</a> -->
            </p>
          </div>
        </div>
        <div class="item" style="background-image: url(public/user/images/slider/slide-1.png)">
          <div class="caption">
           <!-- <p class="animated fadeInLeftBig">PONDOK PESANTREN</p> -->
            <!-- <h1 style="text-shadow:3px 3px 0 #FFC62A; font-family: 'Montserrat ExtraBold'; font-size: 120px; color: #1A6008;"><b>MIFTAHUL RIDWAN</b></h1> -->
            <!-- <p class="animated fadeInLeftBig">KASOMALANG SUBANG</p> -->
           <p class="animated fadeInRightBig">
             <!-- <a data-scroll class="btn btn-start animated fadeInUpBig" href="#service">PENDAFTARAN</a> -->
           </p>
         </div>
       </div>
     </div>>
     <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
     <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

     <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

   </div><!--/#home-slider-->
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
          <!-- <li><a href="/login">Login</a></li>  -->       
          <!-- <li><a href=""><i class="fa fa-whatsapp" aria-hidden="true" class="btn btn-primary btn-sm"></i></a></li> -->
        </ul>
      </div>
    </div>
  </div><!--/#main-nav-->
</header><!--/#home-->

<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" >
          <h2><b>Pondok Pesantren Miftahul Ridwan</b></h2>
          <p>Pondok Pesantren Miftahul Ridwan terletak di Kp. Kalapa Beureum RT. 02 / RW. 07 Ds. Sindangsari Kec. Kasomalang Kab. Subang, Pesantren tersebut mempunyai Tri Program Pesantren :<br>
           1. Muttaqin<br>2. Imaamal Muttaqin<br>3. Ulamaul 'Amilin</p>
         </div>
       </div>
       <div class="col-sm-6">
        <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <p class="lead">
              <a href="{{ URL::asset('public/user/images/about.jpg')}}" data-lightbox="syarat">
               <img class="img-responsive" src="{{ URL::asset('public/user/images/about.jpg')}}">
             </a>
           </p>
         </div>
       </div>
     </div>
   </div>

   <div class="container text-center parallax">
    <div class="row count">
      <div class="col-sm-3 wow fadeInLeft case" data-wow-duration="1000ms" data-wow-delay="300ms">
        <i class="fa fa-user"></i>
        <h2 class="timer">100</h2>
        <h3>Jumlah Santri SD</h3>
      </div>
      <div class="col-sm-3 wow fadeInLeft case" data-wow-duration="1000ms" data-wow-delay="600ms">
        <i class="fa fa-user"></i>
        <h2 class="timer">100</h2>
        <h3>Jumlah Santri SMP</h3>
      </div> 
      <div class="col-sm-3 wow fadeInLeft case" data-wow-duration="1000ms" data-wow-delay="900ms">
        <i class="fa fa-user"></i>
        <h2 class="timer">100</h2>
        <h3>Jumlah Santri SMK</h3>
      </div>                 
    </div>
  </div>

</div>
</section>
<!--/#services-->

<section id="about-us" class="parallax">
  <div class="container">
    <div class="row">
      <div class="about-info wow fadeInUp text-center" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h2>MUQODIMAH</h2>
        <p>Dengan dilatar belakangi oleh tekad yang baik, tulus dan ikhlas, serta rasa kepedulian dan tanggung jawab terhadap moral/ akhlak generasi muda dalam proses Golden Age (Usia Keemasan), kamu bercita-cita untuk mewujudkan sebuah lembaga pendidikan yang tidak hanya berorientasi kepada ilmu duniawi saja, lebih dari itu kami ingin mencetak generasi muda yang beriman, bertakwa, berakhlakul kharima, berilmu, berwawasan luas, terampil, serta berguna bagi agama, bangsa, dan Negara.</p>
        <p>Oleh sebab itu, Pondok Pesantren Miftahul Ridwan Kasomalang subang hingga saat ini terus berusaha untuk mengembangkan pendidikan dan Da'wah Islamiyah dengan program yang diselenggarakan yaitu PAUD, SD, SMP IT, SMK IT.</p>
        <p>Metode pembelajaran Pondok Pesantren Miftahul Ridwan juga mengembangkan pendidikan berbasis skill/keterampilan/wirausaha. Pendidikan ini berperan sebagai media pembelajaran bagi para siswa untuk mengenal jauh unit produksi kewirausahaan agar mereka mampu menata kehidupan ekonominya dan siap menghadapi pasar global,</p>
      </div>
    </div>
  </div>
</section><!--/#about-us-->
<br/>
<br/>
<br/>

<section id="services">
  <div class="container" id="syarat">
    <div class="row">
      @foreach ($data_gambar as $gambar)
      <div class="col-sm-6 col-xs-6">
        <div class="about-info wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms" >
          <p class="lead">
           <a href="{{URL::to('/')}}/public/dokumentasi/{{$gambar->picture}}" data-lightbox="syarat" >
            <img class="img-responsive" src="{{URL::to('/')}}/public/dokumentasi/{{$gambar->picture}}"></a>
          </p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- ----------pendaftaran -->
<section id="service">
  <div class="container">
    <div class="row">

    </div>
    <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>PENDAFTARAN</h2>
          <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        </div>
        <div class="col-sm-6">
          <div class="single-table wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="row">
              <p class="lead">
               <a href="{{ URL::asset('public/user/images/about.jpg')}}" data-lightbox="syarat" >
                <img class="img-responsive" src="{{ URL::asset('public/user/images/syarat1.jpg')}}" style="width: 550px;"></a>
              </p>
            </div> 
          </div>
        </div>
        <div class="col-sm-6">
          <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="form-group">
              <h3><b>SYARAT - SYARAT PENDAFTARAN :</b></h3>
            </div>         
            <ul class="address">
              <li>1. Mengisi Formulir</li>
              <li>2. Menyerahkan data Administrasi, yaitu :</li>
              <li>&nbsp;&nbsp;&nbsp;&nbsp; - Pas photo : 2x3, 3x4 (masing-masing 3 lembar)</li>                  
              <li>&nbsp;&nbsp;&nbsp;&nbsp; - Fotocopy Izajah, SKHUN, dan NISN Sekolah asal terakhir (3 lembar)</li>
              <li>&nbsp;&nbsp;&nbsp;&nbsp; - Fotocopy Akte Kelahiran (3 lembar)</li>
              <li>&nbsp;&nbsp;&nbsp;&nbsp; - Fotocopy Kartu Keluarga (3 lembar)</li>
              <li>&nbsp;&nbsp;&nbsp;&nbsp; - Fotocopy KTP Orang tua/ Wali (3 lembar)</li>
            </ul>
            <h3><b>CATATAN</b></h3>
            <p>Juga menerima siswa tingkat PAUD/SD dengan persyaratan :</p>
            <ul class="address">
              <li>1. Fotocopy Akte Kelahiran (3 lembar)</li>
              <li>2. Fotocopy Kartu Keluarga (3 lembar)</li>
              <li>3. Fotocopy KTP Orang tua/ Wali (3 lembar)</li>
            </ul>
            <br/>
            <h5><b>Klik Dibawah ini Untuk Melanjutkan Proses Pendaftaran</b></h5>
            <a href="/pendaftaran" class="btn btn-success">Pendaftaran</a>
          </div>                            
        </div>
      </div>
    </div>
  </div>        
</section>

<!-- <section id="features" class="parallax">
    <div class="container text-center">
      <div class="row count">
        <div class="col-sm-4 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i class="fa fa-user"></i>
          <h3 class="timer">100</h3>
          <h2>Santri Muttaqin</h2>
        </div>
        <div class="col-sm-4 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="600ms">
          <i class="fa fa-user"></i>
          <h3 class="timer">100</h3>
          <h2>Santri Imaamal Muttaqin</h2>
        </div> 
        <div class="col-sm-4 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
          <i class="fa fa-user"></i>
          <h3 class="timer">100</h3>
          <h2>Santri Ulamaul 'Amilin</h2>
        </div>                 
      </div>
    </div>
  </section> -->
  <!--/#features-->

<section id="portfolio">
  <div class="container">
    <div class="row">
      <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h2>GALERI</h2><hr style="height:2px;border-width:0;color:gray;background-color:gray">
      </div>
    </div> 
  </div>
  <div class="container-fluid">
    <div class="row">
      @foreach ($data_galeri as $galeri)
      <div class="col-sm-3">
        <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="folio-image">
            <img class="img-responsive" src="{{URL::to('/')}}/public/dokumentasi/{{$galeri->gambar}}" alt="" style="height: 240px;">
          </div>
          <div class="overlay">
            <div class="overlay-content">
              <div class="overlay-text">
                <div class="folio-info">
                </div>
                <div class="folio-overview">
                  <span class="folio-expand"><a href="{{URL::to('/')}}/public/dokumentasi/{{$galeri->gambar}}" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach     
    </div>   
  </div>
  <div id="portfolio-single-wrap">
    <div id="portfolio-single">
    </div>
  </div><!-- /#portfolio-single-wrap -->
</section>

<!--/#portfolio-->
  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>BERITA TERBARU</h2>
          <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">
          @foreach ($data_berita as $berita)
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="post-thumb">
              <a href="/details/berita/{{$berita->id}}">
                <img class="img-responsive" src="{{URL::to('/')}}/public/dokumentasi/{{$berita->foto_berita}}" alt=""></a> 
                <div class="post-meta">
                </div>
              </div>
              <div class="entry-header">
                <h3><a href="#">{{ $berita->judul}}</a></h3>
                <span class="date">{{$berita->tanggal}}</span>
                <span class="cetagory">Uploader : <strong>{{$berita->nama}}</strong></span>
              </div>
              <div class="entry-content">
                <p>{{$berita->deskripsi1}}</p>
              </div>
            </div>
            @endforeach                
          </div>               
        </div>
      </div>
    </section><!--/#blog-->

    <section id="contact">
      <div id="contact-us" class="parallax">
        <div class="container">
          <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
              <div class="col-sm-6">
                <div class="row wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="form-group">
                   <br>
                   <h3>PONDOK PESANTREN MIFTAHUL RIDWAN</h3>
                 </div>

                 <ul class="address">
                  <li><i class="fa fa-map-marker"></i> &nbsp;&nbsp;&nbsp;&nbsp; Kp. Kalapa Beureum RT. 02 / RW. 07 Ds. Sindangsari Kec. Kasomalang<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kab. Subang</li>
                  <li>
                    <a href="tel:+6281220987366" style="color: white;">                      
                      <i class="fa fa-phone"></i> &nbsp;&nbsp;&nbsp;&nbsp; +62 812 2098 7366</li>
                    </a>
                    <li>
                      <a href="tel:+6285321564020" style="color: white;">
                        <i class="fa fa-phone"></i> &nbsp;&nbsp;&nbsp;&nbsp; +62 853 2156 4020</li>
                      </a>
                      <li>
                        <a href="https://wa.me/6285891056571text=Assalamualaikum%20Terima%20Kasih%20%20Telah%20mengunjungi%20website%20kami" style="color: white;">
                          <i class="fa fa-whatsapp"></i> &nbsp;&nbsp;&nbsp;&nbsp; +62 858 9105 6571
                        </a>
                      </li>
                      <li><i class="fa fa-envelope"></i> &nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:miftahulridwan@gmail.com" style="color: white;"> miftahulridwan@gmail.com</a></li>
                    </ul>
                    <br>
                  </div>                            
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                   <br>
                   <h3>KRITIK & SARAN</h3>
                 </div>
                 <form action="/kirim/message" method="POST">
                  {{csrf_field()}}
                  <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input style="color: teal;" type="text" name="nama" class="form-control" placeholder="Name" required="required">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input style="color: teal;" type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input style="color: teal;" type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                  </div>
                  <div class="form-group">
                    <textarea style="color: teal;" name="pesan" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                  </div>                        
                  <div class="form-group">
                    <button type="submit" class="btn-submit" style="background-color: #027fcc;">Send Now</button>
                  </div>
                </form> 
              </div>
            </div>
          </div>
        </div>
      </div>        
    </section>
    <!--/#contact-->
    <footer id="footer">
      <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container text-center">
          <div class="footer-logo">
            <a href="/"><img class="img-responsive" src="{{ URL::asset('public/user/images/footer-1.png')}}" alt=""></a>
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
          <p class="pull-right">Developer by <a href="https://www.instagram.com/struggleteam6/?hl=id">Struggle Team</a></p>
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