<?php 

class tarifa {
    private $id_tarifa;
    private $nombre;
    private $precio;
    private $descripcion;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getIdTarifa()
    {
        return $this->id_tarifa;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        return $this->precio;
    }
    
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setIdTarifa($id_tarifa): self
    {
        $this->id_tarifa = $id_tarifa;
        return $this;
    }

    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function setPrecio($precio): self
    {
        $this->precio = $precio;
        return $this;
    }

    public function setDescripcion($descripcion): self
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    public function save() {
        $sql = "INSERT INTO tarifas VALUES(NULL, '{$this->getNombre()}', {$this->getPrecio()}, '{$this->getDescripcion()}');";
        $save = $this->db->query($sql);

        var_dump($sql);
        die();
        $result = false;
        if($save) {
            $result = true;
        }
        return $result;
    }

    public function getAll() {
        $tarifas = $this->db->query("SELECT * FROM tarifas ORDER BY id_tarifa");
        return $tarifas;
    }

}

?>