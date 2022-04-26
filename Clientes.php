<?php

class Clientes{
    private $cantClientes;
    private $objTramite;


    public function __construct($clientes, $objetoTramite){
        $this->cantClientes = $clientes;
        $this->objTramite = $objetoTramite;
        
    }

    public function getCantClientes(){
        return $this->cantClientes;
    }

    public function setCantClientes($clientes){
        $this->cantClientes = $clientes;
    }

    public function getObjTramite(){
        return $this->objTramite;
    }

    public function setObjTramite($objetoTramite){
        $this->objTramite = $objetoTramite;
    }

    public function __toString(){
        $info = "
        CANTIDAD DE CLIENTES: {$this->getCantClientes()}
        TRAMITE: {$this->getObjTramite()}
        ";
       return $info; 
    }
}