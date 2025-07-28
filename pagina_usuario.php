<?php
require 'modelo/conexion.php';
session_start();

if (isset($_SESSION['username'])) {
    $nombre_usuario = $_SESSION['username'];
} else {
    // Redirige al login si no hay sesión activa
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Usuario</title>
</head>
<body>
    <h1>Página del Usuario</h1>
    <hr>
    <?php
        echo '<strong>Usuario:</strong> ' . $nombre_usuario;
    ?>
    <hr>

    <h2>Acciones</h2>
    <ul>
        <li><a href="registrar_empleado.php">Registrar Empleado</a></li>
        <li><a href="modelo/consultas_empleado.php">Ver Todos los Empleados</a></li>
        <li><a href="modelo/ver_departamentos.php">Ver Departamentos</a></li>
        <li><a href="modelo/buscar_empleado.php">Buscar Empleado por ID</a></li>
        <li><a href="modelo/ver_presupuesto.php">Buscar Presupuesto de Departamento</a></li>
    </ul>

    <hr>
    <a href="modelo/cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>
