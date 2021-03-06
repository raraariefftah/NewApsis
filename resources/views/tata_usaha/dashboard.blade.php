@extends('tata_usaha.dashboard_tu')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Content Header (Page header) -->
<section class="content">
    <div class="container-fluid">
        {{-- Row1 --}}
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card">
                    <div class="card-header">
                        <h4><i class="nav-icon fas fa-hand-spock pr-1"></i>Halo Rara, Selamat datang di APSIS</h4>
                    </div>
                    <!-- form start -->
                    <div class="card-body">
                        {{-- ROW 1 --}}
                        <!-- Small boxes (Stat box) -->
                        <div class="row justify-content-center">
                            {{-- pendaftar hari ini --}}
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3>150</h3>
                                        <p>Pendaftar Hari Ini</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                </div>
                            </div>
                            {{-- total pendaftar --}}
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>150</h3>
                                        <p>Total Pendaftar</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                </div>
                            </div>
                            {{-- Terverifikasi --}}
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>150</h3>
                                        <p>Terverifikasi</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-checkmark"></i>
                                    </div>
                                </div>
                            </div>
                            {{-- total pendaftar --}}
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3>150</h3>
                                        <p>Belum Verifikasi</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-close"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ROw2 --}}
        <div class="row justify-content-center">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-align:center;">Daftar Menu</h4>
                    </div>
                    <!-- form start -->
                    <div class="card-body">
                        {{-- ROW 2.1 --}}
                        <!-- Small boxes (Stat box) -->
                        <div class="row justify-content-center">
                            {{-- pendaftar hari ini --}}
                            <div class="col-lg-3 col-6">
                                <!-- card1 -->
                                <div class="card-body rounded shadow" style="background-color: rgb(120, 62, 143)">
                                    <div class="icon text-center">
                                        <img src="/img/task2.png" alt="icon" style="width: 80px;">
                                    </div>
                                    <h5 class="mt-2 text-center" style="color:rgb(255, 255, 255);">Data Pendaftar
                                        <a href="{{url('/tata_usaha/data_pendaftar')}}">
                                            <i class="fas fa-arrow-circle-right" style="color:rgb(255, 255, 255);"></i>
                                        </a>
                                    </h5>
                                </div>
                            </div>
                            {{-- Form Pendaftaran --}}
                            <div class="col-lg-3 col-6">
                                <!-- card1 -->
                                <div class="card-body rounded shadow" style="background-color: rgb(233, 160, 64)">
                                    <div class="icon text-center">
                                        <img src="/img/form3.png" alt="icon" style="width: 85px;">
                                    </div>
                                    <h5 class="mt-1 text-center" style="color:rgb(255, 255, 255);">Form Pendaftaran
                                        <a href="{{url('/hal_pendaftaran/keterangan_siswa')}}">
                                            <i class="fas fa-arrow-circle-right" style="color:rgb(255, 255, 255);"></i>
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        {{-- ROW 2.2 --}}
                        <!-- Small boxes (Stat box) -->
                        <div class="row justify-content-center mt-3">
                            {{-- Profil --}}
                            <div class="col-lg-3 col-6">
                                <!-- card1 -->
                                <div class="card-body rounded shadow" style="background-color: rgb(102, 156, 255)">
                                    <div class="icon text-center">
                                        <img src="/img/user2.png" alt="icon" style="width: 85px;">
                                    </div>
                                    <h5 class="mt-1 text-center" style="color:rgb(255, 255, 255);">Profil
                                        <a href="{{url('/tata_usaha/profil')}}">
                                            <i class="fas fa-arrow-circle-right" style="color:rgb(255, 255, 255);"></i>
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        
        <!-- /.card -->
    </div>
    <!-- /.container-fluid -->
</section>


@endsection
