<?php 

class pageController {
    public function index() {
        // Renderizar Vista
        require_once "views/index.php";
    }
    public function tarifa() {
        // Renderizar Vista
        require_once "views/tarifas.php";
    }
    public function nosotros() {
        // Renderizar Vista
        require_once "views/nosotros.php";
    }
}
?>