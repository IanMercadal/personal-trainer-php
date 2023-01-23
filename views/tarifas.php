<section class="contenedor">
    <h2 class="text-center">Tarifas</h2>

    <div class="tarifas-categorias">
        <div class="tarifas-categoria">
            <h3>Tarifa Plana</h3>
            <div class="tarifas">
            <?php $i= 0; 
                while ($i < count($tarifas_planas)) :?>
                <div class="tarifa">
                    <div class="precio-contenedor">
                        <h4 class="tarifa-titulo"><?php echo $tarifas_planas[$i]->nombre . " / <b>". $tarifas_planas[$i]->precio . "$</b>"?></h4>
                    </div>
                    <div class="check-list">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#399F2E" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                        <p><b>Lorem:</b> Ipsum</p>
                    </div>
                    <div class="check-list">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#399F2E" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                        <p><b>Lorem:</b> Ipsum</p>
                    </div>
                    <div class="check-list">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#399F2E" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                        <p><b>Lorem:</b> Ipsum</p>
                    </div>
                    <div class="check-list">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <line x1="18" y1="6" x2="6" y2="18" />
                            <line x1="6" y1="6" x2="18" y2="18" />
                        </svg>
                        <p><b>Lorem:</b> Ipsum</p>
                    </div>
                    <a href="<?php echo base_url ?>page/nosotros#contacta-nosotros" class="btn-primary">Apuntarse</a>
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
                    <div class="precio-contenedor">
                        <h4 class="tarifa-titulo"><?php echo $tarifas_mensuales[$i]->nombre . " / <b>" . $tarifas_mensuales[$i]->precio . "$</b>"?></h4>
                    </div>
                    <div class="check-list">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#399F2E" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                        <p><b>Lorem:</b> Ipsum</p>
                    </div>
                    <div class="check-list">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#399F2E" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                        <p><b>Lorem:</b> Ipsum</p>
                    </div>
                    <div class="check-list">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#399F2E" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                        <p><b>Lorem:</b> Ipsum</p>
                    </div>
                    <div class="check-list">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <line x1="18" y1="6" x2="6" y2="18" />
                            <line x1="6" y1="6" x2="18" y2="18" />
                        </svg>
                        <p><b>Lorem:</b> Ipsum</p>
                    </div>
                    <a href="<?php echo base_url ?>page/nosotros#contacta-nosotros" class="btn-primary">Apuntarse</a>
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