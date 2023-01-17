console.log("Conectado");

function overlary(e) {
    let nosotrosImagen = document.querySelector(".nosotros-imagen");
    let nosotrosImagenSrc = nosotrosImagen.src;
    let fotoNueva = e.src;

    if(nosotrosImagenSrc != fotoNueva) {
        nosotrosImagen.removeAttribute('src');
        nosotrosImagen.setAttribute('src',fotoNueva);
    }
}