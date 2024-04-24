<?php
session_start();

if (!isset($_SESSION['nombre_admin'])) {
    header('Location: /libreria/index.php'); 
    exit();
}
?>


<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></head>


<div class="contenedor-header">

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/libreria/Assets/css/style.css">
  <title>Barra de Navegación</title>
</head>
<body>

<nav class="navbar">
  <div class="navbar-brand" onclick="window.location.href = '/libreria/Views/admin/indexadmin.php'">ABC Admins</div>
  <div class="navbar-buttons">
    <a href="/libreria/Views/admin/libros.php">Libros</a>
    <a href="#">Registros</a>
    <a href="/libreria/Views/admin/cerraradmin.php">Cerrar Sesión</a>
  </div>
</nav>

</body>
</html>



</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


