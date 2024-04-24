<?php
session_start();

if(isset($_POST['id'])) {

    $idLibro = $_POST['id'];

include('C:\xampp\htdocs\libreria\Models\conexion.php');

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM libros WHERE id = ?";
    
    $stmt = $conn->prepare($sql);
    
    $stmt->bind_param("i", $idLibro);
    
    $stmt->execute();
    
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $detallesLibro = "<img src=$row[imagen] style='width:200px' style='height:auto'>";
        $detallesLibro .= "<p>Título: " . $row['titulo'] . "</p>";
        $detallesLibro .= "<p>Autor: " . $row['autor'] . "</p>";
        $detallesLibro .= "<p>Páginas: " . $row['paginas'] . "</p>";
        $detallesLibro .= "<p>Editorial: " . $row['editorial'] . "</p>";
        $detallesLibro .= "<p>Publicación: " . $row['publicacion'] . "</p>";
        $detallesLibro .= "<p>Descripción: " . $row['descripcion'] . "</p>";
        $detallesLibro .= "<p>Tipo: " . $row['tipo'] . "</p>";
        $detallesLibro .= "<a class='btn btn-primary' id='btn-descargar' onclick='descargarYGuardar()' href=$row[archivo] download>Descargar Libro"."</a>";
        
        echo $detallesLibro;
    } else {
        echo "No se encontraron detalles para el producto con ID $idLibro.";
    }
    
    $stmt->close();
    $conn->close();
} else {
    echo "ID de producto no proporcionado.";
}
?>

<script>

function descargarYGuardar() {

    var idLibro = <?php echo $idLibro; ?>;

    $.ajax({
        type: "POST",
        url: "guardar_descarga.php", 
        data: { id_libro: idLibro },
        success: function(response) {
            console.success(success);
            alert("Exito al guardar la descarga en la base de datos.");
        },
        error: function(xhr, status, error) {
            console.error(error);
            alert("Error al guardar la descarga en la base de datos.");
        }
    });
}

</script>