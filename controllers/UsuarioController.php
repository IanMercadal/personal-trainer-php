<?php 

require_once "helpers/utils.php";
require_once "models/usuario.php";

class usuarioController {
    public function login() {
        require_once "views/login.php";
    }
    public function logout() {
        if(isset($_SERVER["usuario"])) {
            unset($_SERVER["usuario"]);
        }
        header("Location:" . base_url);
    }
    public function perfil() {
        require_once "views/user/index.php";
    }
    public function admin() {
        require_once "views/admin/users/index.php";
    }
    public function crear() {
        require_once "views/admin/users/crear.php";
    }
    public function editar() {
        require_once "views/admin/users/editar.php";
    }

    // Métodos
    public function autenticarse() {
        if(isset($_POST)) {
            
            $email = $_POST['email'];
            $password = $_POST['password'];

            $email_validar = Utils::validarEmail($email);
            $password_validar =  Utils::validarPassword($password);

            if($email && $password) {
                $usuario = new Usuario();
                $usuario->setEmail($email);
                $usuario->setPassword($password);

                $identidad = $usuario->login();

                if($identidad && is_object($identidad)) {
                    $_SESSION['identidad'] = $identidad;
                    header("Location:".base_url."usuario/perfil");
                    die();
                }
            } else {
                echo "mal";
            }
        }
    }
    public function save() {
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
}
?>