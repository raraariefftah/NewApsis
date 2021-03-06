@extends('form_pendaftaran.hal_pendaftaran')

@section('content')
{{-- Keterangan Ortu --}}
<div class="container">
    <div class="row">
        <!-- left column -->
        <div class="col-md">
            <!-- general form elements -->
            <div class="card card-light">
                <div class="card-header">
                    <h3 class="card-title" style="font-weight: bold; ">B. KETERANGAN ORANG TUA</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="card-body">
                        {{-- 1 --}}
                        <div class="form-group row">
                            <label for="inputNamaAyah" class="col-md-2 col-form-label">1. Nama Ayah</label>
                            <div class=" col-md-4">
                                <input type="text" class="form-control" id="inputNamaAyah" placeholder="Nama Ayah">
                            </div>
                        </div>

                        {{-- 2 --}}
                        <div class="form-group row">
                            <label for="inputTempatAyah" class="col-md-2 col-form-label ">2. Tempat Lahir</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="inputTempatAyah" placeholder="Tempat Lahir">
                            </div>
                            <label for="inputTLAyah" class="col-md-2 col-form-label pl-4 "> Tanggal Lahir</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="date" class="form-control" data-inputmask-alias="datetime"
                                        data-inputmask-inputformat="dd/mm/yyyy" data-mask placeholder="dd/mm/yyyy"
                                        id="inputTLAyah">
                                </div>
                            </div>
                        </div>

                        {{-- 3 --}}
                        <div class="form-group row">
                            <label for="inputAgamaAyah" class="col-md-2 col-form-label">3. Agama</label>
                            <div class="col-md-4">
                                <select class="form-control select2" data-placeholder="Silahkan Pilih.."
                                    id="inputAgamaAyah">
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

                        {{-- 4 --}}
                        <div class="form-group row">
                            <label for="inputKwnAyah" class="col-md-2 col-form-label">4. Kewarganegaraan</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="inputKwnAyah" placeholder="Kewarganegaraan">
                            </div>
                            <label for="inputSukuAyah" class="col-md-2 col-form-label pl-4 ">Suku</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="inputSukuAyah" placeholder="Suku">
                            </div>
                        </div>

                        {{-- 5 --}}
                        <div class="form-group row">
                            <label for="inputPendidikanAyah" class="col-md-2 col-form-label">5. Pendidikan</label>
                            <div class="col-md-4">
                                <select class="form-control select2" data-placeholder="Pilih" id="inputPendidikanAyah">
                                    <option selected>Pilih</option>
                                    <option>SMP Sederajat</option>
                                    <option>SMA Sederajat</option>
                                    <option>D1</option>
                                    <option>D2</option>
                                    <option>D3</option>
                                    <option>D4</option>
                                    <option>S1</option>
                                    <option>S2</option>
                                    <option>S3</option>
                                </select>
                            </div>
                        </div>

                        {{-- 6 --}}
                        <div class="form-group row">
                            <label for="inputPekerjaanAyah" class="col-md-2 col-form-label">6. Pekerjaan</label>
                            <div class=" col-md-4">
                                <input type="text" class="form-control" id="inpuPekerjaanAyah" placeholder="Pekerjaan">
                            </div>
                        </div>

                        {{-- 7 --}}
                        <div class="form-group row">
                            <label for="inputPenghasilanAyah" class="col-md-2 col-form-label">7.
                                Penghasilan/bulan</label>
                            <div class=" col-md-4">
                                <input type="text" class="form-control" id="inpuPenghasilanAyah"
                                    placeholder="Penghasilan/bulan">
                            </div>
                        </div>

                        {{-- 8 --}}
                        <div class="form-group row">
                            <label for="inputAlamatAyah" class="col-md-2 col-form-label">8. Alamat</label>
                            <div class=" col-md-4">
                                <input type="text" class="form-control" id="inputAlamatAyah" placeholder="Alamat">
                            </div>
                        </div>

                        {{-- 9 --}}
                        <div class="form-group row">
                            <label for="inputTelpRumahAyah" class="col-md-2 col-form-label">9. No. Telepon Rumah</label>
                            <div class=" col-md-4">
                                <input type="text" class="form-control" id="inputTelpRumah"
                                    placeholder="No. Telepon Rumah">
                            </div>
                            <label for="inputHP" class="col-md-2 col-form-label pl-4">No. HP</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="inputHPAyah" placeholder="HP">
                            </div>
                        </div>

                        {{-- ibu --}}
                        {{-- 10 --}}
                        <div class="form-group row">
                            <label for="inputNamaIbu" class="col-md-2 col-form-label">10. Nama Ibu</label>
                            <div class=" col-md-4">
                                <input type="text" class="form-control" id="inputNamaIbu" placeholder="Nama Ibu">
                            </div>
                        </div>

                        {{-- 11 --}}
                        <div class="form-group row">
                            <label for="inputTempatIbu" class="col-md-2 col-form-label ">11. Tempat Lahir</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="inputTempatIbu" placeholder="Tempat Lahir">
                            </div>
                            <label for="inputTLIbu" class="col-md-2 col-form-label pl-4 "> Tanggal Lahir</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="date" class="form-control" data-inputmask-alias="datetime"
                                        data-inputmask-inputformat="dd/mm/yyyy" data-mask placeholder="dd/mm/yyyy"
                                        id="inputTLIbu">
                                </div>
                            </div>
                        </div>

                        {{-- 12 --}}
                        <div class="form-group row">
                            <label for="inputAgamaIbu" class="col-md-2 col-form-label">12. Agama</label>
                            <div class="col-md-4">
                                <select class="form-control select2" data-placeholder="Silahkan Pilih.."
                                    id="inputAgamaIbu">
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

                        {{-- 13 --}}
                        <div class="form-group row">
                            <label for="inputKwnIbu" class="col-md-2 col-form-label">13. Kewarganegaraan</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="inputKwnIbu" placeholder="Kewarganegaraan">
                            </div>
                            <label for="inputSukuIbu" class="col-md-2 col-form-label pl-4 ">Suku</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="inputSukuIbu" placeholder="Suku">
                            </div>
                        </div>

                        {{-- 14 --}}
                        <div class="form-group row">
                            <label for="inputPendidikanIbu" class="col-md-2 col-form-label">14. Pendidikan</label>
                            <div class="col-md-4">
                                <select class="form-control select2" data-placeholder="Pilih" id="inputPendidikanIbu">
                                    <option selected>Pilih</option>
                                    <option>SMP Sederajat</option>
                                    <option>SMA Sederajat</option>
                                    <option>D1</option>
                                    <option>D2</option>
                                    <option>D3</option>
                                    <option>D4</option>
                                    <option>S1</option>
                                    <option>S2</option>
                                    <option>S3</option>
                                </select>
                            </div>
                        </div>

                        {{-- 15 --}}
                        <div class="form-group row">
                            <label for="inputPekerjaanIbu" class="col-md-2 col-form-label">15. Pekerjaan</label>
                            <div class=" col-md-4">
                                <input type="text" class="form-control" id="inpuPekerjaanIbu" placeholder="Pekerjaan">
                            </div>
                        </div>

                        {{-- 16 --}}
                        <div class="form-group row">
                            <label for="inputPenghasilanIbu" class="col-md-2 col-form-label">16.
                                Penghasilan/bulan</label>
                            <div class=" col-md-4">
                                <input type="text" class="form-control" id="inpuPenghasilanIbu"
                                    placeholder="Penghasilan/bulan">
                            </div>
                        </div>

                        {{-- 17 --}}
                        <div class="form-group row">
                            <label for="inputAlamatIbu" class="col-md-2 col-form-label">17. Alamat</label>
                            <div class=" col-md-4">
                                <input type="text" class="form-control" id="inputAlamatIbu" placeholder="Alamat">
                            </div>
                        </div>

                        {{-- 18 --}}
                        <div class="form-group row">
                            <label for="inputTelpRumahIbu" class="col-md-2 col-form-label">18. No. Telepon Rumah</label>
                            <div class=" col-md-4">
                                <input type="text" class="form-control" id="inputTelpRumah"
                                    placeholder="No. Telepon Rumah">
                            </div>
                            <label for="inputHP" class="col-md-2 col-form-label pl-4">No. HP</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" id="inputHPIbu" placeholder="HP">
                            </div>
                        </div>
                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a href="/hal_pendaftaran/keterangan_siswa" class="btn btn-danger mr-2">Kembali</a>
                        <a href="/hal_pendaftaran/keterangan_wali" class="btn btn-success">Selanjutnya</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>

@endsection
