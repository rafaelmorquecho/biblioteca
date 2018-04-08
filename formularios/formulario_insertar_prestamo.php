<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>tablas</title>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>
    <body>
        <header>
            <h1>BIBLIOTECA</h1>
            <h2>Insertar Prestamo</h2>
        </header>
        <div>
            <form action='../php_pdo/insertar_prestamos.php' method='post'><br>
                Codigo_de_Libro : <input type='text' name='Codigo_de_Libro' value=' ' ><br>
                Codigo_de_Socio : <input type='text' name='Codigo_de_Socio' value=' ' ><br>
                Fecha_de_Inicio : <input type='date' name='Fecha_de_Inicio' value=' ' ><br>
                Fecha_Fin_Prestamo : <input type='date' name='Fecha_Fin_Prestamo' value=' ' ><br>
                <input type='Submit' name='enviar' value='Insertar prestamo'><br>
            </form><br>

        </div>

        <div><a href= ../index.php><p>volver al menu</p></a></div>
    </body>
</html> 

