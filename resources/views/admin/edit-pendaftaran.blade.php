@extends('admin.base-admin')
<title>Admin | Dokumentasi</title>
@section ('content-admin')

<main>
	<div class="container-fluid">
		<h1 class="mt-4">Edit Formulir Pendaftaran</h1>
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
			<li class="breadcrumb-item active">{{$data_pendaftaran->nama}}</li>
		</ol>
		<div class="card mb-4 col-md-12">
			<div class="card-body">
				<p class="mb-0">
					<form action="/data-pendaftaran/update/{{$data_pendaftaran->id}}" enctype="multipart/form-data" method="POST">
						{{csrf_field()}}
						<div class="form-row">
							<div class="form-group col-md-2">
								<a href="{{ URL::to('/')}}/public/foto-santri/{{$data_pendaftaran->foto}}">
									<img src="{{ URL::to('/')}}/public/foto-santri/{{$data_pendaftaran->foto}}" width="150" style="border: 1px solid #D3D3D3; ; border-radius: 3px; padding: 5px;">
								</a>
							</div>
							<div class="form-group col-md-2">
								<label for="inputAddress">Foto Calon Santri</label>
								<input type="file" name="foto" class="form-control" id="inputAddress" value="{{$data_pendaftaran->foto}}">
								<input type="hidden" name="hidden_foto" class="form-control" id="inputAddress" value="{{$data_pendaftaran->foto}}">
							</div>
							<div class="form-group col-md-4">
								<label for="inputAddress2">Nama Lengkap</label>
								<input type="text" name="nama" class="form-control" id="inputAddress2" value="{{$data_pendaftaran->nama}}">
							</div>
							<div class="form-group col-md-4">
								<label for="inputAddress2">Alamat Email</label>
								<input type="email" name="email" class="form-control" id="inputAddress2" value="{{$data_pendaftaran->email}}">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="inputCity">Asal Sekolah</label>
								<input type="text" name="sekolah" class="form-control" id="inputCity" value="{{$data_pendaftaran->sekolah}}">
							</div>
							<div class="form-group col-md-3">
								<label for="inputCity">Tempat Lahir</label>
								<input type="text" name="tempat_lahir" class="form-control" id="inputCity" value="{{$data_pendaftaran->tempat_lahir}}">
							</div>
							<div class="form-group col-md-3">
								<label for="inputState">Tanggal Lahir</label>
								<input type="date" name="tanggal_lahir" class="form-control" id="inputCity" value="{{$data_pendaftaran->tanggal_lahir}}">
							</div>
							<div class="form-group col-md-2">
								<label for="inputPassword4">Jenis Kelamin</label>
								<select class="custom-select" id="validationDefault04" name="jenis_kelamin">
									<option value="{{$data_pendaftaran->jenis_kelamin}}">{{$data_pendaftaran->jenis_kelamin}}</option>
									<option value="LK">Laki Laki</option>
									<option value="PR">Perempuan</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="inputAddress">Alamat</label>
							<textarea type="text" name="alamat" class="form-control" id="inputAddress">{{$data_pendaftaran->alamat}}</textarea>
						</div>

						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="inputCity">Kewarganegaraan</label>
								<input type="text" name="warganegara" class="form-control" id="inputCity" value="{{$data_pendaftaran->warganegara}}">
							</div>
							<div class="form-group col-md-4">
								<label for="inputState">Provinsi</label>
								<input type="text" name="provinsi" class="form-control" id="inputCity" value="{{$data_pendaftaran->provinsi}}">
							</div>
							<div class="form-group col-md-4">
								<label for="inputState">Kabupaten</label>
								<input type="text" name="kabupaten" class="form-control" id="inputCity" value="{{$data_pendaftaran->kabupaten}}">
							</div>
						</div>
						<hr/>
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="inputAddress2">Nama Ayah</label>
								<input type="text" name="nama_ayah" class="form-control" id="inputAddress2" value="{{$data_pendaftaran->nama_ayah}}">
							</div>
							<div class="form-group col-md-4">
								<label for="inputAddress2">Nama Ibu</label>
								<input type="text" name="nama_ibu" class="form-control" id="inputAddress2"  value="{{$data_pendaftaran->nama_ibu}}">
							</div>
							<div class="form-group col-md-4">
								<label for="inputCity">No Hp / WA</label>
								<input type="number" name="no_hp" class="form-control" id="inputCity" value="{{$data_pendaftaran->no_hp}}">
							</div>
						</div>
						<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputAddress">Alamat Ortu / Wali</label>
							<textarea type="text" name="alamat_ortu" class="form-control" id="inputAddress">{{$data_pendaftaran->alamat_ortu}}</textarea>
						</div>

							<div class="form-group col-md-3">
								<label for="inputPassword4">Memiliki KIP</label>
								<select class="custom-select" id="validationDefault04" name="kip">
									<option value="{{$data_pendaftaran->kip}}">{{$data_pendaftaran->kip}}</option>
									<option value="Ya">Ya</option>
									<option value="Tidak">Tidak</option>
								</select>
							</div>
							<div class="form-group col-md-3">
								<label for="inputPassword4">Memiliki PKH</label>
								<select class="custom-select" id="validationDefault04" name="pkh">
									<option value="{{$data_pendaftaran->pkh}}">{{$data_pendaftaran->pkh}}</option>
									<option value="Ya">Ya</option>
									<option value="Tidak">Tidak</option>
								</select>
							</div>
						</div>
						<hr/>
						<button type="submit" class="btn btn-success">UPDATE</button>
					</form>
				</p>
			</div>

		</div>
	</div>
</main>

@endsection