@extends('master.layout')

@section('content')
<div class="container">
    <div class="row">
         <div class="center-block col-lg-8">
            <h3 class="text-center">Welcome!</h3>
            {{ Auth::User()->name }}
         </div>
    </div>
</div>
@endsection
