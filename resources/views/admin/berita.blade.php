@extends('admin.base-admin')
<title>Admin | View Pendaftaran</title>
@section ('content-admin')

<main>
	<div class="container-fluid">
		<a href="/add/berita-acara" class="btn btn-primary mt-4 mb-4" style="color: white;">Tambah Berita</a>
        <br/>
        <!-- <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol> -->
        <div class="card mb-4">
        	<div class="card-header">
        		<i class="fas fa-camera mr-1"></i>
        		 Berita Acara
        	</div>
        	<!-- isi -->
        </div>

        <div class="card mb-4 col-md-12">
            <div class="card-body">
                <p class="mb-0">
                    @foreach ($data_berita as $berita)
                    <div class="col-md-3 text-center" style="float: left;">
                        <a href="{{URL::to('/')}}/public/dokumentasi/{{$berita->foto_berita}}">
                            <img src="{{URL::to('/')}}/public/dokumentasi/{{$berita->foto_berita}}" alt="tidak ada" class="text-center" style="max-height: 130px;">
                        </a>
                        <div style="margin: 24px 0;">
                            <p>{{$berita->judul}}</p>
                            <p>{{$berita->tanggal}}</p>
                            <p>{{$berita->nama}}</p>
                            <a href="/edit/berita-acara/{{$berita->id}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="/hapus/berita-acara/{{$berita->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Akan Menghapus Data.?');"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>  
                    @endforeach
                </p>
            </div>

        </div>

    </div>
</main>
@endsection