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
			<input type="text" id="ID_Carrera" name="ID_Carrera"><br>

			<label for="ID_Docente">ID Docente:</label><br>
			<input type="text" id="ID_Docente" name="ID_Docente"><br>

			<label for="Nombre">Nombre:</label><br>
			<input type="text" id="Nombre" name="Nombre"><br>
			
			<label for="Codigo_materia">Codigo de materia:</label><br>
			<input type="text" id="Codigo_materia" name="Codigo_materia"><br>

			<br>
			<button value="btnRegistrar" type="submit" name="accion">Registrar </button>
			<button value="btnModificar" type="submit" name="accion">Modificar </button>
			<button value="btnEliminar" type="submit" name="accion">Eliminar </button>
			<button value="btnCancelar" type="submit" name="accion">Cancelar </button>
		</form>
		<table class="table">
  			<thead>
    				<tr>
      					<th scope="col">ID de Carrera</th>
      					<th scope="col">ID de Docente</th>
      					<th scope="col">Nombre</th>
					<th scope="col">Código de Materia</th>
    				</tr>
  			</thead>
  			<tbody>
    				<tr>
      					<th scope="row">1</th>
      					<td>1</td>
					<td>Lenguajes y autómatas</td>
					<td>LA-0261</td>
    				</tr>
  			</tbody>
		</table>
	</div>
</body>
</html>
