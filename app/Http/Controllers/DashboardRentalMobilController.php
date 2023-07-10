<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class DashboardRentalMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.crudadminrentalmobil.mobil', [
            'mobils' => Mobil::where('rental_id', auth()->user()->id)->get(),
            'title' => 'datamobil'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.crudadminrentalmobil.create', [
            'title' => 'create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nomor_polisi' => 'required|max:255',
            'merk' => 'required',
            'tipe' => 'required',
            'kapasitas' => 'required',
            'warna' => 'required',
            'mesin' => 'required',
        ]);
        $validatedData['rental_id'] = auth()->user()->id;
        Mobil::create($validatedData);
        
        return redirect('/dashboard/rental/mobils')->with('success','Data Mobil berhasil ditambahkan');     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show(Mobil $mobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit(Mobil $mobil)
    {
        return view('pages.crud.edit', [
            'mobil' => $mobil,
            'title' => 'edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mobil $mobil)
    {
        $validatedData = $request->validate([
            'nomor_polisi' => 'required|max:255',
            'merk' => 'required',
            'tipe' => 'required',
            'kapasitas' => 'required',
            'warna' => 'required',
            'mesin' => 'required',
        ]);
        $validatedData['rental_id'] = auth()->user()->id;
        Mobil::where('id', $mobil->id)
            ->update($validatedData);
        return redirect('/dashboard/armadas')->with('success','Data Mobil berhasil diupdate');     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mobil $mobil)
    {
        mobil::destroy($mobil->id);
        return redirect('/dashboard/armadas')->with('success','Data Mobil berhasil dihapus');  
    }
}
