<?php 
include('C:\xampp\htdocs\libreria\Modales\inicio_modal.php'); 
include('C:\xampp\htdocs\libreria\Modales\registro_modal.php'); 
include('C:\xampp\htdocs\libreria\Modales\inicioadmin_modal.php'); 
?>


<head>
   
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="/libreria/Assets/css/style.css"></head>

<div class="contenedor-header">

    <header class="header">
    <div class="logo" onclick="window.location.href = '/libreria/index.php'">ABC</div>
    
    <div class="user-actions">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Iniciar Sesión
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" data-toggle="modal" data-target="#inicioModal" type="button" class="btn btn-primary">Cliente</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#inicioAdminModal" type="button" class="btn btn-primary">Administrador</a>
                </div>
            </div>
    </div>
    <a  type="button" class="btn btn-primary" data-toggle="modal" data-target="#registroModal" style="margin:15px;">Registrarse</a>
    </header>


</div>

<div id="search-results" class=""></div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>







