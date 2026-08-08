<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - {{ config('app.name') }}</title>

    <!-- Custom fonts & styles -->
    <link href="{{ asset('sb-admin-2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('sb-admin-2/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-white">

    <div class="container">
        <!-- Row disesuaikan agar card lebih ramping (col-md-6 col-lg-5) -->
        <div class="row justify-content-center min-vh-100 align-items-center">
            <div class="col-xl-5 col-lg-6 col-md-8">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Single column tanpa membagi space untuk gambar -->
                        <div class="p-4 p-sm-5">
                            <div class="text-center mb-4">
                                <h1 class="h4 text-gray-900 font-weight-bold">Selamat Datang!</h1>
                            </div>

                            <form action="#" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <!-- Menggunakan form-control biasa (tanpa form-control-user) agar sudut tidak terlalu bulat -->
                                    <label for="">Username: </label>
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail"
                                        name="email" required autofocus>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Password: </label>
                                    <input type="password" class="form-control form-control-lg"
                                        id="exampleInputPassword" name="password" required>
                                </div>

                                <div class="form-group mb-4">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck"
                                            name="remember">
                                        <label class="custom-control-label" for="customCheck">Ingat Saya</label>
                                    </div>
                                </div>

                                <!-- Menggunakan btn-block standar (tanpa btn-user) -->
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Login
                                </button>
                            </form>

                            {{-- <hr class="my-4">

                            <div class="text-center">
                                <a class="small" href="#">Lupa Password?</a>
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sb-admin-2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('sb-admin-2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('sb-admin-2/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
