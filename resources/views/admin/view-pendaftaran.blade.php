@extends('admin.base-admin')
<title>Admin | View Pendaftaran</title>
@section ('content-admin')

<main>
	<div class="container-fluid">
		<br/>
        <!-- <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol> -->
        <div class="card mb-4">
        	<div class="card-header">
        		<i class="fas fa-user mr-1"></i>
               {{$data_pendaftaran->nama}}
           </div>
           <div class="card mb-4 col-md-12">
            <div class="card-body">
                <p class="mb-0">
                    <form action="/data-pendaftaran/update/status/{{$data_pendaftaran->id}}" enctype="multipart/form-data" method="POST">
                        {{csrf_field()}}
                        <div class="form-row" style="float: left;">
                            <div class="form-group col-md-4">
                                <a href="{{ URL::to('/')}}/public/foto-santri/{{$data_pendaftaran->foto}}">
                                    <img src="{{ URL::to('/')}}/public/foto-santri/{{$data_pendaftaran->foto}}" width="250" style="border: 1px solid #D3D3D3; ; border-radius: 3px; padding: 5px;">
                                </a>
                                <input type="hidden" name="photo" value="{{$data_pendaftaran->foto}}">
                            </div>
                        </div>
                        <div class="form-row">                          
                            <div class="form-group col-md-2">
                                <p>Nama Lengkap</p>
                            </div>
                            <div class="form-group col-md-1">
                                <p>:</p>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="hidden" name="nama" value="{{$data_pendaftaran->nama}}">
                                <p><b>{{$data_pendaftaran->nama}}</b></p>
                            </div>

                            <div class="form-group col-md-2">
                                <p>Asal Sekolah</p>
                            </div>
                            <div class="form-group col-md-1">
                                <p>:</p>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="hidden" name="sekolah" value="{{$data_pendaftaran->sekolah}}">
                                <p><b>{{$data_pendaftaran->sekolah}}</b></p>
                            </div>
                        </div>

                        <div class="form-row">                          
                            <div class="form-group col-md-2">
                                <p>Tempat Lahir</p>
                            </div>
                            <div class="form-group col-md-1">
                                <p>:</p>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="hidden" name="tempat_lahir" value="{{$data_pendaftaran->tempat_lahir}}">
                                <p><b>{{$data_pendaftaran->tempat_lahir}}</b></p>
                            </div>

                            <div class="form-group col-md-2">
                                <p>Tanggal Lahir</p>
                            </div>
                            <div class="form-group col-md-1">
                                <p>:</p>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="hidden" name="tanggal_lahir" value="{{$data_pendaftaran->tanggal_lahir}}">
                                <p><b>{{$data_pendaftaran->tanggal_lahir}}</b></p>
                            </div>
                        </div>

                        <div class="form-row">                          
                            <div class="form-group col-md-2">
                                <p>Jenis Kelamin</p>
                            </div>
                            <div class="form-group col-md-1">
                                <p>:</p>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="hidden" name="jenis_kelamin" value="{{$data_pendaftaran->jenis_kelamin}}">
                                <p><b>{{$data_pendaftaran->jenis_kelamin}}</b></p>
                            </div>

                            <div class="form-group col-md-2">
                                <p>Alamat</p>
                            </div>
                            <div class="form-group col-md-1">
                                <p>:</p>
                            </div>
                            <div class="form-group col-md-2">
                                <input type="hidden" name="alamat" value="{{$data_pendaftaran->alamat}}">
                                <p><b>{{$data_pendaftaran->alamat}}</b></p>
                            </div>
                        </div>

                        <div class="form-row">                          
                            <div class="form-group col-md-2">
                                <p>Nama Ayah</p>
                            </div>
                            <div class="form-group col-md-1">
                                <p>:</p>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="hidden" name="nama_ayah" value="{{$data_pendaftaran->nama_ayah}}">
                                <p><b>{{$data_pendaftaran->nama_ayah}}</b></p>
                            </div>

                            <div class="form-group col-md-2">
                                <p>No Handphone</p>
                            </div>
                            <div class="form-group col-md-1">
                                <p>:</p>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="hidden" name="no_hp" value="{{$data_pendaftaran->no_hp}}">
                                <p><b>{{$data_pendaftaran->no_hp}}</b></p>
                            </div>

                            <div class="form-group col-md-2">
                                <p>Tingkatan Sekolah</p>
                            </div>
                            <div class="form-group col-md-1">
                                <p>:</p>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="hidden" name="tingkatan" value="{{$data_pendaftaran->tingkatan}}">
                                <p><b>{{$data_pendaftaran->tingkatan}}</b></p>
                            </div>

                            <div class="form-group col-md-2">
                                <p>Status</p>
                            </div>
                            <div class="form-group col-md-1">
                                <p>:</p>
                            </div>
                            <div class="form-group col-md-3">
                                <select class="custom-select" id="validationDefault04" name="status">
                                    <option value="{{$data_pendaftaran->status}}">{{$data_pendaftaran->status}}</option>
                                    <option value="Active">Active</option>
                                    <option value="Tidak Active">Tidak Active</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success col-md-9">SUBMIT STATUS</button>
                    </form>
                </p>
            </div>

        </div>
    </div>
</div>
</main>
@endsection