@extends('admin.dashboard_admin')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 justify-content-md-center">
            <div class="col-md-8">
                <h1>Tambah User</h1>
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
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="card">
                    <!-- form start -->
                    <form action="#" class="form-horizontal">
                        <div class="card-body">
                            {{-- 1 --}}
                            <div class="form-group row">
                                <label for="inputNama" class="col-md-3 col-form-label">1. Nama</label>
                                <div class=" col-md-9">
                                    <input type="text" name="nama" class="form-control" id="inputNama"
                                        placeholder="Nama">
                                </div>
                            </div>

                            {{-- 2 --}}
                            <div class="form-group row">
                                <label for="inputAlamat" class="col-md-3 col-form-label">2. Role</label>
                                <div class=" col-md-9">
                                    <select class="form-control select2" name="role" data-placeholder="Pilih">
                                        <option selected>Pilih</option>
                                        <option>Tata Usaha</option>
                                        <option>Admin</option>
                                    </select>
                                </div>
                            </div>

                            {{-- 3 --}}
                            <div class="form-group row">
                                <label for="inputEmail" class="col-md-3 col-form-label">3. Email</label>
                                <div class=" col-md-9">
                                    <input type="text" name="email" class="form-control" id="inputEmail"
                                        placeholder="Email">
                                </div>
                            </div>

                            {{-- 4 --}}
                            <div class="form-group row">
                                <label for="inputPassword" class="col-md-3 col-form-label">4. Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control" id="inputPassword"
                                        placeholder="Password">
                                </div>
                            </div>

                            {{-- 5 --}}
                            <div class="form-group row">
                                <label for="inputPassword" class="col-md-3 col-form-label">5. Konfirmasi Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control" id="inputPassword"
                                        placeholder="KonfirmasiPassword">
                                </div>
                            </div>

                            {{-- 6 --}}
                            <div class="form-group row">
                                <label for="inputAlamat" class="col-md-3 col-form-label">6. Alamat</label>
                                <div class=" col-md-9">
                                    <input type="text" name="alamat" class="form-control" id="inputAlamat"
                                        placeholder="Alamat">
                                </div>
                            </div>

                            {{-- 7 --}}
                            <div class="form-group row">
                                <label for="inputNoHP" class="col-md-3 col-form-label">7. No HP</label>
                                <div class=" col-md-9">
                                    <input type="text" name="no_hp" class="form-control" id="inputNoHP"
                                        placeholder="No HP">
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="#" class="btn btn-danger mr-2">Kembali</a>
                            <button type="submit" class="btn btn-success mr-2">Tambah</button>
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
