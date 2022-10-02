
<?php 
// datos para la coneccion a mysql define('DB_SERVER','localhost'); 
 
define('DB_NAME','TU_BASE_DE_DATOS'); 
define('DB_USER','TU_USUARIO'); 
define('DB_PASS','TU_CLAVE');

if(isset($_POST['enviar'])) { 
    if($_POST['usuario'] == '' or $_POST['password'] == '' or $_POST['repassword'] == '') { 
        echo 'Por favor llene todos los campos.'; 
    } else { 
        $sql = 'SELECT * FROM usuarios'; 
        $rec = mysql_query($sql); 
        $verificar_usuario = 0; 
        while($result = mysql_fetch_object($rec)) { 
            if($result->usuario == $_POST['usuario']) { 
                $verificar_usuario = 1; 
            } 
        } 
        if($verificar_usuario) { 
            if($_POST['password'] == $_POST['repassword']) { 
                $usuario = $_POST['usuario']; 
                $password = $_POST['password']; 
                $sql = "INSERT INTO usuarios (usuario,password) VALUES ('$usuario','$password')"; 
                mysql_query($sql); 
                echo 'Usted se ha registrado correctamente.'; 
            } else { 
                echo 'Las claves no son iguales, intente nuevamente.'; 
            } 
        } else {
            echo 'Este usuario ya ha sido registrado anteriormente.'; 
        } 
    } 


include_once('cuestionario.php');

if ( isset($_POST) && !empty($_POST) ) {
    $p = cuestionario();
}
    $p = new cuestionario();


$save = $p->save($_POST);
if ($save){
@@ -15,7 +15,7 @@
    $mensaje = '<div class = "alert alert-danger"  > Error al registrar </div>';
}


}
<?php
 
include('config.php');
session_start();
 
if (isset($_POST['register'])) {
 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
 
    $query = $connection->prepare("SELECT * FROM users WHERE EMAIL=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }
 
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO users(USERNAME,PASSWORD,EMAIL) VALUES (:username,:password_hash,:email)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            echo '<p class="success">Your registration was successful!</p>';
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}
 
?>
