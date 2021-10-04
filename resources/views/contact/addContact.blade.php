@extends("layouts.header.navbar")
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                <form id="form">
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputEmail1">First name:</label>
                        <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp">
                        @if ($errors->has('firstname'))
                            {{-- <p style="color: red">{{ $errors->first('firstname') }}</p> --}}
                            
                        @endif
                        <p id="firstname_error" style="color: red"></p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last name:</label>
                        <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp">
                        @if ($errors->has('lastname'))
                            {{-- <p style="color: red">{{ $errors->first('lastname') }}</p> --}}
                            
                        @endif
                        <p id="lastname_error" style="color: red"></p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email:</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                        @if ($errors->has('email'))
                            {{-- <p style="color: red">{{ $errors->first('email') }}</p> --}}
                            
                        @endif
                        <p id="email_error" style="color: red"></p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">City:</label>
                        <input type="text" name="city" class="form-control" id="city" aria-describedby="emailHelp">
                        @if ($errors->has('city'))
                            {{-- <p style="color: red">{{ $errors->first('city') }}</p> --}}
                            
                        @endif
                        <p id="city_error" style="color: red"></p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Country:</label>
                        <input type="text" name="country" class="form-control" id="country" aria-describedby="emailHelp">
                        @if ($errors->has('country'))
                            {{-- <p style="color: red">{{ $errors->first('country') }}</p> --}}
                            
                        @endif
                        <p id="country_error" style="color: red"></p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Job title:</label>
                        <input type="text" name="jobtitle" class="form-control" id="jobtitle" aria-describedby="emailHelp">
                        @if ($errors->has('jobtitle'))
                            {{-- <p style="color: red">{{ $errors->first('jobtitle') }}</p> --}}
                            
                        @endif
                        <p id="jobtitle_error" style="color: red"></p>
                    </div>

                    <button type="submit" class="btn btn-primary" id="submit">Add contact</button>
                  </form>
            </div>
        </div>
    </div>
        
    
    

    <script type="text/javascript">

        jQuery(document).ready(function(){
           jQuery('#submit').click(function(e){
              e.preventDefault();
              jQuery.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                 }
             });
            jQuery.ajax({
                url: "{{ route('create') }}",
                method: 'post',
                data: $('form').serialize(),
                success: function(data){
                    if($.isEmptyObject(data.error)){
                        alert(JSON.stringify(data.success));
                        $('#firstname').val('');
                        $('#lastname').val('');
                        $('#email').val('');
                        $('#city').val('');
                        $('#country').val('');
                        $('#jobtitle').val('');
                    }
                },
                error: function(data){
                    var userData=JSON.parse(data.responseText);

                    if(userData.errors!=null){
                        $('#firstname_error').append(userData.errors.firstname);
                        $('#lastname_error').append(userData.errors.lastname);
                        $('#email_error').append(userData.errors.email);
                        $('#city_error').append(userData.errors.city);
                        $('#country_error').append(userData.errors.country);
                        $('#jobtitle_error').append(userData.errors.jobtitle);
                    }
                }  
            });
            });
        });
</script>
@endsection

@extends("layouts.footer.footer")