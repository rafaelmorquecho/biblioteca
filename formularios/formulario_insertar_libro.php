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
        <form method="post" action="../php/insertar_libro.php">
            Codigo   :<input type="Text" name="Codigo"><br>
            Titulo   :<input type="Text" name="Titulo"><br>
            Autor    :<input type="Text" name="Autor"><br>
            Año      :<input type="Text" name="Año"><br>
            Numero de Ejemplares   :<input type="Text" name="Numero_de_Ejemplares"><br>
            <input type="Submit" name="enviar" value="Aceptar información">
        </form> 
    </div>
    <div><a href= ../index.php><p>volver al menu</p></a></div>
    </body>
</html> 