@extends('psb.base-psb')
<title>PSB - Miftahul Ridwan</title>
@section ('content-psb')

<div class="about-area2 gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="whats-news-wrapper">

					<div class="row">
						<div class="col-12">
							<!-- Nav Card -->
							<div class="tab-content" id="nav-tabContent">
								<!-- card one -->
								<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">       
									<div class="row">
										<div class="col-xl-6 col-lg-6 col-md-6">
											<div class="whats-news-single">
												<div class="whates-img">
													<img src="{{ URL::asset('public/images/slide3.jpg')}}" alt="">
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6">
											<div class="whats-news-single">
												<div class="whates-img">
													<img src="{{ URL::asset('public/images/slide3.jpg')}}" alt="">
												</div>
											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12" style="text-align: center;">
											<a href="/psb/syarat" class="genric-btn radius" style="background-color: #0f3057; margin-top: 5px;">Syarat Pendaftaran</a>
											<a href="/psb/alur-pendaftaran" class="genric-btn radius" style="background-color: #0f3057; margin-top: 5px;">Cara Pendaftaran</a>
											<a href="/psb/biaya-pendidikan" class="genric-btn radius" style="background-color: #0f3057; margin-top: 5px;">Biaya Pendidikan</a>
											<a href="https://wa.me/6281293005886?text=Assalamualaikum. Saya ingin  mendaftar" class="genric-btn radius" style="background-color: #0f3057; margin-top: 5px;">Informasi Whatsapp</a>
											<a href="Bit.ly/PsbYPPMR2021" class="genric-btn success radius" style="background-color: #0f3057; margin-top: 5px;">Daftar Sekarang</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<div class="weekly2-news-area pt-50 pb-30 gray-bg" id="beritaKegiatan">
	<div class="container">
		<div class="weekly2-wrapper">
			<div class="row">
				<!-- Banner -->
				<div class="col-lg-12">
					<div class="home-banner2 d-none d-lg-block">
						<img src="{{ URL::asset('public/images/header-center.jpg')}}" alt="" style="border-radius: 10px;">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection