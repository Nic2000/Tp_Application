<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrapCss/css/bootstrap.min.css') }}">
    <title>Add Contact</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <h4 class="navbar-brand">Contact</h4>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Add+ </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Liste</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

<div class="container-fluid my-5 mx-1">
 <div class="row">

    <div class="col-md-4"></div>

     <div class="col-md-4">
        <form action="{{ route('create') }} " method="">
            @csrf
            <div class="form-group">
                <h3>ADD CONTACT</h3>
            </div>
            <div class="form-group">
                <label>First Name</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="First Name"/>
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input class="form-control"  type="text" name="username" id="username" placeholder="Last Name"/>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="example@gmail.com"/>
            </div>
            <div class="form-group">
                <label>City</label>
                <input class="form-control" type="text" name="city" id="city" placeholder="City"/>
            </div>
            <div class="form-group">
                <label>Country</label>
                <input class="form-control" type="text" name="country" id="country" placeholder="Country"/>
            </div>
            <div class="form-group">
                <label>Title Job</label>
                <input class="form-control" type="text" name="job_title" id="job_title" placeholder="Title Job"/>
            </div>

            <input type="submit" value="Sign" class="btn btn-dark btn-block"/>

        </form>
     </div>

     <div class="col-md-4"></div>

 </div>
</div>

<div class="container-fluid my-2 mx-1">
    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-8">
            <h3>Liste Contacts teste(s)</h3>
           <table  class="table table-bordered border-primary">
               <tr>
                   <th>Fist Name</th>
                   <th>Last Name</th>
                   <th>Email</th>
                   <th>City</th>
                   <th>Country</th>
                   <th>Job Title</th>
               </tr>
               @foreach ( $contacts as $contact)

               <tr>
                   <th>{{ $contact->first_name }}</th>
                   <th>{{ $contact->last_name }}</th>
                   <th>{{ $contact->email }}</th>
                   <th>{{ $contact->city }}</th>
                   <th>{{ $contact->country }}</th>
                   <th>{{ $contact->job_title  }}</th>
               </tr>

               @endforeach

           </table>
        </div>

        <div class="col-md-2"></div>

    </div>
   </div>


</body>

{{-- <script src="{{asset('bootstrapCss/js/bootstrap.min.js')}}" type="javaScripts/css" /> --}}
</html>
