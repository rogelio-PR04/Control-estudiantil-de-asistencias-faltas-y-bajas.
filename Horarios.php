<?php

$ID_Horario=(isset($_POST['ID_Horario']))?$_POST['ID_Horario']:"";
$ID_Carrera=(isset($_POST['ID_Carrera']))?$_POST['ID_Carrera']:"";
$ID_Materia=(isset($_POST['ID_Materia']))?$_POST['ID_Materia']:"";
$Duracion=(isset($_POST['Duracion']))?$_POST['Duracion']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";

$database = new SQLite3('Crtl_Stdtl.db');

	switch($accion){
			case "btnRegistrar":
				if(!empty($_POST["ID_Carrera"]) and !empty($_POST["ID_Materia"]) and !empty($_POST["Duracion"])){
					$query = "INSERT INTO Horario (ID_Carrera, ID_Materia, Duracion) VALUES ('$ID_Carrera', '$ID_Materia', '$Duracion')";
					$database->exec($query);
					echo "Todo registrado";
				}else{
					echo "Alguno de los campos está vacío";
				}
			break;
			case "btnModificar":
				if(!empty($_POST["ID_Carrera"]) and !empty($_POST["ID_Materia"]) and !empty($_POST["Duracion"])){
					$query = "UPDATE Horario SET Duracion='$Duracion' WHERE ID_Carrera='$ID_Carrera'";
					$database->exec($query);
					echo "Datos modificados";
				}else{
					echo "Alguno de los campos está vacío";
				}
			break;
			case "btnEliminar":
				$query = "DELETE FROM Horario WHERE ID_Carrera='$ID_Carrera'";
				$resultado = $database->exec($query);
				if($resultado === false){
					echo "Error al eliminar";
				}else{
					echo "Datos eliminados";
				}
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
	<title>Módulo de horarios</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"</script>
	<div class="container">
		<form action="" method="post" ectype="multipart/form-data" >
			<label for="ID_Carrera">ID Carrera:</label><br>
			<input type="text" id="ID_Carrera" name="ID_Carrera" value="<?php echo $ID_Carrera?>"><br>

			<label for="ID_Materia">ID Materia:</label><br>
			<input type="text" id="ID_Materia" name="ID_Materia" value="<?php echo $ID_Materia?>"><br>

			<label for="Duracion">Duración:</label><br>
			<input type="text" id="Duracion" name="Duracion" value="<?php echo $Duracion?>"><br>

			<br>
			<button value="btnRegistrar" type="submit" name="accion">Registrar </button>
			<button value="btnModificar" type="submit" name="accion">Modificar </button>
			<button value="btnEliminar" type="submit" name="accion">Eliminar </button>
		</form>
		<table class="table">
  			<thead>
    				<tr>
      					<th scope="col">ID de Horario</th>
      					<th scope="col">ID de Carrera</th>
      					<th scope="col">ID de Materia</th>
					<th scope="col">Duración</th>
    				</tr>
  			</thead>
  			<tbody>
				<?php
					$db = new SQLite3('Crtl_Stdtl.db');
					$result = $db->query('SELECT * FROM Horario');
					while ($row = $result->fetchArray(SQLITE3_ASSOC)) {?>
						<tr>
						<th scope="row"><?= $row['ID_Horario'] ?></th>
						<td><?= $row['ID_Carrera'] ?></td>
						<td><?= $row['ID_Materia'] ?></td>
						<td><?= $row['Duracion'] ?></td>
						</tr>
					<?php }
				?>
  			</tbody>
		</table>
	</div>
</body>
</html>
