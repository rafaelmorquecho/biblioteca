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
        <form method="post" action="../php_pdo/insertar_socio.php">
            Codigo   :<input type="Text" name="codigo"><br>
            Nombre   :<input type="Text" name="nombre"><br>
            Domicilio      :<input type="Text" name="domicilio"><br>
            Telefono   :<input type="Text" name="telefono"><br>
            Correo   :<input type="Text" name="correo"><br>
            <input type="Submit" name="enviar" value="Aceptar información">
        </form>
    </div>

        <div><a href= ../index.php><p>volver al menu</p></a></div>
    </body>
</html> 
