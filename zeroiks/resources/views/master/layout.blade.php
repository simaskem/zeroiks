<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tic Tac Toe</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script src="{{ asset('js/jquery.min.js') }}"></script>
</head>
<body id="home">    
    <div class="center-block col-lg-8">    
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="pull-left navbar-brand"><img class="img-circle img-responsive logo_height" src="img/logo.png"></a>
                <h4 id="index_title" class="nav_head_down pull-left">Tic Tac Toe</h4>          
            </div>
            <div class="nav navbar-nav navbar-right"> 
                @if (Auth::check())
                    <li><a href="/">Home</a></li>
                @endif
                @include('logout')            
            </div>
          </div>
        </nav>
    </div>
        @include('statistics')        
    <div class="container body-content">
        <br />
        <br />
        <br />
        @yield('content')        
        <br />
        <br />
        <br />
        <br />
        <br />    
        <br />   
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />    
        <br />  
        <br />       
    </div>
    <footer class="footer">
        <hr />
        <p class="text-center">
            <small>{{trans('msg.lbl_footer_msg')}}</small>
        </p>
    </footer>       
</body>
</html>