<?php
include("conexion.php");

$empleado = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id_empleado"];
    $sql = "SELECT * FROM empleado WHERE id_empleado = $id";
    $resultado = mysqli_query($conexion, $sql);
    $empleado = mysqli_fetch_assoc($resultado);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Buscar Empleado</title>
</head>
<body>
    <h2>Buscar Empleado por ID</h2>
    <form method="post">
        <label>ID del empleado:</label>
        <input type="number" name="id_empleado" required>
        <input type="submit" value="Buscar">
    </form>

    <?php if ($empleado): ?>
        <h3>Datos del Empleado:</h3>
        <p><strong>Nombre:</strong> <?php echo $empleado['nombre_empleado']; ?></p>
        <p><strong>Apellidos:</strong> <?php echo $empleado['apellidos_empleados']; ?></p>
        <p><strong>ID Departamento:</strong> <?php echo $empleado['id_departamento']; ?></p>
    <?php elseif ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>No se encontró ningún empleado con ese ID.</p>
    <?php endif; ?>
<a href="../pagina_usuario.php?logout=1">volver</a>    
</body>
</html>
