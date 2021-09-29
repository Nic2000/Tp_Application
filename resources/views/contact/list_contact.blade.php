@extends("layouts.header.navbar")

@section("content")

<div class="container my-5">
    <div class="row">


        <div class="col-md-2"></div>

        <div class="col-md-10 mx-1">

            <div class="form-group">
                <h1>Contacts</h1>
            </div>

            <div class="form-group  mb-5">
                <a class="nav-link active" aria-current="page" href="{{ route('add_contact') }}">
                    <button type="button" class="btn btn-primary">New Contact</button>
                </a>
            </div>

            <table class="table  table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">City</th>
                    <th scope="col">Country</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ( $contacts as $contact)

                    <tr>
                        <td scope="row">{{ $contact->id }}</td>
                        <td>{{ $contact->first_name.' '.$contact->last_name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->job_title  }}</td>
                        <td>{{ $contact->city }}</td>
                        <td>{{ $contact->country }}</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a class="nav-link active" aria-current="page" href="#">
                                        <button type="button" class="btn btn-primary">Edit</button>
                                    </a>
                                    </div>
                                <div class="col">
                                    <a class="nav-link active" aria-current="page" href="#">
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </a>
                                </div>
                            </div>
                        </td>

                    </tr>

                @endforeach


                </tbody>
            </table>

        </div>

        <div class="col-md-2"></div>

@endsection

    </div>
</div>

