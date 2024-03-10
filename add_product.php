<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Agregar Nuevo Producto</h1>
    <form action="add_product.php" method="post">
        <label for="nombre">Nombre del Producto:</label><br>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="precio">Precio:</label><br>
        <input type="text" id="precio" name="precio" required><br>
        <label for="cantidad">Cantidad Disponible:</label><br>
        <input type="text" id="cantidad" name="cantidad" required><br><br>
        <input type="submit" value="Agregar Producto">
    </form>
    <a href="index.php" class="back-to-index">Volver al Índice</a>

</body>
</html>

<?php
include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    
    $result = addProduct($nombre, $precio, $cantidad);
    if ($result === true) {
        echo "<p>Producto agregado exitosamente.</p>";
    } else {
        echo "<p>Error al agregar el producto: $result</p>";
    }
}
?>
