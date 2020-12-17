@extends('admin.base-admin')
<title>Admin | Edit Data Santri</title>
@section ('content-admin')

<main>
	<div class="container-fluid">
		<h1 class="mt-4">Edit Data Santri</h1>
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
			<li class="breadcrumb-item active">{{$data_santri->nama}}</li>
		</ol>
		<div class="card mb-4 col-md-12">
			<div class="card-body">
				<p class="mb-0">
					<form action="/update/data-santri/{{$data_santri->id}}" enctype="multipart/form-data" method="POST">
						{{csrf_field()}}
						<div class="form-row">
							<div class="form-group col-md-2">
								<a href="{{ URL::to('/')}}/public/foto-santri/{{$data_santri->photo}}">
									<img src="{{ URL::to('/')}}/public/foto-santri/{{$data_santri->photo}}" width="150" style="border: 1px solid #D3D3D3; ; border-radius: 3px; padding: 5px;">
								</a>
							</div>
							<div class="form-group col-md-2">
								<label for="inputAddress">Foto Calon Santri</label>
								<input type="file" name="photo" class="form-control" id="inputAddress" value="{{$data_santri->photo}}">
								<input type="hidden" name="photo" class="form-control" id="inputAddress" value="{{$data_santri->photo}}">
							</div>
							<div class="form-group col-md-2">
								<label for="inputPassword4">Tingkatan</label>
								<select class="custom-select" id="validationDefault04" name="tingkatan">
									<option value="{{$data_santri->tingkatan}}">{{$data_santri->tingkatan}}</option>
									<option value="SD">SD</option>
									<option value="SMP">SMP</option>
									<option value="SMK">SMA</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="inputAddress2">Nama Lengkap</label>
								<input type="text" name="nama" class="form-control" id="inputAddress2" value="{{$data_santri->nama}}">
							</div>
							<div class="form-group col-md-6">
								<label for="inputCity">Asal Sekolah</label>
								<input type="text" name="sekolah" class="form-control" id="inputCity" value="{{$data_santri->sekolah}}">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="inputCity">Tempat Lahir</label>
								<input type="text" name="tempat_lahir" class="form-control" id="inputCity" value="{{$data_santri->tempat_lahir}}">
							</div>
							<div class="form-group col-md-4">
								<label for="inputState">Tanggal Lahir</label>
								<input type="date" name="tanggal_lahir" class="form-control" id="inputCity" value="{{$data_santri->tanggal_lahir}}">
							</div>
							<div class="form-group col-md-4">
								<label for="inputPassword4">Jenis Kelamin</label>
								<select class="custom-select" id="validationDefault04" name="jenis_kelamin">
									<option value="{{$data_santri->jenis_kelamin}}">{{$data_santri->jenis_kelamin}}</option>
									<option value="LK">Laki Laki</option>
									<option value="PR">Perempuan</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="inputAddress">Alamat</label>
							<textarea type="text" name="alamat" class="form-control" id="inputAddress">{{$data_santri->alamat}}</textarea>
						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="inputAddress2">Nama Ayah</label>
								<input type="text" name="nama_ayah" class="form-control" id="inputAddress2" value="{{$data_santri->nama_ayah}}">
							</div>
							<div class="form-group col-md-4">
								<label for="inputAddress2">Status</label>
								<input type="text" name="status" class="form-control" id="inputAddress2"  value="{{$data_santri->status}}">
							</div>
							<div class="form-group col-md-4">
								<label for="inputCity">No Hp / WA</label>
								<input type="number" name="no_hp" class="form-control" id="inputCity" value="{{$data_santri->no_hp}}">
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