    <?php

    function ejecuta_consulta($consulta) {
        require("conexiones/conexion.php");


        $resultados = mysqli_query($conexion, $consulta);
        mysqli_close($conexion);
        if ($debug) {
            echo "conexion cerrada";
            echo "<br>";
        }
        return $resultados;
    }

    function imprime_tablas($resultados) {
        while ($fila = mysqli_fetch_row($resultados)) {

            foreach ($fila as $valor) {
                echo "<form action='index.php' method='post'>";

                echo "<input type='submit'  name='tabla' value='$valor'>";
                echo "</form>";
            }
        }
    }

    function imprime_datos($campos, $datos) {

        echo "<table><thead><tr>";

        while ($fila = mysqli_fetch_row($campos)) {

            foreach ($fila as $valor) {

                echo "<th>" . $valor . "</th>";
            }
        }

        echo "</thead></tr>";


        while ($fila = mysqli_fetch_row($datos)) {
            echo "<tr>";
            foreach ($fila as $valor) {

                echo "<td>" . $valor . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
