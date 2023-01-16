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
    <form id="form-contacto" method="POST" action="<?php echo base_url?>solicitud/solicitar">
        <div class="input-box">
            <div class="label-state">
                <label>Nombre</label>
            </div>
            <input type="text" name="nombre" placeholder="nombre">
        </div>

        <div class="input-box">
            <div class="label-state">
                <label>Apellido</label>
            </div>
            <input type="text" name="apellido" placeholder="apellido">
        </div>

        <div class="input-box">
            <div class="label-state">
                <label>Email</label>
            </div>
            <input type="email" name="email">
        </div>

        <div class="input-box">
            <div class="label-state">
                <label>Teléfono</label>
            </div>
            <input type="number" name="telefono">
        </div>

        <div class="input-box">
            <div class="label-state">
                <label>Tarifa</label>
            </div>
            <select>
                <option>Primera</option>
                <option>Segunda</option>
                <option>Tercera</option>
                <option>Cuarta</option>
                <option>Quinta</option>
                <option>Sexta</option>
            </select>
        </div>

        <div class="input-box">
            <div class="label-state">
                <label>Descripción</label>
            </div>
            <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
        </div>

        <button class="btn-primary">Enviar</button>
    </form>
</section>