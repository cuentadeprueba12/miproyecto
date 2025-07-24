
<?php
$conn = new mysqli("localhost", "root", "", "cafeteria_capibara");
if ($conn->connect_error) die("Conexión fallida: " . $conn->connect_error);

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nombre, correo, contraseña) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nombre, $correo, $contraseña);
$stmt->execute();
echo "Usuario registrado correctamente.";
$conn->close();
?>
