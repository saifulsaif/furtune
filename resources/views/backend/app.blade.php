<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Inbox | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu/meanmenu.min.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/notika-custom-icon.css') }}">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/wave/waves.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/wave/button.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
  <div class="login-content">
      <!-- Login -->

      <!-- <form method="POST" action="{{ route('login') }}">
          @csrf

          <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

              <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

              <div class="col-md-6">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="form-group row">
              <div class="col-md-6 offset-md-4">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                      <label class="form-check-label" for="remember">
                          {{ __('Remember Me') }}
                      </label>
                  </div>
              </div>
          </div>

          <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Login') }}
                  </button>

                  @if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}">
                          {{ __('Forgot Your Password?') }}
                      </a>
                  @endif
              </div>
          </div>
      </form> -->
      <div class="nk-block toggled" id="l-login">

        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="nk-form">
              <div class="input-group">
                  <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                  <div class="nk-int-st">
                      <input type="text" class="form-control" name="email" placeholder="Username">
                  </div>
              </div>
              <div class="input-group mg-t-15">
                  <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                  <div class="nk-int-st">
                      <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
              </div>
              <div class="fm-checkbox">
                  <label><input type="checkbox" class="i-checks"> <i></i> Keep me signed in</label>
              </div>
              <a href="#l-register" data-ma-action="nk-login-switch" data-ma-block="#l-register" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></a>
              <button type="submit" class="btn btn-primary" style="background-color:#00c292;">
                  {{ __('Login') }}
              </button>
          </div>
    </form>
          <div class="nk-navigation nk-lg-ic">
              <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Register</span></a>
              <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
          </div>
      </div>
      <!-- Register -->
      <div class="nk-block" id="l-register">
          <div class="nk-form">
              <div class="input-group">
                  <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                  <div class="nk-int-st">
                      <input type="text" class="form-control" placeholder="Username">
                  </div>
              </div>

              <div class="input-group mg-t-15">
                  <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
                  <div class="nk-int-st">
                      <input type="text" class="form-control" placeholder="Email Address">
                  </div>
              </div>

              <div class="input-group mg-t-15">
                  <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                  <div class="nk-int-st">
                      <input type="password" class="form-control" placeholder="Password">
                  </div>
              </div>

              <a href="#l-login" data-ma-action="nk-login-switch" data-ma-block="#l-login" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow"></i></a>
          </div>

          <div class="nk-navigation rg-ic-stl">
              <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-login"><i class="notika-icon notika-right-arrow"></i> <span>Sign in</span></a>
              <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
          </div>
      </div>

      <!-- Forgot Password -->
      <div class="nk-block" id="l-forget-password">
          <div class="nk-form">
              <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>

              <div class="input-group">
                  <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
                  <div class="nk-int-st">
                      <input type="text" class="form-control" placeholder="Email Address">
                  </div>
              </div>

              <a href="#l-login" data-ma-action="nk-login-switch" data-ma-block="#l-login" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow"></i></a>
          </div>

          <div class="nk-navigation nk-lg-ic rg-ic-stl">
              <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-login"><i class="notika-icon notika-right-arrow"></i> <span>Sign in</span></a>
              <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Register</span></a>
          </div>
      </div>
  </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('js/wow.min.js')}}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('js/jquery-price-slider.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('js/jquery.scrollUp.min.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('js/meanmenu/jquery.meanmenu.js')}}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{ asset('js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('js/counterup/waypoints.min.js')}}"></script>
    <script src="{{ asset('js/counterup/counterup-active.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{ asset('js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('js/sparkline/sparkline-active.js')}}"></script>
    <!-- flot JS
		============================================ -->
    <script src="{{ asset('js/flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('js/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('js/flot/flot-active.js')}}"></script>
    <!-- knob JS
		============================================ -->
    <script src="{{ asset('js/knob/jquery.knob.js')}}"></script>
    <script src="{{ asset('js/knob/jquery.appear.js')}}"></script>
    <script src="{{ asset('js/knob/knob-active.js')}}"></script>
    <!--  wave JS
		============================================ -->
    <script src="{{ asset('js/wave/waves.min.js')}}"></script>
    <script src="{{ asset('js/wave/wave-active.js')}}"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{ asset('js/icheck/icheck.min.js')}}"></script>
    <script src="{{ asset('js/icheck/icheck-active.js')}}"></script>
    <!--  Chat JS
		============================================ -->
    <script src="{{ asset('js/chat/jquery.chat.js')}}"></script>
    <!--  todo JS
		============================================ -->
    <script src="{{ asset('js/todo/jquery.todo.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('js/plugins.js')}}"></script>
    <script src="{{ asset('js/login/login-action.js')}}"></script>
    <!-- main JS
    <script src="js/login/login-action.js"></script>
		============================================ -->
    <script src="{{ asset('js/main.js')}}"></script>
	<!-- tawk chat JS
		============================================ -->
    <script src="{{ asset('js/tawk-chat.js')}}"></script>
</body>

</html>
