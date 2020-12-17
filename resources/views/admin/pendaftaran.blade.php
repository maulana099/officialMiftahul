@extends('admin.base-admin')
<title>Admin | Data Pendaftaran</title>
@section ('content-admin')

<main>
    <div class="container-fluid">
        <!-- <button type="button" class="mt-4" class="btn btn-primary btn-sm">Tambah Data Pendaftaran</button> -->
        <a href="/add-pendaftaran" class="btn btn-primary mt-4 mb-4" type="submit" style="color: white;">Tambah Data Pendaftaran</a>
        <br/>
        <!-- <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol> -->
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Data Table Pendaftaran
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead style="background-color: #28a745; color: white;">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Kabupaten</th>
                                <th>No Hp Ortu</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php $no = 0; ?>
                        @foreach ($data_pendaftaran as $daftar)
                        <?php $no++;  ?>
                        <tbody>
                            <tr class="text-center">
                                <td>{{$no}}</td>
                                <td>
                                    <a href="{{URL::to('/')}}/public/foto-santri/{{$daftar->foto}}">
                                        <img src="{{URL::to('/')}}/public/foto-santri/{{$daftar->foto}}" width="40">
                                    </a>
                                </td>
                                <td>{{$daftar->nama}}</td>
                                <!-- <td>{{$daftar->sekolah}}</td> -->
                                <td>{{$daftar->jenis_kelamin}}</td>
                                <td>{{$daftar->tanggal_lahir}}</td>
                                <td>{{$daftar->kabupaten}}</td>
                                <td>{{$daftar->no_hp}}</td>
                                <td>
                                    @if ($daftar->status === 'Calon Santri')
                                    <span style="background-color: #1f4068; padding: 2px 5px 2px 5px; border-radius: 5px; color: white; font-size: 12px;">{{$daftar->status}}</span>
                                    @elseif ($daftar->status === 'Active')
                                    <span style="background-color: green; padding: 2px 5px 2px 5px; border-radius: 5px; color: white; font-size: 12px;">{{$daftar->status}}</span>
                                    @elseif ($daftar->status === 'Tidak Active')
                                    <span style="background-color: #ea5e5e ; padding: 2px 5px 2px 5px; border-radius: 5px; color: white; font-size: 12px;">{{$daftar->status}}</span>
                                    @endif
                                </td>
                                    <td>
                                        <a href="/data-pendaftaran/view/{{$daftar->id}}" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
                                        <a href="/data-pendaftaran/edit/{{$daftar->id}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="/data-pendaftaran/hapus/{{$daftar->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Akan Menghapus Data Ini');"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection

