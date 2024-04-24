<?php

include('C:\xampp\htdocs\libreria\Views\cliente\headerlogin.php');
include ('C:\xampp\htdocs\libreria\Models\conexion.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/libreria/Assets/css/style.css">
</head>
<body>
<div class="bienvenida"><br>
<H2 style="color:blueviolet">Mis descargas</H2>
</div>
<?php
$nombre_usuario = $_SESSION['name'];

$query =  "SELECT libros.titulo, usuarios.nombre, descargas.fecha
            FROM descargas
            INNER JOIN libros ON descargas.id_libro = libros.id
            INNER JOIN usuarios ON descargas.nombre_usuario = usuarios.nombre
            WHERE usuarios.nombre = '$nombre_usuario'";

                    $result = $conn->query($query);
                    echo "<table border=1 class='tabla'>";
                    echo "<tr><th>Título del libro</th><th>Fecha Descarga</th><th>Usuario</th></tr>";
                    
                    while ($data = $result->fetch_assoc()) { 
                        echo "<tr>";
                        echo "<td>" . $data['titulo'] . "</td>";
                        echo "<td>" . $data['fecha'] . "</td>";
                        echo "<td>" . $data['nombre'] . "</td>";
                        echo "</tr>";
                    }
                    
                    echo "</table>";
?>


</body>
</html>