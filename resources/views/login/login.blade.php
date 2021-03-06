<!doctype html>
<html lang="en">
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}

    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <title>SMA SWASTA ERIA</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/style/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('/style/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/style/dist/css/loginnew.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body id="body" class="hold-transition login-page">
    <div id="app">
        <section id="login">
            <div class="login-box">
                <div class="card">
                    <div class="card-body login-card-body text-center shadow pb-5">
                        <img src="/img/logoeria.png" alt="SMAERIA" style="width: 90px;" class="mt-4">
                        <h4 class="mt-2" style="letter-spacing: 1px;"><strong>Aplikasi Pendaftaran Siswa
                                (APSIS)</strong>
                        </h4>
                        <h6 style="font-size: 20px; font-family: Nunito Sans, Arial; letter-spacing: 1px;">SMA Swasta
                            Eria
                        </h6>
                        <p class="login-box-msg">-Silahkan Masuk-</p>

                        <form method="POST" action="#">
                            <div class="input-group mb-3 ">
                                <input id="email" type="email" class="form-control"
                                    name="email"  required autocomplete="email"
                                    placeholder="Email" autofocus>

                                {{-- @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror --}}
                            </div>

                            <div class="input-group mb-3">
                                <input id="password" type="password"
                                    class="form-control" name="password"
                                    required autocomplete="current-password" placeholder="Password">
{{-- 
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror --}}
                            </div>
                            {{-- @if (session('message'))
                            <div class="alert alert-danger alert-dismissible pr-1" role="alert">
                                {{ session('message') }}
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;
                                </button>                                
                            </div>
                            @endif --}}
                            <div class="row-md-2">
                                <button type="submit" class="btn btn-dark btn-block"
                                    style="background-color:  rgb(28, 47, 97);">
                                    {{ __('Masuk') }}
                                </button>

                                {{-- @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                                </a>
                                @endif --}}
                            </div>
                            <div class="row-md-2 pt-2">
                                <p class="mb-1"> Lupa Kata Sandi?
                                    <a href="#">Hubungi Admin</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('/style/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/style/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/style/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('/style/dist/js/demo.js') }}"></script>
</body>

</html>
