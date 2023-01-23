<section class="contenedor">
    <h2 class="text-center">Perfil</h2>
    <div class="usuario-perfil">
        <h3><?php echo $_SESSION["identidad"]->nombre . $_SESSION["identidad"]->apellido ?></h3>
        <div class="circle">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <circle cx="12" cy="7" r="4" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            </svg>
        </div>
        <div class="user-info">
            <div class="user-info-emoji">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                </svg>
                <p><b>Teléfono: </b><?php echo $_SESSION["identidad"]->telefono ?></p>
            </div>

            <div class="user-info-emoji">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <rect x="3" y="5" width="18" height="14" rx="2" />
                    <polyline points="3 7 12 13 21 7" />
                </svg>
                <p><b>Correo: </b><?php echo $_SESSION["identidad"]->email ?></p>
            </div>

            <div class="user-info-emoji">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cash" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <rect x="7" y="9" width="14" height="10" rx="2" />
                    <circle cx="14" cy="14" r="2" />
                    <path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2" />
                </svg>
                <p><b>Tarifa: </b><?php echo $_SESSION["identidad"]->id_tarifa ?></p>
            </div>

            <div class="user-info-emoji">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <rect x="4" y="5" width="16" height="16" rx="2" />
                    <line x1="16" y1="3" x2="16" y2="7" />
                    <line x1="8" y1="3" x2="8" y2="7" />
                    <line x1="4" y1="11" x2="20" y2="11" />
                    <rect x="8" y="15" width="2" height="2" />
                </svg>
                <p><b>Inscripción: </b><?php echo $_SESSION["identidad"]->fecha_creacion ?></p>
            </div>
        </div>
        <p><b>Frase Motivacional: <br></b>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla quis earum ipsam atque quos reiciendis natus sapiente iure. Debitis perferendis excepturi ipsam minima dolorem quisquam eum dicta cum delectus sequi.</p>
    </div>

</section>