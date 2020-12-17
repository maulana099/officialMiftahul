@extends('admin.base-admin')
<title>Admin | Data Message</title>
@section ('content-admin')

<main>
	<div class="container-fluid">
		<h1 class="mt-4">Data Gambar</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"><a href="/"> Dashboard </a></li>
        </ol>

        <!-- <form action="/add-gambar/simpan" enctype="multipart/form-data" method="post">
            {{csrf_field()}}
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputAddress2">Gambar</label>
                </div>
                <div class="form-group col-md-7">
                    <input type="file" name="picture" class="form-control" id="inputAddress2" multiple="">

                </div>
                <div class="form-group col-md-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form> -->
        
        <div class="card mb-4 col-md-12">
            <div class="card-body">
                <p class="mb-0">
                    @foreach ($data_gambar as $gambar)
                    <div class="col-md-6 text-center" style="float: left;">
                        <a href="{{URL::to('/')}}/public/dokumentasi/{{$gambar->picture}}">
                            <img src="{{URL::to('/')}}/public/dokumentasi/{{$gambar->picture}}" alt="tidak ada" class="text-center" style="max-height: 300px;">
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

