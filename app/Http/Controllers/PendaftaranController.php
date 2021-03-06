<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function ket_siswa()
    {
        return view('form_pendaftaran.keterangan_siswa');
    }

    public function ket_ortu()
    {
        return view('form_pendaftaran.keterangan_ortu');
    }
    
    public function ket_wali()
    {
        return view('form_pendaftaran.keterangan_wali');
    }
}
