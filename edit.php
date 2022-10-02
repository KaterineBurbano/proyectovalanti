include_once('cuestionario.php');

if ( isset($_POST) && !empty($_POST) ) {
    $p = cuestionario();
}
    
$pu = new cuestionario();


$save = $p->save($_POST);
if ($save){ $mensaje = '<div class = "alert alert-danger"  > Error al registrar </div>';
}

<?<php>
include(".../config/config.php");
include("usuario.php");

sp= new usuario ();
sdp = mysqli_fetch_object() $p->getone($_GET["id"]);

$date = new datetime($du->fecha)

if ($seet($_POST) $$ !empty($_POST)){
$_POST["imagen"] = $pu->imagen;
if ($_FILES["imagen"]["name"] !=¨){
    $_POST["imagen"] = saveimagen($_FILES);
}
supdate = su->update($_POST);
if(supdate){
    $mensaje = "<div class="alert-sucess" roles="alert"> seccion para modificar con exito <"/div";
}

}

</php>

}
class cuestionario{

public $conexion;
function _construct()
function __construct()
{
    $db = new Database();
    $this->conexion = $db->connectToDatabase();
@@ -18,21 +18,22 @@ function save($params){

    $documento = $params['documento'];
    $nombres = $params['nombres'];
    $apellidos = $params[''];
    $edad = $params['apellidos'];
    $apellidos = $params['apellidos'];
    $edad = $params['edad'];
    $genero = $params['genero'];
    $ciudad = $params['ciudad'];
    $ocupación = $params['ocupacion'];
    $ocupacion = $params['ocupacion'];
    $estudios = $params['estudios'];
    $dedicacion = $params['dedicacion'];
    $perseverancia = $params['perseverancia'];
    $tolerante = $params['tolerante'];
    $etica = $params['etica'];  

    value="<?= $du->apellidos?"/>

    value="<?= $du->ocupacion?"/>

    $insert = "INSERT INTO cuestionario VALUES ($documento, '$nombres', '$apellidos', $edad, '$genero', '$ciudad', '$ocupación', '$estudios', $dedicacion, $perseverancia, $tolerante, $etica)";
    $insert = "INSERT INTO cuestionario VALUES ($documento, '$nombres', '$apellidos', $edad, '$genero', '$ciudad', '$ocupacion', '$estudios', $dedicacion, $perseverancia, $tolerante, $etica)";
    return mysqli_query($this->conexion, $insert);  /* Parse error: syntax error, unexpected 'return' (T_RETURN), expecting function (T_FUNCTION) or const (T_CONST) in C:\xampp\htdocs\cuestionario\respuestas\cuestionario.php on line 34 -  
    Parse error : error de sintaxis, 'retorno' inesperado (T_RETURN), esperando función (T_FUNCTION) o const (T_CONST) en C:\xampp\htdocs\cuestionario\respuestas\cuestionario.php en la línea 34*/
value="<?= $du->nombres?"/>
value="<?= $du->edad?"/>

}
return mysqli_query($this->conexion, $insert);  /* Parse error: syntax error, unexpected 'return' (T_RETURN), expecting function (T_FUNCTION) or const (T_CONST) in C:\xampp\htdocs\cuestionario\respuestas\cuestionario.php on line 34 -  
Parse error : error de sintaxis, 'retorno' inesperado (T_RETURN), esperando función (T_FUNCTION) o const (T_CONST) en C:\xampp\htdocs\cuestionario\respuestas\cuestionario.php en la línea 34*/



}
