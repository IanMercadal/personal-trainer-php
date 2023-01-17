<section id="contenedor-tarifa" class="contenedor">
    <h2 class="text-center">Tarifas</h2>

    <a href="<?php echo base_url ?>tarifa/crear" class="btn-primary btn-create">Crear</a>

    <div class="lista-admin">
        <?php while($tarifa = $tarifas->fetch_object()) :?>
        <div class="lista-usuario">
            <p><b><?php echo $tarifa->id_tarifa ?>.</b></p>
            <p><?php echo $tarifa->nombre ?></p>
            
            <p><?php echo $tarifa->precio ?>$</p>
            <p class="precio-tarifa-list"><?php echo $tarifa->descripcion ?></p>
            <a class="btn-editar" href="<?php base_url ?>editar&id_tarifa=<?php echo $tarifa->id_tarifa?>">Editar</a>
            <a class="btn-eliminar" href="<?php base_url ?>eliminar&id_tarifa=<?php echo $tarifa->id_tarifa?>">Eliminar</a>
        </div>
        <?php endwhile; ?>
    </div>
</section>