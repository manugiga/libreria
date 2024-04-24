<?php
session_start();

include('C:\xampp\htdocs\libreria\Models\conexion.php');

$usernombre = $_POST['name'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE nombre='$usernombre'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['contrasena'])) {
        $_SESSION['name'] = $usernombre;
        header('Location: /libreria/Views/cliente/indexlogin.php?mensaje=error');
        exit();
    } else {
        echo "Nombre de usuario o contraseña incorrectos.";
    }
} else {
    echo "Nombre de usuario o contraseña incorrectos.";
}

$conn->close();
?>
