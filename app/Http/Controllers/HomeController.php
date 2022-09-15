<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('adminHome', [
            "title" => "Computer Course",
        ]);
    }

    //admin
    public function adminHome() {
        return view('adminHome', [
            "title" => "Computer Course",
        ]);
    }
    public function peserta() {
        return view('peserta', [
            "title" => "Data Peserta",
        ]);
    }
    public function sertifikat() {
        return view('sertifikat', [
            "title" => "Data Sertifikat",
        ]);
    }

    //guest
    public function homePeserta() {
        return view('pesertaHome', [
            "title" => "Computer Course",
        ]);
    }
    public function mengetik() {
        return view('mengetik', [
            "title" => "Typing Test",
        ]);
    }
    public function riwayat() {
        return view('riwayat', [
            "title" => "Riwayat Test",
        ]);
    }


}
