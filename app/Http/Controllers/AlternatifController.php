<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Armada;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.crud.spk', [
            'alternatif' => Alternatif::all(),
            'mobil'=> Armada::all(),
            'title' => 'Alternatif'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alternatif = $request->alternatif;
        $data = json_decode($alternatif, true);

        $validateData['merk'] = $data['merk'];
        $validateData['harga'] = $data['harga'];
        $validateData['kecepatan'] = $data['kecepatan'];
        $validateData['kapasitasorang'] = $data['kapasitasorang'];
        $validateData['waktupenyewaan'] = $data['waktupenyewaan'];
        $validateData['kapasitasbensin'] = $data['kapasitasbensin'];

        Alternatif::create($validateData);
        return redirect('/spk')->with('success', 'Alternatif baru ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
