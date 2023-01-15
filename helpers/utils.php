<?php 

class utils {
    public static function validarPassword($password) {
        $errores = [];
        if(strlen($password) >= 12) {
            $cantidad_numeros = preg_match_all( "/[0-9]/", $password );
            if($cantidad_numeros >= 4) {
                return true;
            } else {
                $errores["numero"] = "La contrasña debe ser de al menos 4 numero";
                return false;
            }
        } else {
            $errores["longitud"] = "La contrasña debe ser de al menos 12 caracteres";
            return false;
        }
    }

    public static function validarEmail($email) {
        if(isset($email)) {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return false;
            }
            return true;
        } else {
            return false;
        }
    }
}

?>