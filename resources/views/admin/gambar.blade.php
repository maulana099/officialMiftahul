@extends('admin.base-admin')
<title>Admin | Data Message</title>
@section ('content-admin')

<main>
	<div class="container-fluid">
		<h1 class="mt-4">Data Gambar</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"><a href="/"> Dashboard </a></li>
        </ol>
        <div class="card mb-4 col-md-12">
            <p>Jika gambar di edit Perhatikan Gambar Dan Ukuran pada Web Pengguna</p>
            <div class="card-body">
                <p class="mb-0">
                    @foreach ($data_gambar as $gambar)
                    <div class="col-md-12 text-center" style="float: left;">
                        <a href="{{URL::to('/')}}/public/dokumentasi/{{$gambar->picture}}">
                            <img src="{{URL::to('/')}}/public/dokumentasi/{{$gambar->picture}}" alt="tidak ada" class="text-center" style="max-height: 100px;">
                        </a>
                        <div style="margin: 24px 0;">
                            <a href="/gambar/edit/{{$gambar->id}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                        </div>
                    </div>
                    @endforeach
                </p>
            </div>

        </div>
        
    </div>
</main>
@endsection

