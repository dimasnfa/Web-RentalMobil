<?php

namespace App\Http\Controllers;

use id;
use App\Models\User;
use App\Models\Mobil;
use Illuminate\Http\Request;

class AdminrentalController extends Controller
{
       public function index() {
        return view('pages.crudadminrentalmobil.datamobil', [
            'users' => Mobil::all(),
            'title' => 'datamobil'
        ]);
    }

    public function add() {
        return view('pages.Admin.mobil.add',[
            'title' => 'Tambah Data mobil '
        ]);
    }

    public function store(Request $request) {
        $nomor_polisi       = $request->input('nomor_polisi');
        $merk      = $request->input('merk');
        $tipe  = $request->input('tipe');
        $kapasitas   = $request->input('kapasitas');
        $warna = $request->input('warna');
        $mesin = $request->input('mesin');
        // $alamat = $request->input('alamat');
        // $tinggi_badan = $request->input('tinggi_badan');
        // TODO: Compare $password and $rePassword

        $mobil           = new mobil;
        $mobil  ->nomor_polisi    = $nomor_polisi;
        $mobil ->merk    = $merk;
        $mobil ->tipe = $tipe; // Don't forget to encryp!s
        $mobil ->kapasitas= $kapasitas;
        $mobil ->warna= $warna;
        $mesin ->mesin= $mesin;
        // $peserta->alamat = $alamat;
        // $peserta->tinggi_badan = $tinggi_badan;

        $mobil ->save();

        return redirect()->to('/mobil');
    }

    public function edit($id){

        $mobil = mobil::where('id', $id)->first();

        return view('pages.Admin.mobil.edit', [
            'mobil' => $mobil,
            'title' => 'Edit Data mobil'
        ]);

    }

    public function update(Request $request, $id) {
        $nomor_polisi     = $request->input('nomor_polisi');
        $merk     = $request->input('merk');
        $tipe   = $request->input('tipe');
        $kapasitas   = $request->input('kapasitas');
        $warna = $request->input('warna');
        $mesin = $request->input('mesin');

        $mobil = mobil ::where('id', $id)->first();
        $mobil ->nomor_polisi    = $nomor_polisi;
        $mobil->merk     = $merk;
        $mobil->tipe = $tipe; // Don't forget to encryp!s
        $mobil->kapasitas= $kapasitas;
        $mobil->warna= $warna;
        $mobil->mesin= $mesin;

        $mobil->save();

        return redirect()->to('/mobil');
    }

    public function delete($id) {
        $peserta = mobil::where('id', $id)->first();
        $peserta->delete();
        return redirect()->back();
    }
}
