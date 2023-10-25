<?php
include("conexion.php");





    if(!empty($_POST['correo']) && !empty($_POST['departamento']) && !empty($_POST['password']) && !empty($_POST['privilegio'])){

        $correo = $_POST['correo'];
        $departamento = $_POST['departamento'];
        $password = $_POST['password'];
        $privilegio = $_POST['privilegio']; 
     
          $sql ="INSERT INTO usuarios(correo,departamento_id,password,id_privilegio)
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



