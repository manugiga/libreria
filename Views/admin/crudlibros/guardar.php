<?php 

include ('C:\xampp\htdocs\libreria\Models\conexion.php');
$alert = "";	
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

    $sql = "INSERT INTO libros (titulo, autor, paginas, editorial, publicacion, descripcion, tipo, precio, archivo, imagen) VALUES ('$titulo', '$autor', '$paginas', '$editorial', '$publicacion','$descripcion', '$tipo', '$precio', '$ruta_archivo', '$ruta_imagen')";
    if ($conn->query($sql) === TRUE) {
        echo "Libro guardado correctamente";
    } else {
        echo "Error al guardar libro en la base de datos: " . $conn->error;
    }



echo "<h1><a href='/libreria/Views/admin/libros.php'>Regresar</a></h1>";


?>