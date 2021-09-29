<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 20px;">
                <h1>Contacts</h1>
                <a href="{{ route('contact') }}"><button type="button" class="btn btn-primary">New contact</button></a>
            </div>
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Job title</th>
                        <th scope="col">City</th>
                        <th scope="col">Country</th>
                        <th scope="col">Actions</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $s)
                            <tr>
                                <td>{{ $s->id }}</td>
                                <td>{{ $s->firstname." ".$s->lastname }}</td>
                                <td>{{ $s->email }}</td>
                                <td>{{ $s->jobTitle }}</td>
                                <td>{{ $s->city }}</td>
                                <td>{{ $s->country }}</td>
                                <td><a href=""><button type="button" class="btn btn-primary">Edit</button></a></td>
                                <td><a href="deleteContact?id={{$s->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
</body>
</html>
