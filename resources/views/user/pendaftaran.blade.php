@extends('user.base-user')
<title>Miftahul Ridwan</title>
@section ('content-user')

<section id="service">
  <div class="container">
    <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">

      <div class="row">
        <div class="col-sm-6">
          <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="form-group">
              <h3><b>SYARAT - SYARAT PENDAFTARAN :</b></h3>
            </div>         
            <ul class="address">
              <li>1. Mengisi Formulir</li>
              <li>2. Menyerahkan data Administrasi, yaitu:</li>
              <li>&nbsp;&nbsp;&nbsp;&nbsp; - Pas photo : 2x3, 3x4 (masing-masing 3 lembar)</li>                  
              <li>&nbsp;&nbsp;&nbsp;&nbsp; - Fotocopy Izajah, SKHUN, dan NISN Sekolah asal terakhir (3 lembar)</li>
              <li>&nbsp;&nbsp;&nbsp;&nbsp; - Fotocopy Akte Kelahiran (3 lembar)</li>
              <li>&nbsp;&nbsp;&nbsp;&nbsp; - Fotocopy Kartu Keluarga (3 lembar)</li>
              <li>&nbsp;&nbsp;&nbsp;&nbsp; - Fotocopy KTP Orang tua/ Wali (3 lembar)</li>
            </ul>
          </div>                           
        </div>

        <div class="col-sm-6">
          <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h3><b>CATATAN</b></h3>
            <p>Juga menerima siswa tingkat PAUD/SD dengan persyaratan :</p>
            <ul class="address">
              <li>1. Fotocopy Akte Kelahiran (3 lembar)</li>
              <li>2. Fotocopy Kartu Keluarga (3 lembar)</li>
              <li>3. Fotocopy KTP Orang tua/ Wali (3 lembar)</li>
            </ul>
            <p>
              <b>Contoh Foto Calon Santri</b><br/>
              <a href="" class="btn btn-warning">Klik Disini</a>
            </p>
          </div>
        </div>
        <hr/>
      </div>

      <div class="row">
        <br/>
        <div class="col-sm-12">

          <div class="col-sm-6">
            <hr/>
            <div class="text-center">
              <h4><b>Formulir Pendaftaran Calon Santri</b></h4>
            </div>
            <form action="/formulir/pendaftaran/" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
              <ul class="form-style-1">
                <li>
                  <label>Meneruskan KE-<span class="required">*</span></label>
                  <select name="tingkatan" class="field-long">
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMK">SMK</option>
                  </select>
                </li>
                <li>
                  <label>Nama Lengkap dan Email <span class="required">*</span></label>
                  <input type="text" name="nama" class="field-divided" placeholder="Nama Lengkap" required="" />
                  <input type="email" name="email" class="field-divided" placeholder="Email@gmail.com" required="" />
                </li>
                <li>
                  <label>Asal Sekolah <span class="required">*</span></label>
                  <input type="text" name="sekolah" class="field-long"  required="" placeholder="Asal Sekolah" required="" />
                </li>
                <li>
                  <label>Tempat dan Tanggal Lahir<span class="required">*</span></label>
                  <input type="text" name="tempat_lahir" class="field-divided" placeholder="Tempat Lahir" required="" />
                  <input type="date" name="tanggal_lahir" class="field-divided" placeholder="Tanggal Lahir" required="" />
                </li>
                <li>
                  <label>Jenis Kelamin dan Warganegara<span class="required">*</span></label>
                  <select name="jenis_kelamin" class="field-divided">
                    <option value="kosong">Jenis Kelamin</option>
                    <option value="LK">Laki Laki</option>
                    <option value="PR">Perempuan</option>
                  </select>
                  <input type="text" name="warganegara" placeholder="Kewarganegaraan" class="field-divided">
                </li>
                <li>
                  <label>Provinsi dan Kabupaten<span class="required">*</span></label>
                  <input type="text" name="provinsi" class="field-divided" placeholder="Provinsi" required="" />
                  <input type="text" name="kabupaten" class="field-divided" placeholder="Kabupaten" required="" />
                </li>
                <li>
                  <label>Alamat <span class="required">*</span></label>
                  <textarea name="alamat" id="field5" class="field-long field-textarea" placeholder="Alamat"></textarea>
                </li>
              </ul>
            </div>

            <div class="col-sm-6">
              <hr/>
              <div class="text-center">
                <h4><b>Formulir Orang Tua / Wali</b></h4>
              </div>
              <ul class="form-style-1">
                <li>
                  <label>Nama Ayah dan Ibu <span class="required">*</span></label>
                  <input type="text" name="nama_ayah" class="field-divided" placeholder="Nama Ayah" />
                  <input type="text" name="nama_ibu" class="field-divided" placeholder="Nama Ibu" />
                </li>
                <li>
                  <label>Alamat Orang Tua / Wali <span class="required">*</span></label>
                  <textarea name="alamat_ortu" id="alamat_ortu" class="field-long field-textarea"></textarea>
                </li>
                <li>
                  <label>No Hp / WhatsApp <span class="required">*</span></label>
                  <input type="number" name="no_hp" class="field-long" />
                </li>
                <li>
                  <label>Memiliki KIP dan PKH</label>
                  <select name="kip" class="field-divided">
                    <option selected disabled value="kosong">Kertu Indonesia Pintar</option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>

                  <select name="pkh" class="field-divided">
                    <option selected disabled value="kosong">Program Keluarga Harapan</option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                  </li>
                <li>
                  <label>Foto Calon Santri <span class="required">*</span></label>
                  <input type="file" name="foto" class="field-long" />
                </li>
                <br/>
                <button type="submit" class="btn btn-success btn-sm" >Submit Formulir</button>
                </ul>
              </form>
            </div>

          </div>
        </div>

      </div>
    </div>        
  </section>

  <style type="text/css">
  .form-style-1 {
    margin:10px auto;
    max-width: 400px;
    padding: 20px 12px 10px 20px;
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
  }
  .form-style-1 li {
    padding: 0;
    display: block;
    list-style: none;
    margin: 10px 0 0 0;
  }
  .form-style-1 label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
  }
  .form-style-1 input[type=text],
  .form-style-1 input[type=file], 
  .form-style-1 input[type=date],
  .form-style-1 input[type=datetime],
  .form-style-1 input[type=number],
  .form-style-1 input[type=search],
  .form-style-1 input[type=time],
  .form-style-1 input[type=url],
  .form-style-1 input[type=email],
  textarea, 
  select{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border:1px solid #BEBEBE;
    padding: 7px;
    margin:0px;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;  
  }
  .form-style-1 input[type=text]:focus, 
  .form-style-1 input[type=file]:focus, 
  .form-style-1 input[type=date]:focus,
  .form-style-1 input[type=datetime]:focus,
  .form-style-1 input[type=number]:focus,
  .form-style-1 input[type=search]:focus,
  .form-style-1 input[type=time]:focus,
  .form-style-1 input[type=url]:focus,
  .form-style-1 input[type=email]:focus,
  .form-style-1 textarea:focus, 
  .form-style-1 select:focus{
    -moz-box-shadow: 0 0 8px #88D5E9;
    -webkit-box-shadow: 0 0 8px #88D5E9;
    box-shadow: 0 0 8px #88D5E9;
    border: 1px solid #88D5E9;
  }
  .form-style-1 .field-divided{
    width: 49%;
  }

  .form-style-1 .field-long{
    width: 100%;
  }
  .form-style-1 .field-select{
    width: 100%;
  }
  .form-style-1 .field-textarea{
    height: 100px;
  }
  .form-style-1 input[type=submit], .form-style-1 input[type=button]{
    background: #4B99AD;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
  }
  .form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
  }
  .form-style-1 .required{
    color:red;
  }
</style>

@endsection