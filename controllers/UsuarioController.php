<?php 

class usuarioController {
    public function index() {
        echo "<h1>Perfil</h1>";
    }
    public function login() {
        // Renderizar Vista
        require_once "views/login.php";
    }
    public function autenticarse() {
        header("Location:" . base_url . "usuario/perfil");
    }
    public function perfil() {
        require_once "views/user/index.php";
    }
}
?>