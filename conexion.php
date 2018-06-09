<?php
$server = "localhost"; // el nombre que utilizaremos, en este caso localhost
$username = "Diego"; // el usuario que acabamos de crear en la base de datos
$password = "cueto2307"; // la contraseña del usuario que utilizaremos
$database = "conexion";

$conexion = @mysql_connect($servidor, $usuario, contrasenha);

if(!conexion){
    die('<strong>no pudo conectarse </strong>'. mysql_error());
}else{
    echo 'si se conecto'
}
mysql_select_db($BD, $conexion) or die(mysql_error($conexion));
?>