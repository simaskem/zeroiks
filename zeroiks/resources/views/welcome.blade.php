@extends('layout')
@section('content')

@if (1 == 1)
    <div class="panel-body">
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
            <button class="btn btn-lg btn-success login_btn center-block" type="submit">Login</button>
         </div>
    </div>
@endif

<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1729828850585087',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>


@endsection