@extends('form_pendaftaran.hal_pendaftaran')

@section('content')
{{-- Keterangan Wali --}}
<div class="container">
    <div class="row">
        <!-- left column -->
        <div class="col-md">
            <!-- general form elements -->
            <div class="card card-light">
                <div class="card-header">
                    <h3 class="card-title" style="font-weight: bold; ">C. KETERANGAN WALI</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal">
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
                        <a href="/hal_pendaftaran/keterangan_ortu" class="btn btn-danger mr-2">Kembali</a>
                        <a href="/tata_usaha/dashboard" class="btn btn-success">Selesai</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>

@endsection
