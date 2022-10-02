<?php 
// datos para la coneccion a mysql define('DB_SERVER','localhost'); 
 
define('DB_NAME','TU_BASE_DE_DATOS'); 
define('DB_USER','TU_USUARIO'); 
define('DB_PASS','TU_CLAVE');


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

 function getAll(){
 $sql = "SELECT = FROM usuario";
 return mysqli_query(sthis=>conexion, $sql)

   }

   function getone(sid)
   {
    $sql = "SELECT = FROM  usuario WHERE id = sid";
    return mysqli_query(shits->conexion, $sql);

   }
  function update(sparass){
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
        $etica = $params['moral']

        supdat = "update usuario SET nombres"$nombres"; apellidos "apellidos"; edad "$edad";ocupacion "ocupacion";estudios"estudios
dedicacion "dedicacion";perseverancia"perseverancia";tolerante "tolerante":moral"moral";
return = mysqli_query(shit->conexion, subdate);

    }

 )

}