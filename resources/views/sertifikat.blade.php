@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
  DATA E-CERTIFICATE PESERTA
    </div>
    <div class="container-fluid">
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <table class="table table-success table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">NAMA</th>
                <th scope="col">WAKTU TEST</th>
                <th scope="col">KECEPATAN</th>
                <th scope="col">AKURASI</th>
                <th scope="col">SERTIFIKAT</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
            @foreach ($admin as $row)
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <td>{{ $row->user->name }}</td>
                  <td>{{ $row->created_at }}</td>
                  <td>{{ $row->wpm }}</td>
                  <td>{{ $row->accuracy }}</td>
                  <td>
                    <a class="btn btn-success" href="{{url('sertifikat',$row->id) }}" class="btn btn-sm btn-warning">Buat Sertifikat</a>
                    <a href="#" class="btn btn-danger delete" admin-id="{{ $row->id }}" admin-name="{{ $row->name }}">Hapus</a>
                  </td>
                  {{-- <td>{{ $row->created_at->format('D M Y') }}</td> --}}

                </tr>
              </tbody>
            @endforeach
          </table>

          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            {!! $admin->links() !!}
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start text-gray-600 fs-6">
            <p>Menampilkan</p>
            {{ $admin->firstItem() }}
            <p>-</p>
            {{ $admin->lastItem() }}
            <p>dari</p>
            {{ $admin->total() }}
            <p>data</p>
          </div>
      </blockquote>
    </div>
  </div>
@endsection
