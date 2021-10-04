
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> --}}
<link rel="stylesheet" href="{{ asset("bootstrapCss/css/bootstrap.min.css") }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
<link rel="stylesheet" href="{{ asset("bootstrapCss/font/font-awesome.min.css") }}">
{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
<script src="{{ asset("bootstrapCss/js/jquery.min.js") }}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> --}}
<script src="{{ asset('bootstrapCss/js/popper.min.js') }}"></script>
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> --}}
<script src="{{ asset('bootstrapCss/js/bootstrap.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset("stagiaire/table_stagiaire.css") }}">

<script>
    $(document).ready(function(){
        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Select/Deselect checkboxes
        var checkbox = $('table tbody input[type="checkbox"]');
        $("#selectAll").click(function(){
            if(this.checked){
                checkbox.each(function(){
                    this.checked = true;
                });
            } else{
                checkbox.each(function(){
                    this.checked = false;
                });
            }
        });
        checkbox.click(function(){
            if(!this.checked){
                $("#selectAll").prop("checked", false);
            }
        });
    });
</script>


</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion <b>Stagiaires</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter Nouveau Stagiaire</span></a>
						{{-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a> --}}
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						{{-- <th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th> --}}
                        <th>Matricule</th>
						<th>Nom</th>
						<th>Prénom</th>
						<th>Genre</th>
						<th>Fonction</th>
						<th>E-mail</th>
                        <th>Téléphone</th>
                        <th>Entreprise</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						{{-- <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td> --}}
                        <td>ST0012</td>
						<td>Thomas</td>
                        <td>Hardy</td>
                        <td>Masculin</td>
                        <td>Secretaire</td>
						<td>thomashardy@mail.com</td>
						<td>020 23 213 52</td>
						<td>Entreprise XXX</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="clearfix">
				{{-- <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div> --}}
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Précédent</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Suivant</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content p-3">
			<form id="form">
                <div class="modal-header">
					<h4 class="modal-title">Ajouter Stagiaire</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
                @csrf

                <div class="form-group">
                    <label for="exampleInputEmail1">Matricule:</label>
                    <input type="text" name="matricule" class="form-control" id="matricule" aria-describedby="emailHelp">
                    <p id="matricule_error" style="color: red"></p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nom:</label>
                    <input type="text" name="nom" class="form-control" id="nom" aria-describedby="emailHelp">
                    <p id="nom_error" style="color: red"></p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email:</label>
                    <input type="prenom" name="prenom" class="form-control" id="prenom" aria-describedby="emailHelp">
                    <p id="prenom_error" style="color: red"></p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Genre:</label>
                    <input type="text" name="genre" class="form-control" id="genre" aria-describedby="emailHelp">
                    <p id="genre_error" style="color: red"></p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Fonction:</label>
                    <input type="text" name="fonction" class="form-control" id="fonction" aria-describedby="emailHelp">
                    <p id="fonction_error" style="color: red"></p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail:</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <p id="email_error" style="color: red"></p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Téléphone:</label>
                    <input type="text" name="telephone" class="form-control" id="telephone" aria-describedby="emailHelp">
                    <p id="telephone_error" style="color: red"></p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Entreprise:</label>
                    <input type="text" name="entreprise" class="form-control" id="entreprise" aria-describedby="emailHelp">
                    <p id="entreprise_error" style="color: red"></p>
                </div>
                <button type="submit" class="btn btn-primary" id="submit">Ajouter stagiaire</button>
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


<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content p-3">
			<form id="form">
                <div class="modal-header">
					<h4 class="modal-title">Modofier Stagiaire</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
                @csrf

                <div class="form-group">
                    <label for="exampleInputEmail1">Matricule:</label>
                    <input type="text" name="matricule" class="form-control" id="matricule" aria-describedby="emailHelp">
                    <p id="matricule_error" style="color: red"></p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nom:</label>
                    <input type="text" name="nom" class="form-control" id="nom" aria-describedby="emailHelp">
                    <p id="nom_error" style="color: red"></p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Prénom:</label>
                    <input type="prenom" name="prenom" class="form-control" id="prenom" aria-describedby="emailHelp">
                    <p id="prenom_error" style="color: red"></p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Genre:</label>
                    <input type="text" name="genre" class="form-control" id="genre" aria-describedby="emailHelp">
                    <p id="genre_error" style="color: red"></p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Fonction:</label>
                    <input type="text" name="fonction" class="form-control" id="fonction" aria-describedby="emailHelp">
                    <p id="fonction_error" style="color: red"></p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail:</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <p id="email_error" style="color: red"></p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Téléphone:</label>
                    <input type="text" name="telephone" class="form-control" id="telephone" aria-describedby="emailHelp">
                    <p id="telephone_error" style="color: red"></p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Entreprise:</label>
                    <input type="text" name="entreprise" class="form-control" id="entreprise" aria-describedby="emailHelp">
                    <p id="entreprise_error" style="color: red"></p>
                </div>
                <button type="submit" class="btn btn-primary" id="submit">Modifier stagiaire</button>
              </form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content p-3">
			<form>
				<div class="modal-header">
					<h4 class="modal-title">Supprimer Stagiaire</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Êtes-vous sûr de vouloir supprimer ce stagiaire?</p>
					<p class="text-warning"><small>Cette action ne peut pas être annulée.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
					<input type="submit" class="btn btn-danger" value="Supprimer">
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
