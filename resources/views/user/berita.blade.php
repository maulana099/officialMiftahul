@extends('user.base-user')
<title>Miftahul Ridwan</title>
@section ('content-user')

<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" >
          <p class="fa fa-camera"> Uploader By : {{$data_berita->nama}}</p>
          <h2><b>{{$data_berita->judul}}</b></h2>
          <p>{{$data_berita->tanggal}}</p>
          <p>{{$data_berita->deskripsi1}},</p>
          <p>{{$data_berita->deskripsi2}},</p>
          <p>{{$data_berita->deskripsi3}}</p>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="{{URL::to('/')}}/public/dokumentasi/{{$data_berita->foto_berita}}" width="500">
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!--/#services-->
  <br/>
  @endsection