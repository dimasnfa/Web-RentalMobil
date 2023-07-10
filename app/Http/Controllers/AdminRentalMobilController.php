<?php

namespace App\Http\Controllers;

use id;
use App\Models\User;
use App\Models\Mobil;
use Illuminate\Http\Request;

class AdminRentalMobilController extends Controller
{
       public function index() {
        return view('pages.crud.datamobil', [
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
        $name       = $request->input('name');
        $harga      = $request->input('harga');
        $tipe  = $request->input('tipe');
        $merk   = $request->input('merk');
        $fasilitas = $request->input('fasilitas');
        // $alamat = $request->input('alamat');
        // $tinggi_badan = $request->input('tinggi_badan');
        // TODO: Compare $password and $rePassword

        $mobil           = new mobil;
        $mobil  ->name    = $name;
        $mobil ->harga     = $harga;
        $mobil ->tipe = $tipe; // Don't forget to encryp!s
        $mobil ->merk= $merk;
        $mobil ->fasilitas= $fasilitas;
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
        $name      = $request->input('name');
        $harga     = $request->input('harga');
        $tipe   = $request->input('tipe');
        $merk   = $request->input('merk');
        $fasilitas = $request->input('fasilitas');

        $mobil = mobil ::where('id', $id)->first();
        $mobil ->name    = $name;
        $mobil->harga     = $harga;
        $mobil->tipe = $tipe; // Don't forget to encryp!s
        $mobil->merk= $merk;
        $mobil->fasilitas= $fasilitas;

        $mobil->save();

        return redirect()->to('/mobil');
    }

    public function delete($id) {
        $peserta = mobil::where('id', $id)->first();
        $peserta->delete();
        return redirect()->back();
    }
}
