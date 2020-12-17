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
    <div class="col-md-12">
      <div class="card mb-4 col-md-6" style="float: left;">
        <div class="card-body">
          <p class="mb-0">
            <h4 class="text-center">Formulir Calon Santri</h4>
            <hr/>
            <form action="/add-pendaftaran/simpan" enctype="multipart/form-data" method="POST">
              {{csrf_field()}}
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputAddress2">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="inputAddress2" placeholder="Nama Lengkap" required="" >
                </div>
                <div class="form-group col-md-6">
                  <label for="inputAddress2">Alamat Email</label>
                  <input type="email" name="email" class="form-control" id="inputAddress2" placeholder="Alamat Email" required="" >
                </div>
              </div>
              <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Meneruskan Ke</label>
                <select class="custom-select" id="validationDefault04" name="tingkatan" required="" >
                    <option selected disabled value="meneruskan ke">Meneruskan Ke-</option>
                    <option value="SD">Sekolah Dasar</option>
                    <option value="SMP">Sekolah Menengah Pertama</option>
                    <option value="SMK">Sekolah Menengah Kejuaruan</option>
                  </select>
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
              
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputCity">Kewarganegaraan</label>
                  <input type="text" name="warganegara" class="form-control" id="inputCity" required="" >
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">Provinsi</label>
                  <input type="text" name="provinsi" class="form-control" id="inputCity" required="" >
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">Kabupaten</label>
                  <input type="text" name="kabupaten" class="form-control" id="inputCity" required="" >
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">Alamat</label>
                <textarea type="text" name="alamat" class="form-control" id="inputAddress" required="" ></textarea>
              </div>
            <!-- <button type="submit" class="btn btn-primary">Simpan</button>
            </form> -->
          </p>
        </div>
      </div>

      <div class="card mb-4 col-md-6">
        <div class="card-body">
          <p class="mb-0">
            <h4 class="text-center">Formulir Ortu / Wali</h4>
            <hr/>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputAddress2">Nama Ayah</label>
                <input type="text" name="nama_ayah" class="form-control" id="inputAddress2" placeholder="Nama Ayah" required="" >
              </div>
              <div class="form-group col-md-6">
                <label for="inputAddress2">Nama Ibu</label>
                <input type="text" name="nama_ibu" class="form-control" id="inputAddress2" placeholder="Nama Ibu" required="" >
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Alamat Ortu / Wali</label>
              <textarea type="text" name="alamat_ortu" class="form-control" id="inputAddress" required="" ></textarea>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">No Hp / WA</label>
                <input type="number" name="no_hp" class="form-control" id="inputCity" required="" >
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">Memiliki KIP</label>
                <select class="custom-select" id="validationDefault04" name="kip">
                  <option selected disabled value="kosong">----</option>
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4">Memiliki PKH</label>
                <select class="custom-select" id="validationDefault04" name="pkh">
                  <option selected disabled value="kosong">----</option>
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputAddress2">Foto Calon Santri</label>
                <input type="file" name="foto" class="form-control" id="inputAddress2" required="" >
              </div>
              <div class="form-group col-md-6">
                <label for="inputAddress2" style="color: red;">* Gunakan Foto Formal</label>
                <a href="{{ URL::asset('public/document/Dok baru 2020-06-04 16.20.01.pdf')}}">
                  <p>Klik Untuk Melihat Sample Foto</p>
                </a>
              </div>
            </div>
            <hr/>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </p>
      </div>
    </div>

  </div>

</div>
</main>

@endsection