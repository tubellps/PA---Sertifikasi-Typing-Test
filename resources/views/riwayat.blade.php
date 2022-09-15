@extends('layouts.main')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>RIWAYAT TYPING TEST</h5>
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

    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <table class="table table-success table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">WAKTU TEST</th>
                <th scope="col">KECEPATAN</th>
                <th scope="col">AKURASI</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
            @foreach ($peserta as $row)
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <td>{{ $row->created_at }}</td>
                  <td>{{ $row->wpm }}</td>
                  <td>{{ $row->accuracy }}</td>
                  {{-- <td>{{ $row->created_at->format('D M Y') }}</td> --}}
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


