
<!--Modal para el formulario de inicioadmin-->
<div class="modal fade" id="inicioAdminModal" tabindex="-1" role="dialog" aria-labelledby="inicioModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
                <!-- Contenido del formulario de inicioadmin -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inicioModalLabel">Inicio de sesión</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario de inicioadmin -->
                <form action="/libreria/Views/admin/inicioadmin.php" method="post">
                    <label for="nombre_admin">Admin User:</label>
                    <input type="text" id="nombre_admin" name="nombre_admin" required><br><br>
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" required><br><br>
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>
</div>