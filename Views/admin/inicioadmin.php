<?php
session_start();

include('C:\xampp\htdocs\libreria\Models\conexion.php');

$nombre_admin = $_POST['nombre_admin'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM administradores WHERE nombre_admin='$nombre_admin' AND contrasena='$contrasena'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $_SESSION['nombre_admin'] = $nombre_admin;
    header("Location: /libreria/Views/admin/indexadmin.php"); 
} else {
    echo "Nombre de usuario o contraseña incorrectos";
}

$conn->close();
?>

