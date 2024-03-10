<?php
include 'database.php';

// Funciones para la gestión de productos y ventas
// Agregar producto
function addProduct($nombre, $precio, $cantidad) {
    global $conn;
    $sql = "INSERT INTO productos (nombre, precio, cantidad_disponible) VALUES ('$nombre', '$precio', '$cantidad')";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Buscar producto por nombre
function searchProduct($nombre) {
    global $conn;
    $sql = "SELECT * FROM productos WHERE nombre LIKE '%$nombre%'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return false;
    }
}

// Vender producto
function sellProduct($id_producto, $cantidad) {
    global $conn;
    
    // Insertar registro en la tabla de ventas
    $sql_insert = "INSERT INTO ventas (id_producto, cantidad_vendida) VALUES ('$id_producto', '$cantidad')";
    if ($conn->query($sql_insert) === TRUE) {
        // Actualizar la cantidad disponible del producto en la tabla de productos
        $sql_update = "UPDATE productos SET cantidad_disponible = cantidad_disponible - $cantidad WHERE id = $id_producto";
        if ($conn->query($sql_update) === TRUE) {
            return true;
        } else {
            return "Error al actualizar la cantidad disponible del producto: " . $conn->error;
        }
    } else {
        return "Error al registrar la venta: " . $conn->error;
    }
}

// Obtener total de ventas
function getTotalSales() {
    global $conn;
    $sql = "SELECT SUM(cantidad_vendida) AS total FROM ventas";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['total'];
    } else {
        return false;
    }
}

// Obtener detalles de todas las ventas
function getSalesDetails() {
    global $conn;
    $sql = "SELECT ventas.id, ventas.id_producto, productos.nombre, productos.precio, ventas.cantidad_vendida, ventas.fecha_venta FROM ventas INNER JOIN productos ON ventas.id_producto = productos.id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return false;
    }
}

function viewInventory() {
    global $conn;
    $sql = "SELECT * FROM productos";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return "No hay productos en el inventario.";
    }
}

// Buscar producto por ID
function searchProductById($id) {
    global $conn;
    $sql = "SELECT * FROM productos WHERE id = '$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return false;
    }
}


?>
