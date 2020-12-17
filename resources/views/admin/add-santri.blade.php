@extends('admin.base-admin')
<title>Admin | Data Santri</title>
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
            <h4 class="text-center">Tambah Data Santri</h4>
            <hr/>
            <form action="/add/data-santri" enctype="multipart/form-data" method="POST">
              {{csrf_field()}}
              <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="inputState">Tingkatan</label>
                  <select class="custom-select" id="validationDefault04" name="tingkatan">
                    <option selected disabled value="tidak di isi">----</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMK">SMK</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputAddress2">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="inputAddress2" placeholder="Nama Lengkap" required="" >
                </div>
              <div class="form-group col-md-6">
                <label for="inputCity">Asal Sekolah</label>
                <input type="text" name="sekolah" class="form-control" id="inputCity" required="" >
              </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="inputCity">Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" class="form-control" id="inputCity" required="" >
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">Tanggal Lahir</label>
                  <input type="date" name="tanggal_lahir" class="form-control" id="inputCity" required="" >
                </div>
                <div class="form-group col-md-3">
                  <label for="inputPassword4">Jenis Kelamin</label>
                  <select class="custom-select" id="validationDefault04" name="jenis_kelamin" required="" >
                    <option selected disabled value="Jenis Kelamin">Jenis Kelamin</option>
                    <option value="LK">Laki Laki</option>
                    <option value="PR">Perempuan</option>
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <label for="inputAddress">Alamat</label>
                <textarea type="text" name="alamat" class="form-control" id="inputAddress" required="" ></textarea>
              </div>

              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputCity">Nama Orang Tua / Wali</label>
                  <input type="text" name="nama_ayah" class="form-control" id="inputCity" required="" >
                </div>
                <div class="form-group col-md-4">
                  <label for="inputCity">No Hp Orang Tua / Wali</label>
                  <input type="number" name="no_hp" class="form-control" id="inputCity" >
                </div>
                <div class="form-group col-md-2">
                  <label for="inputState">Status Santri</label>
                  <select class="custom-select" id="validationDefault04" name="status" >
                    <option selected disabled value="tidak di isi">Active</option>
                    <option value="Active">Active</option>
                    <option value="Tidak Active">Tidak Active</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="inputState">Foto Santri</label>
                  <input type="file" name="photo" class="form-control" id="inputCity" >
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
          </p>
        </div>
      </div>


  </div>
</main>

@endsection