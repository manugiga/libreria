<?php

include('C:\xampp\htdocs\libreria\Views\cliente\headerlogin.php');


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

<div class="bienvenida"><br><br>
    <h2>¡Ahora puedes acceder a una mayor variedad de libros!</h2>
</div>
<div class="index-container">
    <div>
        <img src="/libreria/Views/admin/crudlibros/img/sharing.png" alt="" class="img"><br>
        <button onclick="window.location.href = '/libreria/Views/admin/crudlibros/descargaslogin.php';">Gratis</button>
    </div>
    <div class="libro-index">
        <img src="/libreria/Views/admin/crudlibros/img/sharing1.png" alt="" class="img1"><br>
        <button onclick="window.location.href = '/libreria/Views/admin/crudlibros/compraslogin.php';">De Pago</button>   
    </div>
</div>



</body>
</html>