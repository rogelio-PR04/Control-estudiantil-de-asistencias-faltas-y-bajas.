<?php
// Conectar a la base de datos
$db = new SQLite3('testDB');

try {
// Realizar una consulta para verificar la conexión
$result = $db->query('SELECT * FROM Contacto');

// Recorrer los resultados
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    echo "ID: " . $row['ID_Contacto'] . " Nombre: " . $row['Nombre'] . "Apellido: " . $row['Apellido'] . "Telefono: " . $row['Telefono'] . "Ubicacion: " . $row['Ubicacion'] . "<br>";
}

} catch (Exception $e) {
	echo "Error al conectarse a la base de datos: " . $e->getMessage();
}
?>