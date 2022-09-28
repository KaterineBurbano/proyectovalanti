<?php

include_once('../config/config.php');

include('../config/Database.php');


class cuestionario{

    public $conexion;
    function __construct()
    {
        $db = new Database();
        $this->conexion = $db->connectToDatabase();
    }

    function save($params){

        $documento = $params['documento'];
        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $edad = $params['edad'];
        $genero = $params['genero'];
        $ciudad = $params['ciudad'];
        $ocupacion = $params['ocupacion'];
        $estudios = $params['estudios'];
        $dedicacion = $params['dedicacion'];
        $perseverancia = $params['perseverancia'];
        $tolerante = $params['tolerante'];
        $etica = $params['etica'];  

        $insert = "INSERT INTO cuestionario VALUES ($documento, '$nombres', '$apellidos', $edad, '$genero', '$ciudad', '$ocupacion', '$estudios', $dedicacion, $perseverancia, $tolerante, $etica)";
        return mysqli_query($this->conexion, $insert);  /* Parse error: syntax error, unexpected 'return' (T_RETURN), expecting function (T_FUNCTION) or const (T_CONST) in C:\xampp\htdocs\cuestionario\respuestas\cuestionario.php on line 34 -  
        Parse error : error de sintaxis, 'retorno' inesperado (T_RETURN), esperando función (T_FUNCTION) o const (T_CONST) en C:\xampp\htdocs\cuestionario\respuestas\cuestionario.php en la línea 34*/
       
    }
   


}
?>