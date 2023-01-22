<section id="contenedor-usuarios" class="contenedor">
    <h2 class="text-center">Usuarios</h2>
    
    <div class="filtros-usuario">
        <form class="form-filtros" method="post" action="<?php echo base_url ?>usuario/list">
            <p>Campo</p>
            <select name="campo-seleccionado">
                <option selected >-- Seleccionar --</option>
                <option value="id">ID</option>
                <option value="nombre">Nombre</option>
                <option value="correo">Correo</option>
                <option value="telefono">Teléfono</option>
                <option value="tarifa">Tarifa</option>
            </select>
            <input id="valor-seleccionado" type="text" name="valor-seleccionado">

            <div class="radio-group">
                <label>ASC</label>
                <input name="order" value="asc" type="radio"></input>
            </div>

            <div class="radio-group">
                <label>DES</label>
                <input name="order" value="desc" type="radio"></input>
            </div>
            
            <button class="btn-primary">Buscar</button>

        </form>
    </div>
    <div class="lista-admin">
    <?php while ($usuario = $usuarios->fetch_object()) :?>

        <?php if($usuario->email != "admin@admin.es") :?>
        <div class="lista-usuario">
            <p><b><?php echo $usuario->id_usuario ?>.</b></p>
            <p><?php echo $usuario->nombre . " " . $usuario->apellido?></p>
            <p><?php echo $usuario->email ?></p>
            <p><?php echo $usuario->telefono ?></p>
            <p>Tarifa <?php echo $usuario->id_tarifa ?></p>
            <a class="btn-editar" href="<?php base_url ?>editar&id_usuario=<?php echo $usuario->id_usuario?>">Editar</a>
            <a class="btn-eliminar" href="<?php base_url ?>eliminar&id_usuario=<?php echo $usuario->id_usuario?>">Eliminar</a>
        </div>
        <?php endif ;?>
    <?php endwhile; ?>
    </div>
</section>

<script src="<?= base_url ?>assets/js/buscadorUsuarios.js"></script>