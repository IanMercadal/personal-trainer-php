<section class="contenedor">
    <h2 class="text-center">Perfil</h2>

    <div class="usuario-perfil">
        <h3><?php echo $_SESSION["identidad"]->nombre . $_SESSION["identidad"]->apellido ?></h3>
        <div class="circle"></div>
        <div class="user-info">
            <p><b>Teléfono: </b><?php echo $_SESSION["identidad"]->telefono ?></p>
            <p><b>Correo: </b><?php echo $_SESSION["identidad"]->email ?></p>
            <p><b>Tarifa: </b><?php echo $_SESSION["identidad"]->id_tarifa ?></p>
            <p><b>Inscripción: </b><?php echo $_SESSION["identidad"]->fecha_creacion ?></p>
        </div>
        <p><b>Frase Motivacional: <br></b>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla quis earum ipsam atque quos reiciendis natus sapiente iure. Debitis perferendis excepturi ipsam minima dolorem quisquam eum dicta cum delectus sequi.</p>
    </div>
</section>