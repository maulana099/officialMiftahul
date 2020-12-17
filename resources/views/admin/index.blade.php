@extends('admin.base-admin')
<title>Admin| Dashboard</title>
@section ('content-admin')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">200</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">Jumlah Seluruh Santri</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-dark text-white mb-4">
                    <div class="card-body">45</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">Jumlah Santri SD</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">45</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">Jumlah Santri SMP</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">45</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">Jumlah Santri SMK</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area mr-1"></i>
                        Area Chart Example
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar mr-1"></i>
                        Bar Chart Example
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div> -->
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
                                    <span style="background-color: red; padding: 2px 6px 2px 6px; border-radius: 5px; color: white; font-size: 12px;">{{$santri->status}}</span>
                                    @endif
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
