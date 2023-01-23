<section class="contenedor">
    <h2 class="text-center">Nosotros</h2>

    <div class="sobre-nosotros">
        <div class="sobre-nosotros-texto">
            <h3>¿Por qué nosotros?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam repellendus nesciunt consectetur exercitationem. Atque deserunt ea culpa? Hic possimus voluptatum officiis error dicta temporibus nemo tempora numquam aut, veritatis porro.
                Eum, at tenetur. Corrupti ipsa pariatur nisi saepe repellendus explicabo repellat error quibusdam, beatae, vel, autem odio tenetur veniam! Consequuntur delectus vitae, deserunt ipsam possimus cupiditate unde a eveniet suscipit.</p>
            <h4>Nustro horario</h4>
            <ul>
                <li>Lunes a Viernes de 8:00 a 13:00 y de 15:00 a 20:00</li>
                <li>Sábados de 8:00 a 14:00</li>
                <li>Domingos y festivos cerrardos</li>
            </ul>
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

    <?php if(!isset($_SESSION["exito"])) :?>
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
                    <?php while($tarifa = $tarifas->fetch_object()) :?>
                    <option value="<?php echo $tarifa->id_tarifa?>"><?php echo $tarifa->nombre?></option>
                    <?php endwhile ;?>
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
    <?php else :  ?>
        <div class="query-state">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check" width="72" height="72" viewBox="0 0 24 24" stroke-width="1.5" stroke="#399F2E" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="12" cy="12" r="9" />
                <path d="M9 12l2 2l4 -4" />
            </svg>
        
            <h3>Se ha enviado la solicitud correctamente</h3>
        </div>
    <?php endif ?>
</section>