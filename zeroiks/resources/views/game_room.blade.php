@extends('master.layout')
@section('content')

    <div class="board">
        <button id="a0"></button>
        <button id="a1"></button>
        <button id="a2"></button>
        <button id="b0"></button>
        <button id="b1"></button>
        <button id="b2"></button>
        <button id="c0"></button>
        <button id="c1"></button>
        <button id="c2"></button>
        <div id="messages">Waiting for opponent to join...</div>
    </div>

    <script src="{{ asset('js/tictac.js') }}"></script>  
    <script src="{{ asset('js/server.js') }}"></script> 
    </body>
    </html>
@endsection