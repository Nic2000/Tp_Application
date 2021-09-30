@extends("layouts.menu")
@section("content")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                <form method="POST" action="{{ route('addContact') }}">
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputEmail1">First name:</label>
                        <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @if ($errors->has('firstname'))
                            <p style="color: red">{{ $errors->first('firstname') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last name:</label>
                        <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @if ($errors->has('lastname'))
                            <p style="color: red">{{ $errors->first('lastname') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email:</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @if ($errors->has('email'))
                            <p style="color: red">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">City:</label>
                        <input type="text" name="city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @if ($errors->has('city'))
                            <p style="color: red">{{ $errors->first('city') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Country:</label>
                        <input type="text" name="country" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @if ($errors->has('country'))
                            <p style="color: red">{{ $errors->first('country') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Job title:</label>
                        <input type="text" name="jobtitle" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @if ($errors->has('jobtitle'))
                            <p style="color: red">{{ $errors->first('jobtitle') }}</p>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Add contact</button>
                  </form>
            </div>
        </div>
    </div>
    
</body>
</html>
@endsection