<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrapCss/css/bootstrap.min.css') }}">
    <script src="{{ asset("bootstrapCss/js/jquery.min.js") }}"></script>
    <script scr="{{ asset("bootstrapCss/js/jquery.validate.min.js") }}"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Add Contact</title>
</head>
<body>



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <h1>Contact</h1>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="{{ route('addContact') }}"><button type="button" class="btn btn-primary">New contact</button></a>
                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            New conctat
                          </button> --}}
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('show') }}"><button type="button" class=" btn btn-primary">Contacts</button></a>
                    </li>
                </ul>
            </div>

            

            </div>
        </div>
    </div>

    


     @yield('content')





