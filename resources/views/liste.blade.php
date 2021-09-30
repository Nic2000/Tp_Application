<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TP_Numerika</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>

            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    
                </nav>
                <div class="row">
                
                
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                        <th scope="col" class="text-center">Id</th>
                        <th scope="col" class="text-center">Name</th>
                        <th scope="col" class="text-center">Laste Name</th>
                        <th scope="col" class="text-center">E-mail</th>
                        <th scope="col" class="text-center">City</th>
                        <th scope="col" class="text-center">Country</th>
                        <th scope="col" class="text-center">Job Title</th>
                        <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($liste_contact as $liste)
                            <tr>
                                <td class="text-center">{{$liste->id}}</td>
                                <td class="text-center">{{$liste->nom}}</td>
                                <td class="text-center">{{$liste->prenom}}</td>
                                <td class="text-center">{{$liste->email}}</td>
                                <td class="text-center">{{$liste->city}}</td>
                                <td class="text-center">{{$liste->country}}</td>
                                <td class="text-center">{{$liste->job}}</td>
                                <td class="row">

                                        <div class="col-xs-6">
                                           {{-- <a href="{{route('action',$liste->id)}}" > --}}
                                            <form  action="{{route('action',$liste->id)}}" method="get"> 
                                                <button type="submit" name="action" class="btn btn-primary">Edit</button>
                                          {{-- {{-- </a>   --}}
                                          </form>
                                        </div>

                                        <div class="col-xs-6">
                                            {{-- <form  action="{{route('action')}}" method="get"> --}}
                                                <button type="submit" name="action" value="delete" class="btn btn-danger">Delete</button>
                                            {{-- </form> --}}
                                        </div>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                </div>
            </div>

</body>
</html>
