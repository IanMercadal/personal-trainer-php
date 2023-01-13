<?php 

class solicitudController {
    public function solicitar() {
        if(isset($_POST)) {
            var_dump($_POST);
            die();
        }
    }
}
?>