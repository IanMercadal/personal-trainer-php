<section class="contenedor">
    <h2 class="text-center">Editar tarifa</h2>

    <form class="form-crear" method="post" action="<?php echo base_url;?>tarifa/save&id_tarifa=<?php echo $tarifa->id_tarifa;?>">
        
        <?php if(isset($_SESSION["errores"]["registro"])) {
            echo "<strong class='error'>". $_SESSION['errores']["registro"]  ."</strong>";
        } ?>

        <div class="input-box">
            <div class="label-state">
                <label>Nombre</label>
            </div>
            <input type="text" name="nombre" value="<?php echo $tarifa->nombre; ?>">
        </div>

        <div class="input-box">
            <div class="label-state">
                <label>Precio</label>
            </div>
            <input type="number" name="precio" value="<?php echo $tarifa->precio; ?>">
        </div>

        <div class="input-box">
            <div class="label-state">
                <label>Tipo Tarifa</label>
            </div>
            <select name="categoria">
                <option <?php if($tarifa->categoria === "plana") { echo "selected"; }?> value="plana">Plana</option>
                <option <?php if($tarifa->categoria === "mensual") { echo "selected"; }?> value="mensual">Mensual</option>
            </select>
        </div>

        <div class="input-box">
            <div class="label-state">
                <label>Descripción</label>
            </div>
            <textarea name="descripcion" id="" cols="30" rows="10">
                <?php echo trim($tarifa->descripcion); ?>
            </textarea>
        </div>

        <button class="btn-primary">Editar</button>
    </form>
</section>