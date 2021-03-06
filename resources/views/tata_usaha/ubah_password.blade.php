@extends('tata_usaha.dashboard_tu')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 justify-content-md-center">
            <div class="col-md-7">
                <h1>Ubah Password</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

{{-- Profil --}}
<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <!-- left column -->
            <div class="col-md-7">
                <!-- general form elements -->
                <div class="card">
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="exampleInputNama" class="col-sm-3 col-form-label">Password Baru</label>
                                <div class="col-sm-9">
                                    <input name="newpassword" type="password" class="form-control">
                                    {{-- value="{{ old('newpassword') }}"> --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputNama" class="col-sm-3 col-form-label">Konfirmasi
                                    Password</label>
                                <div class="col-sm-9">
                                    <input name="confirmnewpassword" type="password" class="form-control">
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="exampleInputNama" class="col-sm-3 col-form-label">Password Lama</label>
                                <div class="col-sm-9">
                                    <input name="password" type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="{{url('/tata_usaha/dashboard')}}" class="btn btn-danger mr-2">Kembali</a>
                            <button type="submit" class="btn btn-success mr-2">Ubah</button>
                            {{-- <button type="submit" class="btn btn-success mr-2" onclick="return confirm('Apakah kamu yakin?')">Ubah</button> --}}
                            {{-- <a href="/home" class="btn btn-success">Selesai</a> --}}
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>

@endsection
