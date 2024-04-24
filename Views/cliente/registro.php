<?php
include('C:\xampp\htdocs\libreria\Models\conexion.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$sql_check_username = "SELECT * FROM usuarios WHERE nombre='$name'";
$result_check_username = $conn->query($sql_check_username);

if ($result_check_username->num_rows > 0) {
    die("Error: El nombre de usuario ya está en uso.");
}

if ($password != $confirm_password) {
    die("Error: Las contraseñas no coinciden.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Error: El formato de email no es válido.");
}

$password_hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nombre, email, contrasena) VALUES ('$name', '$email', '$password_hash')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario registrado correctamente";
} else {
    echo "Error al registrar usuario: " . $conn->error;
}

$conn->close();
?>

