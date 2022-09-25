<?php

include_once('C:\xampp\htdocs\cuestionario\config\config.php'); 
getFolderProyect();



?>

<!DOCTYPE html>
<html lang="es"> 
  <head>
    <meta charset="utf-8">
    <title>BIENVENIDOS A LA WEB DE PRUEBAS PSICOTECNICAS DE CONFIABILIDAD DE JAS COLOMBIA</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand navbar-dark bg-dark mb-5" >
        <ul class='navbar-nav'>
            <li class="nav-item">
                <a class="nav-link"  href="#">Instrucciones</a>
            <li class="nav-item">
                
                <a class="nav-link" href="<?= ROOT ?>/respuestas/add.php" >Iniciar prueba Valanti</a>
            </li>        

            </li>

        </ul>

</nav>

<h1 class="text-center" >BIENVENIDOS A LA WEB DE PRUEBAS PSICOTECNICAS</h1>
<h1 class="text-center" >DE CONFIABILIDAD DE JAS COLOMBIA</h1>

  </body>
</html>
