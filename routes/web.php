<?php

use App\Models\peserta;
use App\Models\sertifikat;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RedirectsController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\SertifikatControllers;
use App\Http\Controllers\TypingControllers;

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('/typing', TypingControllers::class);
Route::resource('/riwayat', RiwayatController::class);
Route::resource('/sertifikat', SertifikatControllers::class);

Route::get('/redirects', [RedirectsController::class, 'index']);

Route::get('/peserta', [ParticipantController::class, 'index']);

Route::get('/tambah-peserta', [ParticipantController::class, 'tambahPeserta']);
Route::post('/insert-data', [ParticipantController::class, 'insertData']);

Route::get('/data/{id}', [ParticipantController::class, 'tampilkanData']);
Route::post('/update-data/{id}', [ParticipantController::class, 'updateData']);

Route::get('/delete/{id}', [ParticipantController::class, 'delete']);

// Route::get('/delete/{id}', [SertifikatControllers::class, 'delete']);

// Route::get('/fill-data-pdf', [\App\Http\Controllers\FillPdfController::class, 'process']);

Route::get('/peserta', [ParticipantController::class, 'index']);



// Route::get('/', [loginController::class, 'index']);

// Hak akses admin
Route::get('/home', function () {
    return view('adminHome', [
        "title" => "Computer Course",
    ]);
});

// Route::get('/peserta', function () {
//     return view('peserta', [
//         "title" => "Data Peserta",
//         "peserta" => peserta::all(),
//     ]);
// });


// Hak akses peserta
Route::get('/homePeserta', function () {
    return view('pesertaHome', [
        "title" => "Computer Course",
    ]);
});

Route::get('/mengetik', function () {
    return view('mengetik', [
        "title" => "Start Typing Test",
    ]);
});



Auth::routes();

// // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::group(['middleware' => ['auth', 'ceklevel:admin']], function(){
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('adminHome');
//     Route::get('/peserta', [App\Http\Controllers\HomeController::class, 'peserta'])->name('peserta');
//     Route::get('/sertifikat', [App\Http\Controllers\HomeController::class, 'riwayat'])->name('riwayat');
// });

// Route::group(['middleware' => ['auth', 'ceklevel:user']], function(){
//     Route::get('/homePeserta', [App\Http\Controllers\HomeController::class, 'homePeserta'])->name('pesertaHome');
//     Route::get('/mengetik', [App\Http\Controllers\HomeController::class, 'mengetik'])->name('mengetik');
//     Route::get('/riwayat', [App\Http\Controllers\HomeController::class, 'riwayat'])->name('riwayat');
// });
