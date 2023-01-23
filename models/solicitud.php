<?php 
class solicitud {
    private $id_solicitud;
    private $nombre;
    private $apellido;
    private $email;
    private $telefono;
    private $descripcion;
    private $fecha_creacion;
    private $id_tarifa;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getIdSolicitud()
    {
        return $this->id_solicitud;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function getFechaCreacion()
    {
        return $this->fecha_creacion;
    }
    public function getIdTarifa()
    {
        return $this->id_tarifa;
    }

    public function setIdSolicitud($id_solicitud): self
    {
        $this->id_solicitud = $id_solicitud;
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

    public function setEmail($email): self
    {
        $this->email = $email;
        return $this;
    }

    public function setTelefono($telefono): self
    {
        $this->telefono = $telefono;
        return $this;
    }

    public function setDescripcion($descripcion): self
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    public function setFechaCreacion($fecha_creacion): self
    {
        $this->fecha_creacion = $fecha_creacion;
        return $this;
    }
    
    public function setIdTarifa($id_tarifa): self
    {
        $this->id_tarifa = $id_tarifa;
        return $this;
    }

    public function save() {
        $sql = "INSERT INTO solicitudes VALUES(NULL, '{$this->getNombre()}', '{$this->getApellido()}', '{$this->getEmail()}', {$this->getTelefono()}, '{$this->getDescripcion()}', CURDATE() , 0, {$this->getIdTarifa()});";
        $save = $this->db->query($sql);

        $result = false;
        if($save) {
            $result = true;
        }
        return $result;
    }

    public function update() {
        $sql = "UPDATE solicitudes SET estado_gestion=1 WHERE id_solicitud={$this->getIdSolicitud()}; ";
        $save = $this->db->query($sql);

        var_dump($sql);
        var_dump($save);
        die();
        $result = false;
        if($save) {
            $result = true;
        }
        return $result;
    }

    public function getAll() {
        $solicitudes = $this->db->query("SELECT * FROM solicitudes ORDER BY estado_gestion, id_solicitud ASC");
        return $solicitudes;
    }
}
?>