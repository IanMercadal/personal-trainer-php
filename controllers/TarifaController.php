<?php 

include_once "models/tarifa.php";


class tarifaController {
    public function list() {
        require_once "views/admin/tarifas/index.php";
    }
    public function crear() {
        require_once "views/admin/tarifas/crear.php";
    }
    public function editar() {
        require_once "views/admin/tarifas/editar.php";
    }

    // Métodos 
    public function save() {
        if(isset($_POST)) {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;

            if($nombre && $precio && $descripcion) {
                $tarifa = new Tarifa();
                $tarifa->setNombre($nombre);
                $tarifa->setPrecio($precio);
                $tarifa->setDescripcion($descripcion);

                $save = $tarifa->save();
                var_dump($save);
                die();
            } else {
                $errores["registro"] = "Error, introduce todos los campos e inténtalo de nuevo";
            }
        }
    }
}
?>