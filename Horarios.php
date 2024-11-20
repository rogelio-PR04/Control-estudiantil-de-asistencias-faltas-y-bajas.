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
			<input type="text" id="ID_Carrera" name="ID_Carrera"><br>

			<label for="ID_Materia">ID Materia:</label><br>
			<input type="text" id="ID_Materia" name="ID_Materia"><br>

			<label for="Duracion">Nombre:</label><br>
			<input type="text" id="Duracion" name="Duracion"><br>

			<br>
			<button value="btnRegistrar" type="submit" name="accion">Registrar </button>
			<button value="btnModificar" type="submit" name="accion">Modificar </button>
			<button value="btnEliminar" type="submit" name="accion">Eliminar </button>
			<button value="btnCancelar" type="submit" name="accion">Cancelar </button>
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
    				<tr>
      					<th scope="row">1</th>
      					<td>1</td>
					<td>1</td>
					<td>17-02-2019</td>
    				</tr>
  			</tbody>
		</table>
	</div>
</body>
</html>
