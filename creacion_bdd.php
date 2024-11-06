<?php
// 1. Establecer una conexión a la base de datos SQLite
$db = new SQLite3('Crtl_Stdtl.db'); // Reemplaza con el nombre de tu base de datos

$db->enableExceptions(true);

// 2. Leer el archivo SQL
$sql = file_get_contents('instrucciones_CS.sql');

// 3. Ejecutar las instrucciones SQL
$resultado = $db->exec($sql);

// 4. Verificar si la ejecución fue exitosa
if ($resultado === false) {
    echo "Error al ejecutar las instrucciones SQL: " . $db->lastErrorMsg();
} else {
    echo "Instrucciones SQL ejecutadas correctamente.";
}

// 5. Cerrar la conexión a la base de datos
$db->close();
?>