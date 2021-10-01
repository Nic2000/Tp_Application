<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrapCss/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrapCss/js/jquery.min.js') }}" ></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>Login</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">

            <img src="{{ asset('img/logo_numerika/logonmrk.png') }}" alt="logonmk" class="logo">

        </div>
      </nav>

        <div class="container my-5">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="shadow p-3 mb-5 bg-body  border-form-login">

                    <form id="form_add_contact">
                        @csrf

                    <div class=" design-login-tete mb-5">
                        <h1 class="text-center">Connexion</h1>

                    </div>
                    <div class="my-5">
                        <div class="form-group mx-3 mb-2">
                            <input class="form-control border-imput-login"  type="text" placeholder="email" >
                        </div>

                        <div class="form-group mx-3 mt-4">
                            <input class="form-control border-imput-login"  type="password" name="password" id="password" placeholder="Password"/>
                        </div>

                        <div class="form-group  my-2">
                            <h6 ><a href="#" class="forgot-login">Mot de passe oublié?</a></h6>
                        </div>
                    </div>
                    {{-- <div class="d-grid gap-2 col-6 mx-auto"> --}}
                        <div class="row   my-4">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <button type="button" class=" btn btn-login btn-lg">connexion</button>
                            </div>
                            <div class="col-md-2"></div>
                        </div>

                    {{-- </div> --}}

                            </form>
                    </div>

                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
</body>
<script src="{{ asset('bootstrapCss/js/bootstrap.min.js') }}" ></script>
<script src="{{ asset('bootstrapCss/js/bootstrap.bundle.min.js') }}" ></script>
</html>
