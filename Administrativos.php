<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Módulo de administrativos</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"</script>
	<div class="container">
		<form action="" method="post" ectype="multipart/form-data" >
			<label for="ID_Data">ID Data:</label><br>
			<input type="text" id="ID_Data" name="ID_Data"><br>

			<label for="Nombre">Nombre:</label><br>
			<input type="text" id="Nombre" name="Nombre"><br>
			
			<label for="Apellido_pat">Apellido paterno:</label><br>
			<input type="text" id="Apellido_pat" name="Apellido_pat"><br>

			<label for="Apellido_mat">Apellido materno:</label><br>
			<input type="text" id="Apellido_mat" name="Apellido_mat"><br>

			<label for="Carrera">Carrera:</label><br>
			<input type="text" id="Carrera" name="Carrera"><br>

			<label for="Num_control">Numero de control:</label><br>
			<input type="text" id="Num_control" name="Num_control"><br>

			<label for="Telefono">Telefono:</label><br>
			<input type="text" id="Telefono" name="Telefono"><br>

			<br>
			<button value="btnRegistrar" type="submit" name="accion">Registrar </button>
			<button value="btnModificar" type="submit" name="accion">Modificar </button>
			<button value="btnEliminar" type="submit" name="accion">Eliminar </button>
			<button value="btnCancelar" type="submit" name="accion">Cancelar </button>
		</form>
	</div>
</body>
</html>