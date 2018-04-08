<!doctype html>
<head>
    <meta charset="utf-8">
    <title>tablas</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
    <header>
        <h1>BIBLIOTECA</h1>
        <h2>Consultar Libros por Autores</h2>
    </header>
    <div><a href= ../index.php><p>volver al menu</p></a></div>

    <?php
    $autores = $_POST['autores'];
    $autores = explode(",", $autores);
    $sql = "SELECT * FROM libros where autor = :autor ";
    require("../conexiones/datos_conexion.php");
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $consulta = $conn->prepare($sql);
        $consulta->bindParam(':autor', $autor);
        foreach ($autores as $autor) {
            $consulta->execute();
            $modificarPrestamo = $consulta->fetchAll();
            echo "<table><tr>";
            foreach ($modificarPrestamo as $fila) {
                echo "<td>" . $fila['Codigo'] . "</td>";
                echo "<td>" . $fila['Autor'] . "</td>";
                echo "<td>" . $fila['Titulo'] . "</td>";
                echo "<td>" . $fila['Año'] . "</td>";
                echo "<td>" . $fila['Numero_de_Ejemplares'] . "</td><tr>";
            }
            echo "</table>";
        }
    } catch (Exception $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
    ?>
    
</body>
</html> 