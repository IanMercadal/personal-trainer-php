<section class="contenedor">
    <h2 class="text-center">Tarifas</h2>

    <div class="tarifas-categorias">
        <div class="tarifas-categoria">
            <h3>Tarifa Plana</h3>
            <div class="tarifas">
            <?php $i= 0; 
                while ($i < count($tarifas_planas)) :?>
                <div class="tarifa">
                    <h4 class="tarifa-titulo"><?php echo $tarifas_planas[$i]->nombre ?></h4>
                    <div class="circle">
                        <img class="nav-logo" src="<?= base_url ?>assets/logo.svg">
                    </div>
                    <p><?php echo $tarifas_planas[$i]->descripcion ?></p>
                    <p><b>Precio: </b><?php echo $tarifas_planas[$i]->precio?>$</p>
                </div>
                <?php $i += 1?>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="tarifas-categoria">
            <h3>Tarifa Mensual</h3>
            <div class="tarifas">
            <?php $i= 0; 
                while ($i < count($tarifas_mensuales)) :?>
                <div class="tarifa">
                    <h4 class="tarifa-titulo"><?php echo $tarifas_mensuales[$i]->nombre ?></h4>
                    <div class="circle">
                        <img class="nav-logo" src="<?= base_url ?>assets/logo.svg">
                    </div>
                    <p><?php echo $tarifas_mensuales[$i]->descripcion ?></p>
                    <p><b>Precio: </b><?php echo $tarifas_mensuales[$i]->precio?>$</p>
                </div>
                <?php $i += 1?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    
    <div class="unete">
        <h2 class="text-center">Unete</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit blanditiis sunt porro tempore et eveniet cumque id cupiditate totam voluptate, excepturi nostrum ab consequuntur natus, aliquam exercitationem, dolor quaerat nobis.
        Asperiores amet quaerat architecto eveniet tempora illo provident. Optio libero recusandae quo unde voluptatem totam aliquid tenetur error, eum vitae aspernatur eveniet aut sapiente! Ab animi aspernatur tempore aperiam alias!</p>
        <a class="btn-primary" href="<?php echo base_url?>page/nosotros#contacta-nosotros">Unirse</a>
    </div>
</section>