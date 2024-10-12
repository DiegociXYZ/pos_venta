<?php
class UsuariosModel extends Query {
    public function __construct()
    {
        parent::__construct();       
        
    }
    public function getUsuario()
    {
        $sql = "SELECT * FROM usuarios";
        $this ->select($sql);
        $data = $this->select($sql);
        return $data;
    }
}

?>