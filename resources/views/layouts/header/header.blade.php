<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrapCss/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrapCss/js/jquery.min.js') }}" ></script>
    <script src="{{ asset('JS_add_contact/add_contact.js') }}" type = "text/javascript"></script>
    <title>Add Contact</title>
</head>
<body>

{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <h4 class="navbar-brand">Contact</h4>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('create') }}">contact Add+ </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Liste</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

     --}}


     @yield('content')





