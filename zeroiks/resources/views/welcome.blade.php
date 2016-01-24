@extends('master.layout')
@section('content')


<div class="container">
    <div class="row">
         <div class="center-block col-lg-8">
            <h3 class="text-center">Welcome!</h3>
            <br />
            <p class="text-center">Tic-tac-toe, also know as Naughts and Crosses, is one of the most widely known games. </p>
            <br />
            @if (Auth::check())
                <div class="rules">
                    <h4>Rules</h4>
                    <p><strong>To move:</strong> Place your piece in an open square.</p>
                    <p><strong>To win:</strong> Connect three in a row horizontally, vertically or diagonally.</p>
                    <p>Starting with a board of nine empty squares, two players alternate turns placing X’s and O’s in the empty squares.</p>
                </div>
            @endif
            <br />
            <br />  
            <br />
            <br />              
            @if (Auth::check())
                <a class="btn btn-lg btn-success login_btn center-block" role="button" href="game/create" type="submit">PLAY</a>
            @else
                <a class="btn btn-lg btn-success login_btn center-block" role="button" href="auth/facebook" type="submit">Login FB</a>                
            @endif
         </div>
    </div>
</div>

@endsection

<script type="text/javascript">
    if (window.location.hash && window.location.hash == '#_=_') {
        if (window.history && history.pushState) {
            window.history.pushState("", document.title, window.location.pathname);
        } else {
            // Prevent scrolling by storing the page's current scroll offset
            var scroll = {
                top: document.body.scrollTop,
                left: document.body.scrollLeft
            };
            window.location.hash = '';
            // Restore the scroll offset, should be flicker free
            document.body.scrollTop = scroll.top;
            document.body.scrollLeft = scroll.left;
        }
    }
</script>