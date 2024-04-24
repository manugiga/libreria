
<!--Modal para el formulario de inicio-->
<div class="modal fade" id="inicioModal" tabindex="-1" role="dialog" aria-labelledby="inicioModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
                <!-- Contenido del formulario de inicio -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inicioModalLabel">Inicio de sesión</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario de inicio -->
                <form action="/libreria/Views/cliente/inicio.php" method="post">
                    <label for="name">Usuario:</label>
                    <input type="text" id="name" name="name" required><br><br>
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required><br><br>
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>
</div>



