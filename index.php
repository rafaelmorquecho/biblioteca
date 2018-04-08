<!doctype html>
<head>
    <meta charset="utf-8">
    <title>tablas</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <header>
        <h1>BIBLIOTECA CON PHP DAW 2 EVALUACION</h1>
    </header>
    <div>

    <?php
    require("php/mostrar_tablas.php");
    $consulta = "show tables";
    imprime_tablas(ejecuta_consulta($consulta));
    ?>
    <a href="formularios/formulario_insertar_libro.php"><p>Insertar Libro</p></a>
    <a href="formularios/formulario_modificar_libro.php"><p>Modificar Libro</p></a>
    <a href="formularios/formulario_eliminar_libro.php"><p>Borrar Libro</p></a>
    <a href="formularios/formulario_insertar_socio.php"><p>Añadir Socio PDO</p></a>
    <a href="formularios/formulario_modificar_socio.php"><p>Modificar Socio PDO</p></a>
    <a href="formularios/formulario_eliminar_socio.php"><p>Borrar Socio PDO</p></a>
    <a href="php_pdo/consultar_socios.php"><p>Consultar Socios PDO</p></a>
    <a href="formularios/formulario_insertar_prestamo.php"><p>Insertar Prestamo PDO</p></a>
    <a href="formularios/formulario_modificar_prestamo.php"><p>Modificar Prestamo PDO</p></a>
    <a href="formularios/formulario_consultar_libros_por_autores.php"><p>Consultar Libros por Autores PDO</p></a>
    <a href="php_pdo/consultar_socios_con_libros_prestados.php"><p>Consultar Socios con Libros Prestados PDO</p></a>
    
    
    

    <?php
    if (isset($_POST["tabla"])) {
        $tabla = $_POST["tabla"];
        $campos = "SELECT column_name FROM information_schema.columns 
WHERE Table_name = '$tabla'";
        $datos = "SELECT * FROM $tabla";
echo "</div>";
        /* Llama a las funciones de mostrar */
        imprime_datos(ejecuta_consulta($campos), ejecuta_consulta($datos));
    }
    ?>
    </div>
    </body>
    </html>
    

    

    

