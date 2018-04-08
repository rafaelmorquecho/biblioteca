<!doctype html>
<head>
    <meta charset="utf-8">
    <title>tablas</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
    <header>
        <h1>BIBLIOTECA</h1>
        <h2>Mostrar Socios PDO</h2>
    </header>
    <div><a href= ../index.php><p>volver al menu</p></a></div>
    <?php
    include("../conexiones/datos_conexion.php");

    $sql = "SELECT `Codigo_de_Libro`, `Codigo_de_Socio`, `Fecha_Fin_Prestamo`"
            . " FROM prestamos WHERE `Fecha_de_Devolucion` IS NULL";

    $sql1 = "SELECT `Titulo` FROM `libros` WHERE `Codigo`= ?";

    $sql2 = "SELECT `Nombre` FROM `socios` WHERE `Codigo` = ?";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $consulta = $conn->prepare($sql);
        $consulta1 = $conn->prepare($sql1);
        $consulta2 = $conn->prepare($sql2);
        $consulta1->bindParam('1', $titulo);
        $consulta2->bindParam('1', $nombre);
        $consulta->execute();
        $prestamos = $consulta->fetchAll();
        
        echo "<table><thead><th>Titulo de Libro</th><th>Nombre de Socio</th>"
        . "<th>Fecha de Devolucion</th>";
        foreach ($prestamos as $prestamo) {
            $titulo = $prestamo['Codigo_de_Libro'];
            $nombre = $prestamo ['Codigo_de_Socio'];
            $fecha = $prestamo ['Fecha_Fin_Prestamo'];
            $consulta1->execute();
            $titulo = $consulta1->fetch(PDO::FETCH_ASSOC);
            $consulta2->execute();
            $nombre = $consulta2->fetch(PDO::FETCH_ASSOC);
            echo "<tr><td>" . $titulo['Titulo'] . "</td><td>" 
                    . $nombre['Nombre'] . "</td><td>$fecha</td></tr>";
      
            
        
            
        }
        echo "</table>";

        
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }



    $conn = null;
    ?>

</body>
</html>
