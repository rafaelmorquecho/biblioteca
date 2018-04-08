<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>
    <body>
        <header>
            <h1>BIBLIOTECA</h1>
            <h2>Eliminar Socio</h2>
        </header>

        <div>
            <?php
            $busqueda = $_POST["buscar"];

            require("../conexiones/datos_conexion.php");
            if ($debug) {
                echo "select * from socios where Codigo = $busqueda";
            }
            $sql = "select * from socios where Codigo = $busqueda";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password);
                 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $modificarPrestamo = $conn->query($sql);
            } catch (Exception $e) {

                echo $sql . "<br>" . $e->getMessage();
            }

            if ($modificarPrestamo->fetchColumn() > 0) {
                foreach ($conn->query($sql) as $fila) {
                    echo "<form action='eliminar_socio.php' method='post'>";

                    echo "<input type='text' name='codigo' readonly value='" . $fila[0] . "'><br>";

                    echo "<input type='text' name='nombre' readonly value='" . $fila[1] . "'><br>";

                    echo "<input type='text' name='domicilio' readonly value='" . $fila[2] . "'><br>";

                    echo "<input type='text' name='telefono' readonly value='" . $fila[3] . "'><br>";

                    echo "<input type='text' name='correo' readonly value='" . $fila[4] . "'><br>";

                    echo "<input type='submit' name='enviando' value='Eliminar'>";

                    echo "</form>";
                }
            } else {
                echo "Socio no encontrado";
            }

            $conn = null;
            ?>
        </div>
        <div><a href= ../index.php><p>volver al menu</p></a></div>
    </body>
</html>
