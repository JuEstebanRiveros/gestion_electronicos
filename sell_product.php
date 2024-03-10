<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vender Producto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Vender Producto</h1>
    <form action="sell_product.php" method="post">
        <label for="id_producto">ID del Producto:</label><br>
        <input type="text" id="id_producto" name="id_producto" required><br>
        <label for="cantidad">Cantidad a Vender:</label><br>
        <input type="text" id="cantidad" name="cantidad" required><br><br>
        <input type="submit" value="Vender Producto">
    </form>
    <a href="index.php" class="back-to-index">Volver al Índice</a>

</body>
</html>

<?php
include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_producto = $_POST['id_producto'];
    $cantidad = $_POST['cantidad'];
    
    $result = sellProduct($id_producto, $cantidad);
    if ($result === true) {
        echo "<p>Venta realizada exitosamente.</p>";
        
        // Mostrar detalles de la venta
        echo "<h2>Detalles de la Venta</h2>";
        echo "<p>ID del Producto: $id_producto</p>";
        echo "<p>Cantidad Vendida: $cantidad</p>";
        
        // Obtener detalles del producto vendido
        $product_details = searchProductById($id_producto);
        if ($product_details) {
            echo "<p>Nombre del Producto: " . $product_details['nombre'] . "</p>";
            echo "<p>Precio del Producto: $" . $product_details['precio'] . "</p>";
        } else {
            echo "<p>No se encontraron detalles del producto.</p>";
        }
    } else {
        echo "<p>Error al realizar la venta: $result</p>";
    }
}
?>
