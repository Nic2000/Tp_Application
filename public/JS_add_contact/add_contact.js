jQuery(document).ready(function(){
    jQuery('#submit').click(function(e){
        e.preventDefault();
        jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        var url = "{{ url('create') }}";
        jQuery.ajax({

           // url: "{{ route('create') }}",
            url:url,
            method: 'post',
            data: $('#form_add_contact').serialize(),
            success: function(data){
                    if($.isEmptyObject(data.error)){
                        document.getElementById("success").innerHTML=data.success;
                    }

            },
        error: function(error){

                var userData=JSON.parse(error.responseText);

                if(userData.errors!=null){
                    document.getElementById("success").innerHTML='';
                    userData.errors.name ?
                        document.getElementById("error_name").innerHTML=userData.errors.name
                    :
                        document.getElementById("error_name").innerHTML='';
                    userData.errors.username ?
                        document.getElementById("error_username").innerHTML=userData.errors.username
                    :
                        document.getElementById("error_username").innerHTML='';
                    userData.errors.email ?
                        document.getElementById("error_email").innerHTML=userData.errors.email
                    :
                        document.getElementById("error_email").innerHTML='';
                    userData.errors.city ?
                        document.getElementById("error_city").innerHTML=userData.errors.city
                    :
                        document.getElementById("error_city").innerHTML='';
                    userData.errors.country ?
                        document.getElementById("error_country").innerHTML=userData.errors.country
                    :
                        document.getElementById("error_country").innerHTML='';
                    userData.errors.job_title ?
                        document.getElementById("error_job_title").innerHTML=userData.errors.job_title
                    :
                        document.getElementById("error_job_title").innerHTML='';

            }

        }
    });
});


});
