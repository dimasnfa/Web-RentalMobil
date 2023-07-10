<?php

namespace App\Http\Controllers;

use id;
use App\Models\User;
use App\Models\Mobil;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index() {
      return view('pages.crud.datamobil', [
          'users' => Mobil::all(),
          'title' => 'datamobil'
      ]);
  }
     
}