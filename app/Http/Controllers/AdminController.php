<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function profil()
    {
        return view('admin.profil_admin');
    }

    public function data_user()
    {
        return view('admin.data_user');
    }

    public function edit_user()
    {
        return view('admin.edit_data_user');
    }

    public function tambah_user()
    {
        return view('admin.tambah_user');
    }

    public function ubah_psw()
    {
        return view('admin.ubah_password');
    }
}
