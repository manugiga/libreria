<?php 

include('C:\xampp\htdocs\libreria\Models\conexion.php');
$id=$_REQUEST['id'];
$del=$conn->query("DELETE FROM libros WHERE id=".$id);
if($del){
    header('location: /libreria/Views/admin/libros.php');
}

?>