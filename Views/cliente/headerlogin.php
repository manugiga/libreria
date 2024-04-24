<?php 

session_start();
if (!isset($_SESSION['name'])) {
    header("Location: /libreria/index.php");
}

?>


<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></head>


<div class="contenedor-header">

    <header class="header">
    <div class="logo" onclick="window.location.href = '/libreria/Views/cliente/indexlogin.php'">ABC</div>
    <div class="user-actions">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mis Libros
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/libreria/Views/admin/crudlibros/mislibros.php">Descargas</a>
                    <a class="dropdown-item" href="#">Compras</a>
                </div>
            </div>
    </div>
    <a  type="button" class="btn btn-primary" style="margin:15px;"  href="/libreria/Views/cliente/cerrar.php">Cerrar Sesión</a>
    </header>


</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


