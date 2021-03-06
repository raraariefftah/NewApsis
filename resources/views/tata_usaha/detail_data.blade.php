@extends('tata_usaha.dashboard_tu')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Detail Data Pendaftar</h1>
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
                            <a href="{{url('/tata_usaha/data_pendaftar')}}">
                                <i class="nav-icon fas fa-arrow-left pr-1" style="color: black"></i></a>
                            <!-- /.card-tools -->
                        </div>
                        {{-- <div class="card-body"> --}}
                        <!-- form start -->
                        {{-- <form class="form-horizontal"> --}}
                        <div class="card-body">
                            {{-- button --}}
                            <div class="row mb-3 justify-content-end">
                                {{-- <div class="col-auto ml-auto">
                                    <a type="button" class="btn btn-warning" href="#"><i
                                            class="nav-icon fas fa-edit pr-1">
                                        </i>Edit</a>
                                </div> --}}
                                <div class="col-md-10 ">
                                    <a type="button" class="btn btn-danger float-right "
                                        style="background-color: rgb(136, 23, 19)"
                                        href="{{ url('tata_usaha/cetak') }}"><i class="nav-icon fas fa-print pr-1">
                                        </i>Cetak</a>
                                </div>
                            </div>

                            {{-- picture --}}
                            <div class="row mt-2 mb-4 justify-content-center">
                                <div class="col-lg-2">
                                    <img src="/img/user3.png" class="" style="width: 150px;" alt="foto">
                                    <h5 class="ml-4 pl-1 mt-3">2021/2022</h5>
                                    <span class="badge badge-success ml-4 mt-1 pl-2 pr-2 pt-2 pb-2">TERVERIFIKASI
                                    </span>
                                </div>
                            </div>

                            {{-- collapse--}}
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h4 class="mb-0 card-title">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="false"
                                                aria-controls="collapseOne">
                                                Keterangan Siswa
                                            </button>
                                        </h4>
                                        {{-- button edit --}}
                                        <div class="card-tools">
                                            <a href="{{url('/detail_data/edit_keterangan_siswa')}}" class="btn mr-2">
                                                <i class="nav-icon fas fa-edit pr-1"></i></a>
                                        </div>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="container">
                                            <div class="card-body">
                                                <table class="table table-sm table-hover text-gray-400">
                                                    <tbody>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Nomor Pendaftaran:
                                                            </td>
                                                            <td> ... </td>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Nomor Induk Siswa
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Nama Lengkap
                                                            </td>
                                                            <td> ... </td>
                                                        <tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Jenis Kelamin
                                                            </td>
                                                            <td> ... </td>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                NISN
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Tempat, Tanggal Lahir
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Agama
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Kewarganegaraan
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Suku
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Anak ke
                                                            </td>
                                                            <td> 3 dari 5 bersaudara </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Status Siswa
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Riwayat Beasiswa
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                {{-- kosong --}}
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Catatan Prestasi
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                {{-- kosong --}}
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Jenis Tinggal
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Jarak Ke Sekolah
                                                            </td>
                                                            <td> ... km </td>
                                                        </tr>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Alat Transportasi Ke Sekolah
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Golongan Darah
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Tinggi
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Berat
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Kelainan Jasmani
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Pendidikan Sebelumnya
                                                            </td>
                                                            <td> a. Lulusan dari : </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                {{-- kosong --}}
                                                            </td>
                                                            <td> b. Tanggal : </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                {{-- kosong --}}
                                                            </td>
                                                            <td> c. No. STTB : </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Kegemaran
                                                            </td>
                                                            <td> kesenian, olahraga, Organisasi/Lainnya</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Pindahan
                                                            </td>
                                                            <td> a. Dari Sekolah : </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                {{-- kosong --}}
                                                            </td>
                                                            <td> b. Alasan Pindah : </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                {{-- kosong --}}
                                                            </td>
                                                            <td> c. Diterima di sekolah di kelas ...
                                                                Tanggal .... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Alamat
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                {{-- kosong --}}
                                                            </td>
                                                            <td> Kelurahan/Desa ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                {{-- kosong --}}
                                                            </td>
                                                            <td> Kecamatan ..., Kab/Kota ..., Provinsi
                                                                ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">

                                                            </td>
                                                            <td> Kode Pos ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Nomor Telepon
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Nomor HP
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h4 class="mb-0 card-title">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="true"
                                                aria-controls="collapseTwo">
                                                Keterangan Orang Tua
                                            </button>
                                        </h4>
                                        {{-- button edit --}}
                                        <div class="card-tools">
                                            <a href="{{url('/detail_data/edit_keterangan_ortu')}}" class="btn mr-2">
                                                <i class="nav-icon fas fa-edit pr-1"></i></a>
                                        </div>
                                    </div>

                                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="container">
                                            <div class="card-body">
                                                <table class="table table-sm table-hover text-gray-400">
                                                    <tbody>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Nama Ayah
                                                            </td>
                                                            <td> ... </td>
                                                        <tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Tempat, Tanggal Lahir
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Agama
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Kewarganegaraan
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Suku
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Pendidikan
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Pekerjaan
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Penghasilan/bulan
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Alamat
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Nomor Telepon Rumah
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Nomor HP
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                {{-- kosong --}} <br>
                                                            </td>
                                                            <td> </td>
                                                        </tr>

                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Nama Ibu
                                                            </td>
                                                            <td> ... </td>
                                                        <tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Tempat, Tanggal Lahir
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Agama
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Kewarganegaraan
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Suku
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Pendidikan
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Pekerjaan
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Penghasilan/bulan
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Alamat
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Nomor Telepon Rumah
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Nomor HP
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h4 class="mb-0 card-title">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="true"
                                                aria-controls="collapseThree">
                                                Keterangan Wali
                                            </button>
                                        </h4>
                                        <div class="card-tools">
                                            <a href="{{url('/detail_data/edit_keterangan_wali')}}" class="btn mr-2">
                                                <i class="nav-icon fas fa-edit pr-1"></i></a>
                                        </div>
                                    </div>

                                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="container">
                                            <div class="card-body">
                                                <table class="table table-sm table-hover text-gray-400">
                                                    <tbody>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Nama
                                                            </td>
                                                            <td> ... </td>
                                                        <tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Hubungan dengan siswa
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Alamat
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Nomor Telepon Rumah
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="500px" style="font-weight: bold; ">
                                                                Nomor HP
                                                            </td>
                                                            <td> ... </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>






                        </div>
                        {{-- </form> --}}
                        {{-- </div> --}}
                        <!-- /.card-body -->
                        {{-- <div class="card-footer">
                            <button type="submit" class="btn btn-success mr-2">Ubah Profil</button>
                            <a href="/tata_usaha/data_pendaftar" class="btn btn-danger mr-2">Kembali</a>
                            <button type="submit" class="btn btn-success mr-2" onclick="return confirm('Apakah kamu yakin?')">Ubah</button>
                            <a href="/home" class="btn btn-success">Selesai</a>
                        </div> --}}
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>

@endsection
