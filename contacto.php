
<?php
$conn = new mysqli("localhost", "root", "", "cafeteria_capibara");
if ($conn->connect_error) die("Conexión fallida: " . $conn->connect_error);

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO contacto (nombre, correo, mensaje) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nombre, $correo, $mensaje);
$stmt->execute();
echo "Mensaje enviado correctamente.";
$conn->close();
?>
