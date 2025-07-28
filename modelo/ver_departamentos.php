<?php
include("conexion.php");

$sql = "SELECT * FROM departamento";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Departamentos</title>
</head>
<body>
    <h2>Lista de Departamentos</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Presupuesto</th>
        </tr>
        <?php while($fila = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?php echo $fila['id_departamento']; ?></td>
            <td><?php echo $fila['nombre_departamento']; ?></td>
            <td><?php echo $fila['presupuesto_departamento']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <hr>
<a href="../pagina_usuario.php?logout=1">volver</a>
</body>
</html>
