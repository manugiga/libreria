<?php
include('C:\xampp\htdocs\libreria\Models\conexion.php');
include ('C:\xampp\htdocs\libreria\Views\header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/libreria/Assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="contenedor">
        <?php
            $query =  "SELECT * FROM libros WHERE tipo = 1 ORDER BY id desc";

                    $result = $conn->query($query);
                                    
                        while ($data = $result ->fetch_assoc()) { ?>
            <div>
            <img src="<?php echo ($data['imagen'] == null) ? 'img/' : $data['imagen']; ?>">
                    <p><?php echo $data['titulo']; ?></p>
                        <button type="button" class="btn btn-primary ver-mas-btn" data-toggle="modal" data-target="#modalDetalles" data-id="<?php echo $data['id'];?>">Ver más</button>
            </div>
            <?php }                          
        ?> 
    </div>

    <div class="modal fade" id="modalDetalles" tabindex="-1" role="dialog" aria-labelledby="modalDetallesLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDetallesLabel">Detalles del Libro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="detallesLibro">
        <!-- Aquí se cargarán los detalles de los libros -->
      </div>
    </div>
  </div>
</div>
<script src="/libreria/Views/admin/crudlibros/js/ajax.js"></script>
</body>
</html>