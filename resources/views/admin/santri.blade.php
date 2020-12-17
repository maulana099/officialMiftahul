@extends('admin.base-admin')
<title>Admin | Data Santri</title>
@section ('content-admin')

<main>
    <div class="container-fluid">
        <!-- <button type="button" class="mt-4" class="btn btn-primary btn-sm">Tambah Data Pendaftaran</button> -->
        <a href="/tambah/data-santri" class="btn btn-primary mt-4 mb-4" type="submit" style="color: white;">Tambah Data Santri</a>
        <br/>
        <!-- <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol> -->
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Data Table Santri
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead style="background-color: #28a745; color: white;">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Foto</th>
                                <th>Tingkatan</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>No Hp Ortu</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php $no = 0; ?>
                        @foreach ($data_santri as $santri)
                        <?php $no++;  ?>
                        <tbody>
                            <tr class="text-center">
                                <td>{{$no}}</td>
                                <td>
                                    <a href="{{URL::to('/')}}/public/foto-santri/{{$santri->photo}}">
                                        <img src="{{URL::to('/')}}/public/foto-santri/{{$santri->photo}}" width="35">
                                    </a>
                                </td>
                                <td>{{$santri->tingkatan}}</td>
                                <td>{{$santri->nama}}</td>
                                <td>{{$santri->jenis_kelamin}}</td>
                                <td>{{$santri->tanggal_lahir}}</td>
                                <td>{{$santri->no_hp}}</td>
                                <td>
                                    @if ($santri->status === 'Active')
                                    <span style="background-color: green; padding: 2px 6px 3px 6px; border-radius: 5px; color: white; font-size: 12px;">{{$santri->status}}</span>
                                    @elseif ($santri->status === 'Tidak Active')
                                    <span style="background-color: #ea5e5e; padding: 2px 6px 2px 6px; border-radius: 5px; color: white; font-size: 12px;">{{$santri->status}}</span>
                                    @endif
                                </td>
                                <td>
                                    <!-- <a href="/data-santri/view/{{$santri->id}}" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a> -->
                                    <a href="/edit/data-santri/{{$santri->id}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="/hapus/data-santri/{{$santri->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Akan Menghapus Data Ini');"><i class="fa fa-trash"></i></a>
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

