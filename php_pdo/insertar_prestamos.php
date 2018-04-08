<!doctype html>
<head>
    <meta charset="utf-8">
    <title>tablas</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
    <header>
        <h1>BIBLIOTECA</h1>
        <h2>Insertar Prestamo </h2>
    </header>
    <div>


<?php

$Codigo_de_Libro = $_POST['Codigo_de_Libro'];
$Codigo_de_Socio = $_POST['Codigo_de_Socio'];
$Fecha_de_Inicio = $_POST['Fecha_de_Inicio'];
$Fecha_Fin_Prestamo = $_POST['Fecha_Fin_Prestamo'];
/* $Fecha_de_Devolucion=$_POST['Fecha_de_Devolucion']; */

require("../conexiones/datos_conexion.php");
if ($debug){
echo "SELECT Numero_de_Ejemplares FROM libros WHERE codigo = $Codigo_de_Libro ";
}

$sqllibros = "SELECT Numero_de_Ejemplares FROM libros WHERE codigo = $Codigo_de_Libro ";


try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $comprobar = $conn->prepare($sqllibros);
    $comprobar->execute();
    /* $result = $comprobar->setFetchMode(PDO::FETCH_ASSOC); */
    $result = $comprobar->fetch(PDO::FETCH_ASSOC);
    $ejemplares = $result['Numero_de_Ejemplares'];
    
    echo "<p>numero de ejemplares = " . $ejemplares . "</p>";
} catch (PDOException $e) {
    echo $sql . "
" . $e->getMessage();
}

$conn = null;

//insertar prestamo
if ($ejemplares > 0) {
if($debug){
    echo "UPDATE libros SET Numero_de_Ejemplares = ($ejemplares-1)  WHERE codigo = '$Codigo_de_Libro'";
    echo "INSERT INTO prestamos (Codigo_de_Libro, Codigo_de_Socio,"
    . " Fecha_de_Inicio , Fecha_Fin_Prestamo  ) VALUES ( '$Codigo_de_Libro', '$Codigo_de_Socio',"
    . " '$Fecha_de_Inicio', '$Fecha_Fin_Prestamo');";
    
}
    $update = "UPDATE libros SET Numero_de_Ejemplares = ($ejemplares-1)  WHERE codigo = '$Codigo_de_Libro'";

    $sql = "INSERT INTO prestamos (Codigo_de_Libro, Codigo_de_Socio,"
            . " Fecha_de_Inicio , Fecha_Fin_Prestamo  ) VALUES ( '$Codigo_de_Libro', '$Codigo_de_Socio',"
            . " '$Fecha_de_Inicio', '$Fecha_Fin_Prestamo');";


    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $conn->beginTransaction();

        $restar = $conn->prepare($update);
        $restar->execute();

        $insertar = $conn->prepare($sql);
        $insertar->execute();


        $cuenta = $insertar->rowCount();
        $cuenta1 = $restar->rowCount();

        if ($cuenta == 1 && $cuenta1 == 1) {

            $conn->commit();
            
            echo "<div><p> $cuenta registro creado</p>";
        echo "<div><p> $cuenta1 registro modificado</p>";
            echo "<p>commit<p></div>";
        } else {
            $conn->rollBack();
            echo "<div><p>rollBack()</p>";
             echo "><p>no se realizaron cambios</p></div>";
        }





       
        
    } catch (PDOException $e) {
        $conn->rollBack();
        echo $sql . "
" . $e->getMessage();
    }

    $conn = null;
} else {
    echo "No hay ejempares disponibles";
}
?>
 </div>
    <div><a href= ../index.php><p>volver al menu</p></a></div>
</body>
</html>