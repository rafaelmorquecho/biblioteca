<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario eliminar libro</title>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>
    <body>
         <header>
        <h1>BIBLIOTECA</h1>
        <h2>Formulario Eliminar Libros</h2>
    </header>
        <div>
        <form action="../php/buscarEliminar.php" method="get">
		
		<label for="update">Buscar: <input type="text" name="buscar"></label>

		<input type="submit" name="enviando" value="Dale!">
	</form>
        </div>
        <div><a href= ../index.php><p>volver al menu</p></a></div>
    </body>
</html>

