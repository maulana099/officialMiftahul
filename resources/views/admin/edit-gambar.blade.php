@extends('admin.base-admin')
<title>Admin | Dokumentasi</title>
@section ('content-admin')

<main>
	<div class="container-fluid">
		<h1 class="mt-4">Edit Gambar</h1>
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
			<li class="breadcrumb-item active">Gambar</li>
		</ol>
		<div class="card mb-4 col-md-12">
			<div class="card-body">
				<p class="mb-0">
					<hr/>
					<form action="/gambar/update/{{$data_gambar->id}}" enctype="multipart/form-data" method="post">
						{{csrf_field()}}
						<div class="form-row">
							<div class="form-group col-md-2">
								<label for="inputAddress2">Gambar</label>
							</div>
							<div class="form-group col-md-7">
								<input type="file" name="picture" class="form-control" id="inputAddress2">
								
							</div>
							<div class="form-group col-md-3">
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
						</div>
					</form>
				</p>
			</div>

		</div>
	</div>
</main>

@endsection