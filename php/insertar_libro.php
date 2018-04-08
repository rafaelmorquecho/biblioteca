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
// Create connection

        require("../conexiones/conexion.php");
        if (!empty($_POST['Codigo'])) {
            $codigo = $_POST['Codigo'];
            $titulo = $_POST['Titulo'];
            $autor = $_POST['Autor'];
            $año = $_POST['Año'];
            $Numero_de_Ejemplares = $_POST['Numero_de_Ejemplares'];

            if ($debug) {
                echo "insert into libros values ('$codigo','$titulo','$autor',$año','$Numero_de_Ejemplares');";
            }
            $sql = "insert into libros values ('$codigo','$titulo',$autor,'$año','$Numero_de_Ejemplares');";

            if (mysqli_query($conexion, $sql)) {
                echo "Regristro creado";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
                echo "Error al crear el registro";
            }

            mysqli_close($conexion);
            if ($debug) {
                echo "conexion cerrada <br>";
            }
        } else {
            echo "No se pudo añadir el Libro";
        }
        ?>
    </div>
    <div><a href= ../index.php><p>volver al menu</p></a></div>
</body>
</html>

