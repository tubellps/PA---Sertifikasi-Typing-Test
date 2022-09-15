<?php

namespace App\Http\Controllers;

use App\Models\participant;
use App\Models\User;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function index(Request $request){
        if ($request->has('search')) {
            $data = User::where('name', 'LIKE', '%' .$request->search.'%')->paginate(5);
        } else {
            // $data = participant::all();
            $data = User::paginate();
        }

        return view('peserta', compact('data'), [
            "title" => "Data Peserta",
        ]);
    }

    public function tambahPeserta(){
        return view('tambahPeserta', [
            "title" => "Tambah Data Peserta",
        ]);
    }

    public function insertData(Request $request){
        // dd($request->all());
        User::create($request->all());
        return redirect('peserta')->with('success', 'Data peserta berhasil ditambahkan');
    }

    public function tampilkanData($id){
        $data = User::find($id);
        return view('editData', compact('data'), [
            "title" => "Data Peserta",
        ]);
    }

    public function updateData(Request $request, $id){
        $data = User::find($id);
        $data->update($request->all());
        return redirect('peserta');
    }

    public function delete($id){
        $data = User::find($id)->delete();
        // $data->delete();
        return redirect('peserta');
    }
}
