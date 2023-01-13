<?php 

class tarifaController {
    public function admin() {
        require_once "views/admin/tarifas/index.php";
    }
    public function crear() {
        require_once "views/admin/tarifas/crear.php";
    }
}
?>