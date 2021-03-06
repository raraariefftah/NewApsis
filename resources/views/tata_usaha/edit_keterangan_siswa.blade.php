@extends('tata_usaha.dashboard_tu')

@section('content')
{{-- Keterangan Siswa --}}
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Keterangan Siswa</h1>
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
                            <div class="form-group row">
                                <label for="inputNoinduk" class="col-md-2 col-form-label">Nomor induk
                                    Siswa</label>
                                <div class=" col-md-4">
                                    <input type="text" class="form-control" id="inputNoinduk"
                                        placeholder="Nomor induk Siswa">
                                </div>
                                <label for="inputNopendaftaran" class="col-md-2 col-form-label">Nomor
                                    Pendaftaran</label>
                                <div class=" col-md-4">
                                    <input type="text" class="form-control" id="inputNopendaftaran"
                                        placeholder="Nomor Pendaftaran">
                                </div>
                            </div>
                            <hr>
                            {{-- 1 --}}
                            <div class="form-group row">
                                <label for="inputNamaLengkap" class="col-md-2 col-form-label">1. Nama
                                    Lengkap</label>
                                <div class=" col-md-4">
                                    <input type="text" class="form-control" id="inputNamaLengkap"
                                        placeholder="Nama Lengkap">
                                </div>

                                <label for="inputNamaLengkap" class="col-md-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-md-1">
                                    <div class="form-check pt-1">
                                        <input type="checkbox" class=" form-check-input" id="exampleCheck2">
                                        <label class="form-check-label" for="exampleCheck2">Laki-laki</label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-check pt-1">
                                        <input type="checkbox" class="form-check-input " id="exampleCheck2">
                                        <label class="form-check-label" for="exampleCheck2">Perempuan</label>
                                    </div>
                                </div>
                            </div>

                            {{-- 2 --}}
                            <div class="form-group row">
                                <label for="inputNISN" class="col-md-2 col-form-label">2. NISN</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="inputNISN" placeholder="NISN">
                                </div>
                                <label for="inputNIK" class="col-md-2 col-form-label">NIK</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="inputNIK" placeholder="NIK">
                                </div>
                            </div>

                            {{-- 3 --}}
                            <div class="form-group row">
                                <label for="inputTTL" class="col-md-2 col-form-label ">3. Tempat Lahir</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="inputTTL" placeholder="Tempat Lahir">
                                </div>
                                <label for="inputTTL" class="col-md-2 col-form-label ">Tanggal Lahir</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" data-inputmask-alias="datetime"
                                            data-inputmask-inputformat="dd/mm/yyyy" data-mask placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                            </div>

                            {{-- 4 --}}
                            <div class="form-group row">
                                <label for="inputNS" class="col-md-2 col-form-label">4. Agama</label>
                                <div class="col-md-4">
                                    <select class="form-control select2" data-placeholder="Pilih">
                                        <option selected>Pilih</option>
                                        <option>Islam</option>
                                        <option>Kristen Protestan</option>
                                        <option>Khatolik</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
                                        <option>Khong Hu Chu</option>
                                    </select>
                                </div>
                            </div>

                            {{-- 5 --}}
                            <div class="form-group row">
                                <label for="inputKwn" class="col-md-2 col-form-label">5. Kewarganegaraan</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="inputKwn" placeholder="Kewarganegaraan">
                                </div>
                                <label for="inputSuku" class="col-md-2 col-form-label">Suku</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="inputSuku" placeholder="Suku">
                                </div>
                            </div>

                            {{-- 6 --}}
                            <div class="form-group row">
                                <label for="inputAnakke" class="col-md-2 col-form-label">6. Anak ke</label>
                                <div class="col-md-1">
                                    <select class="form-control select2" data-placeholder="Pilih">
                                        <option selected>Pilih</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </div>
                                <label for="inputDari" class="col-md col-form-label">dari</label>
                                <div class="col-md-1">
                                    <select class="form-control select2" data-placeholder="Pilih">
                                        <option selected>Pilih</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </div>

                                <label for="inputBersaudara" class="col-md col-form-label pr-5">bersaudara</label>

                                <label for="inputStatusSiswa" class="col-md-2 col-form-label">Status Siswa</label>
                                <div class="col-md-4">
                                    <select class="form-control select2" data-placeholder="Pilih">
                                        <option selected>Pilih</option>
                                        <option>Kandung</option>
                                        <option>Yatim</option>
                                        <option>Piatu</option>
                                        <option>Yatim Piatu</option>
                                    </select>
                                </div>
                            </div>

                            {{-- 7 --}}
                            <div class="form-group row">
                                <label for="inputRiwayat" class="col-md-2 col-form-label">7. Riwayat
                                    Beasiswa</label>
                                <div class="col-md-2">
                                    <label for="inputJenisBea" class="col-xs col-form-label pr-2">Jenis
                                        Beasiswa</label>
                                    <select class="form-control select2" data-placeholder="Pilih">
                                        <option selected>Pilih</option>
                                        <option>Siswa Berprestasi</option>
                                        <option>Anak Miskin</option>
                                        <option>Pendidikan</option>
                                        <option>Unggulan</option>
                                        <option>Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputSumberBea"
                                        class="col-xs col-form-label pr-2">Penyelenggara/Sumber/Pemberi
                                        Beasiswa</label>
                                    <input type="text" class="form-control" id="inputKwn"
                                        placeholder="Penyelenggara/Sumber/Pemberi Beasiswa">
                                </div>
                                <div class=" col-md-2">
                                    <label for="inputTglMasuk" class="col-xs col-form-label pr-2">Tanggal
                                        Masuk</label>
                                    <input type="text" class="form-control" data-inputmask-alias="datetime"
                                        data-inputmask-inputformat="dd/mm/yyyy" data-mask placeholder="dd/mm/yyyy">
                                </div>
                                <div class=" col-md-2">
                                    <label for="inputTglSelesai" class="col-xs col-form-label pr-2">Tanggal
                                        Selesai</label>
                                    <input type="text" class="form-control" data-inputmask-alias="datetime"
                                        data-inputmask-inputformat="dd/mm/yyyy" data-mask placeholder="dd/mm/yyyy">
                                </div>
                            </div>

                            {{-- 8 --}}
                            <div class="form-group row">
                                <label for="inputCapres" class="col-md-2 col-form-label ">8. Catatan
                                    Prestasi</label>

                                <div class="col-md-2">
                                    <label for="inputTahunPrestasi" class="col-xs col-form-label pr-2">Tahun</label>
                                    <select class="form-control select2" data-placeholder="Pilih">
                                        <option selected>Pilih</option>
                                        <option>2015</option>
                                        <option>2015</option>
                                        <option>2015</option>
                                        <option>2015</option>
                                        <option>2015</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="inputLomba" class="col-xs col-form-label pr-2">Lomba</label>
                                    <input type="text" class="form-control" id="inputTTL" placeholder="Lomba">
                                </div>

                                <div class="col-md-1">
                                    <label for="inputJuara" class="col-xs col-form-label pr-2">Juara</label>
                                    <select class="form-control select2" data-placeholder="Pilih">
                                        <option selected>Pilih</option>
                                        <option>1</option>
                                        <option>1</option>
                                        <option>1</option>
                                        <option>1</option>
                                        <option>1</option>
                                    </select>
                                </div>

                                <div class="col-md-2">
                                    <label for="inputJenisLomba" class="col-xs col-form-label  pr-2">Jenis</label>
                                    <select class="form-control select2" data-placeholder="Pilih">
                                        <option selected>Pilih</option>
                                        <option>Sains</option>
                                        <option>Seni</option>
                                        <option>Olah raga</option>
                                        <option>Lainnya</option>
                                    </select>
                                </div>

                                <div class="col-md-2">
                                    <label for="inputTngkat" class="col-xs col-form-label  pr-2">Tingkat</label>
                                    <select class="form-control select2" data-placeholder="Pilih">
                                        <option selected>Pilih</option>
                                        <option>Sekolah</option>
                                        <option>Kecamatan</option>
                                        <option>Provinsi</option>
                                        <option>Nasional</option>
                                        <option>Internasional</option>
                                    </select>
                                </div>
                            </div>

                            {{-- 9 --}}
                            <div class="form-group row">
                                <label for="inputJT" class="col-md-2 col-form-label">9. Jenis
                                    Tinggal</label>
                                <div class="col-md-2">
                                    <select class="form-control select2 " data-placeholder="Pilih">
                                        <option selected>Pilih</option>
                                        <option>Bersama Orang Tua</option>
                                        <option>Saudara/Wali</option>
                                        <option>Asrama</option>
                                        <option>Kost</option>
                                        <option>Panti Asuhan</option>
                                        <option>Lainnya</option>
                                    </select>
                                </div>
                            </div>

                            {{-- 10 --}}
                            <div class="form-group row">
                                <label for="inputJarak" class="col-md-2 col-form-label">10. Jarak ke
                                    Sekolah</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="inputJarak" placeholder="jarak">
                                </div>
                                <label for="inputkm" class="col-md-1 col-form-label pl-2">km</label>

                                <label for="inputTransport" class="col-md-3 col-form-label">Alat
                                    Transportasi ke
                                    Sekolah</label>
                                <div class="col-md-2">
                                    <select class="form-control select2 " data-placeholder="Pilih">
                                        <option selected>Pilih</option>
                                        <option>Jalan Kaki</option>
                                        <option>Kendaraan Pribadi</option>
                                        <option>Kendaraan Umum</option>
                                        <option>Jemputan</option>
                                        <option>Becak</option>
                                    </select>
                                </div>
                            </div>

                            {{-- 11 --}}
                            <div class="form-group row">
                                <label for="inputGoldar" class="col-md-2 col-form-label">11. Golongan Darah</label>
                                <div class="col-md-2">
                                    <select class="form-control select2 " data-placeholder="Pilih">
                                        <option selected>Pilih</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>AB</option>
                                        <option>O</option>
                                        <option>-</option>
                                    </select>
                                </div>
                                <label for="inputTinggi" class="col-md-1 col-form-label pl-2">Tinggi</label>
                                <div class="col-md-1">
                                    <input type="text" class="form-control" id="inputTinggi" placeholder="Tinggi">
                                </div>
                                <label for="inputCm" class="col-md-1 col-form-label">cm</label>

                                <label for="inputBerat" class="col-md-1 col-form-label">Berat</label>
                                <div class="col-md-1">
                                    <input type="text" class="form-control" id="inputBerat" placeholder="Berat">
                                </div>
                                <label for="inputKg" class="col-md-2 col-form-label">kg</label>
                            </div>

                            {{-- 12 --}}
                            <div class="form-group row">
                                <label for="inputKj" class="col-md-2 col-form-label">12. Kelainan
                                    Jasmani</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="inputKj" placeholder="Kelainan Jasmani">
                                </div>
                            </div>

                            {{-- 13 --}}
                            <label for="inputPend" class="col-md-3 col-form-label" style="text-indent: -7px">13.
                                Pendidikan sebelumnya</label>
                            <div class="form-group row">
                                <label for="inputLulusan" class="col-md-2 col-form-label" style="left: 25px">a.
                                    Lulusan
                                    dari</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="inputLulusan"
                                        placeholder="Lulusan dari">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputTanggalLulus" class="col-md-2 " style="left: 25px">b.
                                    Tanggal</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" data-inputmask-alias="datetime"
                                            data-inputmask-inputformat="dd/mm/yyyy" data-mask placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <label for="inputSTTB" class="col-md-2 col-form-label">No.STTB</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="inputSTTB" placeholder="No.STTB">
                                </div>
                            </div>

                            {{-- 14 --}}
                            <label for="inputKegemaran" class="col-md-2 col-form-label" style="text-indent: -7px">14.
                                Kegemaran</label>
                            <div class="form-group row">
                                <label for="inputSeni" class="col-md-2 col-form-label" style="left: 25px">a.
                                    Kesenian</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="inputSeni" placeholder="Kesenian">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputOr" class="col-md-2 col-form-label" style="left: 25px">b.
                                    Olahraga</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="inputOr" placeholder="Olahraga">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputOrg" class="col-md-2 col-form-label" style="left: 25px">c.
                                    Organisasi/Lainnya</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="inputOrg"
                                        placeholder="Organisasi/Lainnya">
                                </div>
                            </div>

                            <label for="inputPindah" class="col-md-2 col-form-label" style="text-indent: -7px">15.
                                Pindahan</label>
                            <div class="form-group row">
                                <label for="inputDariSekolah" class="col-md-2 col-form-label " style="left: 25px">a.
                                    Dari
                                    Sekolah</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="inputDariSekolah" placeholder="Sekolah">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputAlasanPindah" class="col-md-2 col-form-label" style="left: 25px">b.
                                    Alasan
                                    Pindah</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="inputAlasanPindah"
                                        placeholder="Alasan Pindah">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputDiterima" class="col-md-2 col-form-label" style="left: 25px">c.
                                    Diterima
                                    di sekolah</label>
                                <label for="inputDikelas" class="col-md-1 col-form-label pl-3">Di Kelas</label>
                                <div class="col-md-3">
                                    <select class="form-control select2 " data-placeholder="Pilih">
                                        <option selected>Pilih</option>
                                        <option>X-1</option>
                                        <option>X-2</option>
                                        <option>X-3</option>
                                        <option>X-4</option>
                                        <option>XII IPA 1</option>
                                    </select>
                                </div>

                                <label for="inputTglTerima" class="col-md-2 col-form-label pl-2 pr-1">Tanggal</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" data-inputmask-alias="datetime"
                                            data-inputmask-inputformat="dd/mm/yyyy" data-mask placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                            </div>
                            {{-- 17 --}}
                            <div class="form-group row">
                                <label for="inputAlamat" class="col-md-2 col-form-label">16. Alamat</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="inputAlamat" placeholder="Alamat">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputKelurahan" class="col-md-2 col-form-label"
                                    style="left: 25px">Kelurahan/Desa</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="inputKelurahan"
                                        placeholder="Kelurahan/Desa">
                                </div>
                                <label for="inputKodePos" class="col-md-2 col-form-label">Kode Pos</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="inputKodePos" placeholder="Kode Pos">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputKcm" class="col-md-2 col-form-label"
                                    style="left: 25px">Kecamatan</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="inputKcm" placeholder="Kecamatan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputKota" class="col-md-2 col-form-label"
                                    style="left: 25px">Kab/Kota</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="inputKota" placeholder="Kabupaten/Kota">
                                </div>
                                <label for="inputProvinsi" class="col-md-2 col-form-label">Provinsi</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="inputProvinsi"
                                        placeholder="SUMATERA UTARA" disabled="disabled">
                                </div>
                            </div>
                            {{-- 18 --}}
                            <div class="form-group row">
                                <label for="inputTelepon" class="col-md-2 col-form-label">17. No. Telepon</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="inputTelepon" placeholder="Telepon">
                                </div>
                                <label for="inputHP" class="col-md-2 col-form-label ">No. HP</label>
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
