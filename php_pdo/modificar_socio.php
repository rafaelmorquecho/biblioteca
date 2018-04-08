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
            <h2>Modificar Socio</h2>
        </header>

        <div>
            <?php
            
            
            require("../conexiones/datos_conexion.php");
            
            

            $codigo = $_POST['codigo'];
            $nombre = $_POST['nombre'];
            $domicilio = $_POST['domicilio'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];

            if ($debug) {
                echo "UPDATE socios SET Codigo='$codigo', nombre='$nombre',"
                . "domicilio='$domicilio', telefono='$telefono',correo='$correo' WHERE codigo='$codigo'";
            }
            $sql = "UPDATE socios SET Codigo='$codigo', nombre='$nombre',"
                    . "domicilio='$domicilio', telefono='$telefono',correo='$correo' WHERE codigo='$codigo'";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password);
                 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $modificar = $conn->prepare($sql);
                $modificar->execute();
                $cuenta = $modificar->rowCount();
            } catch (Exception $e) {

                echo $sql . "<br>" . $e->getMessage();
            }
            
            echo "Modificadas $cuenta filas";
            ?>
        </div>
        <div><a href= ../index.php><p>volver al menu</p></a></div>
    </body>
</html>