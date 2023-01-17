<section id="contenedor-usuarios" class="contenedor">
    <h2 class="text-center">Usuarios</h2>
    
    <div class="filtros-usuario">
        <form class="form-filtros">
            <p>Campo</p>
            <input type="text" name="campo" placeholder="buscar">
            <select>
                <option selected>-- Seleccionar --</option>
                <option>ID</option>
                <option>Nombre</option>
                <option>Correo</option>
                <option>Teléfono</option>
                <option>Tarifa</option>
            </select>
            <a class="btn-editar" href="#">Asc</a>
            <a class="btn-eliminar" href="#">Desc</a>
        </form>
    </div>
    <div class="lista-admin">
    <?php while ($usuario = $usuarios->fetch_object()) :?>
        <div class="lista-usuario">
            <p><b>1.</b></p>
            <p><?php echo $usuario->nombre . " " . $usuario->apellido?></p>
            <p><?php echo $usuario->email ?></p>
            <p><?php echo $usuario->telefono ?></p>
            <p>Tarifa <?php echo $usuario->id_tarifa ?></p>
            <a class="btn-editar" href="<?php base_url ?>editar&id_usuario=<?php echo $usuario->id_usuario?>">Editar</a>
            <a class="btn-eliminar" href="<?php base_url ?>eliminar&id_usuario=<?php echo $usuario->id_usuario?>">Eliminar</a>
        </div>
    <?php endwhile; ?>
    </div>
</section>