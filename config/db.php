<?php

class Database {
    public static function connect() {
        $db = new mysqli('localhost','root','root','personal_trainer');
        return $db;
    }
}