<section class="contenedor">
    <h2 class="text-center">Nosotros</h2>

    <div class="sobre-nosotros">
        <div>
            <h3>¿Por qué nosotros?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam repellendus nesciunt consectetur exercitationem. Atque deserunt ea culpa? Hic possimus voluptatum officiis error dicta temporibus nemo tempora numquam aut, veritatis porro.
                Eum, at tenetur. Corrupti ipsa pariatur nisi saepe repellendus explicabo repellat error quibusdam, beatae, vel, autem odio tenetur veniam! Consequuntur delectus vitae, deserunt ipsam possimus cupiditate unde a eveniet suscipit.</p>
        </div>
        <img src="<?= base_url ?>assets/img/lift.jpg">
    </div>

</section>

<section class="contenedor">
    <h2 class="text-center">Objetivos</h2>
    <div id="valores" class="tres-columnas">
        <div class="valor">
            <img class="nav-logo" src="<?= base_url ?>assets/goals.svg">
            <h3>Metas</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero eligendi recusandae tempora sequi aut aperiam inventore dolorem laborum cupiditate. Error quaerat animi excepturi quis nobis ad tempora magnam saepe voluptas.</p>
        </div>
        <div class="valor">
            <img class="nav-logo" src="<?= base_url ?>assets/diversion.svg">
            <h3>Diversión</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero eligendi recusandae tempora sequi aut aperiam inventore dolorem laborum cupiditate. Error quaerat animi excepturi quis nobis ad tempora magnam saepe voluptas.</p>
        </div>
        <div class="valor">
            <img class="nav-logo" src="<?= base_url ?>assets/discipline.svg">
            <h3>Disciplina</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero eligendi recusandae tempora sequi aut aperiam inventore dolorem laborum cupiditate. Error quaerat animi excepturi quis nobis ad tempora magnam saepe voluptas.</p>
        </div>
    </div>
</section>

<section class="contenedor">
    <h2 id="contacta-nosotros">Conctacta con nosotros</h2>
    <?php if(isset($_SESSION["errores"]["solicitud"])) {
        echo "<strong class='error'>". $_SESSION['errores']["solicitud"]  ."</strong>";
    } ?>
    <form id="form-contacto" method="POST" action="<?php echo base_url?>solicitud/solicitar">
        <div class="input-box">
            <div class="label-state">
                <label>Nombre</label>
            </div>
            <input required type="text" name="nombre" placeholder="Nombre">
        </div>

        <div class="input-box">
            <div class="label-state">
                <label>Apellido</label>
            </div>
            <input required type="text" name="apellido" placeholder="Apellido">
        </div>

        <div class="input-box">
            <div class="label-state">
                <label>Email</label>
                <?php if(isset($_SESSION["errores"]["email"])) {
                    echo "<strong class='error'>". $_SESSION['errores']["email"]  ."</strong>";
                } ?>
            </div>
            <input required type="email" name="email" placeholder="tucorreo@correo.es">
        </div>

        <div class="input-box">
            <div class="label-state">
                <label>Teléfono</label>
                <?php if(isset($_SESSION["errores"]["telefono"])) {
                    echo "<strong class='error'>". $_SESSION['errores']["telefono"]  ."</strong>";
                } ?>
            </div>
            <input required type="number" name="telefono" placeholder="666...">
        </div>

        <div class="input-box">
            <div class="label-state">
                <label>Tarifa</label>
            </div>
            <select name="id_tarifa">
                <option selected></option>
                <option value="1">1</option>
                <option value="1">2</option>
                <option value="1">3</option>
                <option value="1">4</option>
                <option value="1">5</option>
                <option value="1">6</option>
            </select>
        </div>

        <div class="input-box">
            <div class="label-state">
                <label>Descripción</label>
            </div>
            <textarea required name="descripcion" id="" cols="30" rows="10" placeholder="Tu objetivo..."></textarea>
        </div>

        <button class="btn-primary">Enviar</button>
    </form>
    <?php if(isset($_SESSION)) {unset($_SESSION["errores"]);} ?>
</section>