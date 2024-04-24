<?php 

include ('C:\xampp\htdocs\libreria\Models\conexion.php');

$id=$_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$paginas = $_POST['paginas'];
$editorial = $_POST['editorial'];
$publicacion = $_POST['publicacion'];
$descripcion = $_POST['descripcion'];
$tipo = $_POST['tipo'];
$precio = $_POST['precio'];


$directorio_imagenes = 'img/';
$nombre_imagen = basename($_FILES['imagen']['name']);
$ruta_imagen = $directorio_imagenes . $nombre_imagen;
move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_imagen);

$directorio_subida = 'pdfs/';
$nombre_archivo = basename($_FILES['archivo']['name']);
$ruta_archivo = $directorio_subida . $nombre_archivo;
move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta_archivo);

    $up=$conn->query("UPDATE libros SET titulo='$titulo', autor='$autor', paginas='$paginas', editorial='$editorial', publicacion='$publicacion', descripcion='$descripcion', tipo='$tipo', precio='$precio', archivo='$ruta_archivo', imagen='$ruta_imagen' WHERE id='$id' ");
    if($up){
        header('location:/libreria/Views/admin/libros.php');
    }else{
        header('location:/libreria/Views/admin/crudlibros/actualizar.php');
    }




?>