<?php

namespace App\Http\Controllers;

use App\Models\Sertifikat;
use App\Models\User;
use Illuminate\Http\Request;

class SertifikatControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) //menampilkan data siswa yang mendapat sertifikat (hak akses admin)
    {
        $pagination  = 10;
        $keyword = $request->keywoard;
        $admin   = Sertifikat::with('user')->orderBy('id','DESC')->where(function ($query) use ($keyword) {
            return $query
                ->where('wpm', 'like', "%" . $keyword . "%");
        })->paginate($pagination);

        return view('sertifikat', compact('admin'))->with('i', (request()->input('page', 1) - 1) * 15);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = Sertifikat::find($id);
        return view('cetak', compact('admin'));
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

    // public function delete($id){
    //     $data = User::find($id)->delete();
    //     // $data->delete();
    //     return redirect('sertifikat');
    // }
}
