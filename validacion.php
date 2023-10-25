<?php

include('conexion.php');



if(!empty($_POST['correo']) && !empty($_POST['password'])){

    $correo = $_POST['correo'];
    $password = $_POST['password'];
    
 
      $sql ="SELECT usuarios(correo,password)
      VALUES ('$correo','$departamento','$password','$privilegio')";

     if ($conn->query($sql) === TRUE) {
        echo "Registro insertado con éxito.";
    } else {
        echo "Error al insertar el registro: " . $conn->error;
    }
    
    // Cerrar la conexión a la base de datos
    $conn->close();




}











?>