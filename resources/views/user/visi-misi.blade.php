@extends('user.base-user')
<title>Miftahul Ridwan</title>
@section ('content-user')

<br/>
<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-sm-7">
        <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" >
          <h2><b>VISI</b></h2>
          <hr/>
          <p>" Terwujudnya Pondok Pesantren yang Maju, Lengkap, Mandiri, Istiqomah yang dapat melahirkan Muttaqin, Imamal Muttaqin, Ulamaul 'Amilin. " </p>
          <h2 class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms"><b>MISI</b></h2>
          <hr/>
          <li>Penanaman Keimanan, Ketaqwaan kepada Allah dan pembinaan akhlakul kharimah.</li>
          <li>Pendidikan keilmuan dan pengembangan wawasan.</li>
          <li>Pembinaan keterampilan dan keahlian.</li>
          <li>Pengembangan kewirausahaan dan kemandirian.</li>
          <li>Penanaman tanggung jawab kemasyarakatan dan kebangsaan.</li>
          
        </div>
      </div>
      <div class="col-sm-5">
        <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="{{ URL::asset('public/user/images/favicon.ico')}}" width="500">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<br/>
<!--/#services-->

@endsection