     
   
   
       
       








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Personal</title>
</head>
<body>


<div class="container-fluid">

<!-- Inicio de formulario  -->
<form action="registro.php" method="post">

<label for="privilegio">ROL:</label>
        <select id="privilegio" name="privilegio">
        <?php
        include("listar-privilegios.php");
        ?>
        </select>
        <br><br>
    <label for="correo">email</label>
   <input type="email" id="correo" name="correo" placeholder="ejemplo@rocktechla.com">     
    <br><br>
    <label for="password">contraseña</label>
<input type="password" name="password" id="password" placeholder="contraseña">
    <br><br>

    <label for="departamento">Departamento</label>
   <select id="departamento" name="departamento">


  <?php
   include('listar-departamento.php');
  ?>
  
        </select>
<br><br>

<input type="submit" name="guardar" value='Guardar'>



</form>


<!-- fin de formulario  -->

</div>
    
</body>
</html>