<?php 

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
}
?>