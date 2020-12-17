@extends('admin.base-admin')
<title>Admin | Data Pendaftaran</title>
@section ('content-admin')


<main>
  <div class="container-fluid">
    <h1 class="mt-4">Tambah Data Santri</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
      <li class="breadcrumb-item active">Tambah Data Santri</li>
    </ol>
    <div class="card mb-4 col-md-12" style="float: left;">
      <div class="card-body">
        <p class="mb-0">
          <hr/>
          <form action="/add-berita/simpan" enctype="multipart/form-data" method="POST">
            {{csrf_field()}}
            <div class="form-row">
              <div class="form-group col-md-2">
                <label for="inputCity">Foto Berita</label>
                <input type="file" name="foto_berita" class="form-control" id="inputCity" required="">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">Judul Berita</label>
                <input type="text" name="judul" class="form-control" id="inputCity" required="">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">Nama yang Upload</label>
                <input type="text" name="nama" class="form-control" id="inputCity" required="">
              </div>
              <div class="form-group col-md-2">
                <label for="inputState">Tanggal Berita</label>
                <input type="datetime-local" name="tanggal" class="form-control" id="inputCity" required="">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Deskripsi 1</label>
              <textarea type="text" name="deskripsi1" class="form-control" id="inputAddress" required=""></textarea>
            </div>
            <div class="form-group">
              <label for="inputAddress">Deskripsi 2</label>
              <textarea type="text" name="deskripsi2" class="form-control" id="inputAddress"></textarea>
            </div>
            <div class="form-group">
              <label for="inputAddress">Deskripsi 3</label>
              <textarea type="text" name="deskripsi3" class="form-control" id="inputAddress"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
          </p>
        </div>
      </div>

    </div>
  </main>

  @endsection