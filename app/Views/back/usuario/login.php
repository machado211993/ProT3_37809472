<!--Login-->
<div class="container mt-5">
    <!--Mensaje de error-->
    <?php if (session()->getFlashdata('msg')) : ?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>

        </div>
    <?php endif; ?>
    <h2>Formulario de Login</h2>
    <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
        <div class="mb-3">
            <label class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="pass" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="recordar">
            <label class="form-check-label" for="recordar">Recordarme</label>
        </div>
        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        <a href="<?php echo base_url('login'); ?>" class="btn btn-danger">Cancelar</a>
        <br><span>¿aun no se registro? <a href="<?php echo base_url('/registro'); ?>"> Registrarse aqui! </a></span>

    </form>
</div>