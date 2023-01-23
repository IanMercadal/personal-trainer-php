<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    
    <link rel="icon" type="image/ico" href="<?= base_url ?>assets/logo.svg">

    <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css">
    <title>GYM</title>
</head>
<body>

<header>
    <nav>
        <div class="div-logo">
            <img class="nav-logo" src="<?= base_url ?>assets/logo.svg">
            <h3>GYM</h3>
        </div>

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
        <div class="banner"></div>
    <?php endif; ?>
</header>

