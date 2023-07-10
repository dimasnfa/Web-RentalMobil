<?php

namespace App\Http\Controllers;

use App\Models\Normalisasi;
use App\Models\hasil;
use Illuminate\Http\Request;

class SawController extends Controller
{
    public function normalisasi(){
        return view('spk.normalisasi', [
            'title' => 'normalisasi',
            'normalisasis' => normalisasi::all()
        ]);
    }
    
    public function hasil(){
        return view('spk.hasil', [
            'title' => 'hasil',
            'hasil' => hasil::all()
        ]);
    }
}
