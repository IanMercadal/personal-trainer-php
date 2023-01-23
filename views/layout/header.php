<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    
    <link rel="icon" type="image/ico" href="<?= base_url ?>assets/img/logo-mini.png">

    <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css">
    <title>GYM</title>
</head>
<body>

<header>
    <nav>
        <img class="nav-logo" src="<?= base_url ?>assets/img/logo-mini.png">

        <div class="options">
            <a <?php if ($_SERVER['REQUEST_URI'] == "/") { ?> class="active nav-link" <?php } ?> class="nav-link" href="<?php echo base_url?>">Inicio</a>
            <a <?php if ($_SERVER['REQUEST_URI'] == "/page/tarifa") { ?> class="active nav-link" <?php } ?> class="nav-link" href="<?php echo base_url?>page/tarifa">Tarifas</a>
            <a <?php if ($_SERVER['REQUEST_URI'] == "/page/nosotros") { ?> class="active nav-link" <?php } ?> class="nav-link" href="<?php echo base_url?>page/nosotros">Nosotros</a>
        </div>

        <div class="user-state-header">
            <?php if(!isset($_SESSION["identidad"])) :?>
                <a class="login" href="<?php echo base_url?>usuario/login">Iniciar Sesión</a>
            <?php else : ?>
                <a href="<?php echo base_url?>usuario/perfil">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#399F2E" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="12" cy="7" r="4" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                </svg>
                </a>
                <a class="login" href="<?php echo base_url?>usuario/logout">Cerrar Sesión</a>
            <?php endif;?>
        </div>
    </nav>

    <?php if ($_SERVER['REQUEST_URI'] == "/") : ?>
        <div class="banner">
            <div class="vector-izquierdo">
                <div id="vector-izquierdo-superior" class="vector">
                    <h3>¡Unete a nosotros!</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt sit maiores voluptatibus.</p>
                </div>

                <div id="vector-izquierdo-inferior" class="vector">
                    <h4>¡Cuotas flexibles!</h4>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt sit maiores voluptatibus error.</p>
                </div>

            </div>
            <div class="vector-derecho">
                <div class="banner-info">
                    <img  src="<?= base_url ?>assets/img/logo-grande.png">
                </div>
            </div>
        </div>
    <?php endif; ?>
</header>

