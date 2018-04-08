<!doctype html>

<head>
    <meta charset="utf-8">
    <title>tablas</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
    <header>
        <h1>BIBLIOTECA</h1>
    </header>
    <div>
        <form action="../php_pdo/buscarModificar_prestamo.php" method="post">

            <label for="Codigo_de_Libro">Codigo libro</label>
            <input type="text" name="Codigo_de_Libro">
            <label for="Codigo_de_Socio">Codigo socio</label>
            <input type="text" name="Codigo_de_Socio">
            <label for="Fecha_de_Inicio">fecha prestamo</label>
            <input type="date" name="Fecha_de_Inicio">
            <input type="submit" name="enviando" value="Dale!">
        </form>
        </div>
      <div><a href= ../index.php><p>volver al menu</p></a></div>
    
</body>
</html> 

