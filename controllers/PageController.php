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

        $tarifas_mensuales = [];
        $tarifas_planas = [];

        while ($tarifa = mysqli_fetch_object($tarifas)) {
            if($tarifa->categoria === "mensual") {
                array_push($tarifas_planas, $tarifa);
            } else {
                array_push($tarifas_mensuales, $tarifa);
            }
        }

        usort($tarifas_mensuales, fn($a, $b) => strcmp($a->precio, $b->precio));
        usort($tarifas_planas, fn($a, $b) => strcmp($a->precio, $b->precio));

        // Renderizar Vista
        require_once "views/tarifas.php";
    }
    public function nosotros() {
        // Renderizar Vista
        $tarifa = new Tarifa();
        $tarifas = $tarifa->getAll();
        require_once "views/nosotros.php";
    }
    public function query_state() {
        require_once "views/query_state.php";
    }
}
?>