<?php 

class solicitudController {
    public function index() {
        require_once "views/solicitudes/index.php";
    }
    public function solicitar() {
        if(isset($_POST)) {
            var_dump($_POST);
            die();
        }
    }

}
?>