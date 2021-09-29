 <!--         header  -->
@extends("layouts/header/navbar")

@section("content")


    <div class="col-md-3"></div>

    <div class="col-md-6">
    <form action="{{ route('contact.create') }} " method="">
        @csrf
        <div class="form-group">
            <h2>Add Contact</h2>
        </div>

        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        <div class="form-group">
            <label>First Name</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="First Name"/>

            @if ($errors->has('name'))
                <div class="error">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input class="form-control"  type="text" name="username" id="username" placeholder="Last Name"/>

            @if ($errors->has('username'))
                <div class="error">
                    {{ $errors->first('username') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="example@gmail.com"/>

            @if ($errors->has('email'))
                <div class="error">
                    {{ $errors->first('email') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>City</label>
            <input class="form-control" type="text" name="city" id="city" placeholder="City"/>

            @if ($errors->has('city'))
                <div class="error">
                    {{ $errors->first('city') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Country</label>
            <input class="form-control" type="text" name="country" id="country" placeholder="Country"/>

            @if ($errors->has('country'))
                <div class="error">
                    {{ $errors->first('country') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Title Job</label>
            <input class="form-control" type="text" name="job_title" id="job_title" placeholder="Title Job"/>

            @if ($errors->has('job_title'))
                <div class="error">
                    {{ $errors->first('job_title') }}
                </div>
            @endif
        </div>

        <input type="submit" value="Add Contact"/>

    </form>
    </div>

    <div class="col-md-3"></div>



@endsection

 <!--          footer  -->
@extends('layouts/footer/footer')
