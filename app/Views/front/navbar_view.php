<!-- Navbar -->

<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <!-- Aquí añadimos el ícono -->
        <a class="navbar-brand" href="/primer_proyecto">
            <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="Logo" style="width: 30px; height: 30px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php if ($perfil == 1) : ?>
                <div class="btn btn-warning active btnUser btn-sm">
                    <a href="#" class="text-decoration-none">ADMIN: <?php echo $nombre; ?></a>
                </div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo base_url('/principal'); ?>">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo base_url('/quienes_somos'); ?>">Quienes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/acerca_de'); ?>">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/registro'); ?>">Registrar Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/listar'); ?>">Listar Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/eliminar'); ?>">Eliminar Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/actualizar'); ?>">Actualizar Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/login'); ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/logout'); ?>" tabindex="-1">Cerrar sesión</a>
                    </li>
                </ul>
            <?php elseif ($perfil == 2) : ?>
                <div class="btn btn-warning active btnUser btn-sm">
                    <a href="#" class="text-decoration-none">CLIENTE: <?php echo $nombre; ?></a>
                </div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo base_url('/principal'); ?>">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo base_url('/quienes_somos'); ?>">Quienes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/acerca_de'); ?>">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/logout'); ?>" tabindex="-1">Cerrar sesión</a>
                    </li>
                </ul>
            <?php else : ?>
                <div class="dropdown">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="quienes_somos">Quienes somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="acerca_de">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registro">Registrarse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="principal">Principal</a>
                        </li>

                    </ul>
                </div>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            <?php endif; ?>
        </div>
    </div>
</nav>