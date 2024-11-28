<?php

$ID_Carrera=(isset($_POST['ID_Carrera']))?$_POST['ID_Carrera']:"";
$ID_Administrativo=(isset($_POST['ID_Administrativo']))?$_POST['ID_Administrativo']:"";
$Nombre=(isset($_POST['Nombre']))?$_POST['Nombre']:"";
$Codigo_carrera=(isset($_POST['Codigo_carrera']))?$_POST['Codigo_carrera']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";

$database = new SQLite3('Crtl_Stdtl.db');

	switch($accion){
			case "btnRegistrar":
				if(!empty($_POST["ID_Administrativo"]) and !empty($_POST["Nombre"]) and !empty($_POST["Codigo_carrera"])){
					$query = "INSERT INTO Carrera (ID_Administrativo, Nombre, Codigo_carrera) VALUES ('$ID_Administrativo', '$Nombre', '$Codigo_carrera')";
					$database->exec($query);
					echo "Todo registrado";
				}else{
					echo "Alguno de los campos está vacío";
				}
			break;
			case "btnModificar":
				if(!empty($_POST["ID_Administrativo"]) and !empty($_POST["Nombre"]) and !empty($_POST["Codigo_carrera"])){
					$query = "UPDATE Carrera SET Nombre='$Nombre', Codigo_carrera='$Codigo_carrera' WHERE ID_Administrativo='$ID_Administrativo'";
					$database->exec($query);
					echo "Datos modificados";
				}else{
					echo "Alguno de los campos está vacío";
				}
			break;
			case "btnEliminar":
				$query = "DELETE FROM Carrera WHERE ID_Administrativo='$ID_Administrativo'";
				$resultado = $database->exec($query);
				if($resultado === false){
					echo "Error al eliminar";
				}else{
					echo "Datos eliminados";
				}
			break;
			case "btnCambiar":
				header('location: Materias.php');
			break;
	}
$database->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Módulo de carreras</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"</script>
	<div class="container">
		<form action="" method="post" ectype="multipart/form-data" >
			<label for="ID_Administrativo">ID Administrativo:</label><br>
			<input type="text" id="ID_Administrativo" name="ID_Administrativo" value="<?php echo $ID_Administrativo?>"><br>

			<label for="Nombre">Nombre:</label><br>
			<input type="text" id="Nombre" name="Nombre" value="<?php echo $Nombre?>"><br>
			
			<label for="Codigo_carrera">Codigo de carrera:</label><br>
			<input type="text" id="Codigo_carrera" name="Codigo_carrera" value="<?php echo $Codigo_carrera?>"><br>

			<br>
			<button value="btnRegistrar" type="submit" name="accion">Registrar </button>
			<button value="btnModificar" type="submit" name="accion">Modificar </button>
			<button value="btnEliminar" type="submit" name="accion">Eliminar </button>
			<button value="btnCambiar" type="submit" name="accion">Al módulo materias </button>
		</form>
		<table class="table">
  			<thead>
    				<tr>
      					<th scope="col">ID de Carrera</th>
      					<th scope="col">ID de Administrativo</th>
      					<th scope="col">Nombre</th>
					<th scope="col">Código de Carrera</th>
    				</tr>
  			</thead>
  			<tbody>
				<?php
					$db = new SQLite3('Crtl_Stdtl.db');
					$result = $db->query('SELECT * FROM Carrera');
					while ($row = $result->fetchArray(SQLITE3_ASSOC)) {?>
						<tr>
						<th scope="row"><?= $row['ID_Carrera'] ?></th>
						<td><?= $row['ID_Administrativo'] ?></td>
						<td><?= $row['Nombre'] ?></td>
						<td><?= $row['Codigo_carrera'] ?></td>
						</tr>
					<?php }
				?>
  			</tbody>
		</table>
	</div>
</body>
</html>
