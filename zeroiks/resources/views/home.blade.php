@extends('master.layout')
@section('content')

@if (!Auth::check())
<div class="container">
    <div class="content">
        <div class="title">Tic Tac Toe</div>
            You are Logged In
        <div>
           <h4>Your name is  {{ Auth::user()->name }} </h4>
           <h4>Your email is {{ Auth::user()->email }} </h4>
           <img src="{{ Auth::user()->avatar }}" height="200" width="200" />
        </div>
    </div>
</div>
@endif

@endsection
