<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPagesController extends Controller
{
    public function index()
     {
        return view ('pages.landingPage.homePage');
     }

     public function contact()
     {
        return view ('pages.landingPage.contact');
     }

     public function sewaMobil()
     {
        return view ('pages.landingPage.sewa-mobil');
     }

     public function caraPesan()
     {
        return view ('pages.landingPage.cara-pesan');
     }

     public function Blog()
     {
        return view ('pages.landingPage.blog');
     }
}
