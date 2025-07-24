<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Caompatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <h2>Menú del dia</h2>
    <div class="row">

      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="https://source.unsplash.com/400x300/?americano" class="card-img-top" alt="Café Americano">
          <div class="card-body">
            <h5 class="card-title">Café Americano</h5>
            <p class="card-text">$ 35 MXN</p>
            <a href="carrito.php?accion=agregar&item=Café Americano" class="btn btn-primary">Agregar al carrito</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="https://source.unsplash.com/400x300/?latte" class="card-img-top" alt="Latte Vainilla">
          <div class="card-body">
            <h5 class="card-title">Latte Vainilla</h5>
            <p class="card-text">$ 45 MXN</p>
            <a href="carrito.php?accion=agregar&item=Latte Vainilla" class="btn btn-primary">Agregar al carrito</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="https://source.unsplash.com/400x300/?cappuccino" class="card-img-top" alt="Capuchino">
          <div class="card-body">
            <h5 class="card-title">Capuchino</h5>
            <p class="card-text">$ 40 MXN</p>
            <a href="carrito.php?accion=agregar&item=Capuchino" class="btn btn-primary">Agregar al carrito</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="https://source.unsplash.com/400x300/?frappe" class="card-img-top" alt="Frappé Oreo">
          <div class="card-body">
            <h5 class="card-title">Frappé Oreo</h5>
            <p class="card-text">$ 50 MXN</p>
            <a href="carrito.php?accion=agregar&item=Frappé Oreo" class="btn btn-primary">Agregar al carrito</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="https://source.unsplash.com/400x300/?croissant" class="card-img-top" alt="Croissant">
          <div class="card-body">
            <h5 class="card-title">Croissant</h5>
            <p class="card-text">$ 30 MXN</p>
            <a href="carrito.php?accion=agregar&item=Croissant" class="btn btn-primary">Agregar al carrito</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="https://source.unsplash.com/400x300/?carrot-cake" class="card-img-top" alt="Pastel de Zanahoria">
          <div class="card-body">
            <h5 class="card-title">Pastel de Zanahoria</h5>
            <p class="card-text">$ 38 MXN</p>
            <a href="carrito.php?accion=agregar&item=Pastel de Zanahoria" class="btn btn-primary">Agregar al carrito</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="carrito" class="mb-5">
    <h2>Tu Carrito</h2>
    <ul class="list-group mb-3">
<?php if(!empty($_SESSION['carrito'])) foreach($_SESSION['carrito'] as $item): ?>
<li class='list-group-item'><?= htmlspecialchars($item) ?></li>
<?php endforeach; ?>
<?php
include("php/conexion.php");
echo "¡Conexión exitosa!";
?>
    </ul>
    <a href="php/carrito.php?accion=vaciar" class="btn btn-danger">Vaciar carrito</a>
  </section>
</main>

<footer class="bg-dark text-white text-center py-3">
  © 2025 Cafetería Delicia
</footer>
  </center>
</body>
</html>