@extends('admin.base-admin')
<title>Admin | Data Message</title>
@section ('content-admin')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Data Contact Message</h1>
        <!-- <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol> -->
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Data Table Message
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead style="background-color: green; color: white;">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Pesan Komentar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php $no = 0; ?>
                        @foreach ($data_message as $message)
                        <?php $no++;  ?>
                        <tbody>
                            <tr class="text-center">
                                <td>{{$no}}</td>
                                <td>{{$message->nama}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{$message->subject}}</td>
                                <td>{{$message->pesan}}</td>
                                <td>
                                    <a href="/data-message/hapus/{{$message->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Akan Menghapus Data.?');"><i class="fa fa-trash"></i>
                                    </a>
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

