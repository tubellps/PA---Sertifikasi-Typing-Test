@extends('layouts.admin')

@section('content')
    <div class="py-2">
        <div class="container">
          <div class="row justify-content-center py-5">
              <div class="col-md-4">
                  <div class="d-block my-5 py-5">
                      <h1>Computer Course</h1>
                      <p>Kursus komputer dengan fokus keterampilan mengetik 10 jari
                          dan pengoperasian komputer dasar
                      </p>
                  </div>
              </div>
              <div class="col-md-8">
                  <img class="d-block mx-auto" style="width:65%" src="{{ asset('img/1admin.png') }}" alt="home admin">
              </div>
          </div>
      </div>
  </div>
@endsection
