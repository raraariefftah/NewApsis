<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TataUsahaController extends Controller
{
 public function dashboard_tu()
    {
        return view('tata_usaha.dashboard');
    }

    public function profil()
    {
        return view('tata_usaha.profil_tu');
    }

    public function pendaftar()
    {
        return view('tata_usaha.data_pendaftar');
    }

    public function detail()
    {
        return view('tata_usaha.detail_data');
    }

    public function ubahpw()
    {
        return view('tata_usaha.ubah_password');
    }

    public function edit_ket_siswa()
    {
        return view('tata_usaha.edit_keterangan_siswa');
    }

    public function edit_ket_ortu()
    {
        return view('tata_usaha.edit_keterangan_ortu');
    }
    
    public function edit_ket_wali()
    {
        return view('tata_usaha.edit_keterangan_wali');
    }
}
