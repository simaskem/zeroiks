@extends('master.layout')

@section('content')
<div class="container">
    <div class="row">
         <div class="center-block col-lg-8">
            <h3 class="text-center">Welcome!</h3>
            <br />
            <p class="text-center">Tic-tac-toe, also know as Naughts and Crosses, is one of the most widely known games. </p>
            <br />
            <div class="rules">
                <h4>Rules</h4>
                <p><strong>To move:</strong> Place your piece in an open square.</p>
                <p><strong>To win:</strong> Connect three in a row horizontally, vertically or diagonally.</p>
                <p>Starting with a board of nine empty squares, two players alternate turns placing X’s and O’s in the empty squares.</p>
            </div>
            <br />
            <br />             
            <a class="btn btn-lg btn-success login_btn center-block" role="button" href="auth/facebook" type="submit">Login FB</a>
         </div>
    </div>
</div>
@endsection