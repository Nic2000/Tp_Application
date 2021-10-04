<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <h1>Contact</h1>
                <ul class="nav">
                    <li class="nav-item">
                        {{-- <a href="{{ route('contact') }}"><button type="button" class="nav-link btn btn-primary">New contact</button></a> --}}
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            New conctat
                          </button>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('show') }}"><button type="button" class="nav-link btn btn-primary">Contacts</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
@yield('content')
<script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("") }}"></script>