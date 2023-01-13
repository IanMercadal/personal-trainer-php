<?php 

class usuarioController {
    public function login() {
        // Renderizar Vista
        require_once "views/login.php";
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
        header("Location:" . base_url . "usuario/perfil");
    }
    
}
?>