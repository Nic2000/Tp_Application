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

                        <!-- champs pré-remplis !-->
                                @foreach($select_contact as $contact)
                                <form  action="{{route('modifier',$contact->id)}}" method="get">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="InputName" class="form-label">Firt Name</label>
                                        <input type="text" name="nom" value="{{$contact->nom}}" class="form-control @error('nom') is invalid @enderror">
                                        @error('nom')
                                        <div class="container alert alert-success">
                                            Verifier votre nom
                                        </div>
                                        @enderror
                                    </div><br>


                                    <div class="mb-3">
                                        <label for="InputLasteName" class="form-label">Laste Name</label>
                                        <input type="text" name="prenom" value="{{$contact->prenom}}" class="form-control @error('prenom') is invalid @enderror">
                                        @error('prenom')
                                        <div class="invalid-feedback">
                                            <p class='txt-primary'>Verifier votre prenom</p> 
                                        </div>
                                        @enderror
                                    </div><br>

                                    <div class="mb-3">
                                        <label for="InputEmail1" class="form-label">E-mail adress</label>
                                        <input type="email" name="email" value="{{$contact->email}}" class="form-control @error('email') is invalid @enderror" aria-describedby="emailHelp">
                                        @error('email')
                                        <div class="invalid-feedback">
                                            Verifier votre E-mail
                                        </div>
                                        @enderror
                                    </div><br>

                                    <div class="mb-3">
                                        <label for="InputCity" class="form-label">City</label>
                                        <input type="text" name="city" value="{{$contact->city}}" class="form-control @error('city') is invalid @enderror">
                                         @error('prenom')
                                        <div class="invalid-feedback">
                                            <p class='txt-primary'>Verifier votre Email</p> 
                                        </div>
                                        @enderror
                                    </div><br>

                                    <div class="mb-3">
                                        <label for="Inputcountry" placeholder="Country" class="form-label">Country</label>
                                        <input type="text" name="country" value="{{$contact->country}}" class="form-control @error('country') is invalid @enderror" id="InputPassword1">
                                    </div><br>


                                    <div class="mb-3">
                                        <label for="InputJob" class="form-label">Job Title</label>
                                        <input type="text" name="job" value="{{$contact->job}}" class="form-control @error('job') is invalid @enderror">
                                    </div><br>
                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                </form>
                                 @endforeach
                                </div>
                                <div class="col-lg-3"></div>
                           
            </div>
        </div>
    </body>
</html>
