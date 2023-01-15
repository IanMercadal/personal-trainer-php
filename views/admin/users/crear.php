<section class="contenedor">
    <h2 class="text-center">Crear User</h2>

    <?php if(isset($_SESSION["errores"]['registro'])) {
        echo "<strong class='error'>". $_SESSION['errores']['registro']  ."</strong>";
    } ?>

    <?php if(isset($_SESSION["errores"]["campos"])) {
        echo "<strong class='error'>". $_SESSION['errores']["campos"]  ."</strong>";
    } ?>

    <form class="form-crear" method="post" action="<?php base_url ?>save">
        <div class="input-box">
            <div class="label-state">
                <label>Nombre</label>
            </div>
            <input required type="nombre" name="nombre">
        </div>
        <div class="input-box">
            <div class="label-state">
                <label>Apellido</label>
            </div>
            <input required type="apellido" name="apellido">
        </div>
        <div class="input-box">
            <div class="label-state">
                <label>Email</label>
                <?php if(isset($_SESSION["errores"]["email"])) {
                    echo "<strong class='error'>". $_SESSION['errores']["email"]  ."</strong>";
                } ?>
            </div>
            <input required type="email" name="email">
        </div>
        <div class="input-box">
            <div class="label-state">
                <label>Teléfono</label>
                <?php if(isset($_SESSION["errores"]["telefono"])) {
                    echo "<strong class='error'>". $_SESSION['errores']["telefono"]  ."</strong>";
                } ?>
            </div>
            <input required type="number" name="telefono">
        </div>
        <div class="input-box">
            <div class="label-state">
                <label>Tarifa</label>
            </div>
            <select name="tarifa">
                <option selected></option>
                <option value="1">1</option>
                <option value="1">2</option>
                <option value="1">3</option>
                <option value="1">4</option>
            </select>
        </div>
        <div class="input-box">
            <div class="label-state">
                <label>Password</label>
                <?php if(isset($_SESSION["errores"]["password"])) {
                    echo "<strong class='error'>". $_SESSION['errores']["password"]  ."</strong>";
                } ?>
            </div>
            <input required type="password" name="password">
        </div>
        <div class="input-box">
            <div class="label-state">
                <label>Repeat Password</label>
            </div>
            <input required type="password" name="repassword">
        </div>

        <button class="btn-primary">Crear</button>
    </form>

    <?php if(isset($_SESSION)) {unset($_SESSION["errores"]);} ?>
</section>