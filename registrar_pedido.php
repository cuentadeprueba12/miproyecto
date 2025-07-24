
<?php
$conn = new mysqli("localhost", "root", "", "cafeteria_capibara");
if ($conn->connect_error) die("Conexión fallida: " . $conn->connect_error);

$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

$sql = "INSERT INTO pedidos (producto, cantidad, cliente_nombre, cliente_correo) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("siss", $producto, $cantidad, $nombre, $correo);
$stmt->execute();
echo "Pedido registrado correctamente.";
$conn->close();
?>
