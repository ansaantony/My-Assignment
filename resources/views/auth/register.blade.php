<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Ice milk</title>
      <!--meta tags -->
      <meta charset="UTF-8">
     
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--booststrap-->
      <link href="css1/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css1/font-awesome.min.css" rel="stylesheet">
      <!-- //font-awesome icons -->
      <!--stylesheets-->
      <link href="css1/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Muli:300,400,600" rel="stylesheet">
   </head>
   <body>
  
      <div class="main-top" id="home">
         <!-- header -->
        
         <div class="headder-top">
    
            <div class="container-fluid">
               <!-- nav -->

               <nav >
                  <div id="logo">
                     <h1><a class="" href="/">Ice milk<span>Tasty cream</span></a></h1>
               </div>
                  <label for="drop" class="toggle">Menu</label>
                  <input type="checkbox" id="drop">
                  <ul class="menu mt-2">
                     <li class="active"><a href="/">Home</a></li>
                    
               
            @if (Route::has('login'))
               
                    @auth
                    <li class="active"> <a href="{{ url('/home') }}">Home</a> </li>
                    @else
                    <li class="active"> <a href="{{ route('login') }}">Login</a> </li>
                   @if (Route::has('register'))
                   <li class="active">   <a href="{{ route('register') }}">Register</a> </li>
                        @endif
                    @endauth
                </div>
            @endif

                  </ul>
               </nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <input id="type" type="hidden" name="type" value="User">
                        <input id="status" type="hidden" name="status" value="Unblocked">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
