<?php 
// datos para la coneccion a mysql define('DB_SERVER','localhost'); 
 
define('DB_NAME','TU_BASE_DE_DATOS'); 
define('DB_USER','TU_USUARIO'); 
define('DB_PASS','TU_CLAVE');


class cuestionario{

public $conexion;
function _construct()
function __construct()
{
    $db = new Database();
    $this->conexion = $db->connectToDatabase();
 function save($params){

    $documento = $params['documento'];
    $nombres = $params['nombres'];
    $apellidos = $params[''];
    $edad = $params['apellidos'];
    $apellidos = $params['apellidos'];
    $edad = $params['edad'];
    $genero = $params['genero'];
    $ciudad = $params['ciudad'];
    $ocupación = $params['ocupación'];
    $ocupacion = $params['ocupacion'];
    $estudios = $params['estudios'];
    $dedicacion = $params['dedicacion'];
    $perseverancia = $params['perseverancia'];
    $tolerante = $params['tolerante'];
    $etica = $params['etica'];  

    $insert = "INSERT INTO cuestionario VALUES ($documento, '$nombres', '$apellidos', $edad, '$genero', '$ciudad', '$ocupación', '$estudios', $dedicacion, $perseverancia, $tolerante, $etica)";
    $insert = "INSERT INTO cuestionario VALUES ($documento, '$nombres', '$apellidos', $edad, '$genero', '$ciudad', '$ocupacion', '$estudios', $dedicacion, $perseverancia, $tolerante, $etica)";
    return mysqli_query($this->conexion, $insert);  /* Parse error: syntax error, unexpected 'return' (T_RETURN), expecting function (T_FUNCTION) or const (T_CONST) in C:\xampp\htdocs\cuestionario\respuestas\cuestionario.php on line 34 -  
    Parse error : error de sintaxis, 'retorno' inesperado (T_RETURN), esperando función (T_FUNCTION) o const (T_CONST) en C:\xampp\htdocs\cuestionario\respuestas\cuestionario.php en la línea 34*/

}
return mysqli_query($this->conexion, $insert);  /* Parse error: syntax error, unexpected 'return' (T_RETURN), expecting function (T_FUNCTION) or const (T_CONST) in C:\xampp\htdocs\cuestionario\respuestas\cuestionario.php on line 34 -  
Parse error : error de sintaxis, 'retorno' inesperado (T_RETURN), esperando función (T_FUNCTION) o const (T_CONST) en C:\xampp\htdocs\cuestionario\respuestas\cuestionario.php en la línea 34*/

CREATE TABLE `usuarios` (
    `idusuario` INT(11) NOT NULL AUTO_INCREMENT,
    `usuario` VARCHAR(20) NOT NULL,
    `password` VARCHAR(10) NOT NULL,
    PRIMARY KEY  (`idusuario`)
  )

}
