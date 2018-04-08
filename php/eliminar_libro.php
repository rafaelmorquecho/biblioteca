<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Eliminar</title>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>
    
    <body>
        <header>
            <h1>BIBLIOTECA</h1>
            <h2>Eliminar Libro</h2>
        </header>
        <div>
        <?php
        $cod = $_GET["Codigo"];

        $titu = $_GET["Titulo"];

        $año = $_GET["Año"];

        $nuej = $_GET["Numero_de_Ejemplares"];

        require("../conexiones/conexion.php");

        if ($debug) {
            echo "DELETE FROM libros  WHERE codigo='$cod'";
            echo "<br>";
        }
        $consulta = "DELETE FROM libros  WHERE codigo='$cod'";

        $resultados = mysqli_query($conexion, $consulta);

        if ($resultados) {
                echo "<div><p>Registro Eliminado</p></div>";
           
        } else {

             echo "<div><p>Error en la consulta</p></div>";
        }
        mysqli_close($conexion);
       
        if ($debug) {
            echo "conexion cerrada";
            echo "<br>";
        }
        ?>
        </div>
        <div><a href= ../index.php><p>volver al menu</p></a></div>
    </body>
</html>