<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Inicio</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}
</style>
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
	<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		  <a class="navbar-brand" href="#">Iglesia</a>
		  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item active">
			  <a class="nav-link" href="#">Ermitas</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#">Servicios</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#">Servidores</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Voluntarios</a>
			  </li>
		  </ul>
		  <form class="form-inline my-2 my-lg-0">
			<button class="btn-danger" type="button" href="">Desconectar</button>
		  </form>
		</div>
	  </nav>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Administrar <b>Datos</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar Nuevo</span></a>					
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Patron 1</th>
						<th>Patron 2</th>
						<th>Calle</th>
						<th>Colonia</th>
						<th>Codigo Postal</th>
						<th>Sector</th>
						<th>Zona</th>
						<th>Coordenadas</th>
						<th>Sect</th>
						<th>Tes</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
					<?php
						include '../includes/dbh.inc.php';
						$sql = "SELECT * FROM ermitas";
						$result = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_assoc($result)) {
							?>
							<tr>
								<td class="id" style="display:none;"><?php echo $row['idnE'] ?></td>
								<td class="p1"><?php echo $row['patron1'] ?></td>
								<td class="p2"><?php echo $row['patron2'] ?></td>
								<td class="calle"><?php echo $row['calle'] ?></td>
								<td class="colonia"><?php echo $row['col'] ?></td>
								<td class="cp"><?php echo $row['CP'] ?></td>
								<td class="sector"><?php echo $row['sector'] ?></td>
								<td class="zonaA"><?php echo $row['zonaA'] ?></td>
								<td class="coord"><?php echo $row['coord'] ?></td>
								<td class="sect"><?php echo $row['sect'] ?></td>
								<td class="tes"><?php echo $row['tes'] ?></td>
								<td>
									<a href="#editEmployeeModal" class="edit edit_btn" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
									<a href="#deleteEmployeeModal" class="delete delete_btn" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
								</td>
							</tr>
							<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>        
</div>
<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="../includes/add.inc.php" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Agregar Nuevo</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Patron 1</label>
						<input type="text" class="form-control" required name="AddPatron1">
					</div>
					<div class="form-group">
						<label>Patron 2</label>
						<input type="text" class="form-control" required name="AddPatron2">
					</div>
					<div class="form-group">
						<label>Calle</label>
						<input type="text" class="form-control" required name="AddCalle">
					</div>
					<div class="form-group">
						<label>Colonia</label>
						<input type="text" class="form-control" required name="AddColonia">
					</div>
					<div class="form-group">
						<label>Codigo Postal</label>
						<input type="text" class="form-control" required name="AddCP">
					</div>
					<div class="form-group">
						<label>Sector</label>
						<input type="text" class="form-control" required name="AddSector">
					</div>
					<div class="form-group">
						<label>Zona</label>
						<input type="text" class="form-control" required name="AddZona">
					</div>
					<div class="form-group">
						<label>Coordenadas</label>
						<input type="text" class="form-control" required name="AddCoordenadas">
					</div>
					<div class="form-group">
						<label>Sect</label>
						<input type="text" class="form-control" required name="AddSect">
					</div>
					<div class="form-group">
						<label>Tes</label>
						<input type="text" class="form-control" required name="AddTes">
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-success" value="Agregar" name="addData">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="../includes/update.inc.php" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Editar Dato</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Patron 1</label>
						<input type="hidden" name="edit_id" id="edit_id">
						<input type="text" class="form-control" required name="EditPatron1" id="EditPatron1">
					</div>
					<div class="form-group">
						<label>Patron 2</label>
						<input type="text" class="form-control" required name="EditPatron2" id="EditPatron2">
					</div>
					<div class="form-group">
						<label>Calle</label>
						<input type="text" class="form-control" required name="EditCalle" id="EditCalle">
					</div>
					<div class="form-group">
						<label>Colonia</label>
						<input type="text" class="form-control" required name="EditColonia" id="EditColonia">
					</div>
					<div class="form-group">
						<label>Codigo Postal</label>
						<input type="text" class="form-control" required name="EditCP" id="EditCP">
					</div>
					<div class="form-group">
						<label>Sector</label>
						<input type="text" class="form-control" required name="EditSector" id="EditSector">
					</div>
					<div class="form-group">
						<label>Zona</label>
						<input type="text" class="form-control" required name="EditZona" id="EditZona">
					</div>
					<div class="form-group">
						<label>Coordenadas</label>
						<input type="text" class="form-control" required name="EditCoordenadas" id="EditCoordenadas">
					</div>
					<div class="form-group">
						<label>Sect</label>
						<input type="text" class="form-control" required name="EditSect" id="EditSect">
					</div>
					<div class="form-group">
						<label>Tes</label>
						<input type="text" class="form-control" required name="EditTes" id="EditTes">
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-info" value="Guardar" name="updateData">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="../includes/delete.inc.php" method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Eliminar</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<input type="hidden" name="delete_id" id="delete_id">				
					<p>Esta seguro que desea eliminar esta entrada?</p>
					<p class="text-warning"><small>Esta accion no puede ser revertida.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-danger" value="Eliminar" name="deleteData">
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {
		
		$('.delete_btn').click(function (e) {
			e.preventDefault();
			var id = $(this).closest('tr').find('.id').text();
			$('#delete_id').val(id);
			console.log(id);
		});

		$('.edit_btn').click(function (e) {
			e.preventDefault();
			
			$tr = $(this).closest('tr');

			var data = $tr.children('td').map(function() {
				return $(this).text();
			}).get();
			console.log(data);

			$('#edit_id').val(data[0]);
			$('#EditPatron1').val(data[1]);
			$('#EditPatron2').val(data[2]);
			$('#EditCalle').val(data[3]);
			$('#EditColonia').val(data[4]);
			$('#EditCP').val(data[5]);
			$('#EditSector').val(data[6]);
			$('#EditZona').val(data[7]);
			$('#EditCoordenadas').val(data[8]);
			$('#EditSect').val(data[9]);
			$('#EditTes').val(data[10]);
		});
	});
</script>
</body>
</html>