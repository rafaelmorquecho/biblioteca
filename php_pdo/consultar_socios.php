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
    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=UTF8", $username, $password );
      
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM socios";
       
        if ($debug) {
            echo "SELECT * FROM socios</br>";
        }
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    
    if ($modificarPrestamo = $conn->query($sql)) {
        echo "<div><p>N filas :" . $modificarPrestamo->rowCount() ."</p> " ;
        if ($modificarPrestamo->rowCount() == 0) {
            
            echo "<p>no hay registros</p>";
        }
    }
    
    
    $campos = "SELECT column_name FROM information_schema.columns 
WHERE Table_name = 'socios'";
    echo "</div>";
    echo "<table>";
    echo "<tr>";
    foreach ($conn->query($campos) as $head) {
        echo "<td>$head[0]</td>";
    }
   
    foreach ($conn->query($sql) as $fila) {

        echo "<tr><td>$fila[0]</td>";

        echo "<td>$fila[1]</td>";

        echo "<td>$fila[2]</td>";

        echo "<td>$fila[3]</td>";

        echo "<td>$fila[4]</td><tr>";
    }

    echo "</table>";
    

    $conn = null;
    ?>

</body>
</html>
