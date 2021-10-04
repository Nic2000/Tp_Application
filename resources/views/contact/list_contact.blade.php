@extends("layouts.header.navbar")

@section("content")

<div class="container">
    <div class="row">


        <div class="col-md-12">

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
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                     @foreach ( $contacts as $contact)

                <tr>
                        <td scope="row">{{ $contact->id }}</td>
                        <td>{{ $contact->firstname.' '.$contact->lastname }} </td>
                        <td>
                            <a class="nav-link active" aria-current="page" id="test" href="{{ route('show',$contact->id) }}">
                                {{ $contact->email }}</a>
                        </td>
                        <td>{{ $contact->jobtitle  }}</td>
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
                                  <a class="nav-link active" aria-current="page" href="deleteContact?id={{$contact->id}}">
                                        {{-- <button   data-id="{{ $contact->id }}" id="suprimer"  class="btn btn-danger" >Delete</button> --}}
                                    <button type ="button" class="deleteRecord btn btn-danger" id="{{$contact->id}}" data-id="{{ $contact->id }}"   >Delete Record</button>
                                     </a>
                                </div>
                            </div>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">

// $(document).ready(function(){

//  fetch_data();

 function fetch_data(data)
 {
    for(var count=0; count < data.length; count++)
    {
        var html= '';
        html +='<tr>';
            html+='<td>'+$data[count]->id+'</td>';
            html+='<td>'+$data[count]->firsname+'</td>';
            html+='<td>'+$data[count]->lastname+'</td>';
            html+='<td>'+$data[count]->email+'</td>';
            html+='<td>'+$data[count]->city+'</td>';
            html+='<td>'+$data[count]->country+'</td>';
            html+='<td>'+$data[count]->jobtitle+'</td>';
            html+='<td><button type="button" class="btn btn-primary">Edit</button></td>';
            html+='<td><button type="button" class="deleteRecord btn btn-danger" id="'+$data[count]->id+'" data-id="'+$data[count]->id+'">Delete</button></td></tr>';
    }
    $('tbody').html(html);
}

// });
$(document).ready(function(){
    $(".deleteRecord").on('click',function(event){
        event.preventDefault();
        var id = $(this).data("id");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        if(confirm("Are you sure you want to delete this contact?"))
        {
            $.ajax({
                url:"{{ route('deleteContact') }}",
                method:"get",
                data:{id:id},
                success:function(data)
                {
                    alert("success");
                    //var contacts = JSON.stringify(data.success);
                    // var contact = JSON.parse(data.success);
                    //alert(contacts);
                    var contacts = data.success;
                    fetch_data(contacts.success);
                },
                error:function(data){
                    alert("ezrzer");
                    // fetch_data();
                }
            });
        }
    });
});

</script>


    </div>
</div>

