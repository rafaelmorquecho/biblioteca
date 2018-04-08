<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Actualizar</title>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>
    <body>
        <header>
        <h1>BIBLIOTECA</h1>
        <h2>Modificar Libro </h2>
    </header>
        
        <?php
        $cod = $_GET["Codigo"];

        $titu = $_GET["Titulo"];

        $año = $_GET["Año"];

        $nuej = $_GET["Numero_de_Ejemplares"];

        require("../conexiones/conexion.php");

        if ($debug) {
            echo "UPDATE libros SET Codigo='$cod', Titulo='$titu', Año='$año',"
            . " Numero_de_Ejemplares='$nuej' WHERE codigo='$cod'";
            echo "<br>";
        }
        $consulta = "UPDATE libros SET Codigo='$cod', Titulo='$titu',"
                . " Año='$año', Numero_de_Ejemplares='$nuej' WHERE codigo='$cod'";


        $resultados = mysqli_query($conexion, $consulta);

        if (!$resultados) {

            echo "Error en la consulta";
        } else {

            echo "<div><p>Registro guardado</p></div>";

            echo "<table><tr><td>$cod</td></tr>";

            echo "<tr><td>$titu</td></tr>";

            echo "<tr><td>$año</td></tr>";

            echo "<tr><td>$nuej</td></tr>";
        }



        mysqli_close($conexion);
        
        if($debug){
        echo "conexion cerrada";
        echo "<br>";
        }
    
        ?>
        
        <div><a href= ../index.php><p>volver al menu</p></a></div>
    </body>
