
<!-- Modal para el formulario de registro -->
<div class="modal fade" id="registroModal" tabindex="-1" role="dialog" aria-labelledby="registroModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
                <!-- Contenido del formulario de registro -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registroModalLabel">Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="error-message" style="display: none;"></div>
            <div class="modal-body">
                <!-- Formulario de registro -->
                <form action="/libreria/Views/cliente/registro.php"method="post">
                    <label for="name">Crea el nombre de tu Usuario:</label>
                    <input type="text" id="name" name="name" required><br><br>
                    <label for="email">Ingresa tu Email:</label>
                    <input type="email" id="email" name="email" required><br><br>
                    <label for="password">Crea tu Contraseña:</label>
                    <input type="password" id="password" name="password" required><br><br>
                    <label for="confirm_password">Confirma tu Contraseña:</label>
                    <input type="password" id="confirm_password" name="confirm_password" required><br><br>
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
</div>