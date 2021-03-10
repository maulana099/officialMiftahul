@extends('layout.baseLayout')
<title>Miftahul Ridwan</title>
@section ('content-user')

<main>
  <br/>
  <br/>
  <!--? About Area Start-->
  <div class="support-company-area pt-50 pb-50 section-bg fix" data-background="{{ URL::asset('public/assets/images/section_bg02.jpg')}}">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-6 col-lg-6">
          <div class="support-location-img">
            <img src="{{ URL::asset('public/assets/images/about.jpg')}}" alt="">
          </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="right-caption">
            <!-- Section Tittle -->
            <div class="section-tittles section-tittles2 mb-10">
              <span>Our Vision</span>
            </div>
            <div class="support-caption">
              <p style="color: white;">" Terwujudnya Pondok Pesantren yang Maju, Lengkap, Mandiri, Istiqomah yang dapat melahirkan Muttaqin, Imamal Muttaqin, Ulamaul 'Amilin. "ma, berilmu, berwawasan luas, terampil, serta berguna bagi agama, bangsa, dan Negara.
              </p>
            </div>
          </div>
          <br/>
          <br/>
          <div class="right-caption">
            <!-- Section Tittle -->
            <div class="section-tittles section-tittles2 mb-10">
              <span>Our Mision</span>
            </div>
            <div class="support-caption">
              <ul style="color: white;">
                <li>1. Penanaman Keimanan, Ketaqwaan kepada Allah dan pembinaan akhlakul kharimah.</li>
                <li>2. Pendidikan keilmuan dan pengembangan wawasan.</li>
                <li>3. Pembinaan keterampilan dan keahlian.</li>
                <li>4. Pengembangan kewirausahaan dan kemandirian.</li>
                <li>5. Penanaman tanggung jawab kemasyarakatan dan kebangsaan.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br/>
  <br/>
  <!-- About Area End-->
  <!-- Team Start -->
  <!-- banner-last End -->
</main>


@endsection