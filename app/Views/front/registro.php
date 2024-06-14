<!--registro-->
<div class="container mt-5">
    <h2>Formulario de Registro</h2>
    <form>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" required>
        </div>
        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
            <input type="password" class="form-control" id="confirmPassword" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="terminos" required>
            <label class="form-check-label" for="terminos">Aceptar términos y condiciones</label>
        </div>
        <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
</div>
