<?php 

require_once "helpers/utils.php";
require_once "models/usuario.php";
require_once "models/tarifa.php";

class usuarioController {
    public function login() {
        require_once "views/login.php";
    }
    public function logout() {
        if(isset($_SESSION["identidad"])) {
            unset($_SESSION["identidad"]);
        }
        header("Location:" . base_url);
    }
    public function perfil() {

        $tarifa = new Tarifa();
        $tarifa_user = $tarifa->getUserTarifa($_SESSION["identidad"]->id_tarifa);

        require_once "views/user/index.php";
    }
    public function admin() {
        Utils::isAdmin();
        require_once "views/admin/index.php";
    }
    public function list() {
        Utils::isAdmin();
        $usuario = new usuario();

        $filtros = [];
        if(isset($_POST["campo-seleccionado"]) && isset($_POST["valor-seleccionado"]) || isset($_POST["order"]) ) {
            $filtros[$_POST["campo-seleccionado"]] = $_POST["valor-seleccionado"];
            if(isset($_POST["order"])) {
                $filtros["order"] = $_POST["order"];
            }
        }

        $usuarios = $usuario->getAll($filtros);
        require_once "views/admin/users/index.php";
    }
    public function crear() {
        Utils::isAdmin();
        require_once "views/admin/users/crear.php";
    }
    public function editar() {
        Utils::isAdmin();
        if(isset($_GET["id_usuario"])) {
            $id = $_GET['id_usuario'];

            $usuario = new usuario();
            $usuario->setIdUsuario($id);
            $usuario = $usuario->getOne();
        }
        require_once "views/admin/users/editar.php";
    }

    // Métodos
    public function autenticarse() {
        if(isset($_POST)) {

            $errores = [];
            
            $email = $_POST['email'];
            $password = $_POST['password'];

            $email_validar = Utils::validarEmail($email);
            $password_validar =  Utils::validarPassword($password);

            if($email_validar && $password_validar) {
                $usuario = new Usuario();
                $usuario->setEmail($email);
                $usuario->setPassword($password);

                $identidad = $usuario->login();

                if($identidad && is_object($identidad)) {
                    $_SESSION['identidad'] = $identidad;
                    header("Location:".base_url."usuario/perfil");
                    die();
                } else {
                    $errores["login"] = "Error, credenciales incorrectas";
                }
            } else {
                $errores["campos"] = "Error, rellenar todos los campos";
            }
            $_SESSION['errores'] = $errores;
            header("Location:" . base_url . "usuario/login");
        }
    }
    public function save() {
        Utils::isAdmin();
        if(isset($_POST)) {

            $errores = [];

            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
            $tarifa = isset($_POST['tarifa']) ? $_POST['tarifa'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;
            $repassword = isset($_POST['repassword']) ? $_POST['repassword'] : false;
            
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

            if($nombre && $apellido && $email_validar && $telefono_validar && $tarifa && $password && $repassword) {
                if($password === $repassword) {
                    /* Validar passwords 1. Longitud de 12 2. Tener 8 letras 3. Tener 4 numeros*/
                    $validacion = Utils::validarPassword($password);
                    if($validacion) {
                        $usuario = new Usuario();
                        $usuario->setNombre($nombre);
                        $usuario->setApellido($apellido);
                        $usuario->setEmail($email);
                        $usuario->setTelefono($telefono);
                        $usuario->setPassword($password);
                        $usuario->setIdTarifa($tarifa);

                        $save = $usuario->save();

                        if($save){
                            header("Location:" . base_url . "usuario/admin");
                            die();
                        }else{
                            $errores['registro'] = "El registro ha fallado, inténtalo de nuevo";
                        }
                    } else {
                        $errores["password"] = "Las contraseña no cumple las condiciones";
                    }
                } else {
                    $errores["password"] = "Las contraseñas no coinciden";
                }
            } else {
                $errores["campos"] = "Todos los campos son obligatorios";
            }

            $_SESSION['errores'] = $errores;
            header("Location:" . base_url . "usuario/crear");
        }
    }
    public function update() {
        Utils::isAdmin();
        $errores = [];

        if(isset($_POST)) {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
            $tarifa = isset($_POST['tarifa']) ? $_POST['tarifa'] : false;
            $id_usuario = isset($_POST['id_usuario']) ? $_POST['id_usuario'] : false;
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];

            $telefono_validar = Utils::validarTelefono($telefono);
            $email_validar =  Utils::validarEmail($email);

            if(!$nombre) {
                $errores['nombre'] = "El nombre no es valido, inténtalo de nuevo";
            }
            if(!$apellido) {
                $errores['apellido'] = "El apellido no es valido, inténtalo de nuevo";
            }

            if(!$tarifa) {
                $errores['tarifa'] = "La tarifa no es válida, inténtalo de nuevo";
            }
            
            if(!$email_validar) {
                $errores['email'] = "El correo no es valido, inténtalo de nuevo";
            }
            if(!$telefono_validar) {
                $errores['telefono'] = "El telefono no es valido, inténtalo de nuevo";
            }

            if($id_usuario && $nombre && $apellido && $email_validar && $telefono_validar && $tarifa) {
                $usuario = new Usuario();
                $usuario->setIdUsuario($id_usuario);
                $usuario->setNombre($nombre);
                $usuario->setApellido($apellido);
                $usuario->setEmail($email);
                $usuario->setTelefono($telefono);
                $usuario->setIdTarifa($tarifa);

                $update = $usuario->update();
                if($update) {
                    header("Location:" . base_url . "page/query_state");
                    die();
                } else {
                    $errores["actualizar"] = "Error al actualizar, inténtalo de nuevo";
                }
            } else {
                $errores["campos"] = "Todos los campos son obligatorios";
            }

            $_SESSION['errores'] = $errores;
            header("Location:" . base_url . "usuario/editar&id_usuario=" . $_GET["id_usuario"]);
        }
    }
    public function eliminar() {
        Utils::isAdmin();
        if(isset($_GET["id_usuario"])) {
            $id = $_GET['id_usuario'];
            $usuario = new Usuario($id);
            $usuario->setIdUsuario($id);

            $delete = $usuario->delete();

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