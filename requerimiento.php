<?php
include("conexion.php");



// Resto de tu código aquí
?>













<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA TICKET</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-image:none">
<!--  Inicio Navbar  -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--  fin Navbar  -->

<div class="container">

<form action="" method="post">

<input type="button" value="Requerimientos Solicitados">
</form>

<div class="titulo-principal">
<h1 style="text-align: center;">Requerimientos</h1>
<br>
<br>








<!-----------------------  inicio formulario requerimiento  --------------------------->



<div class="formulario">
<form action="tabla-requerimientos.php" method="POST" enctype="multipart/form-data">
    

    <label for="asunto">Asunto</label><br>
    <input type="asunto" id="asunto" name="asunto" placeholder="asunto" required >
    
    <br><br>
    
    
      




     <label for="requerimiento">Requerimiento</label><br>
     <textarea id="requerimiento" name="requerimiento" rows="4" cols="50" required ></textarea>
     
     
     <br><br>
     
     
        <label for="archivo">Adjuntar archivo:</label><br><br>
        <input type="file" id="archivo" name="archivo" multiple>

        <br><br>
        
        
        <input type="submit" value="Enviar">   

</form>





</div>


<!--  fin formulario requerimiento  -->


</div>

  



<!--   <label for="departamento">Departamento:</label><br>
        <select id="departamento" name="departamento" required >

                            <option value="RRHH">Gerencia</option>
                            <option value="RRHH">RRHH</option>
                            <option value="INGENIERIA">Ingenieria</option>
                            <option value="OPERACIONES">Operaciones</option>
                            <option value="MARKETING">Marketing</option>
                            <option value="adquisiciones">Adquisiciones</option>
        </select>
        <br><br><br>

-->
</body>
</html>