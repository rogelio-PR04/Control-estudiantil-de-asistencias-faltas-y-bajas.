<?php
        // Conectar a la base de datos
	$db = new SQLite3('testDB');
       
        if(ISSET($_POST['register'])){
                //Estableciendo las variables
                $Correo = $_POST['Correo'];
                $Contrasenia = $_POST['Contrasenia'];
               
                // Consulta de inserción (Insert Query)
		try {
			// Realizar una consulta para verificar la conexión
			$result = $db->query('INSERT INTO `Data` (Correo, Contrasenia) VALUES(:Correo, :Contrasenia)');
                	$stmt->bindParam(':Correo', $Correo);
                	$stmt->bindParam(':Contrasenia', $Contrasenia);
                
			// Comprobar si la ejecución es un éxito
			if($stmt->execute()){
                        	//Fijando un éxito en la sesión ('success' session) para guardar el mensaje de éxito.
                        	$_SESSION['success'] = "Usuario guardado con éxito";
 
                        	//Redirección al módulo de 'Alumnos'
                        	header('location: Alumnos.php');
                	}
		
		} catch (Exception $e) {
			echo "Error en la consulta: " . $e->getMessage();
		}
 
        }
?>
