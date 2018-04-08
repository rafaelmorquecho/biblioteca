<!doctype html>
<head>
    <meta charset="utf-8">
    <title>tablas</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
    <header>
        <h1>BIBLIOTECA</h1>
        <h2>Insertar Libro </h2>
    </header>
    <div>
        <?php
        require("../conexiones/datos_conexion.php");

        if (!empty($_POST['codigo'])) {
            $codigo = $_POST['codigo'];
            $nombre = $_POST['nombre'];
            $domicilio = $_POST['domicilio'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO socios VALUES ('$codigo','$nombre','$domicilio','$telefono','$correo');";

                $insertar = $conn->prepare($sql);
                $insertar->execute();
                $cuenta = $insertar->rowCount();

                echo "<div><p> $cuenta registro creado</p></div>";
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }

            $conn = null;
        } else {
            echo "No se pudo añadir un socio";
        }
        ?>
    </div>
    <div><a href= ../index.php><p>volver al menu</p></a></div>
</body>
</html>

