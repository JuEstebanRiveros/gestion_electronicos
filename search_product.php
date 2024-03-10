<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Producto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Buscar Producto</h1>
    <form action="search_product.php" method="get">
        <label for="nombre">Buscar por Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre del producto"><br><br>
        
        <label for="id">Buscar por ID:</label><br>
        <input type="text" id="id" name="id" placeholder="Ingrese el ID del producto"><br><br>

        <input type="submit" value="Buscar">
    </form>

    <?php
    include 'functions.php';

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if(isset($_GET['nombre']) && !empty($_GET['nombre'])) {
            $nombre = $_GET['nombre'];
            $result = searchProduct($nombre);
            if ($result !== false) {
                echo "<h2>Resultados de la Búsqueda:</h2>";
                foreach ($result as $producto) {
                    echo "<p><strong>ID Producto:</strong> " . $producto['id'] . "<br>";
                    echo "<strong>Nombre:</strong> " . $producto['nombre'] . "<br>";
                    echo "<strong>Precio:</strong> " . $producto['precio'] . "<br>";
                    echo "<strong>Cantidad Disponible:</strong> " . $producto['cantidad_disponible'] . "</p>";
                }
            } else {
                echo "<p>No se encontraron productos con ese nombre.</p>";
            }
        } elseif(isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];
            $product = searchProductById($id);
            if ($product !== false) {
                echo "<h2>Resultados de la Búsqueda:</h2>";
                echo "<p><strong>ID Producto:</strong> " . $product['id'] . "<br>";
                echo "<strong>Nombre:</strong> " . $product['nombre'] . "<br>";
                echo "<strong>Precio:</strong> " . $product['precio'] . "<br>";
                echo "<strong>Cantidad Disponible:</strong> " . $product['cantidad_disponible'] . "</p>";
            } else {
                echo "<p>No se encontró un producto con ese ID.</p>";
            }
        }
    }
    ?>

    <br>
    <a href="index.php" class="back-to-index">Volver al Índice</a>

</body>
</html>
