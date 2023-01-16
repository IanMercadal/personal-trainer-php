<section class="contenedor">
    <h2 class="text-center">Tarifas</h2>
    
    <div class="tarifas">

    <?php while ($tarifa = $tarifas->fetch_object()) :?>
        <div class="tarifa">
            <h4 class="tarifa-titulo"><?php echo $tarifa->nombre ?></h4>
            <div class="circle">
                <img class="nav-logo" src="<?= base_url ?>assets/logo.svg">
            </div>
            <p><?php echo $tarifa->descripcion ?></p>
            <p><b>Precio: </b><?php echo $tarifa->precio?>$</p>
        </div>
    <?php endwhile; ?>
    </div>

    <div class="unete">
        <h2 class="text-center">Unete</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit blanditiis sunt porro tempore et eveniet cumque id cupiditate totam voluptate, excepturi nostrum ab consequuntur natus, aliquam exercitationem, dolor quaerat nobis.
        Asperiores amet quaerat architecto eveniet tempora illo provident. Optio libero recusandae quo unde voluptatem totam aliquid tenetur error, eum vitae aspernatur eveniet aut sapiente! Ab animi aspernatur tempore aperiam alias!</p>
        <a class="btn-primary">Unirse</a>
    </div>
</section>