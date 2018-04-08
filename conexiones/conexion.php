
<?php

require("datos_conexion.php");

$conexion = mysqli_connect($servername, $username, $password, $dbname);
if ($error = mysqli_connect_errno()) {
    echo "Fallo al conectar con la base de datos";
    echo $error;
    exit();
}
mysqli_set_charset($conexion, "utf8");

if($debug){
echo "<br>";
echo "conectado $servername, $username, $password, $dbname";
echo "<br>";}















