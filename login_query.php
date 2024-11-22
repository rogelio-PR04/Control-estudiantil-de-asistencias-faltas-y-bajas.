<?php
require_once 'creacion_bdd.php';
// Conectar a la base de datos SQLite
$database = new SQLite3('Crtl_Stdtl.db');

if(ISSET($_POST['register'])){

// Datos de ejemplo
$Correo = $_POST['Correo'];
$Contrasenia = $_POST['Contrasenia'];

try {

// Escapar las entradas
$Correo = $database->escapeString($Correo);
$Contrasenia = $database->escapeString($Contrasenia);

// Insertar los datos en la tabla usuarios
$query = "INSERT INTO Data (Correo, Contrasenia) VALUES ('$Correo', '$Contrasenia')";
$database->exec($query);

header('location: Alumnos.php');

} catch (Exception $e) {
echo "Error en la consulta: " . $e->getMessage();
}

}

// Cerrar la conexión a la base de datos
$database->close();
?>
