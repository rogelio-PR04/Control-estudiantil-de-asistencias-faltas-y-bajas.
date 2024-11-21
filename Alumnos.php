<?php

$ID_Data=(isset($_POST['ID_Data']))?$_POST['ID_Data']:"";
$Nombre=(isset($_POST['Nombre']))?$_POST['Nombre']:"";
$Apellido_pat=(isset($_POST['Apellido_pat']))?$_POST['Apellido_pat']:"";
$Apellido_mat=(isset($_POST['Apellido_mat']))?$_POST['Apellido_mat']:"";
$Carrera=(isset($_POST['Carrera']))?$_POST['Carrera']:"";
$Num_control=(isset($_POST['Num_control']))?$_POST['Num_control']:"";
$Telefono=(isset($_POST['Telefono']))?$_POST['Telefono']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";

	switch($accion){
			case "btnRegistrar":
				echo "Registrar Alumno";
			break;
			case "btnModificar":
				echo "Modificar Alumno";
			break;
			case "btnEliminar":
				echo "Eliminar Alumno";
			break;
			case "btnCambiar":
				header('location: Docentes.php');
			break;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Módulo de alumnos</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"</script>
	<div class="container">
		<form action="" method="post" ectype="multipart/form-data" >
			<label for="ID_Data">ID Data:</label><br>
			<input type="text" id="ID_Data" name="ID_Data" value="<?php echo $ID_Data?>"><br>

			<label for="Nombre">Nombre:</label><br>
			<input type="text" id="Nombre" name="Nombre" value="<?php echo $Nombre?>"><br>
			
			<label for="Apellido_pat">Apellido paterno:</label><br>
			<input type="text" id="Apellido_pat" name="Apellido_pat" value="<?php echo $Apellido_pat?>"><br>

			<label for="Apellido_mat">Apellido materno:</label><br>
			<input type="text" id="Apellido_mat" name="Apellido_mat" value="<?php echo $Apellido_mat?>"><br>

			<label for="Carrera">Carrera:</label><br>
			<input type="text" id="Carrera" name="Carrera" value="<?php echo $Carrera?>"><br>

			<label for="Num_control">Numero de control:</label><br>
			<input type="text" id="Num_control" name="Num_control" value="<?php echo $Num_control?>"><br>

			<label for="Telefono">Telefono:</label><br>
			<input type="text" id="Telefono" name="Telefono" value="<?php echo $Telefono?>"><br>

			<br>
			<button value="btnRegistrar" type="submit" name="accion">Registrar </button>
			<button value="btnModificar" type="submit" name="accion">Modificar </button>
			<button value="btnEliminar" type="submit" name="accion">Eliminar </button>
			<button value="btnCambiar" type="submit" name="accion">Al módulo docentes</button>
		</form>
		<table class="table">
  			<thead>
    				<tr>
      					<th scope="col">ID de Alumno</th>
      					<th scope="col">ID de Datos</th>
      					<th scope="col">Nombre</th>
      					<th scope="col">Apellido paterno</th>
					<th scope="col">Apellido materno</th>
					<th scope="col">Carrera</th>
					<th scope="col">Num. control</th>
					<th scope="col">Teléfono</th>
    				</tr>
  			</thead>
  			<tbody>
    				<tr>
      					<th scope="row">1</th>
      					<td>1</td>
      					<td>Joselo</td>
					<td>Arriazas</td>
					<td>Domingo</td>
					<td>Ingeniería civil</td>
					<td>14845269</td>
					<td>33458541</td>
    				</tr>
    				<tr>
      					<th scope="row">2</th>
      					<td>2</td>
      					<td>Carriel</td>
					<td>Vargas</td>
					<td>Hardrade</td>
					<td>Gastronomía</td>
					<td>22548496</td>
					<td>33198550</td>
    				</tr>
    				<tr>
					<th scope="row">3</th>
      					<td>3</td>
      					<td>Diego</td>
					<td>Sentiel</td>
					<td>Yurukawa</td>
					<td>Ingeniería industrial</td>
					<td>16528475</td>
					<td>33345001</td>
    				</tr>
  			</tbody>
		</table>
	</div>
</body>
</html>
