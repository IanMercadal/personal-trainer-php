<?php 

class solicitudController {
    public function list() {
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