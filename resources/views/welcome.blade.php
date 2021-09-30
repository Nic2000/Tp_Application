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
        <div class="container ">
            <nav class="navbar navbar-expand-lg navbar-light bg-light"></nav>
            <div class="row">
                <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <form  action="{{route('contact')}}" method="get">
                            @csrf
                            <div class="mb-3">
                                <label for="InputName" class="form-label">Firt Name</label>
                                <input type="text" name="nom" placeholder="First Name" class="form-control @error('nom') is invalid @enderror">
                                @error('nom')
                                <div class="invalid-feedback">
                                    Verifier votre nom
                                </div>
                                @enderror
                            </div><br>


                            <div class="mb-3">
                                <label for="InputLasteName" class="form-label">Laste Name</label>
                                <input type="text" name="prenom" placeholder="Laste Name" class="form-control @error('prenom') is invalid @enderror">
                                @error('prenom')
                                <div class="invalid-feedback">
                                    Verifier votre prenom
                                </div>
                                @enderror
                            </div><br>

                            <div class="mb-3">
                                <label for="InputEmail1" class="form-label">E-mail adress</label>
                                <input type="email" name="email" placeholder="Email" class="form-control @error('email') is invalid @enderror" aria-describedby="emailHelp">
                                @error('email')
                                <div class="invalid-feedback">
                                    Verifier votre E-mail
                                </div>
                                @enderror
                            </div><br>

                            <div class="mb-3">
                                <label for="InputCity" class="form-label">City</label>
                                <input type="text" name="city" placeholder="City" class="form-control @error('city') is invalid @enderror">
                            </div><br>

                            <div class="mb-3">
                                <label for="Inputcountry" placeholder="Country" class="form-label">Country</label>
                                <input type="text" name="country" placeholder="Country"   class="form-control @error('country') is invalid @enderror" id="InputPassword1">
                            </div><br>


                            <div class="mb-3">
                                <label for="InputCity" class="form-label">Job Title</label>
                                <input type="text" name="job" placeholder="Job title" class="form-control @error('job') is invalid @enderror">
                            </div><br>

                            <div class="mb-3">
                                <div class=" row col-xs-3" style="">
                                    <button type="submit" class="btn btn-primary" id="btnInsert">Add Contact</button>
                                </div>
                                <div class="col-xs-6">
                                </div>
                                <div class="col-xs-3" style="margin-top:10px">
                                    <a href="{{route('liste')}}">Liste Contact<a> 
                                </div>
                            </div><br>
                        </form>
                        </div>
                    <div class="col-lg-3"></div>
            </div>
        </div>
        <script src="">
        </script>
    </body>
</html>
