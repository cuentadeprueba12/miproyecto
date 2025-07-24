<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Caompatible" content="ie=edge">
	<title>Proyecto web-Cafeteria</title>
	<link rel="shortcut icon" type="image/x-icon" href="recursos/logo.png" >
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f7f0e8;
  color: #4e342e;
  margin: 0;
  padding: 0;
}

header {
  background-color: #6d4c41;
  color: white;
  text-align: center;
  padding: 20px 10px;
}

.logo {
  width: 100px;
  height: auto;
}

nav ul {
  list-style-type: none;
  display: flex;
  justify-content: center;
  background-color: #8d6e63;
  padding: 10px;
  margin: 0;
}

nav ul li {
  margin: 0 15px;
}

nav ul li a {
  color: white;
  text-decoration: none;
  font-weight: bold;
}

.slider {
  width: 100%;
  overflow: hidden;
  margin: 20px auto;
  max-width: 800px;
}

.slides {
  display: flex;
  animation: slide 15s infinite;
}

.slides img {
  width: 100%;
  height: 100%;
  border-radius: 10px;
}

@keyframes slide {
  0% { transform: translateX(0%); }
  33% { transform: translateX(-100%); }
  66% { transform: translateX(-200%); }
  100% { transform: translateX(0%); }
}
</style>
<meta charset="utf-8">
</head>
<body>
	<center>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <h1 class="navbar-brand" href="#"><img src="recursos/logo.png" width="40"> Delicia Café</h1>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="menu.html">Menú</a></li>
        <li class="nav-item"><a class="nav-link" href="formulario_usuarios.html">Registro de usuarios</a></li>
        <li class="nav-item"><a class="nav-link" href="ubicacion.html">Ubicación</a></li>
         <li class="nav-item"><a class="nav-link" href="historia.html">Historia</a></li>
         <li class="nav-item"><a class="nav-link" href="formulario_pedidos.html">Pedidos</a></li>
        <li class="nav-item"><a class="nav-link" href="contacto.html">Contacto</a></li>
        <li class="nav-item"><a class="nav-link" href="php/carritomenu.php">🛒<span id="contador"><?= isset($_SESSION['carrito']) ? count($_SESSION['carrito']) : 0 ?></span></a></li>
      </ul>

    </div>
  </div>
</nav>

<main class="container mt-4">
  <h1 class="mb-4 text-center">Bienvenido a Cafetería!</h1>

  <section class="slider">
    <div class="slides">
      <img src="https://source.unsplash.com/400x300/?cappuccino" alt="Café" width="100%" height="100%" />
      <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092" alt="Postre" width="" height="" />
      <img src="https://images.unsplash.com/photo-1589302168068-964664d93dc0" alt="Platillo" width="" height=""/>
       <img src="https://source.unsplash.com/400x300/?frappe" alt="Bebidas" width="" height="" />
    </div>
  </section>


<footer class="bg-dark text-white text-center py-3">
  © 2025 Cafetería Delicia
</footer>
	</center>
</body>
</html>