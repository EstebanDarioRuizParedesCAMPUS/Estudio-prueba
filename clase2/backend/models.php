<?php

require_once("conectar.php");

class Alquilar extends Conectar{

    public function getClientes(){
        try {
            $conectar= parent::Conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT * FROM constructoras");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $errorXD) {
            return $errorXD->getMessage();
        }
    }

    public function insertClientes($id_constructora,$nombre_constructora,$nit_constructora,$nombre_representante,$email_contacto,$telefono_contacto){
        $conectar= parent::Conexion();
        parent::set_name();
        $stm="INSERT INTO constructoras(id_constructora,nombre_constructora,nit_constructora,nombre_representante,email_contacto,telefono_contacto) VALUES (?,?,?,?,?,?)";
        $stm = $conectar ->prepare($stm);
        $stm->bindValue(1,$id_constructora);
        $stm->bindValue(2,$nombre_constructora);
        $stm->bindValue(3,$nit_constructora);
        $stm->bindValue(4,$nombre_representante);
        $stm->bindValue(5,$email_contacto);
        $stm->bindValue(6,$telefono_contacto);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>