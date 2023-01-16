<section class="contenedor">
    <h2 class="text-center">Solicitudes</h2>
    
    <div class="lista-admin">
    <?php while ($solicitud = $solicitudes->fetch_object()) :?>
        <div class="lista-solicitud">
            <div class="lista-solicitud-info">
                <p><b><?php echo $solicitud->id_solicitud ?></b></p>
                <p><?php echo $solicitud->fecha_creacion ?></p>
                <p><?php echo $solicitud->nombre . " " .  $solicitud->apellido ?></p>
                <p><?php echo $solicitud->email ?></p>
                <p><?php echo $solicitud->telefono ?></p>
                <p>Tarifa Media</p>
                <a class="btn-editar" href="#">Aceptar</a>
                <a class="btn-eliminar" href="#">Rechazar</a>
            </div>
            <p><b>Descripción:</b><br> <?php echo $solicitud->descripcion ?></p>
        </div>
    <?php endwhile; ?>
    </div>
</section>