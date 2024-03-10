<?php
include 'functions.php';

$inventory = viewInventory();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario Completo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Inventario Completo</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad Disponible</th>
        </tr>
        <?php foreach ($inventory as $product): ?>
        <tr>
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product['nombre']; ?></td>
            <td><?php echo $product['precio']; ?></td>
            <td><?php echo $product['cantidad_disponible']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="index.php" class="back-to-index">Volver al Índice</a>

</body>
</html>
