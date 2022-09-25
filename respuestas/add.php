<?php

include_once('../config/config.php');

include_once('cuestionario.php');

if ( isset($_POST) && !empty($_POST) ) {
    $p = cuestionario();
}

$save = $p->save($_POST);
if ($save){
    $mensaje = '<div class = "alert alert-success"  > Sus respuestas han sido enviadas correctamente </div>';
}else{
    $mensaje = '<div class = "alert alert-danger"  > Error al registrar </div>';
}



?>

<!DOCTYPE html>
<html lang="es"> 
  <head>
    <meta charset="utf-8">
    <title>PRUEBAS PSICOTECNICAS DE CONFIABILIDAD - VALANTI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

  
   <div class="container" >
    <h1 class="text-center">PRUEBAS PSICOTECNICAS DE CONFIABILIDAD - VALANTI</h1>

    <p>
        <br>
    Responda tal y como usted actúa en la vida real, con la máxima sinceridad posible. No intente dar una mejor imagen, pues la prueba lo detectará y saldrá nula. Responda TODAS las preguntas.
®1997, 2003, Ps. Octavio Escobar.
<br>
<br>
    </p>

<form action="" method="POST" enctype="multipart/form-data" >


<p>
<br>
<br>
   <h2>Información General</h2>
<br>
<br>

<div class="row mb-2"> 
    <div class="col">


<label for="">1. Documento de identidad</label> <!-- titulo del campo -->
    <input type="number" name="documento" id="documento"  placeholder="Ingrese solo números" class="form-control"  required ><!-- tipo numero -->
<br>

    </div>

</div>

<div class="col" > 
<label for="">2. Nombres</label> <!-- titulo del campo -->
    <input type="text" name="nombres" id="nombres"  placeholder="Primer y segundo nombre" class="form-control" required ><!-- tipo texto -->
<br>
</div>


<div class="row mb-2"> 
    <div class="col">


<label for="">3. Apellidos</label> <!-- titulo del campo -->
<input type="text"  name="apellidos" id="apellidos"  placeholder="Primer y segundo apellido"  class="form-control"  required ><!-- tipo texto -->
<br>

</div>

</div>


<div class="col" > 
<label for="">4. Edad</label> <!-- titulo del campo -->
    <input type="number" name="edad" id="edad"  placeholder="Ingrese solo números" class="form-control"  required ><!-- tipo numero -->
<br>
</div>


<div class="row mb-2"> 
    <div class="col">
<label for="">5. Género</label>
<select name="genero" id="genero">    

     <option value="" placeholder="-Seleccione-"  >  </option>
     <option value="Mujer">Mujer</option>
     <option value="Hombre">Hombre</option>
</select>
<br>
</div>

</div>

<div class="col" > 
<label for="">6. Ciudad</label> <!-- titulo del campo -->
    <input type="text" name="ciudad" id="ciudad"   placeholder="" class="form-control"   required ><!-- tipo texto -->
<br>
</div>



<div class="row mb-2"> 
    <div class="col">
<label for="">7. Ocupación</label> <!-- titulo del campo -->
    <input type="text" name="ocupacion" id="ocupacion"   placeholder="" required ><!-- tipo texto -->
<br>
</div>

</div>


<div class="col" > 
<label for="">8. Nivel de estudios</label> 

<select name="estudios" id="estudios">    

     <option value="" placeholder="-Seleccione-"  > </option>
     <option value="Primaria">Primaria</option>
     <option value="Secundaria">Secundaria</option>
     <option value="Técnico">Técnico</option>
     <option value="Tecnólogo">Tecnólogo</option>
     <option value="Universitario">Universitario</option>
     <option value="Postgrado">Postgrado</option>
</select>

</div>

<br>
<br>
<br>

    <h2>Cuestionario</h2>
<br>
<br>


9. Por favor, marque 0 , 1 , 2 ó 3, según la IMPORTANCIA que usted le da a cada frase en su vida personal. 
Las únicas opciones de respuesta, son: 3-0, 0-3, 2-1, 1-2.
La suma de las dos opciones a esta pregunta debe ser en total = 3.
<br>
<br>

<div class="row mb-2"> 
    <div class="col">

<label for="">Muestro dedicación a las personas que amo</label>
<select name="dedicacion" id="dedicacion">    

     <option value="" placeholder="-Seleccione-"  > </option>
     <option value="0">0</option>
     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
</select>

<br>

</div>

</div>


<div class="col" > 
<label for="">Actúo con perseverancia</label>
<select name="perseverancia" id="perseverancia">    

     <option value="" placeholder="-Seleccione-" > </option>
     <option value="0">0</option>
     <option value="2">2</option>
     <option value="3">3</option>
</select>
<br>
<br>
</div>


10. Por favor, marque 0 , 1 , 2 ó 3, según la IMPORTANCIA que usted le da a cada frase en su vida personal. 
Las únicas opciones de respuesta, son: 3-0, 0-3, 2-1, 1-2.
La suma de las dos opciones a esta pregunta debe ser en total = 3.
<br>
<br>

<div class="row mb-2"> 
    <div class="col">
</label>Soy tolerante<label for=""></label>
<select name="tolerante" id="tolerante">    

     <option value="" placeholder="-Seleccione-" > </option>
     <option value="0">0</option>
     <option value="2">2</option>
     <option value="3">3</option>
</select>

<br>

</div>

</div>


<div class="col" > 
</label>Prefiero actuar con ética<label for=""></label>
<select name="etica" id="etica">    

     <option value="" placeholder="-Seleccione-" > </option>
     <option value="0">0</option>
     <option value="2">2</option>
     <option value="3">3</option>
</select>
<br>
<br>
</div>


</p>

<button class="btn btn-success" >Enviar</button>
</form>


   </div>

  </body>
</html>
