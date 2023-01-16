<?php 

include_once "models/solicitud.php";

class solicitudController {
    public function list() {
        $solicitud = new solicitud();
        $solicitudes = $solicitud->getAll();
        require_once "views/solicitudes/index.php";
    }
    public function solicitar() {
        if(isset($_POST)) {
            $errores = [];

            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $id_tarifa = isset($_POST['id_tarifa']) ? $_POST['id_tarifa'] : false;
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];

            $telefono_validar = Utils::validarTelefono($telefono);
            $email_validar =  Utils::validarEmail($email);

            if(!$email_validar) {
                $errores['email'] = "El correo no es valido, inténtalo de nuevo";
            }
            if(!$telefono_validar) {
                $errores['telefono'] = "El telefono no es valido, inténtalo de nuevo";
            }

            if($nombre && $apellido && $email_validar && $telefono_validar && $descripcion && $id_tarifa) {
                $solicitud = new solicitud();
                $solicitud->setNombre($nombre);
                $solicitud->setApellido($apellido);
                $solicitud->setIdTarifa($id_tarifa);
                $solicitud->setTelefono($telefono);
                $solicitud->setEmail($email);
                $solicitud->setDescripcion($descripcion);

                $save = $solicitud->save();

                if($save){
                    header("Location:" . base_url . "page/query_state");
                    die();
                }else {
                    $errores['solicitud'] = "La solicitud ha fallado, inténtalo de nuevo";
                }
            } else {
                $errores['solicitud'] = "Error, completa todos los campos";
                $_SESSION["errores"] = $errores;
                header("Location:" . base_url . "page/nosotros");
            }
        }
    }

}
?>