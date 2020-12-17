@extends('admin.base-admin')
<title>Admin | Admin</title>
@section ('content-admin')


<main>
	<div class="container-fluid">
		<h1 class="mt-4">Edit Data Berita</h1>
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
			<li class="breadcrumb-item active">Edit Data</li>
		</ol>
		<div class="card mb-4 col-md-12" style="float: left;">
			<div class="card-body">
				<p class="mb-0">
					<hr/>
					<form action="/update/berita-acara/{{$data_berita->id}}" enctype="multipart/form-data" method="POST">
						{{csrf_field()}}
						<div class="form-row">
							<div class="form-group col-md-2">
								<a href="{{ URL::to('/')}}/public/dokumentasi/{{$data_berita->foto_berita}}">
									<img src="{{ URL::to('/')}}/public/dokumentasi/{{$data_berita->foto_berita}}" width="120" style="border: 1px solid #D3D3D3; ; border-radius: 3px; padding: 5px;">
								</a>
							</div>
							<div class="form-group col-md-2">
								<label for="inputCity">Foto Berita</label>
								<input type="file" name="foto_berita" class="form-control" id="inputCity"  value="{{$data_berita->foto_berita}}">
							</div>
							<div class="form-group col-md-3">
								<label for="inputState">Judul Berita</label>
								<input type="text" name="judul" class="form-control" id="inputCity"  value="{{$data_berita->judul}}">
							</div>
							<div class="form-group col-md-3">
								<label for="inputState">Nama yang Upload</label>
								<input type="text" name="nama" class="form-control" id="inputCity"  value="{{$data_berita->nama}}">
							</div>
							<div class="form-group col-md-2">
								<label for="inputState">Tanggal Berita</label>
								<input type="datetime-local" name="tanggal" class="form-control" id="inputCity"  value="{{ date('Y-m-d\TH:i', strtotime($data_berita->tanggal)) }}">

							</div>
						</div>
						<div class="form-group">
							<label for="inputAddress">Deskripsi 1</label>
							<textarea type="text" name="deskripsi1" class="form-control" id="inputAddress"">{{$data_berita->deskripsi1}}</textarea>
						</div>
						<div class="form-group">
							<label for="inputAddress">Deskripsi 2</label>
							<textarea type="text" name="deskripsi2" class="form-control" id="inputAddress">{{$data_berita->deskripsi2}}</textarea>
						</div>
						<div class="form-group">
							<label for="inputAddress">Deskripsi 3</label>
							<textarea type="text" name="deskripsi3" class="form-control" id="inputAddress">{{$data_berita->deskripsi3}}</textarea>
						</div>
						<button type="submit" class="btn btn-success">UPDATE</button>
					</form>
				</p>
			</div>
		</div>

	</div>
</main>

@endsection