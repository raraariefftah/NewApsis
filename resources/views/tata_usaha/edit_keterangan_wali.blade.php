@extends('tata_usaha.dashboard_tu')

@section('content')
{{-- Keterangan Siswa --}}
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Keterangan Wali</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

{{-- Profil --}}
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card">
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="card-header">
                            <a href="/tata_usaha/detail_data">
                                <i class="nav-icon fas fa-arrow-left pr-1" style="color: black"></i></a>
                        </div>
                        <div class="card-body">
                            {{-- 1 --}}
                            <div class="form-group row">
                                <label for="inputNama" class="col-md-3 col-form-label">1. Nama</label>
                                <div class=" col-md-9">
                                    <input type="text" class="form-control" id="inputNama" placeholder="Nama">
                                </div>
                            </div>

                            {{-- 2 --}}
                            <div class="form-group row">
                                <label for="inputHub" class="col-md-3 col-form-label">2. Hubungan dengan Siswa</label>
                                <div class="col-md-9 ">
                                    <input type="text" class="form-control" id="inputHub"
                                        placeholder="Hubungan dengan Siswa">
                                </div>
                            </div>

                            {{-- 3 --}}
                            <div class="form-group row">
                                <label for="inputAlamat" class="col-md-3 col-form-label">3. Alamat</label>
                                <div class=" col-md-9">
                                    <input type="text" class="form-control" id="inputAlamat" placeholder="Alamat">
                                </div>
                            </div>

                            {{-- 4 --}}
                            <div class="form-group row">
                                <label for="inputTelpRumah" class="col-md-3 col-form-label">4. No. Telepon Rumah</label>
                                <div class=" col-md-4">
                                    <input type="text" class="form-control" id="inputTelpRumah"
                                        placeholder="No. Telepon Rumah">
                                </div>
                                <label for="inputHP" class="col-md-1 col-form-label pl-4">No. HP</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="inputHP" placeholder="HP">
                                </div>
                            </div>
                        </div>


                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="{{url('/tata_usaha/detail_data')}}" class="btn btn-danger mr-2">Batal</a>
                            <button type="submit" class="btn btn-success mr-2">Selesai</button>
                        </div>
                        <!-- /.card-footer -->
                        {{-- </form> --}}
                        {{-- </div> --}}
                        <!-- /.card-body -->

                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>


@endsection
