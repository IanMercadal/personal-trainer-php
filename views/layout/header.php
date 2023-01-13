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
    <title>Gym</title>
</head>
<body>

<header>
    <nav>
        <div class="div-logo">
            <img class="nav-logo" src="<?= base_url ?>assets/logo.svg">
            <h3>Gym</h3>
        </div>

        <div class="options">
            <a class="nav-link" href="<?php echo base_url?>">Inicio</a>
            <a class="nav-link" href="<?php echo base_url?>page/tarifa">Tarifas</a>
            <a class="nav-link" href="<?php echo base_url?>page/nosotros">Nosotros</a>
        </div>

        <div class="user-state-header">
            <a class="login" href="<?php echo base_url?>usuario/login">Iniciar Sesión</a>
        </div>
    </nav>

    <?php if ($_SERVER['REQUEST_URI'] == "/") : ?>
        <div class="banner"></div>
    <?php endif; ?>
</header>

