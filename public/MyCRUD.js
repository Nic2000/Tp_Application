$(document).ready(function() {
   
    $('#btnInsert').on('click', function() {
      var nom = $('#nom').val();
       var name = $('#prenom').val();
      var email = $('#email').val();
      var city = $('#city').val();
      var country = $('#country').val();
      var job = $('#job').val();
      if(nom!="" && prenom!="" && email!="" && city!="" && country!="" && job!=""){
        /*  $("#btnInsert").attr("disabled", "disabled"); */
          $.ajax({
              url: "/userData",
              type: "POST",
              data: {
                  _token: $("#csrf").val(),
                  type: 1,
                  nom: nom,
                  email: email,
                  city: city,
                  country: country,
                  job: job,
              },
              cache: false,
              success: function(dataResult){
                  console.log(dataResult);
                  var dataResult = JSON.parse(dataResult);
                  if(dataResult.statusCode==200){
                    window.location = "/userData";				
                  }
                  else if(dataResult.statusCode==201){
                     alert("Error occured !");
                  }
                  
              }
          });
      }
      else{
          alert('Please fill all the field !');
      }
  });
});