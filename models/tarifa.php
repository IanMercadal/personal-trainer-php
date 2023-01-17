<?php 

class tarifa {
    private $id_tarifa;
    private $nombre;
    private $precio;
    private $descripcion;
    private $categoria;
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

    
    public function getCategoria()
    {
        return $this->categoria;
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

    
    public function setCategoria($categoria): self
    {
        $this->categoria = $categoria;
        return $this;
    }

    public function save() {
        $sql = "INSERT INTO tarifas VALUES(NULL, '{$this->getNombre()}', {$this->getPrecio()}, '{$this->getDescripcion()}', '{$this->getCategoria()}');";
        $save = $this->db->query($sql);

        $result = false;
        if($save) {
            $result = true;
        }
        return $result;
    }

    public function update() {
        $sql = "UPDATE tarifas SET nombre='{$this->getNombre()}', precio={$this->getPrecio()}, descripcion='{$this->getDescripcion()}', categoria='{$this->getCategoria()}' WHERE id_tarifa={$this->getIdTarifa()}; ";
        $save = $this->db->query($sql);

        $result = false;
        if($save) {
            $result = true;
        }
        return $result;
    }

    public function delete() {
        $sql = "DELETE FROM tarifas where id_tarifa = {$this->getIdTarifa()}";
        $delete = $this->db->query($sql);

        $result = false;
        if($delete) {
            $result = true;
        }
        return $result;
    }

    public function getAll() {
        $tarifas = $this->db->query("SELECT * FROM tarifas ORDER BY id_tarifa");
        return $tarifas;
    }
    public function getOne() {
        $tarifa = $this->db->query("SELECT * FROM tarifas WHERE id_tarifa = {$this->getIdTarifa()}");
        return $tarifa->fetch_object();
    }


}

?>