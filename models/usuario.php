<?php
class usuario {
    private $id_usuario;
    private $email;
    private $nombre;
    private $apellido;
    private $fecha_creacion;
    private $password;
    private $id_tarifa;
    private $telefono;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getFechaCreacion()
    {
        return $this->fecha_creacion;
    }


    public function getPassword()
    {
        return $this->password;
    }

    public function getIdTarifa()
    {
        return $this->id_tarifa;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setIdUsuario($id_usuario): self
    {
        $this->id_usuario = $id_usuario;
        return $this;
    }

    public function setEmail($email): self
    {
        $this->email = $email;
        return $this;
    }

    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function setApellido($apellido): self
    {
        $this->apellido = $apellido;
        return $this;
    }

    public function setFechaCreacion($fecha_creacion): self
    {
        $this->fecha_creacion = $fecha_creacion;
        return $this;
    }

    public function setPassword($password): self
    {
        $this->password = $password;
        return $this;
    }

    public function setIdTarifa($id_tarifa): self
    {
        $this->id_tarifa = $id_tarifa;
        return $this;
    }

    public function setTelefono($telefono): self
    {
        $this->telefono = $telefono;
        return $this;
    }

    public function save() {
        $sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getNombre()}', '{$this->getApellido()}', '{$this->getEmail()}', {$this->getTelefono()}, '{$this->getPassword()}' , CURDATE(), '{$this->getIdTarifa()}');";
        $save = $this->db->query($sql);

        $result = false;
        if($save) {
            $result = true;
        }
        return $result;
    }
}

?>