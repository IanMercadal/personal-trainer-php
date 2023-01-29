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
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
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
    public function update() {
        $sql = "UPDATE usuarios SET nombre='{$this->getNombre()}', apellido='{$this->getApellido()}', email='{$this->getEmail()}', telefono={$this->getTelefono()}, id_tarifa={$this->getIdTarifa()} WHERE id_usuario={$this->getIdUsuario()}; ";
        $save = $this->db->query($sql);

        $result = false;
        if($save) {
            $result = true;
        }
        return $result;
    }
    public function login() {
        $result = false;
        $email = $this->email;
        $password = $this->password;

        $sql = "SELECT * FROM usuarios WHERE email = '{$email}' ";
        $login = $this->db->query($sql);

        if($login && $login->num_rows == 1) {
            $user = $login->fetch_object();

			// Verificar contraseña
			$verify = password_verify($password, $user->password);

            if($verify) {
                $result = $user;
            }
        }
        return $result;
    }

    public function getAll($filtros) {
        if(isset($filtros)) {
            if(isset($filtros["id"])) {
                $id = intval($filtros["id"]);
                if(isset($filtros["order"])) {
                    $usuarios = $this->db->query("SELECT * FROM usuarios ORDER BY id_usuario " . $filtros["order"]);
                } else {
                    $usuarios = $this->db->query("SELECT * FROM usuarios where id_usuario =" . $id ." ORDER BY id_usuario");
                }
                return $usuarios;
            } else if(isset($filtros["nombre"])) {
                if(isset($filtros["order"])) {
                    $usuarios = $this->db->query("SELECT * FROM usuarios ORDER BY nombre " . $filtros["order"]);
                } else {
                    $usuarios = $this->db->query("SELECT * FROM usuarios where nombre ='" . $filtros["nombre"] ."' ORDER BY id_usuario");
                }
                return $usuarios;
            } else if(isset($filtros["correo"])) {
                if(isset($filtros["order"])) {
                    $usuarios = $this->db->query("SELECT * FROM usuarios ORDER BY email " . $filtros["order"]);
                } else {
                    $usuarios = $this->db->query("SELECT * FROM usuarios where email ='" . $filtros["correo"] ."' ORDER BY id_usuario");
                }
                return $usuarios;
            } else if(isset($filtros["telefono"])) {
                $id = intval($filtros["telefono"]);
                if(isset($filtros["order"])) {
                    $usuarios = $this->db->query("SELECT * FROM usuarios ORDER BY telefono " . $filtros["telefono"]);
                } else {
                    $usuarios = $this->db->query("SELECT * FROM usuarios where telefono =" . $filtros["telefono"] ." ORDER BY id_usuario");
                }
                return $usuarios;
            } else if(isset($filtros["tarifa"])) {
                $id = intval($filtros["tarifa"]);
                if(isset($filtros["order"])) {
                    $usuarios = $this->db->query("SELECT * FROM usuarios ORDER BY id_tarifa " . $filtros["order"]);
                } else {
                    $usuarios = $this->db->query("SELECT * FROM usuarios where id_tarifa =" . $filtros["tarifa"] ." ORDER BY id_usuario");
                }
                return $usuarios;
            }
        }
        $usuarios = $this->db->query("SELECT * FROM usuarios ORDER BY id_usuario");
        return $usuarios;
    }

    public function getOne() {
        $usuario = $this->db->query("SELECT * FROM usuarios WHERE id_usuario = {$this->getIdUsuario()}");
        return $usuario->fetch_object();
    }

    public function delete() {
        $sql = "DELETE FROM usuarios where id_usuario = {$this->getIdUsuario()}";
        $delete = $this->db->query($sql);

        $result = false;
        if($delete) {
            $result = true;
        }
        return $result;
    }
}

?>