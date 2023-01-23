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
                <p><b>Tarifa:</b> <?php echo $solicitud->id_tarifa ?></p>
                <?php if($solicitud->estado_gestion) :?>
                    <p class="btn-editar">Gestionada</p>
                <?php else :?>
                    <form method="post" action="<?php echo base_url ?>solicitud/gestionar">
                        <input type="hidden" name="id_solicitud" value="<?php echo $solicitud->id_solicitud ?>" />
                        <button class="btn-eliminar">Gestionar</button>
                    </form>
                <?php endif;?>
            </div>
            <p><b>Descripción:</b><br> <?php echo $solicitud->descripcion ?></p>
        </div>
    <?php endwhile; ?>
    </div>
</section>