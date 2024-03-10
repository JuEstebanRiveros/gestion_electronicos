<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de Ventas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Detalles de Ventas</h1>
    <?php
    include 'functions.php';
    
    // Obtener detalles de todas las ventas
    $salesDetails = getSalesDetails();
    
    // Verificar si se obtuvieron los detalles correctamente
    if ($salesDetails !== false) {
        echo "<table>";
        echo "<tr><th>ID Venta</th><th>ID Producto</th><th>Producto</th><th>Precio</th><th>Cantidad Vendida</th><th>Fecha de Venta</th></tr>";
        $totalVentasCantidad = 0;
        $totalVentasPrecio = 0;
        foreach ($salesDetails as $sale) {
            echo "<tr>";
            echo "<td>" . $sale['id'] . "</td>";
            echo "<td>" . $sale['id_producto'] . "</td>";
            echo "<td>" . $sale['nombre'] . "</td>";
            echo "<td>" . $sale['precio'] . "</td>";
            echo "<td>" . $sale['cantidad_vendida'] . "</td>";
            echo "<td>" . $sale['fecha_venta'] . "</td>";
            echo "</tr>";
            $totalVentasCantidad += $sale['cantidad_vendida'];
            $totalVentasPrecio += $sale['precio'] * $sale['cantidad_vendida'];
        }
        // Mostrar el total de ventas en cantidad y en precio
        echo "<tr><td colspan='4'></td><td>Total de Ventas:</td><td>$totalVentasCantidad</td></tr>";
        echo "<tr><td colspan='4'></td><td>Total de Ventas:</td><td>$totalVentasPrecio</td></tr>";
        echo "</table>";
    } else {
        echo "<p>No hay ventas registradas.</p>";
    }
    ?>
    <a href="index.php" class="back-to-index">Volver al Índice</a>

</body>
</html>
