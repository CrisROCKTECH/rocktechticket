<?php

include("conexion.php");


$sql = "SELECT id_departamento, departamento FROM departamento";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while ($sql = $resultado->fetch_assoc()) {
        echo "<option value='" . $sql['id_departamento'] . "'>" . $sql['departamento'] . "</option>";
    }
} else {
    echo "<option value=''>No hay opciones disponibles</option>";
}

$conn->close();


?>