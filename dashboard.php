<?php
session_start();

include_once 'usuario.php';

$usuario = $_SESSION["usuario"];

if (!$usuario) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>

    <h2>Bienvenido, <?php echo $usuario["nombre"]; ?>!</h2>

    <a href="registro.php">Registrar un Libro</a>
    <a href="prestamo_devolucion.php">Libros Prestados</a>
    <a href="logout.php" class="logout-link">Cerrar Sesión</a>
    <?php
        include_once 'libro.php';

        $libros = obtenerCatalogoLibros();

        echo "<h2>Catálogo de Libros</h2>";
        echo "<ul>";

        foreach ($libros as $libro) {
            if ($libro['disponibilidad'] == '1') {
                echo "<li>{$libro['titulo']} - {$libro['autor']} - {$libro['genero']} ";
                echo "<form method='post' action='prestamo_devolucion.php'>";
                echo "<input type='hidden' name='accion' value='prestar'>";
                echo "<input type='hidden' name='idLibro' value='{$libro['id']}'>";
                echo "<input type='submit' value='Prestar'>";
                echo "</form></li>";
            }
        }

        echo "</ul>";
    ?>

</body>
</html>
