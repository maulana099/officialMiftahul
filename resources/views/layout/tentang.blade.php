@extends('layout.baseLayout')
<title>Miftahul Ridwan</title>
@section ('content-user')

 <main>
        <div class="about-details section-padding30">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-1 col-lg-8">
                        <div class="about-details-cap mb-50">
                            <h4>Tentang Pesantren</h4>
                            <p>Dengan dilatar belakangi oleh tekad yang baik, tulus dan ikhlas, serta rasa kepedulian dan tanggung jawab terhadap moral/ akhlak generasi muda dalam proses Golden Age (Usia Keemasan), kamu bercita-cita untuk mewujudkan sebuah lembaga pendidikan yang tidak hanya berorientasi kepada ilmu duniawi saja, lebih dari itu kami ingin mencetak generasi muda yang beriman, bertakwa, berakhlakul kharima, berilmu, berwawasan luas, terampil, serta berguna bagi agama, bangsa, dan Negara.
                            </p>
                            <p>
                                Oleh sebab itu, Pondok Pesantren Miftahul Ridwan Kasomalang subang hingga saat ini terus berusaha untuk mengembangkan pendidikan dan Da'wah Islamiyah dengan program yang diselenggarakan yaitu PAUD, SD, SMP IT, SMK IT.
                                <br/>
                                Metode pembelajaran Pondok Pesantren Miftahul Ridwan juga mengembangkan pendidikan berbasis skill/keterampilan/wirausaha. Pendidikan ini berperan sebagai media pembelajaran bagi para siswa untuk mengenal jauh unit produksi kewirausahaan agar mereka mampu menata kehidupan ekonominya dan siap menghadapi pasar global,
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                <span>Program Unggulan</span>
                            </div>
                            <div class="support-caption">
                                <ul style="color: white;">
                                    <li>1. Kitab Kuning</li>
                                    <li>2. Pendidikan Ilmu Aqidah</li>
                                    <li>3. Tilawatil Qur'an</li>
                                    <li>4. Pembinaan Kewirausahaan</li>
                                </ul>
                            </div>
                        </div>
                        <br/>
                        <br/>
                        <div class="right-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittles section-tittles2 mb-10">
                                <span>Fasilitas - Fasilitas</span>
                            </div>
                            <div class="support-caption">
                                <ul style="color: white;">
                                    <li>1. Ruang Kelas yang memadai</li>
                                    <li>2. Ruang Laboratorium/ Ruang Praktikum</li>
                                    <li>3. Perpustakaan</li>
                                    <li>4. Masjid</li>
                                    <li>5. Asrama (Putra & Putri)</li>
                                    <li>6. Gedung Serbaguna</li>
                                    <li>7. Lapang Olahraga</li>
                                    <li>8. Lahan Perkebunan</li>
                                    <li>9. Poskestren</li>
                                    <li>10. Koperasi</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End-->
      
        <!-- banner-last End -->
    </main>


  @endsection