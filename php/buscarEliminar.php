<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">

    </head>
    <body>
        <header>
            <h1>BIBLIOTECA</h1>
            <h2>Eliminar Libro</h2>
        </header>
        <div>
            <?php
            $busqueda = $_GET["buscar"];

            require("../conexiones/conexion.php");

            $consulta = "select * from libros where Codigo = $busqueda";
            if ($debug) {
                echo "select * from libros where Codigo = $busqueda";
            }
            $resultados = mysqli_query($conexion, $consulta);
            $encontrar = mysqli_num_rows($resultados);

            if ($encontrar > 0) {

                while ($fila = mysqli_fetch_assoc($resultados)) {
                    echo "<form action='eliminar_libro.php' method='get'>";

                    echo "<input type='text' name='Codigo' readonly value='" . $fila['Codigo'] . "'><br>";

                    echo "<input type='text' name='Titulo' readonly value='" . $fila['Titulo'] . "'><br>";

                    echo "<input type='text' name='Año' readonly value='" . $fila['Año'] . "'><br>";

                    echo "<input type='text' name='Numero_de_Ejemplares' readonly value='" . $fila['Numero_de_Ejemplares'] . "'><br>";

                    echo "<input type='submit' name='enviando' value='Eliminar'>";

                    echo "</form>";
                }
            } else {
                echo "Libro no encontrado";
            }

            mysqli_close($conexion);
            if ($debug) {

                echo "conexion cerrada <br>";
            }
            ?>
        </div>
        <div><a href= ../index.php><p>volver al menu</p></a></div>
    </body>
</html>