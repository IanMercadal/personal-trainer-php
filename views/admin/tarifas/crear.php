<section class="contenedor">
    <h2 class="text-center">Crear tarifa</h2>

    <form class="form-crear" method="post" action="<?php echo base_url;?>tarifa/save">

        <?php if(isset($_SESSION["errores"]["registro"])) {
            echo "<strong class='error'>". $_SESSION['errores']["registro"]  ."</strong>";
        } ?>

        <div class="input-box">
            <div class="label-state">
                <label>Nombre</label>
            </div>
            <input type="text" name="nombre">
        </div>

        <div class="input-box">
            <div class="label-state">
                <label>Precio</label>
            </div>
            <input type="number" name="precio">
        </div>
        
        <div class="input-box">
            <div class="label-state">
                <label>Tipo Tarifa</label>
            </div>
            <select name="categoria">
                <option selected value=""></option>
                <option value="plana">Plana</option>
                <option value="mensual">Mensual</option>
            </select>
        </div>

        <div class="input-box">
            <div class="label-state">
                <label>Descripción</label>
            </div>
            <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
        </div>

        <button class="btn-primary">Crear</button>
    </form>
</section>