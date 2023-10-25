<?php
// Datos de conexión
$servername = "localhost";
$username = "root";
$password = "";
$database = "rocktechticket";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos";

// Cerrar la conexión cuando hayas terminado de trabajar con la base de datos

?>
