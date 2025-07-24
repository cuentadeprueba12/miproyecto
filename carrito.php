<?php
session_start();
if (!isset($_SESSION['carrito'])) $_SESSION['carrito'] = [];

if ($_GET['accion'] === 'agregar') {
  $_SESSION['carrito'][] = $_GET['item'];
} elseif ($_GET['accion'] === 'vaciar') {
  $_SESSION['carrito'] = [];
}
header('Location: index.php');
