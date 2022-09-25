<?php

class Database{
public $host = '127.0.0.1'; //Servidor - en el ejemplo del video aparece como localhost
public $user = 'root@localhost'; //Usuario de phpMyadmin - en el ejemplo del video aparece como root
public $pass = ''; // Contraseña de phpMyadmin
public $db = 'valanti' //Base de datos
public $conexion;

function connectToDatabase(){
    $this->conexion = mysqli_connect(  $this->host,$this->user,$this->pass, $this->db);

    if (mysqli_connect_error() ){
        echo ' Error de conexión '. mysqli_connect_error();
    }

    return $this->conexion;

}



}



?>
