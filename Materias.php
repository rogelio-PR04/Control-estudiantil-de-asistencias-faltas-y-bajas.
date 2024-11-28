<?php

$ID_Materia=(isset($_POST['ID_Materia']))?$_POST['ID_Materia']:"";
$ID_Carrera=(isset($_POST['ID_Carrera']))?$_POST['ID_Carrera']:"";
$ID_Docente=(isset($_POST['ID_Docente']))?$_POST['ID_Docente']:"";
$Nombre=(isset($_POST['Nombre']))?$_POST['Nombre']:"";
$Codigo_materia=(isset($_POST['Codigo_materia']))?$_POST['Codigo_materia']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";

$database = new SQLite3('Crtl_Stdtl.db');

	switch($accion){
			case "btnRegistrar":
				if(!empty($_POST["ID_Carrera"]) and !empty($_POST["ID_Docente"]) and !empty($_POST["Nombre"]) and !empty($_POST["Codigo_materia"])){
					$query = "INSERT INTO Materia (ID_Carrera, ID_Docente, Nombre, Codigo_materia) VALUES ('$ID_Carrera', '$ID_Docente', '$Nombre', '$Codigo_materia')";
					$database->exec($query);
					echo "Todo registrado";
				}else{
					echo "Alguno de los campos está vacío";
				}
			break;
			case "btnModificar":
				if(!empty($_POST["ID_Carrera"]) and !empty($_POST["ID_Docente"]) and !empty($_POST["Nombre"]) and !empty($_POST["Codigo_materia"])){
					$query = "UPDATE Materia SET Nombre='$Nombre', Codigo_materia='$Codigo_materia' WHERE ID_Carrera='$ID_Carrera'";
					$database->exec($query);
					echo "Datos modificados";
				}else{
					echo "Alguno de los campos está vacío";
				}
			break;
			case "btnEliminar":
				$query = "DELETE FROM Materia WHERE ID_Carrera='$ID_Carrera'";
				$resultado = $database->exec($query);
				if($resultado === false){
					echo "Error al eliminar";
				}else{
					echo "Datos eliminados";
				}
			break;
			case "btnCambiar":
				header('location: Horarios.php');
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
	<title>Módulo de materias</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"</script>
	<div class="container">
		<form action="" method="post" ectype="multipart/form-data" >
			<label for="ID_Carrera">ID Carrera:</label><br>
			<input type="text" id="ID_Carrera" name="ID_Carrera" value="<?php echo $ID_Carrera?>"><br>

			<label for="ID_Docente">ID Docente:</label><br>
			<input type="text" id="ID_Docente" name="ID_Docente" value="<?php echo $ID_Docente?>"><br>

			<label for="Nombre">Nombre:</label><br>
			<input type="text" id="Nombre" name="Nombre" value="<?php echo $Nombre?>"><br>
			
			<label for="Codigo_materia">Codigo de materia:</label><br>
			<input type="text" id="Codigo_materia" name="Codigo_materia" value="<?php echo $Codigo_materia?>"><br>

			<br>
			<button value="btnRegistrar" type="submit" name="accion">Registrar </button>
			<button value="btnModificar" type="submit" name="accion">Modificar </button>
			<button value="btnEliminar" type="submit" name="accion">Eliminar </button>
			<button value="btnCambiar" type="submit" name="accion">Al módulo horarios </button>
		</form>
		<table class="table">
  			<thead>
    				<tr>
						<th scope="col">ID de Materia</th>
      					<th scope="col">ID de Carrera</th>
      					<th scope="col">ID de Docente</th>
      					<th scope="col">Nombre</th>
						<th scope="col">Código de Materia</th>
    				</tr>
  			</thead>
  			<tbody>
				<?php
					$db = new SQLite3('Crtl_Stdtl.db');
					$result = $db->query('SELECT * FROM Materia');
					while ($row = $result->fetchArray(SQLITE3_ASSOC)) {?>
						<tr>
						<th scope="row"><?= $row['ID_Materia'] ?></th>
						<td><?= $row['ID_Carrera'] ?></td>
						<td><?= $row['ID_Docente'] ?></td>
						<td><?= $row['Nombre'] ?></td>
						<td><?= $row['Codigo_materia'] ?></td>
						</tr>
					<?php }
				?>
  			</tbody>
		</table>
	</div>
</body>
</html>
