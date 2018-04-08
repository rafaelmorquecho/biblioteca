<!doctype html>
<head>
    <meta charset="utf-8">
    <title>tablas</title>
   <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
    <header>
        <h1>BIBLIOTECA</h1>
        <h2>Formulario Consultar Libros por Autores</h2>
    </header>
    <div>
        <form method="post" action="../php_pdo/consultar_libros_por_autores.php">
            Autores separados por comas: <input type="Text" name="autores"><br>
            <input type="Submit" name="enviar" value="Buscar">
        </form> 
    </div>
    <div>
        <a href= "../index.php"><p>volver</p></a>
    </div>
    </body>
</html> 