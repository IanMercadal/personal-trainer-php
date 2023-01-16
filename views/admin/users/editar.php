<section class="contenedor">
    <h2 class="text-center">Editar User</h2>

    
    <form class="form-crear" method="post" action="<?=base_url . 'usuario/update&id_usuario=' . $usuario->id_usuario ?>">
        <input type="hidden" name="id_usuario" value="<?php echo $usuario->id_usuario; ?>">
        <div class="input-box">
            <div class="label-state">
                <label>Nombre</label>
                <?php if(isset($_SESSION["errores"]["nombre"])) {
                    echo "<strong class='error'>". $_SESSION['errores']["nombre"]  ."</strong>";
                } ?>
            </div>
            <input type="nombre" name="nombre" value="<?php echo $usuario->nombre; ?>">
        </div>
        <div class="input-box">
            <div class="label-state">
                <label>Apellido</label>
                <?php if(isset($_SESSION["errores"]["apellido"])) {
                    echo "<strong class='error'>". $_SESSION['errores']["apellido"]  ."</strong>";
                } ?>
            </div>
            <input type="apellido" name="apellido" value="<?php echo $usuario->apellido; ?>">
        </div>
        <div class="input-box">
            <div class="label-state">
                <label>Email</label>
                <?php if(isset($_SESSION["errores"]["email"])) {
                    echo "<strong class='error'>". $_SESSION['errores']["email"]  ."</strong>";
                } ?>
            </div>
            <input type="email" name="email" value="<?php echo $usuario->email; ?>">
        </div>
        <div class="input-box">
            <div class="label-state">
                <label>Teléfono</label>
                <?php if(isset($_SESSION["errores"]["telefono"])) {
                    echo "<strong class='error'>". $_SESSION['errores']["telefono"]  ."</strong>";
                } ?>
            </div>
            <input type="number" name="telefono" value="<?php echo $usuario->telefono; ?>">
        </div>
        <div class="input-box">
            <div class="label-state">
                <label>Tarifa</label>
                <?php if(isset($_SESSION["errores"]["tarifa"])) {
                    echo "<strong class='error'>". $_SESSION['errores']["tarifa"]  ."</strong>";
                } ?>
            </div>
            <select name="tarifa">
                <option selected></option>
                <option <?php if($usuario->id_tarifa == 1) {echo "selected";} ?> value="1">1</option>
                <option <?php if($usuario->id_tarifa == 2) {echo "selected";} ?> value="1">2</option>
                <option <?php if($usuario->id_tarifa == 3) {echo "selected";} ?> value="1">3</option>
                <option <?php if($usuario->id_tarifa == 4) {echo "selected";} ?> value="1">4</option>
            </select>
        </div>

        <button class="btn-primary">Crear</button>
    </form>
    <?php if(isset($_SESSION)) {unset($_SESSION["errores"]);} ?>
</section>