<?php

include ('C:\xampp\htdocs\libreria\Models\conexion.php');
include ('C:\xampp\htdocs\libreria\Views\admin\headeradmin.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso libros</title>
    <link rel="stylesheet" type="text/css" href="/libreria/Assets/css/libros.css">
</head>
<body>
    <br><br><br>
    <div class="contenedor">
        <form action="/libreria/Views/admin/crudlibros/guardar.php" method="POST" class="formulario" enctype="multipart/form-data">
        <h3>Ingreso de Libros</h3><br>
            <label for="">Título: </label><input type="text" name="titulo" placeholder="Ingrese el título" required>
            <label for="">Autor: </label><input type="text" name="autor" placeholder="Ingrese el autor" required>
            <label for="">Páginas: </label><input type="number" name="paginas" placeholder="Ingrese el número de páginas" required>
            <label for="">Editorial: </label><input type="text" name="editorial" placeholder="Ingrese la editorial" required>
            <label for="">Publicación: </label><input type="date" name="publicacion" placeholder="Ingrese la fecha de publicacion" required>
            <label for="">Descripción: </label><textarea type="textarea" name="descripcion" placeholder="Ingrese pequeña descripcion" required></textarea>
            <label for="">Tipo: </label><input type="option" name="tipo" placeholder="Seleccione el tipo" required>
            <label for="">Archivo: </label><input type="file" name="archivo" accept=".pdf" placeholder="Cargue el archivo" required>
            <label for="">Imagen: </label><input type="file" name="imagen"  placeholder="Cargue la imagen" required>
        <label for="">Precio: </label><input type="number" name="precio" placeholder="Ingrese el precio" >
            <input type="submit" value="GUARDAR" class="btn">
        </form> 
    </div><br><br><br>
    <table border="1">
        <tr>

            <th>Título</th>
            <th>Autor</th>
            <th>Páginas</th>
            <th>Editorial</th>
            <th>Publicación</th>
            <th>Descripción</th>
            <th>Tipo</th>
            <th>Archivo</th>
            <th>Imagen</th>
            <th>Precio</th>
        </tr>
            <?php 
            $sel=$conn->query("SELECT*FROM libros");
            while($fila=$sel->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $fila['titulo']?></td>
                <td><?php echo $fila['autor']?></td>
                <td><?php echo $fila['paginas']?></td>
                <td><?php echo $fila['editorial']?></td>
                <td><?php echo $fila['publicacion']?></td>
                <td><?php echo $fila['descripcion']?></td>
                <td><?php echo $fila['tipo']?></td>
                <td><?php echo $fila['archivo']?></td>
                <td><?php echo $fila['imagen']?></td>
                <td><?php echo $fila['precio']?></td>
                <td><a href="/libreria/Views/admin/crudlibros/actualizar.php?id=<?php echo $fila['id']?>">Actualizar</a></td>
                <td><a href="/libreria/Views/admin/crudlibros/borrar.php?id=<?php echo $fila['id']?>">Borrar</a></td>
            </tr>
            <?php
            }
            ?>
    </table>
    <br><br><br>
</body>
</html>