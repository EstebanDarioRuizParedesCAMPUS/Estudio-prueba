<?php

class Conectar{
    protected $db;
    protected function Conexion(){
        try {
            $conectar = $this->db=new PDO("mysql:local=localhost;dbname=alquilartemisv2","root","");
            return $conectar;
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }

    public function set_name(){
        return $this->db->query("SET NAMES 'utf8'");
    }
}

?>