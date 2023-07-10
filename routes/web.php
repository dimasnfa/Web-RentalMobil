<?php

use App\Http\Controllers\DashboardAdminArmadaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPagesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardRentalArmadaController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\SawController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('landingPage.homepage');
// });

// Route::get('/berita', function () {
//     return view('landingPage.berita');
// });

// Route::get('/sewa-mobil', function () {
//     return view('landingPage.sewa-mobil');
// });

// Route::get('/cara-pesan', function () {
//     return view('landingPage.cara-pesan');
// });

// Route::get('/blog', function () {
//     return view('landingPage.blog');
// });

// Route::get('/contact', function () {
//     return view('landingPage.contact');
// });

// Route::get('/Login', function () {
//     return view('Login');
// });


// landing page
Route::get('/',[LandingPagesController::class, 'index']);
Route::get('/sewa-mobil',[LandingPagesController::class, 'sewaMobil']);
Route::get('/cara-pesan',[LandingPagesController::class, 'caraPesan']);
// Route::get('/blog',[LandingPagesController::class, 'Blog']);
Route::get('/contact',[LandingPagesController::class, 'contact']);
Route::get('/spk',[LandingPagesController::class, 'Spk']);

// Authentication
Route::get('/login',[App\Http\Controllers\AuthController::class, 'login']);
Route::post('/login',[App\Http\Controllers\AuthController::class, 'authenticate']) ->middleware('guest');
Route::get('/logout',[App\Http\Controllers\AuthController::class, 'logout']) -> middleware('auth');


// Admin
// Route::get('/ds', function () {
//     return view('welcome');
// });
// Route::get('/dashboard', [AdminRentalMobilController::class, 'index']);

Route::resource('/dashboard/armadas', DashboardAdminArmadaController::class);
Route::resource('/dashboard/rental/armadas', DashboardRentalArmadaController::class);

// Route::get('/rental-mobil',[App\Http\Controllers\AdminRentalMobilController::class, 'adminRentalMobil']) ->name('admin-RentalMobil');
// Route::get('/sewa-mobil',[AdminRentalMobilController::class, 'index']);

// Route::get('sewa-mobil/add',[AdminRentalMobilController::class, 'add']);

// Route::post('sewa-mobil/store',[AdminRentalMobilController::class, 'store']);

// Route::get('sewa-mobil/edit/{id}',[AdminRentalMobilController::class, 'edit']);

// Route::post('sewa-mobil/update/{id}',[AdminRentalMobilController::class, 'update']);

// Route::get('sewa-mobil/delete/{id}',[AdminRentalMobilController::class, 'delete']);

// Route::controller(AdminRentalMobilController::class)->group(function() {
//     Route::get('sewa-mobil/', 'index');
//     Route::get('sewa-mobil/add', 'add');
//     Route::post('sewa-mobil/store', 'store');
//     Route::get('sewa-mobil/edit/{id}', 'edit');
//     Route::post('sewa-mobil/update/{id}', 'update');
//     Route::get('sewa-mobil/delete/{id}', 'delete');
// });

// testing
Route::get('/Logintest', function () {
    return view('pages.auth.login');
});

// Route::get('/dashboard', function () {
//     return view('pages.landingPage.sewa-Mobil');
// });   

Route::get('/dashboard', function () {
    return view('pages.crud.page', [
        "title" => "berhasil login"
    ]);
});


Route::get('/datamobil-1', function () {
    return view('pages.crud.page', [
        "title" => "berhasil login"
    ]);
});

Route::get('/datamobil',[DashboardController::class, 'index']);

Route::get('/create', function () {
    return view('pages.crudadminrentalmobil.create', [
        "title" => "Tambah Data Mobil"
    ]);
});

Route::get('/dashboard', function () {
    return view('pages.crudadminrentalmobil.page', [
        "title" => "berhasil login"
    ]);
});

Route::get('/datamobil-1', function () {
    return view('pages.crudadminrentalmobil.page', [
        "title" => "berhasil login"
    ]);
});

Route::get('/create', function () {
    return view('pages.crudadminrentalmobil.create', [
        "title" => "Tambah Data Mobil"
    ]);
});

Route::resource('/spk', AlternatifController::class);

// Route::resource('/normalisasi', SawController::class);

Route::get('/normalisasi', [SawController::class, 'normalisasi']);

Route::get('/hasil', [SawController::class, 'hasil']);
     


