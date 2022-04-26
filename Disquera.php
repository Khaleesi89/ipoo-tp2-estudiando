<?php

class Disquera{
    private $hora_desde;
    private $hora_hasta;
    private $estado;
    private $direccion;
    private $Dueño;

    public function __construct($desde, $hasta,$state, $address,$owner){
        $this->hora_desde = $desde;
        $this->hora_hasta = $hasta;
        $this->estado = $state;
        $this->direccion = $address;
        $this->Dueño = $owner;
    }
    
    public function getHora_desde(){
        return $this->hora_desde;
    }

    public function setHora_desde($desde){
        $this->hora_desde = $desde;
    }

    public function getHora_hasta(){
        return $this->hora_hasta;
    }

    public function setHora_hasta($hasta){
        $this->hora_hasta = $hasta;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($state){
        $this->estado = $state;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function setDireccion($address){
        $this->direccion = $address;
    }

    public function getDueño(){
        return $this->Dueño;
    }

    public function setDueño($owner){
        $this->Dueño = $owner;
    }

    public function dentroHorarioAtencion($hora, $min){
        $hour = $this
        $minute = $this
    }

}