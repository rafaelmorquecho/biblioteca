<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario eliminar socio</title>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>
    <body>
        <header>
        <h1>Biblioteca</h1>
        <h2>Formulario Eliminar Socio</h2>
        </header>
        <div>
        <form action="../php_pdo/buscar_eliminar.php" method="post">
		
		<label for="update">Buscar: <input type="text" name="buscar"></label>

		<input type="submit" name="enviando" value="Dale!">
	</form>
        </div>
        <div><a href= ../index.php><p>volver al menu</p></a></div>
    </body>
</html>
