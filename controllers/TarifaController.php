<?php 

include_once "models/tarifa.php";


class tarifaController {
    public function list() {
        Utils::isAdmin();
        $tarifa = new Tarifa();
        $tarifas = $tarifa->getAll();
        require_once "views/admin/tarifas/index.php";
    }
    public function crear() {
        Utils::isAdmin();
        require_once "views/admin/tarifas/crear.php";
    }
    public function editar() {
        Utils::isAdmin();
        if(isset($_GET["id_tarifa"])) {
            $id = $_GET['id_tarifa'];

            $tarifa = new Tarifa();
            $tarifa->setIdTarifa($id);
            $tarifa = $tarifa->getOne();
        }
        require_once "views/admin/tarifas/editar.php";
    }

    // Métodos 
    public function save() {
        Utils::isAdmin();
        if(isset($_POST)) {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;

            if(!$categoria === "plana" || !$categoria === "mensual") {
                $errores["tarifa"] = "Error, la tarifa no es correcta";
            }

            if($nombre && $precio && $descripcion && $categoria) {
                $tarifa = new Tarifa();
                $tarifa->setNombre($nombre);
                $tarifa->setPrecio($precio);
                $tarifa->setDescripcion($descripcion);
                $tarifa->setCategoria($categoria);

                if(isset($_GET['id_tarifa'])) {
                    $tarifa->setIdTarifa($_GET['id_tarifa']);
                    $update = $tarifa->update();

                    if($update) {
                        header("Location:" . base_url . "page/query_state");
                        die();
                    } else {
                        $errores["update"] = "Error, no se ha podido registrar.";
                        $_SESSION['errores'] = $errores;
                        header("Location:" . base_url . "tarifa/editar&id_tarifa=" . $_GET["id_tarifa"]);
                        die();
                    }
                } 
                
                $save = $tarifa->save();

                if($save) {
                    header("Location:" . base_url . "page/query_state");
                    die();
                } else {
                    $errores["registro"] = "Error, no se ha podido registrar.";
                }
            } else {
                $errores["registro"] = "Error, introduce todos los campos e inténtalo de nuevo";
            }
            $_SESSION['errores'] = $errores;
            if(isset($_GET['id_tarifa'])) {
                header("Location:" . base_url . "tarifa/editar&id_tarifa=" . $_GET["id_tarifa"]);
                die();
            } else {
                header("Location:" . base_url . "tarifa/crear");
                die();
            }
        }
    }
    public function eliminar() {
        Utils::isAdmin();
        if(isset($_GET["id_tarifa"])) {
            $id = $_GET['id_tarifa'];
            $tarifa = new Tarifa();
            $tarifa->setIdTarifa($id);

            $delete = $tarifa->delete();

            if($delete) {
                header("Location:" . base_url . "page/query_state");
                die();
            } else {
                $_SESSION['eliminar'] = "Error, no se ha podido eliminar el registro.";
                header("Location:" . base_url . "usuario/list");
                die();
            }
        } else {
            $_SESSION['eliminar'] = "Error, no se ha podido eliminar el registro.";
        }
    }
}
?>