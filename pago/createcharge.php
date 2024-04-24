<?php
// Conexión a la base de datos
include('C:\xampp\htdocs\libreria\Models\conexion.php');
session_start();

// Consulta para obtener los datos de pago desde la base de datos
$query = "SELECT amount, currency, description FROM pagos WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $payment_id); // suponiendo que tienes un $payment_id definido previamente
$stmt->execute();
$result = $stmt->get_result();

// Verificar si se encontraron resultados y obtener los datos del pago
if ($result->num_rows > 0) {
    $payment_data = $result->fetch_assoc();
    $amount = $payment_data['amount'];
    // Usar "COP" como moneda para peso colombiano
    $currency = "COP";
    $description = $payment_data['description'];
} else {
    // No se encontraron datos de pago
    exit("No se encontraron datos de pago para el ID proporcionado.");
}

// Cerrar la conexión a la base de datos
$stmt->close();

// Crear el cargo en Stripe
require 'C:\xampp\htdocs\libreria\vendor\autoload.php';

\Stripe\Stripe::setApiKey("sk_test_51P8XgYP4b4vs5zcoMauNkwM9K74ICz7yolwmUEcorMC6EFeVfgckJFWaIb8B9xtIBEzWaby6NZS0nZGX7FoxTmya00Umpt2R9s");

$token = $_POST["stripeToken"];

$charge = \Stripe\Charge::create([
  "amount" => $amount,
  "currency" => $currency, // Moneda configurada como COP
  "description" => $description,
  "source" => $token
]);

// Guardar la información de la compra en la tabla 'compras'
$id_usuario = $_SESSION['id']; // Suponiendo que ya tienes el ID del usuario en la sesión
$id_libro = $idLibro; // Usar el ID del libro obtenido previamente
$fecha = date('Y-m-d H:i:s');
$precio_pagado = $amount / 100; // Dividir la cantidad por 100 para obtener el precio en la moneda base

$query_insert = "INSERT INTO compras (id_usuario, id_libro, fecha, precio_pagado) VALUES (?, ?, ?, ?)";
$stmt_insert = $conn->prepare($query_insert);
$stmt_insert->bind_param("iisd", $id_usuario, $id_libro, $fecha, $precio_pagado);
$stmt_insert->execute();

// Cerrar la conexión a la base de datos
$stmt_insert->close();
$conn->close();

echo "<pre>", print_r($charge), "</pre>";
?>
