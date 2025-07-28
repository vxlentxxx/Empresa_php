<?php
include("conexion.php");

$departamento = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id_departamento"];
    $sql = "SELECT * FROM departamento WHERE id_departamento = $id";
    $resultado = mysqli_query($conexion, $sql);
    $departamento = mysqli_fetch_assoc($resultado);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Presupuesto del Departamento</title>
</head>
<body>
    <h2>Buscar Presupuesto por ID de Departamento</h2>
    <form method="post">
        <label>ID del Departamento:</label>
        <input type="number" name="id_departamento" required>
        <input type="submit" value="Buscar">
    </form>

    <?php if ($departamento): ?>
        <h3>Presupuesto del Departamento "<?php echo $departamento['nombre_departamento']; ?>"</h3>
        <p><strong>Presupuesto:</strong> <?php echo $departamento['presupuesto_departamento']; ?></p>
    <?php elseif ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>No se encontró ningún departamento con ese ID.</p>
    <?php endif; ?>
    <hr>
<a href="../pagina_usuario.php?logout=1">volver</a>
</body>
</html>
