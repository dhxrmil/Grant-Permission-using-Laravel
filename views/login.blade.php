@extends('dashboard.authBase')

@section('content')
<!-- <html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
<i class="fa fa-eye"></i>
</body>
</html> -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-group">
        <div class="card p-4">
          <div class="card-body">
            <h1>Admin Login</h1><br>
            <!-- <p class="text-muted">Sign In to your account</p> -->
            @if($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
              <b><i> {{ $message }}</i></b>
            </div>
            @endif
            <form method="POST" action="login">
              @csrf
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-user"></use>
                    </svg>
                  </span>
                </div>
                <input class="form-control" type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autofocus>
              </div>
              <div class="input-group mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-lock-locked"></use>
                    </svg>
                  </span>
                </div>
                <input class="form-control" type="password" placeholder="{{ __('Password') }}" name="password" required>
              </div>
              <div class="row">
                <div class="col-6">
                  <button class="btn btn-primary px-4" type="submit">{{ __('Login') }}</button>
                </div>
            </form>
            <!--  <div class="col-6 text-right">
                        <a href="" class="btn btn-link px-0">{{ __('Forgot Your Password?') }}</a>
                    </div> -->
          </div>
        </div>
      </div>
      <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%;">
        <div class="card-body text-center">
          <div>
            <h2>Login to get the access</h2>
            <!--  @if (Route::has('password.request'))
                    <a href="{{ route('register') }}" class="btn btn-primary active mt-3">{{ __('Register') }}</a>
                  @endif -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection

@section('javascript')

@endsection