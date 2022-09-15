@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>DATA PESERTA KURSUS</h5>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="d-md-flex w-50 py-3" action="/peserta" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." name="search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </div>
                </form>
            </div>
        </div>
      </div>

      <div class="container">
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-success" href="/tambah-peserta" role="button">Tambah Peserta +</a>
      </div>

    </div>

    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <table class="table table-success table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">NAMA</th>
                <th scope="col">TANGGAL LAHIR</th>
                <th scope="col">KELAS</th>
                <th scope="col">DATA DITAMBAHKAN</th>
                <th scope="col">KELOLA DATA</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
            @foreach ($data as $row)
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <td>{{ $row->name }}</td>
                  <td>{{ $row->tanggalLahir }}</td>
                  <td>{{ $row->kelas }}</td>
                  <td>{{ $row->created_at->format('D M Y') }}</td>
                  <td>
                    <a href="/data/{{ $row->id }}" class="btn btn-link">Edit</a>
                    {{-- <a href="/delete/{{ $row->id }}" class="btn btn-link">Hapus</a> --}}
                    <a href="#" class="btn btn-link delete" data-id="{{ $row->id }}" data-name="{{ $row->name }}">Hapus</a>
                  </td>
                </tr>
              </tbody>
            @endforeach
          </table>
      </blockquote>
    </div>
  </div>

  {{-- @else
      <p class="text-center fs-4">Hasil Tidak Ditemukan.</p>
  @endif --}}
@endsection


