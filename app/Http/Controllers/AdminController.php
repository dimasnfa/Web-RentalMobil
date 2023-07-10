<?php

namespace App\Http\Controllers;

use App\Models\sewamobil;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.Admin.Dashboard');
    }

    public function adminUser()
    {
        return view('pages.Admin.daftarUser.daftarUser');
    }

    public function adminmobil()
    {
        return view('pages.Admin.daftar.',[
            'users' => mobil::all(),
            'title' => 'Data mobil'
        ]);
    }

    public function addmobil()
    {
        return view('pages.Admin.daftarmobil.addmobil',[
            'title' => 'Tambah Data mobil'
        ]);
    }


}
