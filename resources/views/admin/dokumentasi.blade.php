@extends('admin.base-admin')
<title>Admin | Dokumentasi</title>
@section ('content-admin')

<main>
	<div class="container-fluid">
		<h1 class="mt-4">Tambah Data Dokumentasi</h1>
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
			<li class="breadcrumb-item active">Dokumentasi</li>
		</ol>
		<div class="card mb-4 col-md-12">
			<div class="card-body">
				<p class="mb-0">
					Dapat Langsung upload beberpa file. Maximal Uplad File
					<code>*3 Gambar</code>
					dan batas ukuran gambar
					<code>*2 MB atau 2000KB</code>
					<hr/>
					<form action="/add-dokumentasi/simpan" enctype="multipart/form-data" method="post">
						{{csrf_field()}}
						<div class="form-row">
							<div class="form-group col-md-2">
								<label for="inputAddress2">Dokumentasi</label>
							</div>
							<div class="form-group col-md-7">
								<input type="file" name="gambar[]" class="form-control" id="inputAddress2" multiple="">
								
							</div>
							<div class="form-group col-md-3">
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
						</div>
					</form>
				</p>
			</div>

		</div>

		<div class="card mb-4 col-md-12">
			<div class="card-body">
				<p class="mb-0">
					@foreach ($data_dokumentasi as $dok)
					<div class="col-md-3 text-center" style="float: left;">
						<a href="{{URL::to('/')}}/public/dokumentasi/{{$dok->gambar}}">
							<img src="{{URL::to('/')}}/public/dokumentasi/{{$dok->gambar}}" alt="tidak ada" class="text-center" style="max-height: 130px;">
						</a>
						<div style="margin: 24px 0;">
							<a href="/dokumentasi/edit/{{$dok->id}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
							<a href="/dokumentasi/hapus/{{$dok->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Akan Menghapus Data.?');"><i class="fa fa-trash"></i></a>
						</div>
					</div>	
					@endforeach
				</p>
			</div>

		</div>

	</div>
</main>

@endsection