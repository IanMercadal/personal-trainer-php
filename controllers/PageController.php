<?php 

include_once "models/tarifa.php";

class pageController {
    public function index() {
        // Renderizar Vista
        require_once "views/index.php";
    }
    public function tarifa() {
        $tarifa = new Tarifa();
        $tarifas = $tarifa->getAll();
        
        // Renderizar Vista
        require_once "views/tarifas.php";
    }
    public function nosotros() {
        // Renderizar Vista
        require_once "views/nosotros.php";
    }
    public function query_state() {
        require_once "views/query_state.php";
    }
}
?>