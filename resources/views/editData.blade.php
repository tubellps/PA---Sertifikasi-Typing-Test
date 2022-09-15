@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h5>TAMBAH DATA PESERTA KURSUS</h5>
                </div>
                <div class="card-body">
                    <form action="/update-data/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama Lengkap</label>
                          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{ $data->name }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tanggal Lahir</label>
                          <input type="date" name="tanggalLahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->tanggalLahir }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Kelas</label>
                          <input type="text" name="kelas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kelas" value="{{ $data->kelas }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
                </div>
        </div>
    </div>
</div>
@endsection
