<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Actualizar</title>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>
    <body>
        <header>
            <h1>BIBLIOTECA</h1>
            <h2>Eliminar Socio</h2>
        </header>

        <div>
            <?php
            require("../conexiones/datos_conexion.php");

            $codigo = $_POST['codigo'];
            if ($debug) {
                echo "DELETE FROM socios  WHERE codigo='$codigo'";
            }

            $sql = "DELETE FROM socios  WHERE codigo='$codigo'";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password);
                 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $del = $conn->prepare($sql);
                $del->execute();
                $cuenta = $del->rowCount();
            } catch (Exception $e) {

                echo $sql . "<br>" . $e->getMessage();
            }


            echo "Eliminadas $cuenta filas";
            ?>
        </div>
        <div><a href= ../index.php><p>volver al menu</p></a></div>
    </body>
</html>