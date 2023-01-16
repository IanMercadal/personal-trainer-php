<section class="contenedor">
    <h2 class="text-center">Admin</h2>
    <div class="panel-admin">

        <div id="panel-usuarios">
            <div class="panel"></div>
            <div class="panel-info">
                <h3>Usuarios</h3>
                <a href="<?php echo base_url . 'usuario/list';?>"class="btn-primary">Administrar</a>
            </div>
        </div>

        <div id="panel-tarifas">
            <div class="panel"></div>
            <div class="panel-info">
                <h3>Tarifas</h3>
                <a href="<?php echo base_url . 'tarifa/list';?>"class="btn-primary">Administrar</a>
            </div>
        </div>

        <div id="panel-solicitud">
            <div class="panel"></div>
            <div class="panel-info">
                <h3>Solicitudes</h3>
                <a href="<?php echo base_url . 'solicitud/list';?>"class="btn-primary">Administrar</a>
            </div>
        </div>

    </div>
</section>