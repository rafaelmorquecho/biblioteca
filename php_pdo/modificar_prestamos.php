<!doctype html>
<head>
    <meta charset="utf-8">
    <title>tablas</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
    <header>
        <h1>BIBLIOTECA</h1>
        <h2>Modificar prestamo Prestamo </h2>
    </header>
    <div>
<?php

require("../conexiones/datos_conexion.php");

$Codigo_de_Libro = $_POST['Codigo_de_Libro'];
$Codigo_de_Socio = $_POST['Codigo_de_Socio'];
$Fecha_de_Inicio = $_POST['Fecha_de_Inicio'];
$Fecha_Fin_Prestamo = $_POST['Fecha_Fin_Prestamo'];
$Fecha_de_Devolucion = $_POST['Fecha_de_Devolucion'];

if ($debug){
echo "UPDATE prestamos SET Fecha_de_Devolucion='$Fecha_de_Devolucion' where Codigo_de_Libro='$Codigo_de_Libro' and
Codigo_de_Socio='$Codigo_de_Socio' and Fecha_de_Inicio='$Fecha_de_Inicio'";

echo "SELECT Numero_de_Ejemplares FROM libros WHERE codigo = $Codigo_de_Libro ";

}

$sql = "UPDATE prestamos SET Fecha_de_Devolucion='$Fecha_de_Devolucion' where Codigo_de_Libro='$Codigo_de_Libro' and
Codigo_de_Socio='$Codigo_de_Socio' and Fecha_de_Inicio='$Fecha_de_Inicio' and Fecha_de_Devolucion IS NULL  ";

$sqllibros = "SELECT Numero_de_Ejemplares FROM libros WHERE codigo = $Codigo_de_Libro ";




try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $comprobar = $conn->prepare($sqllibros);
    $comprobar->execute();
    $resultado = $comprobar->fetch(PDO::FETCH_ASSOC);
    $ejemplares = $resultado['Numero_de_Ejemplares'];
    $sqllibros2 = "UPDATE libros set Numero_de_Ejemplares = ($ejemplares + 1) where Codigo ='$Codigo_de_Libro'" ;
    echo "ejemplaers : " . $ejemplares;
       
    $conn->beginTransaction();
    
    $sumar = $conn->prepare($sqllibros2);
    $modificarPrestamo = $conn->prepare($sql);
    $modificarPrestamo->execute();
    $sumar->execute();
    
} catch (Exception $e) {
    echo $sql . "<br>" . $e->getMessage();
    $conn->rollBack();
}
if ($modificarPrestamo->rowCount() == 1 && $sumar->rowCount() == 1) {
        echo "<p>Prestamo modificado</p>";
        echo "<p>Libro modificado</p>";
         $conn->commit();
    } else {
        echo "<p>Error en la modificacion</p>";
        $conn->rollBack();
    }

$conn = null;

?>
</div>
        <div><a href= ../index.php><p>volver al menu</p></a></div>
    </body>
</html>