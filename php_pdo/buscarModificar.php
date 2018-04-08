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
            <h2>Modificar Socio</h2>
        </header>

        <div>
            <?php
            $busqueda = $_GET["buscar"];

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
                    echo "<form action='modificar_socio.php' method='post'>";

                    echo "<input type='text' name='codigo' value='" . $fila[0] . "'><br>";

                    echo "<input type='text' name='nombre' value='" . $fila[1] . "'><br>";

                    echo "<input type='text' name='domicilio' value='" . $fila[2] . "'><br>";

                    echo "<input type='text' name='telefono' value='" . $fila[3] . "'><br>";

                    echo "<input type='text' name='correo' value='" . $fila[4] . "'><br>";

                    echo "<input type='submit' name='enviando' value='Modificar'>";

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