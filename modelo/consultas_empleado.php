<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<?php
    require 'conexion.php';

    session_start();

    if(isset($_SESSION['username']))
    {
        $nombre_usuario = $_SESSION['username'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Empleados</title>
</head>
<body>
    <h1>Consulta Empleados</h1>
    <?php
        echo 'Usuario: '.$nombre_usuario;
    ?>
    <!--Mostrar consulta-->
    <?php
        if(isset($_SESSION['username']))
        {
            $query = "SELECT empleado.id_empleado, empleado.nombre_empleado, empleado.apellidos_empleados, departamento.nombre_departamento 
            FROM empleado JOIN departamento ON empleado.id_departamento = departamento.id_departamento";

            $resultado = mysqli_query($conexion, $query) or trigger_error("Error en la consulta: " . mysqli_error($conexion));

            //Encabezado de la tabla de resultados
            echo "<table border='1' align='center'>";
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>Nombre</th>";
                echo "<th>Apellidos</th>";
                echo "<th>Departamento</th>";
            echo "</tr>";
            
            // Filas de la tabla, traidos de la consulta  a la BD
            while($fila = mysqli_fetch_array($resultado))
            {
                echo "<tr>";
                    echo "<td>";
                        echo $fila['id_empleado'];
                    echo "</td>";
                    echo "<td>";
                        echo $fila['nombre_empleado'];
                    echo "</td>";
                    echo "<td>";
                        echo $fila['apellidos_empleados'];
                    echo "</td>";
                    echo "<td>";
                        echo $fila['nombre_departamento'];
                    echo "</td>";
                echo "</tr>";
            }

            echo "</table>";
        }
        else
        {
            header('location: ../index.php');
        }
    ?>

<a href="../pagina_usuario.php?logout=1">volver</a>
</body>
</html>