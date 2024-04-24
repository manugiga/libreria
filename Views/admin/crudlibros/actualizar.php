<?php 

include ('C:\xampp\htdocs\libreria\Models\conexion.php');
$id=$_REQUEST['id'];
$sel=$conn->query("SELECT * FROM libros WHERE id=".$id);
if($fila=$sel->fetch_assoc()){

}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar libro</title>
    <link rel="stylesheet" type="text/css" href="/libreria/Assets/css/libros.css">
</head>
<body>
    <br><br><br>
    <div class="contenedor">
        <form action="/libreria/Views/admin/crudlibros/update.php" method="POST" enctype="multipart/form-data" class="formulario">
        <h3>Actualizar Libro</h3><br><br>
            <input type="hidden" name="id" value="<?php echo $fila['id'] ?>">
            <label for="">Título: </label><input required type="text" name="titulo" value="<?php echo $fila['titulo'] ?>">
            <label for="">Autor: </label><input required type="text" name="autor" value="<?php echo $fila['autor'] ?>">
            <label for="">Páginas: </label><input required type="number" name="paginas" value="<?php echo $fila['paginas'] ?>">
            <label for="">Editorial: </label><input required type="text" name="editorial" value="<?php echo $fila['editorial'] ?>">
            <label for="">Publicación: </label><input required type="date" name="publicacion" pvalue="<?php echo $fila['publicacion'] ?>">
            <label for="">Descripción: </label><input required type="text-area" name="descripcion" value="<?php echo $fila['descripcion'] ?>">
            <label for="">Tipo: </label><input required type="option" name="tipo" value="<?php echo $fila['tipo'] ?>">
            <label for="">Archivo: </label><input required type="file" name="archivo" accept=".pdf" value="<?php echo $fila['archivo'] ?>">
            <label for="">Imagen: </label><input required type="file" name="imagen" value="<?php echo $fila['imagen'] ?>">
            <label for="">Precio: </label><input type="number" name="precio" value="<?php echo $fila['precio'] ?>">
            <input type="submit" value="MODIFICAR" class="btn">
        </form> 
    </div><br><br><br>
</body>
</html>