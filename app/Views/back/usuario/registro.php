<!--registro-->
<div class="container mt-5">
    <h2>Formulario de Registro</h2>
    <?php $validation = \Config\Services::validation(); ?>
    <form method="post" action="<?php echo base_url('/enviar-form') ?>">
        <?= csrf_field(); ?>
        <?= csrf_field(); ?>
        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
        <?php endif ?>
        <?php if (!empty(session()->getFlashdata('success'))) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('success'); ?></div>
        <?php endif ?>

        <div class=" mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" required>
            <!--error-->
            <?php if ($validation->getError('nombre')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('nombre'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido" required>
            <!--error-->
            <?php if ($validation->getError('apellido')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('apellido'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
            <!--error-->
            <?php if ($validation->getError('email')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('email'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Usuario</label>
            <input type="text" class="form-control" name="usuario" required>
            <!--error-->
            <?php if ($validation->getError('usuario')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('usuario'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="pass" required>
            <!--error-->
            <?php if ($validation->getError('pass')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('pass'); ?>
                </div>
            <?php } ?>
        </div>

        <button type="submit" class="btn btn-primary">Registrarse</button>
        <button type="reset" class="btn btn-secondary">Cancelar</button>
    </form>
</div>