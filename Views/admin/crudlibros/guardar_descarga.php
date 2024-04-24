<?php
session_start();
include('C:\xampp\htdocs\libreria\Models\conexion.php');

if (isset($_POST['id_libro'])) {
   
    $idLibro = $_POST['id_libro'];
    if (isset($_SESSION['name'])) {
        $nombre_usuario = $_SESSION['name'];
    } 

    $fecha = date('Y-m-d H:i:s');

    $sql = "INSERT INTO descargas (id_libro, nombre_usuario, fecha) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $idLibro, $nombre_usuario, $fecha);

    if ($stmt->execute()) {
        echo "Exito";
    } else {
        echo "Error: " . $stmt->error;
    }
} else {
    echo "ID de libro no proporcionado.";
}

$stmt->close();
$conn->close();
?>

