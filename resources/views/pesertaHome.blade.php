@extends('layouts.main')

@section('content')
    <div class="py-2">
        <div class="container">
          <div class="row justify-content-center py-5">
              <div class="col-md-4">
                  <div class="d-block my-5 py-5">
                    <h1>Let's Go!</h1>
                    <p>Mulai ujianmu,</p>
                    <p class="py-1">jangan lihat jarimu ya kawan...</p>
                    <a class="btn btn-success gap-2 col-6 mx-auto" href="/mengetik" role="button">Mulai Mengetik</a>
                  </div>
              </div>
              <div class="col-md-8">
                  <img class="d-block mx-auto" style="width:65%" src="{{ asset('img/1user.png') }}" alt="home peserta">
              </div>
          </div>
      </div>
  </div>
@endsection
