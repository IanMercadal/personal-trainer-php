<section class="contenedor">
    <h2 class="text-center">Login</h2>
    
    <div class="login-columnas">
        <div class="left-column-login">
            <h2>Welcome Back!</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem necessitatibus nulla eaque amet corporis impedit, enim sequi cumque nemo facere soluta debitis? Sequi veniam officiis cum, distinctio praesentium eius officia!</p>
        </div>
        <form method="POST" class="login-form" action="<?php echo base_url ?>usuario/autenticarse">
            <div class="input-box">
                <div class="label-state">
                    <label>Email</label>
                    <?php if(isset($_SESSION["errores"]["login"])) {
                        echo "<strong class='error'>". $_SESSION['errores']["login"]  ."</strong>";
                    } ?>

                    <?php if(isset($_SESSION["errores"]["campos"])) {
                        echo "<strong class='error'>". $_SESSION['errores']["campos"]  ."</strong>";
                    } ?>
                </div>
                <input type="email" name="email">
            </div>
    
            <div class="input-box">
                <div class="label-state">
                    <label>Password</label>
                </div>
                <input type="password" name="password">
            </div>
    
            <button class="btn-primary">Login</button>
        </form>
        <?php if(isset($_SESSION)) {unset($_SESSION["errores"]);} ?>
    </div>
</section>