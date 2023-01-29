function overlary(e) {
    let nombreImagen = e.target.id + ".jpg";

    // Genera la imagen
    const imagen = document.createElement('IMG');
    imagen.src = `./assets/img/${nombreImagen}`;
    imagen.setAttribute("class", "img-overlay");
    
    const overlay = document.createElement('DIV');
    overlay.appendChild(imagen);
    overlay.classList.add('overlay');

    // Cuando se da click, cerrar la imagen

    overlay.onclick = function () {
        overlay.remove();
    }

    // Boton para cerrar la imagen

    const cerrarImagen = document.createElement('P');
    cerrarImagen.textContent = 'X';
    cerrarImagen.classList.add('btn-cerrar');

    // Cuando se presiona. se cierra la imagen

    cerrarImagen.onclick = function () {
        overlay.remove();
    }

    overlay.appendChild(cerrarImagen);

    // Mostrar en HTML

    const body = document.querySelector('body');
    body.appendChild(overlay);

    // let nosotrosImagen = document.querySelector(".nosotros-imagen");
    // let nosotrosImagenSrc = nosotrosImagen.src;
    // let fotoNueva = e.src;

    // if(nosotrosImagenSrc != fotoNueva) {
    //     nosotrosImagen.removeAttribute('src');
    //     nosotrosImagen.setAttribute('src',fotoNueva);
    // }
}