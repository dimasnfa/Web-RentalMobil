<?php

namespace App\Http\Controllers;

use App\Models\Armada;
use Illuminate\Http\Request;

class DashboardRentalArmadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.crudadminrentalmobil.mobil', [
            'mobils' => Armada::all(),
            'title' => 'dataarmada'
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
        // return $request;
        $validatedData = $request->validate([
            'nomor_polisi' => 'required|max:255',
            'merk' => 'required',
            'tipe' => 'required',
            'kapasitas' => 'required',
            'warna' => 'required',
            'mesin' => 'required',
            'harga' => 'required',
            'kecepatan' => 'required',
            'kapasitasorang' => 'required',
            'waktupenyewaan' => 'required',
            'kapasitasbensin' => 'required',
        ]);

        $validatedData['rental_id'] = 2;

        Armada::create($validatedData);
        
        return redirect('/dashboard/rental/armadas')->with('success','Data Mobil berhasil ditambahkan'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Armada  $armada
     * @return \Illuminate\Http\Response
     */
    public function show(Armada $armada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Armada  $armada
     * @return \Illuminate\Http\Response
     */
    public function edit(Armada $armada)
    {
        return view('pages.crudadminrentalmobil.edit', [
            'mobil' => $armada,
            'title' => 'edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Armada  $armada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Armada $armada)
    {
        $validatedData = $request->validate([
          'nomor_polisi' => 'required|max:255',
           'merk' => 'required',
           'tipe' => 'required',
           'kapasitas' => 'required',
           'warna' => 'required',
           'mesin' => 'required',
           'kecepatan' => 'required',
           'kapasitasorang' => 'required',
           'waktupenyewaan' => 'required',
           'kapasitasbensin' => 'required',
       ]);

       $validatedData['rental_id'] = auth()->user()->id;

       Armada::where('id', $armada->id)
           ->update($validatedData);
       return redirect('/dashboard/rental/armadas')->with('success','Data Mobil berhasil diupdate');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Armada  $armada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Armada $armada)
    {
        Armada::destroy($armada->id);
        return redirect('/rental/armadas')->with('success','Data Mobil berhasil dihapus');  
    }
}
