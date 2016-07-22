<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Top List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::asset('css/custom.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/modal.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/simple-sidebar.css') }}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
      <![endif]-->
  </head>

  <style type="text/css">
      .navbar {
        font-size: large;
    }

    .custom_nav .navbar.navbar-fixed-top .navbar-inner{
        background: rgba(255, 255, 255, 0.7);
    }

    body {
        background-color: black;
        background-image: url("{{ URL::asset('RuneScape_wallpaper.jpg') }}");
        background-repeat: no-repeat;
        background-size: no-repeat;
        background-position: left top;
    }
</style>

<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" align="center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </button>
    </div>
    
    <!-- Begin # DIV Form -->
    <div id="div-forms">

        <!-- Begin # Login Form -->
        <form id="login-form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <div class="modal-body">
                <div id="div-login-msg">
                    <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                    <span id="text-login-msg">Type your email and password.</span>
                </div>
                <input id="email" class="form-control" type="text" value="{{ old('email') }}" placeholder="Email" name="email" required>
                <input id="password" class="form-control" type="password" placeholder="Password" name="password" required>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                </div>
                <div>
                    <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                    <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                </div>
            </div>
        </form>
        <!-- End # Login Form -->
        
        <!-- Begin | Lost Password Form -->
        <form id="lost-form" method="POST" action="{{ url('/password/email') }}" style="display:none;">
         {{ csrf_field() }}
         
          <div class="modal-body">
            <div id="div-lost-msg">
                <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                <span id="text-lost-msg">Type your e-mail.</span>
            </div>
            <input id="email" name="email" value="{{ old('email') }}" class="form-control" type="text" placeholder="E-Mail" required>
        </div>
        <div class="modal-footer">
            <div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
            </div>
            <div>
                <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
            </div>
        </div>
    </form>
    <!-- End | Lost Password Form -->
    
    <!-- Begin | Register Form -->
    <form id="register-form" method="POST" action="{{ url('/register') }}" style="display:none;">
        {{ csrf_field() }}

        <div class="modal-body">
            <div id="div-register-msg">
                <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                <span id="text-register-msg">Register an account.</span>
            </div>
            <input id="name" name="name" value="{{ old('name') }}" class="form-control" type="text" placeholder="Username" required>
            <input id="email" name="email" class="form-control" type="text" value="{{ old('email') }}" placeholder="E-Mail" required>
            <input id="password" class="form-control" type="password" name="password" placeholder="Password" required>
            <input id="password-confirm" class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" required>
        </div>
        <div class="modal-footer">
            <div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
            </div>
            <div>
                <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
            </div>
        </div>
    </form>
    <!-- End | Register Form -->
    
</div>
<!-- End # DIV Form -->

</div>
</div>
</div>
<!-- END # MODAL LOGIN -->


<body>
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a>
                        @if(Auth::check())
                        Hello {{ ucfirst(Auth::user()->name) }}
                        @else
                        Welcome
                        @endif
                    </a>
                </li>
                <li>
                    <!-- <a href="#">Login/Register</a> -->

                </li>
                <li>
                    <a href="{{ URL::to('/') }}">Home</a>
                </li>
                
                @if(Auth::check()) 
                    <li>
                        <a href="{{ URL::to('submit')}}">Add New Site</a>
                    </li>
                @endif

                @if(Auth::check())
                <li>
                <a href="{{ URL::to('logout') }}">Logout</a>
                </li>   
                @else
                <li>
                    <a href="#" data-toggle="modal" data-target="#login-modal">Login/Register</a>
                </li>
                @endif
               

          </ul>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">

      @yield('content')
    
      </div>
      <!-- /#page-content-wrapper -->
        <footer>
                Made by Flimsy
        </footer>
  </div>
  <!-- /#wrapper -->

  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('/js/custom.js') }}"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

  </script>
  
  <!-- login script -->
  <script>
    $(function() {

    var $formLogin = $('#login-form');
    var $formLost = $('#lost-form');
    var $formRegister = $('#register-form');
    var $divForms = $('#div-forms');
    var $modalAnimateTime = 300;
    var $msgAnimateTime = 150;
    var $msgShowTime = 2000;
    
    $('#login_register_btn').click( function () { modalAnimate($formLogin, $formRegister) });
    $('#register_login_btn').click( function () { modalAnimate($formRegister, $formLogin); });
    $('#login_lost_btn').click( function () { modalAnimate($formLogin, $formLost); });
    $('#lost_login_btn').click( function () { modalAnimate($formLost, $formLogin); });
    $('#lost_register_btn').click( function () { modalAnimate($formLost, $formRegister); });
    $('#register_lost_btn').click( function () { modalAnimate($formRegister, $formLost); });
    
    function modalAnimate ($oldForm, $newForm) {
        var $oldH = $oldForm.height();
        var $newH = $newForm.height();
        $divForms.css("height",$oldH);
        $oldForm.fadeToggle($modalAnimateTime, function(){
            $divForms.animate({height: $newH}, $modalAnimateTime, function(){
                $newForm.fadeToggle($modalAnimateTime);
            });
        });
    }
    
    function msgFade ($msgId, $msgText) {
        $msgId.fadeOut($msgAnimateTime, function() {
            $(this).text($msgText).fadeIn($msgAnimateTime);
        });
    }
    
    function msgChange($divTag, $iconTag, $textTag, $divClass, $iconClass, $msgText) {
        var $msgOld = $divTag.text();
        msgFade($textTag, $msgText);
        $divTag.addClass($divClass);
        $iconTag.removeClass("glyphicon-chevron-right");
        $iconTag.addClass($iconClass + " " + $divClass);
        setTimeout(function() {
            msgFade($textTag, $msgOld);
            $divTag.removeClass($divClass);
            $iconTag.addClass("glyphicon-chevron-right");
            $iconTag.removeClass($iconClass + " " + $divClass);
        }, $msgShowTime);
    }

    @if (count($errors) > 0)
        $('#login-modal').modal('show'); 

        @foreach ($errors->all() as $error)
        msgChange($('#div-login-msg'), $('#icon-register-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "{{ $error }}");
        @endforeach

    @endif

    @if ($errors->has('password_confirmation'))
        $('#login-modal').modal('show'); 
        msgChange($('#div-login-msg'), $('#icon-register-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "{{ $errors->first('password_confirmation') }}");
    @endif
    @if ($errors->has('name'))
        $('#login-modal').modal('show'); 
        msgChange($('#div-login-msg'), $('#icon-register-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "{{ $errors->first('name') }}");
    @endif
    @if ($errors->has('email'))
        $('#login-modal').modal('show'); 
        msgChange($('#div-login-msg'), $('#icon-register-msg'), $('#text-register-msg'), "error", "glyphicon-remove", "{{ $errors->first('email') }}");
        msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "{{ $errors->first('email') }}");
    @endif
    @if ($errors->has('password'))
        $('#login-modal').modal('show'); 
        msgChange($('#div-login-msg'), $('#icon-register-msg'), $('#text-register-msg'), "error", "glyphicon-remove", "{{ $errors->first('password') }}");
        msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "{{ $errors->first('password') }}");
    @endif
    });
  </script>

</body>

</html>