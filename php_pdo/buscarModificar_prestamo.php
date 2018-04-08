<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>buscarModificar_prestamo</title>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>
    <body>
        <header>
            <h1>BIBLIOTECA</h1>
            <h2>Modificar Prestamo</h2>
        </header>

        <div>
        <?php
        $Codigo_de_Libro = $_POST['Codigo_de_Libro'];
        $Codigo_de_Socio = $_POST['Codigo_de_Socio'];
        $Fecha_de_Inicio = $_POST['Fecha_de_Inicio'];

        /* $Fecha_Fin_Prestamo = $_POST['Fecha_Fin_Prestamo'];
          $Fecha_de_Devolucion = $_POST['Fecha_de_Devolucion']; */


        require("../conexiones/datos_conexion.php");
        if($debug){
        echo "select * from prestamos where Codigo_de_Libro "
        . "= $Codigo_de_Libro and Codigo_de_Socio "
        . "= $Codigo_de_Socio and Fecha_de_Inicio = '$Fecha_de_Inicio' ";
        }
        $sql = "select * from prestamos where Codigo_de_Libro "
                . "= $Codigo_de_Libro and Codigo_de_Socio "
                . "= $Codigo_de_Socio and Fecha_de_Inicio = '$Fecha_de_Inicio' and Fecha_de_Devolucion IS NULL  ";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $modificarPrestamo = $conn->prepare($sql);
            $modificarPrestamo->execute();
            $fila = $modificarPrestamo->fetch(PDO::FETCH_ASSOC);

            $cuenta = $modificarPrestamo->rowCount();
            echo "<div><p>" . $cuenta . "filas</p></div>";
            if ($cuenta == 1) {
                echo "<form action='modificar_prestamos.php' method='post'><br>";
                echo "<input type='text' name='Codigo_de_Libro' readonly value=' " . $fila['Codigo_de_Libro'] . " ' ><br>";
                echo "<input type='text' name='Codigo_de_Socio' readonly value=' " . $fila['Codigo_de_Socio'] . " ' ><br>";
                echo "<input type='text' name='Fecha_de_Inicio' readonly value=' " . $fila['Fecha_de_Inicio'] . " ' ><br>";
                echo "<input type='text' name='Fecha_Fin_Prestamo' readonly value=' " . $fila['Fecha_Fin_Prestamo'] . " ' ><br>";
                echo "<input type='date' name='Fecha_de_Devolucion' value=' " . $fila['Fecha_de_Devolucion'] . " ' ><br>";
                echo "<input type='Submit' name='enviar' value='Modificar'><br>";
                echo "</form><br>";
            } else {
                echo ("Registro no encontrado ");
            }
        } catch (Exception $e) {

            echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;
        ?>
        </div>
        <div><a href= ../index.php><p>volver al menu</p></a></div>
    </body>
</html>