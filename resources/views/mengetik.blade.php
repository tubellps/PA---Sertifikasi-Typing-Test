@extends('layouts.typing')

@section('content')
    <div class="container2">
        <div class="stats">
            <p>Time: <span id="timer">0 s</span></p>
            <p>Mistakes: <span id="mistakes">0</span></p>
        </div>

        <div id="quote" onmousedown="return false" onselectstart="return false"></div>

        <textarea id="quote-input" rows="3" placeholder="Ketik disini ketika test dimulai..."></textarea>

        <button id="start-test" onclick="startTest()">Mulai Test</button>
        <button id="stop-test" onclick="displayResult()">Hentikan Test</button>

        <div class="result">
            <h3>Result</h3>

            <form action="{{ route('typing.store') }}" method="POST">
                @csrf
                <div class="wrapper">
                <div class="row">
                    <div class="col">
                        <p>Accurancy: <textarea class="border border-white" id="accuracy" name="accuracy" rows="1"> </textarea></p>
                    </div>
                    <div class="col">
                        <p>Speed: <span><textarea class="border border-white" id="wpm" name="wpm" rows="1"> </textarea></span></p>
                    </div>
                  </div>


            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
            </form>
        </div>


    </div>
@endsection
